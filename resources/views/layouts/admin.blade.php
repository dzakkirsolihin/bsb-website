<!DOCTYPE html>
<html>
<head>
    <title>Presensi Yayasan Baitush Sholihin</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('logoyayasan.ico') }}">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Pacifico&display=swap" rel="stylesheet"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #ECFDF5;
        }

        .inter-font {
        font-family: "Inter", sans-serif;
        font-optical-sizing: auto;
        font-weight: 400;
        font-style: normal;
        }

        .text-primary-custom {
            color: #2E7D32 !important;
        }
        .btn-primary-custom {
            background-color: #2E7D32 !important;
        }
        .bg-custom {
            background-color: #ECFDF5;
        }

        .camera {
            background-color: #000;
            color: #A5D6A7;
        }
        .button {
            background-color: #1B5E20;
            color: #fff;
        }
        .custom-table {
            width: 80%;
            margin: 0 auto;
            border-radius: 10px;
            overflow: hidden;
        }
        .custom-table th {
            background-color: #a5d6a7;
            font-weight: bold;
        }
        .custom-table tr:nth-child(even) {
            background-color: #c8e6c9;
        }
        .custom-table tr:nth-child(odd) {
            background-color: #a5d6a7;
        }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">
    @include('layouts.navbar-admin')

    <main class="container flex-grow-1 py-4">
        {{ $slot }}
    </main>

    @include('layouts.footer-presensi')
</body>
</html>
