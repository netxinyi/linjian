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
    <!-- row -->
    <div class="row">
    <!-- col12 -->
        <div class="col-md-12">



                        <!-- tile -->
                        <section class="tile color transparent-black">



                          <!-- tile header -->
                          <div class="tile-header">

                          </div>
                          <!-- /tile header -->

                          <!-- tile body -->
                          <div class="tile-body">
                          <form class="form-horizontal" role="form" action="/admin/category/add/" data-parsley-validate method="post">
                            <div class="row">
                                <div class="col-md-8">

                                          <div class="form-group">
                                            <label for="cat_name" class="col-sm-4 control-label">分类名称：</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control parsley-validated" id="cat_name" name="cat_name" data-parsley-trigger="blur" required data-parsley-required-message="请填写分类名称">
                                            </div>
                                          </div>

                                         <div class="form-group">
                                             <label for="cat_description" class="col-sm-4 control-label">分类简介：</label>
                                             <div class="col-sm-8">
                                               <textarea class="form-control" id="cat_description" rows="6" name="cat_description"></textarea>
                                             </div>
                                           </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group form-footer">
                                            <div class="col-sm-8">
                                                <div class="text-right">
                                                    <button type="submit" class="btn btn-greensea">提交</button>
                                                                                          <button type="reset" class="btn btn-red">重置</button>
                                                </div>

                                            </div>
                                          </div>
                                </div>

                            </div>
                            </form>

                          </div>
                          <!-- /tile body -->




                        </section>
                        <!-- /tile -->




                      </div>
   <!-- col12 -->
    </div>
    <!-- /row -->
@stop

@section('footer-last-js')
<script type="text/javascript" src="/js/parsley/parsley.min.js"></script>
@stop