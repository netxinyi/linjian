@extends('layouts.layout')

@section('title')
 后台管理
@stop

@section('global-css')
    <link href="/lib/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="/lib/bootstrap/css/font-awesome.css" rel="stylesheet">

    <link rel="stylesheet" href="/lib/jquery/mmenu/css/jquery.mmenu.all.css" />
    <link href="/css/admin/minimal.css" rel="stylesheet">
@stop

@section('header-global-js')
    <!--[if lt IE 9]>
    <script src="/js/common/html5shiv.js"></script>
    <script src="/js/common/respond.min.js"></script>
    <![endif]-->
@stop

@section('footer-global-js')

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="/lib/jquery/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/lib/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/lib/jquery/mmenu/jquery.mmenu.min.js"></script>
    <script type="text/javascript" src="/lib/jquery/nicescroll/jquery.nicescroll.min.js"></script>
    <script type="text/javascript" src="/lib/jquery/blockui/jquery.blockUI.js"></script>
    <script src="/js/admin/minimal.min.js"></script>
@stop

@section('body-attr')class="bg-1"@stop

@section('head')
    <!-- Preloader -->
    <div class="mask"><div id="loader"></div></div>
    <!--/Preloader -->
    <!-- Wrap all page content here -->
    <div id="wrap">
        <!-- Make page fluid -->
        <div class="row">
            @include('admin.common.nav')
            <!-- Page content -->
            <div id="content" class="col-md-12">


@stop

@section('foot')
            </div>
            <!-- Page content end -->
            @include('admin.common.mmenu')
        </div>
        <!-- Make page fluid-->
    </div>
    <!-- Wrap all page content end -->
@stop