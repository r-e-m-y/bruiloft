<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sigrid & Werner - 24-05-2025</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Slab:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#E3E3E3]">
    <div class="container max-w-4xl">
        <x-heading />
        <x-menu />
        {{ $slot }}
        <div class="pt-10 pb-5 font-sm text-gray-500 text-center">
            &copy; Werner & Sigrid - 2025 - Bietje website in elkaar schroeven producties
        </div>
    </div>
</body>
</html>
