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
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="/js/common/html5shiv.js"></script>
    <script src="/js/common/respond.min.js"></script>
    <![endif]-->
@stop

@section('footer-global-js')

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="/lib/jquery/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/lib/bootstrap/js/bootstrap.js"></script>
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
            @include('common.admin.nav')
            <!-- Page content -->
            <div id="content" class="col-md-12">
                <!-- page header -->
                <div class="pageheader">


                    <h2><i class="fa fa-tachometer"></i> Dashboard
                        <span>// Place subtitle here...</span></h2>


                    <div class="breadcrumbs">
                        <ol class="breadcrumb">
                            <li>You are here</li>
                            <li><a href="index.html">Minimal</a></li>
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>


                </div>
                <!-- /page header -->

@stop

@section('foot')
            </div>
            <!-- Page content end -->
            @include('common.admin.mmenu')
        </div>
        <!-- Make page fluid-->
    </div>
    <!-- Wrap all page content end -->
@stop