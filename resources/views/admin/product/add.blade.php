@extends('admin.layout')

@section('body')
    <!-- page header -->
    <div class="pageheader">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li>当前位置</li>
                <li><a href="{{route('admin.index')}}">后台管理</a></li>
                <li><a href="{{route('admin.product')}}">产品管理</a></li>
                <li class="active">添加产品</li>
            </ol>
        </div>


    </div>
    <!-- /page header -->
@stop