@extends('layouts.layout')

@section('global-css')
    <!-- Bootstrap core CSS -->
    <link href="/lib/bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="/css/theme/green.css" rel="stylesheet">
    <link href="/css/common/responsive.css" rel="stylesheet">
@stop

@section('header-global-js')
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="/js/common/html5shiv.js"></script>
        <script src="/js/common/respond.min.js"></script>
    <![endif]-->
@stop

@section('footer-global-js')
    <script src="/lib/jquery/jquery.js"></script>
    <script src="/lib/bootstrap/js/bootstrap.js"></script>
    <script src="/js/common/script.js"></script>
@stop

@section('head')

    @include('common.nav')

@stop

@section('foot')
    @include('common.footer')
    @include('common.copyright')
@stop