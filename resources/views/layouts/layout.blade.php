<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta name="keywords" content="@yield('keywords',Config::get('site.default-keywords',''))">
    <meta name="description" content="@yield('keywords',Config::get('site.default-description',''))">
    <meta name="author" content="{{Config::get('site.author','')}}">
    @yield('meta')
    <title>
        @yield('title','中国最大的鹦鹉繁殖基地') - {{Config::get('site.site-name')}}
    </title>

    <link rel="shortcut icon" href="img/favicon.png">
    @yield('first-css')
    @yield('global-css')
    @yield('last-css')
    @yield('header-first-js')
    @yield('header-global-js')
    @yield('header-last-js')
    @yield('header')
</head>

<body>
@yield('head')
@yield('body')
@yield('foot')

@yield('footer-first-js')
@yield('footer-global-js')
@yield('footer-last-js')
</body>
</html>