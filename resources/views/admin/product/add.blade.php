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
                        <section class="tile transparent">

                          <!-- tile widget -->
                          <div class="tile-widget nopadding color transparent-black rounded-top-corners">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                              <li class="active"><a href="#product-baseinfo" data-toggle="tab">基本信息</a></li>
                              <li><a href="#product-attr" data-toggle="tab">商品属性</a></li>
                              <li><a href="#product-desc" data-toggle="tab">详细描述</a></li>
                              <li><a href="#product-gellary" data-toggle="tab">相册</a></li>
                            </ul>
                            <!-- / Nav tabs -->
                          </div>
                          <!-- /tile widget -->


                          <!-- tile body -->
                          <div class="tile-body rounded-bottom-corners tab-content">
                                <div class="row">
                                     <form class="form-horizontal" role="form" parsley-validate="" id="basicvalidations">
                                        <div class="tab-content col-md-8">
                                            <div class="tab-pane active" id="product-baseinfo">
                                                  <div class="form-group">
                                                    <label for="name" class="col-sm-4 control-label">分类名称：</label>
                                                    <div class="col-sm-8">
                                                      <input type="text" class="form-control parsley-validated" id="name" parsley-trigger="change" parsley-required="true" parsley-minlength="5" parsley-validation-minlength="1">
                                                    </div>
                                                  </div>

                                                  <div class="form-group">
                                                    <label for="email" class="col-sm-4 control-label">分类简介：</label>
                                                    <div class="col-sm-8">
                                                      <input type="text" class="form-control parsley-validated" id="title" parsley-trigger="change" parsley-required="true" parsley-minlength="4" parsley-type="email" parsley-validation-minlength="1">
                                                    </div>
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="category" class="col-sm-4 control-label">所属分类：</label>
                                                    <div class="col-sm-8">
                                                        <select class="chosen-select chosen-transparent form-control" id="category">
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
                                                       </select>

                                                    </div>
                                                  </div>
                                            </div>
                                            <div class="tab-pane" id="product-attr">属性</div>
                                            <div class="tab-pane" id="product-desc">描述</div>
                                            <div class="tab-pane" id="product-gellary">相册管理</div>
                                        </div>
                                    </form>
                                </div>

                          </div>
                          <!-- /tile body -->



                        </section>
                        <!-- /tile -->


                      </div>
   <!-- col12 -->
    </div>
    <!-- /row -->
@stop

