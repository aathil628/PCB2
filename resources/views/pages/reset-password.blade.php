<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Reset Password - MyFirstPCB</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        .container {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.2);
            max-width: 450px;
            width: 100%;
        }
        h1 {
            color: #333;
            margin-bottom: 10px;
            font-size: 28px;
        }
        .subtitle {
            color: #666;
            margin-bottom: 30px;
            font-size: 14px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
            font-weight: 500;
            font-size: 14px;
        }
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #e1e1e1;
            border-radius: 6px;
            font-size: 15px;
            transition: border-color 0.3s;
        }
        input[type="email"]:focus,
        input[type="password"]:focus {
            outline: none;
            border-color: #667eea;
        }
        input[readonly] {
            background-color: #f5f5f5;
            cursor: not-allowed;
        }
        .btn {
            width: 100%;
            padding: 14px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 20px rgba(102, 126, 234, 0.4);
        }
        .btn:disabled {
            background: #ccc;
            cursor: not-allowed;
            transform: none;
        }
        .alert {
            padding: 12px 15px;
            border-radius: 6px;
            margin-bottom: 20px;
            font-size: 14px;
        }
        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
        .alert-error {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
        .password-requirements {
            font-size: 12px;
            color: #666;
            margin-top: 5px;
        }
        .back-link {
            text-align: center;
            margin-top: 20px;
        }
        .back-link a {
            color: #667eea;
            text-decoration: none;
            font-size: 14px;
        }
        .back-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Reset Your Password</h1>
        <p class="subtitle">Enter your new password below</p>

        <div id="alertBox" style="display: none;"></div>

        <form id="resetPasswordForm">
            <input type="hidden" id="token" name="token" value="{{ $token }}">
            
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" value="{{ $email }}" readonly>
            </div>

            <div class="form-group">
                <label for="password">New Password</label>
                <input type="password" id="password" name="password" placeholder="Enter new password" required>
                <div class="password-requirements">Must be at least 8 characters long</div>
            </div>

            <div class="form-group">
                <label for="password_confirmation">Confirm New Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Re-enter new password" required>
            </div>

            <button type="submit" class="btn" id="submitBtn">
                <span id="submitText">Reset Password</span>
            </button>
        </form>

        <div class="back-link">
            <a href="/login">Back to Login</a>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('resetPasswordForm');
            const submitBtn = document.getElementById('submitBtn');
            const submitText = document.getElementById('submitText');
            const alertBox = document.getElementById('alertBox');

            form.addEventListener('submit', function (e) {
                e.preventDefault();

                // Get form values
                const token = document.getElementById('token').value;
                const email = document.getElementById('email').value;
                const password = document.getElementById('password').value;
                const passwordConfirmation = document.getElementById('password_confirmation').value;

                // Basic validation
                if (password.length < 8) {
                    showAlert('Password must be at least 8 characters long.', 'error');
                    return;
                }

                if (password !== passwordConfirmation) {
                    showAlert('Passwords do not match.', 'error');
                    return;
                }

                // Disable button and show loading
                submitBtn.disabled = true;
                submitText.textContent = 'Resetting...';

                // Send API request
                fetch("{{ route('password.update') }}", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content
                    },
                    body: JSON.stringify({
                        token: token,
                        email: email,
                        password: password,
                        password_confirmation: passwordConfirmation
                    })
                })
                .then(res => res.json())
                .then(data => {
                    if (data.success) {
                        showAlert(data.message, 'success');
                        
                        // Redirect to login after 2 seconds
                        setTimeout(function() {
                            window.location.href = '/login';
                        }, 2000);
                    } else {
                        showAlert(data.message || 'Failed to reset password. Please try again.', 'error');
                        submitBtn.disabled = false;
                        submitText.textContent = 'Reset Password';
                    }
                })
                .catch(error => {
                    console.error("Error:", error);
                    showAlert('An error occurred. Please try again.', 'error');
                    submitBtn.disabled = false;
                    submitText.textContent = 'Reset Password';
                });
            });

            function showAlert(message, type) {
                alertBox.textContent = message;
                alertBox.className = 'alert alert-' + type;
                alertBox.style.display = 'block';
                
                // Auto hide after 5 seconds
                setTimeout(function() {
                    alertBox.style.display = 'none';
                }, 5000);
            }
        });
    </script>
</body>
</html>