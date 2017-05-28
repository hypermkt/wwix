<!DOCMENT html>
<html lang="ja">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
@yield('content')
</body>
</html>