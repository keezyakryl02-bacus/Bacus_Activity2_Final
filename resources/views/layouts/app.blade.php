<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title') | Eden's Lampstand</title>
    <style>
        /* All the CSS from your current index goes here */
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f8fafc;
            padding: 20px;
            color: #333;
            margin: 0;
        }

        nav {
            background: white;
            padding: 15px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
            margin-bottom: 20px;
        }

        .nav-links a {
            margin-right: 20px;
            text-decoration: none;
            color: #666;
            font-weight: bold;
            font-size: 14px;
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th {
            text-align: left;
            font-size: 12px;
            text-transform: uppercase;
            color: #666;
            border-bottom: 2px solid #edf2f7;
            padding: 12px;
        }

        td {
            padding: 15px 12px;
            border-bottom: 1px solid #edf2f7;
            font-size: 14px;
        }

        .btn-add {
            background-color: #1a202c;
            color: white;
            padding: 8px 16px;
            text-decoration: none;
            border-radius: 4px;
            font-size: 12px;
            font-weight: bold;
        }

        .action-btn {
            padding: 4px 10px;
            text-decoration: none;
            border-radius: 3px;
            font-size: 11px;
            font-weight: bold;
            margin-right: 5px;
            border: 1px solid #ddd;
            color: #333;
        }

        .btn-edit {
            background-color: #2d3748;
            color: white;
        }

        .btn-delete {
            background-color: #e53e3e;
            color: white;
        }

        .btn-view {
            background-color: white;
            color: #333;
        }

        .avatar {
            width: 55px;
            height: 55px;
            border-radius: 50%;
            border: 2px solid #9caf88;
            vertical-align: middle;
        }
    </style>
</head>

<body>

    <nav>
        <div class="nav-links">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" style="height: 50px; margin-right: 15px; vertical-align: middle;">
            <a href="{{ url('/') }}">Dashboard</a>
            <a href="{{ route('customers.index') }}">Customers</a>
        </div>
        <div>
            <div style="display: flex; align-items: center;">
                <span style="font-size: 16px; color: #666; margin-right: 10px;">
                    {{ Auth::user()->name ?? 'Guest User' }}
                </span>

                @php
                /* This creates the variable that was missing.
                If we are on an 'Edit' page, it toggles between 1 and 2 based on the ID.
                Otherwise, it defaults to avatar1.png.
                */
                $avatarNumber = isset($customer) ? ($customer->id % 2 == 0 ? '2' : '1') : '1';
                @endphp

                <img src="{{ asset('images/avatars/avatar' . $avatarNumber . '.png') }}"
                    class="avatar"
                    alt="User Avatar">
            </div>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

</body>

</html>