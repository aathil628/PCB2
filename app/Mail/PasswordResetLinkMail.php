<?php

namespace App\Mail;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Illuminate\Support\Facades\Log;

class PasswordResetLinkMail
{
    public function sendPasswordResetLink($to, $resetUrl, $user)
    {
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host       = env('MAIL_HOST', 'mail.myfirstpcb.com');
            $mail->SMTPAuth   = true;
            $mail->Username   = env('MAIL_USERNAME', 'contact@myfirstpcb.com');
            $mail->Password   = env('MAIL_PASSWORD', 'Rtyuujkhsm678k86okadngg');
            $mail->Port       = env('MAIL_PORT', 25);
            $mail->SMTPSecure = '';

            // Add this line to ignore SSL certificate verification
            $mail->SMTPOptions = [
                'ssl' => [
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true,
                ],
            ];

            //Recipients
            $mail->setFrom(env('MAIL_FROM_ADDRESS', 'contact@myfirstpcb.com'), env('MAIL_FROM_NAME', 'MyFirstPCB'));
            $mail->addAddress($to);

            // Content
            $mail->isHTML(true);
            $mail->Subject = 'Password Reset Link';
            
            // HTML Body with styled template
            $mail->Body = '
                <!DOCTYPE html>
                <html>
                <head>
                    <style>
                        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
                        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
                        .header { background-color: #4CAF50; color: white; padding: 20px; text-align: center; }
                        .content { background-color: #f9f9f9; padding: 30px; border: 1px solid #ddd; }
                        .button { display: inline-block; padding: 12px 30px; background-color: #4CAF50; color: white; text-decoration: none; border-radius: 5px; margin: 20px 0; }
                        .footer { text-align: center; padding: 20px; color: #666; font-size: 12px; }
                    </style>
                </head>
                <body>
                    <div class="container">
                        <div class="header">
                            <h1>Password Reset Request</h1>
                        </div>
                        <div class="content">
                            <p>Hello ' . htmlspecialchars($user->name ?? 'User') . ',</p>
                            <p>We received a request to reset your password. Click the button below to reset it:</p>
                            <p style="text-align: center;">
                                <a href="' . $resetUrl . '" class="button">Reset Password</a>
                            </p>
                            <p>Or copy and paste this link into your browser:</p>
                            <p style="word-break: break-all; color: #4CAF50;">' . $resetUrl . '</p>
                            <p><strong>This link will expire in 60 minutes.</strong></p>
                            <p>If you did not request a password reset, please ignore this email or contact support if you have concerns.</p>
                        </div>
                        <div class="footer">
                            <p>&copy; ' . date('Y') . ' MyFirstPCB. All rights reserved.</p>
                        </div>
                    </div>
                </body>
                </html>
            ';
            
            // Plain text alternative
            $mail->AltBody = 'Hello ' . ($user->name ?? 'User') . ',

We received a request to reset your password. Click the link below to reset it:

' . $resetUrl . '

This link will expire in 60 minutes.

If you did not request a password reset, please ignore this email.

© ' . date('Y') . ' MyFirstPCB. All rights reserved.';

            $mail->send();
            return true;
        } catch (Exception $e) {
            Log::error('Password reset email could not be sent.', [
                'error' => $mail->ErrorInfo, 
                'exception' => $e->getMessage(),
                'to' => $to
            ]);
            return false;
        }
    }
}