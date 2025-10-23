<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\User;
use App\Mail\PasswordResetLinkMail;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception as PHPMailerException;

use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function signup(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:225',
            'email' => 'required|email|unique:users,email',
            'cohort' => 'nullable|string|max:225',
            'reason' =>  'nullable|string',
            'agreement' => 'nullable|boolean',
        ]);


        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }


        try{
            $randomPassword = Str::random(12);
            $user = User::create([
                        'name' => $request->name,
                        'email' => $request->email,
                        'password' => bcrypt($randomPassword),
                        'cohort' => $request->cohort,
                        'reason' => $request->reason,
                        'agreement' => $request->boolean('agreement', false)
                    ]);

            // Auto-login after signup
            Auth::login($user);

            return response()->json([
                'success' => true,
                'message' => 'Registration completed successfully!',
                'redirect_url' => route('course')
            ]);
        }catch (\Exception $e) {
            Log::error('User creation failed: ' . $e->getMessage());
            
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong. Please try again.'
            ], 500);
        }

    }

    public function sendOtp(Request $request)
    {
        $request->validate(['email' => 'required|email']);
        $email = strtolower(trim($request->email));
        $userExists = User::where('email', $email)->exists();

        $otp = random_int(100000, 999999);
        $expiresAt = now()->addMinutes(10);

        $otpData = [
            'code' => (string)$otp,
            'expires_at' => $expiresAt->timestamp,
            'user_exists' => $userExists,
        ];
        session(["otp_{$email}" => $otpData]);

        try {
            $mailer = new PHPMailer(true);
            $mailer->SMTPDebug = 0;
            $mailer->isSMTP();
            $mailer->Host       = env('MAIL_HOST', 'mail.myfirstpcb.com');
            $mailer->SMTPAuth   = true;
            $mailer->Username   = env('MAIL_USERNAME', 'contact@myfirstpcb.com');
            $mailer->Password   = env('MAIL_PASSWORD', '');
            $mailer->Port       = (int) env('MAIL_PORT', 25);
            $encryption         = env('MAIL_ENCRYPTION', ''); // '', 'tls', or 'ssl'
            if (!empty($encryption)) {
                $mailer->SMTPSecure = $encryption;
            }
            // Relax SSL verification for local/dev (matches PasswordResetLinkMail)
            $mailer->SMTPOptions = [
                'ssl' => [
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true,
                ],
            ];

            $fromAddress = env('MAIL_FROM_ADDRESS', 'contact@myfirstpcb.com');
            $fromName    = env('MAIL_FROM_NAME', 'MyFirstPCB');
            $mailer->setFrom($fromAddress, $fromName);
            $mailer->addAddress($email);

            $mailer->isHTML(true);
            $mailer->Subject = 'Your MyFirstPCB OTP';
            $mailer->Body    = '<p>Your OTP is <strong>' . $otp . '</strong>.</p><p>This code expires in 10 minutes.</p>';
            $mailer->AltBody = 'Your OTP is ' . $otp . ' (expires in 10 minutes).';

            $mailer->send();

            Log::info('OTP sent', ['email' => $email]);
            return response()->json([
                'success' => true,
                'message' => 'OTP has been sent to your email.',
                'user_exists' => $userExists,
            ]);
        } catch (PHPMailerException $e) {
            Log::error('Failed to send OTP email (PHPMailer)', ['email' => $email, 'error' => $e->getMessage()]);
            return response()->json([
                'success' => false,
                'message' => 'Unable to send OTP. Please verify mail settings or try again shortly.'
            ], 500);
        } catch (\Exception $e) {
            Log::error('Failed to send OTP email', ['email' => $email, 'error' => $e->getMessage()]);
            return response()->json([
                'success' => false,
                'message' => 'Unable to send OTP. Please verify mail settings or try again shortly.'
            ], 500);
        }
    }

    public function verifyOtp(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'otp' => 'required|string',
        ]);

        $email = strtolower(trim($request->email));
        $saved = session("otp_{$email}");
        if (!$saved) {
            return response()->json(['success' => false, 'message' => 'OTP not found or expired. Please request a new one.'], 400);
        }
        if ((string)$saved['code'] !== (string)$request->otp) {
            return response()->json(['success' => false, 'message' => 'Invalid OTP.'], 400);
        }
        if (time() > (int)$saved['expires_at']) {
            session()->forget("otp_{$email}");
            return response()->json(['success' => false, 'message' => 'OTP expired. Please request a new one.'], 400);
        }

        session()->forget("otp_{$email}");

        $user = User::where('email', $email)->first();
        if ($user) {
            Auth::login($user);
            return response()->json([
                'success' => true,
                'registered' => true,
                'redirect_url' => route('course'),
            ]);
        }
        return response()->json([
            'success' => true,
            'registered' => false,
            'redirect_url' => route('sign-up') . '?email=' . urlencode($email),
        ]);
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);


        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $credentials = [
                'email' => $request->email,
                'password' => $request->password,
            ];

            if (Auth::attempt($credentials, $request->has('saveMyInfo'))) {
                $user = Auth::user();
                
                Log::info('User logged in successfully:', ['user_id' => $user->id, 'email' => $user->email]);

                return response()->json([
                    'success' => true,
                    'message' => 'Login successful! Welcome back.',
                    'redirect_url' => route('index') // Change to your desired route
                ]);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Invalid email or password.'
                ], 401);
            }

        } catch (\Exception $e) {
            Log::error('Login failed: ' . $e->getMessage());
            
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong. Please try again.'
            ], 500);
        }
    }


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Handle AJAX requests
        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Logged out successfully!',
                'redirect_url' => route('login'),
            ]);
        }

        // Handle regular form submissions
        return redirect()->route('login')->with('success', 'Logged out successfully!');
    }

 public function forgetPassword(Request $request)
    {

        try {
            $request->validate([
                'email' => 'required|email|exists:users,email',
            ]);
            
            
            $user = User::where('email', $request->email)->first();
            
            if (!$user) {
                Log::warning('User not found:', ['email' => $request->email]);
                return response()->json([
                    'success' => false,
                    'message' => 'User not found with this email address.'
                ], 404);
            }
            
            // Generate password reset token
            $token = Str::random(64);
            
            // Store token in database
            $tableName = 'password_reset_tokens';
            
            DB::table($tableName)->updateOrInsert(
                ['email' => $request->email],
                [
                    'email' => $request->email,
                    'token' => $token,
                    'created_at' => Carbon::now()
                ]
            );
            
            // Create reset URL
            $resetUrl = route('password.reset', ['token' => $token, 'email' => $user->email]);
            
            $mailer = new PasswordResetLinkMail();
            $result = $mailer->sendPasswordResetLink($user->email, $resetUrl, $user);
            
            Log::info('Email send result:', ['success' => $result]);
            
            if ($result) {
                return response()->json([
                    'success' => true,
                    'message' => 'Password reset link has been sent to your email address.',
                    'reset_link' => $resetUrl,
                ], 200);
            } else {
                Log::error('Failed to send password reset email');
                return response()->json([
                    'success' => false,
                    'message' => 'Failed to send password reset email. Please try again later.'
                ], 500);
            }
            
        } catch (\Illuminate\Validation\ValidationException $e) {
            Log::error('Validation failed:', ['errors' => $e->errors()]);
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $e->errors()
            ], 422);
            
        } catch (\Exception $e) {
            Log::error('=== FORGET PASSWORD ERROR ===', [
                'message' => $e->getMessage(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
                'trace' => $e->getTraceAsString()
            ]);
            
            return response()->json([
                'success' => false,
                'message' => 'An error occurred. Please try again later.',
                'error' => $e->getMessage() // Remove this in production
            ], 500);
        }
    }


    public function resetPassword(Request $request)
    {
        Log::info('=== RESET PASSWORD REQUEST STARTED ===');
        Log::info('Request data:', $request->except('password', 'password_confirmation'));
        
        try {
            $request->validate([
                'token' => 'required',
                'email' => 'required|email',
                'password' => 'required|min:8|confirmed',
            ]);
            
            Log::info('Validation passed');
            
            // Check if token exists and is valid
            $passwordReset = DB::table('password_reset_tokens')
                ->where('email', $request->email)
                ->where('token', $request->token)
                ->first();
            
            if (!$passwordReset) {
                Log::warning('Invalid token or email:', ['email' => $request->email]);
                return response()->json([
                    'success' => false,
                    'message' => 'Invalid token or email address.'
                ], 400);
            }
            
            Log::info('Token found in database');
            
            // Check if token has expired (60 minutes)
            $tokenCreatedAt = Carbon::parse($passwordReset->created_at);
            $minutesElapsed = Carbon::now()->diffInMinutes($tokenCreatedAt);
            
            Log::info('Token age:', ['minutes_elapsed' => $minutesElapsed]);
            
            if ($minutesElapsed > 60) {
                Log::warning('Token expired:', ['minutes_elapsed' => $minutesElapsed]);
                return response()->json([
                    'success' => false,
                    'message' => 'Password reset link has expired. Please request a new one.'
                ], 400);
            }
            
            // Update user password
            $user = User::where('email', $request->email)->first();
            
            if (!$user) {
                Log::error('User not found during password reset:', ['email' => $request->email]);
                return response()->json([
                    'success' => false,
                    'message' => 'User not found.'
                ], 404);
            }
            
            Log::info('Updating password for user:', ['id' => $user->id, 'email' => $user->email]);
            
            $user->password = bcrypt($request->password);
            $user->save();
            
            Log::info('Password updated successfully');
            
            // Delete the token
            DB::table('password_reset_tokens')->where('email', $request->email)->delete();
            
            Log::info('Token deleted from database');
            Log::info('=== PASSWORD RESET COMPLETED SUCCESSFULLY ===');
            
            return response()->json([
                'success' => true,
                'message' => 'Password has been reset successfully. You can now login with your new password.'
            ], 200);
            
        } catch (\Illuminate\Validation\ValidationException $e) {
            Log::error('Validation failed:', ['errors' => $e->errors()]);
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $e->errors()
            ], 422);
            
        } catch (\Exception $e) {
            Log::error('=== RESET PASSWORD ERROR ===', [
                'message' => $e->getMessage(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
                'trace' => $e->getTraceAsString()
            ]);
            
            return response()->json([
                'success' => false,
                'message' => 'An error occurred. Please try again later.',
                'error' => $e->getMessage() // Remove this in production
            ], 500);
        }
    }
}