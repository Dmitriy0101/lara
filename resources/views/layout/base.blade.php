<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>webpack</title>
    <link rel="stylesheet" href="dist/css/main.css">
</head>
<body>
<header class="header">
    @include('widgets.header.header-menu')
    @include('widgets.header.menu-mobile')
</header>
<main>
    @yield('content')
</main>
<footer class="footer">
    @include('widgets.footer.footer-line')
    @include('widgets.footer.footer-body')
</footer>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="dist/js/main.bundle.js"></script>
</body>
</html>
