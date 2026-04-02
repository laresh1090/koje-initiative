<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin Login - Koje Group</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        * { font-family: 'Manrope', sans-serif; }
        h1, h2, h3, h4, h5, h6 { font-family: 'Quicksand', sans-serif; font-weight: 700; }
        body {
            background: linear-gradient(135deg, #1E252F 0%, #2d3748 100%);
            min-height: 100vh; display: flex; align-items: center; justify-content: center;
        }
        .login-card {
            background: #fff; border-radius: 16px; padding: 48px 40px;
            width: 100%; max-width: 420px; box-shadow: 0 20px 60px rgba(0,0,0,0.3);
        }
        .login-brand { text-align: center; margin-bottom: 32px; }
        .login-brand h2 { color: #1E252F; margin-bottom: 4px; }
        .login-brand h2 span { color: #EB5310; }
        .login-brand p { color: #6c757d; font-size: 14px; margin: 0; }
        .form-control {
            padding: 12px 16px; border-radius: 10px; border: 1.5px solid #e2e8f0;
            font-size: 14px;
        }
        .form-control:focus { border-color: #EB5310; box-shadow: 0 0 0 3px rgba(235,83,16,0.1); }
        .btn-login {
            background: #EB5310; color: #fff; border: none; width: 100%;
            padding: 12px; border-radius: 10px; font-weight: 700; font-size: 15px;
        }
        .btn-login:hover { background: #d4490e; color: #fff; }
    </style>
</head>
<body>
    {{ $slot }}
</body>
</html>
