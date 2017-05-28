<!DOCMENT html>
<html lang="ja">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>
<body>

<nav class="nav has-shadow">
    <div class="container">
        <div class="nav-left">
            <a class="nav-item" href="/">
                WWIX
            </a>
            <a class="nav-item is-tab is-hidden-mobile" href="/features">Features</a>
            <a class="nav-item is-tab is-hidden-mobile" href="/explore">Explore</a>
            <a class="nav-item is-tab is-hidden-mobile" href="/subscriptions">Subscriptions</a>
            <a class="nav-item is-tab is-hidden-mobile" href="/templates">Templates</a>
            <a class="nav-item is-tab is-hidden-mobile" href="/support">Support</a>
        </div>
    </div>
</nav>

@yield('content')

<footer class="footer">
    <div class="container">
        <div class="content has-text-centered">
            wwix sample site.
        </div>
    </div>
</footer>


</body>
</html>