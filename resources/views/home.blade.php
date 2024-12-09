<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logged In</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/libs/bootstrap-5.3.2-dist/css/bootstrap.min.css') }}">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #e9ecef;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .success-message {
            background: linear-gradient(145deg, #28a745, #218838);
            color: white;
            padding: 30px 60px;
            border-radius: 10px;
            box-shadow: 4px 4px 12px rgba(0, 0, 0, 0.2), -4px -4px 12px rgba(0, 0, 0, 0.1);
            text-align: center;
            font-size: 1.6rem;
            font-weight: 600;
            transform: translateY(-20px);
            animation: slideIn 0.5s ease-out forwards;
        }
        @keyframes slideIn {
            0% {
                transform: translateY(-20px);
                opacity: 0;
            }
            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    @include('layouts.header')

    <div class="success-message">
        Logged in Successfully!
    </div>

    <script>
        setTimeout(() => {
            window.location.href = "{{ route('index') }}";
        }, 3000);
    </script>

    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/libs/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
