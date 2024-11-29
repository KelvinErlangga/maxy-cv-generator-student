<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/homepage/logo.svg') }}" type="image/png">
    <!-- Tambahkan link font Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />

    <link rel="icon" href="{{asset('assets/homepage/logo.png')}}" type="image/x-icon">

    @stack('style')

</head>
<body class="bg-gray-100" style="font-family: 'Poppins', sans-serif">
    @yield('content')
</body>
</html>
