<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eden's Lampstand | System Integrated Architecture</title>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #fcfdfc;
            margin: 0;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .hero-container {
            text-align: center;
            max-width: 900px;
            padding: 40px 20px;
        }

        .hero-image {
            width: 100%;
            height: auto;
            border-radius: 12px;
            /* Space below image so buttons don't touch it */
            margin-bottom: 40px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        }

        .auth-section {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 50px;
            /* Space before the directory link */
        }

        .btn {
            padding: 12px 35px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            transition: 0.3s;
            font-size: 15px;
        }

        .btn-signin {
            background-color: #4a7c59;
            color: white;
            border: 2px solid #4a7c59;
        }

        .btn-signin:hover {
            background-color: #3d664a;
            transform: translateY(-2px);
        }

        .btn-join {
            background-color: transparent;
            color: #4a7c59;
            border: 2px solid #4a7c59;
        }

        .btn-join:hover {
            background-color: #f0f4f1;
            transform: translateY(-2px);
        }

        /* Enhanced Directory Link */
        .directory-link {
            display: inline-block;
            color: #4a7c59;
            text-decoration: none;
            font-size: 18px;
            /* Bigger font */
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
            padding: 15px 40px;
            border: 2px solid #4a7c59;
            border-radius: 50px;
            background: rgba(74, 124, 89, 0.05);
            transition: all 0.3s ease;
        }

        .directory-link:hover {
            background-color: #4a7c59;
            color: white;
            box-shadow: 0 8px 20px rgba(74, 124, 89, 0.2);
        }
    </style>
</head>

<body>
    <div class="hero-container">
        <img src="{{ asset('images/system-hero.png') }}" alt="System Architecture" class="hero-image">

        <div class="auth-section">
            <a href="#" class="btn btn-signin">Sign In</a>
            <a href="#" class="btn btn-join">Join Now</a>
        </div>

        <a href="{{ route('customers.index') }}" class="directory-link">
            Enter Customer Directory →
        </a>
    </div>
</body>

</html>