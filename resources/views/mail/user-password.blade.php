<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Welcome to Targets System!</title>
    <style>
        /* Your CSS here */
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
            font-size: 24px;
            margin-bottom: 20px;
        }
        p {
            font-size: 16px;
            line-height: 1.5;
            margin-bottom: 15px;
        }
        strong {
            font-weight: bold;
        }
        .button {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome, {{ $user->name }}!</h1>
        <p>You're now part of our target system users!</p>
        <p>To get started, use the following login details:</p>
        <p><strong>Email:</strong> {{ $user->email }}</p>
        <p><strong>Password:</strong> {{ $password }}</p>
        <p>For security reasons, we strongly recommend changing your password after your first login.</p>
        <a href="{{ route('login') }}" class="button">Accout Login</a>
    </div>
</body>
</html>
