@extends('admin.layout')

@section('body')
    <!-- page header -->
    <div class="pageheader">


        <h2><i class="fa fa-tachometer"></i> 首页</h2>


        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li>当前位置</li>
                <li><a href="{{route('admin.index')}}">后台管理</a></li>
                <li class="active">首页</li>
            </ol>
        </div>


    </div>
    <!-- /page header -->
@stop