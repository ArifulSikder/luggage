<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }
        .loader {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(255, 255, 255, 0.8);
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 9999;
}

.spinner {
    border: 16px solid #f3f3f3;
    border-top: 16px solid #3498db;
    border-radius: 50%;
    width: 120px;
    height: 120px;
    animation: spin 2s linear infinite;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}
        .custom-navbar {
            position: fixed;
            top: 0;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #e0f7ff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            height: 30px;
        }

        .custom-navbar-left {
            display: flex;
            align-items: center;
            margin-left: 20px;
        }

        .custom-navbar-logo {
            text-decoration: none;
            display: contents;
        }

        .custom-navbar-logo img {
            height: 24px;
            margin-right: 8px;
        }

        .custom-navbar-right {
            display: flex;
        }

        .custom-navbar-center a,
        .custom-navbar-right a {
            text-decoration: none;
            color: #1f2937;
            font-weight: 400;
            margin: 0 25px;
            font-size: 12px;
        }

        .custom-navbar-right a.custom-navbar-signup {
            background-color: #007bff;
            color: white;
            padding: 8px 12px;
            border-radius: 4px;
            font-weight: bold;
        }

        .custom-navbar-right a.custom-navbar-signup:hover {
            background-color: #0056b3;
        }

        .custom-navbar-login {
            display: flex;
            align-items: center;
        }

        .custom-navbar-login::before {
            content: "👤";
            margin-right: 4px;
        }

        .container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        h2 {
            margin-bottom: 20px;
            font-size: 24px;
            text-align: center;
        }

        input[type="email"],
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .forgot-password {
            display: block;
            text-align: right;
            margin: 10px 0;
            text-decoration: none;
            color: #007bff;
            font-size: 14px;
        }

        .forgot-password:hover {
            text-decoration: underline;
        }

        .login-btn {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        .login-btn:hover {
            background-color: #0056b3;
        }

        .google-btn {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 95%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: white;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
        }

        .google-btn img {
            width: 20px;
            margin-right: 10px;
        }

        .or {
            text-align: center;
            margin: 20px 0;
            font-size: 16px;
            color: #888;
        }
    </style>
</head>

<body>
<div id="loader" class="loader">
        <div class="spinner"></div>
    </div>
    <div class="custom-navbar">
        <div class="custom-navbar-left">
            <a href="<?= base_url() ?>" class="custom-navbar-logo">
                <img src="<?= base_url() ?>assets/img/vector-1@2x.png" alt="Logo">
                Laggages bnb
            </a>
        </div>
        <div class="custom-navbar-center">
            <a href="#">All Cities</a>
            <a href="#">How it works</a>
            <a href="#">Pricing</a>
            <a href="#">About</a>
            <a href="<?= base_url() ?>Login">Become a partner</a>
        </div>
        <div class="custom-navbar-right">
        <a href="<?=base_url()?>Userlogin" class="custom-navbar-login">Login</a>
        <a href="<?=base_url()?>Userregister" class="custom-navbar-signup">Sign up</a>
        </div>
    </div>
    <div class="container">
        <h2>Register</h2>
        <div id="registerForm">
            <input type="text" id="nameInput" placeholder="Name" required>
            <input type="email" id="emailInput" placeholder="Email" required>
            <input type="password" id="passwordInput" placeholder="Password" required>
            <input type="password" id="retypePasswordInput" placeholder="Retype Password" required>
            <a href="#" class="forgot-password">Forgot Password?</a>
            <button type="submit" class="login-btn" onclick="registerUser();">Register</button>
            <div class="or">Or</div>
            <div class="google-btn">
                <img src="<?= base_url() ?>assets/img/google.png" alt="Google logo">
                Continue with Google
            </div>
            <span id="messageSpan"></span> <!-- Span for displaying messages -->
        </div>

    </div>
    <input type="hidden" id="base_url" name="base_url" value="<?= base_url() ?>">
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Link custom JavaScript -->
<script src="<?= base_url() ?>assets/js/custom.js"></script>

</html>