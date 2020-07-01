<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://www.boolean.careers/images/favicon/favicon.ico" type="image/x-icon">
    <title>@yield('page-title')</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/64a279ba36.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
   @include('partials.header')
   @yield('content')
   @include('partials.footer')
</body>
</html>