<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-menu-color="dark" data-topbar-color="light">

<head>
    <meta charset="utf-8" />
    <title>Log In | Lunoz - Responsive Bootstrap 5 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Myra Studio" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/backend/images/favicon.ico') }}">

    <!-- App css -->
    <link href="{{ asset('assets/backend/css/style.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/backend/css/icons.min.css') }}" rel="stylesheet" type="text/css">
    <script src="{{ asset('assets/backend/js/config.js') }}"></script>
</head>

<body class="d-flex justify-content-center align-items-center min-vh-100 p-5">
    
    {{ $slot }}
    
    <script src="{{ asset('assets/backend/js/vendor.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/app.js') }}"></script>

</body>

</html>
