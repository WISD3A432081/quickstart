<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laravel 快速入門 - 基本</title>

    <!-- CSS 及 JavaScript -->
    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

</head>

<body>
<div class="container">
    <nav class="navbar navbar-default">
        <!-- Navbar 內容 -->
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
        </div>
    </nav>
</div>

@yield('content')

<!-- Scripts -->
<script src="/js/app.js"></script>

</body>
</html>