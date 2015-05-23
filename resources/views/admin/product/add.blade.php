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
                                                    <label for="name" class="col-sm-4 control-label">商品名称：</label>
                                                    <div class="col-sm-8">
                                                      <input type="text" class="form-control" id="name"  name="name">
                                                    </div>
                                                  </div>
                                                  <div class="form-group">
                                                          <label for="title" class="col-sm-4 control-label">商品副标题：</label>
                                                          <div class="col-sm-8">
                                                            <input type="text" class="form-control" id="title" name="title">
                                                          </div>
                                                   </div>
                                                  <div class="form-group">
                                                    <label for="category" class="col-sm-4 control-label">所属分类：</label>
                                                    <div class="col-sm-8">
                                                        <select class="chosen-select chosen-transparent form-control" id="category">
                                                             @foreach($categories as $category)
                                                             <option value="{{$category->category_id}}">{{$category->cat_name}}</option>
                                                             @endforeach
                                                       </select>
                                                    </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-sm-4 control-label" for="price">价格：</label>
                                                      <div class="col-sm-8">
                                                        <div class="input-group">
                                                              <input type="text" class="form-control" id="price" name="price">
                                                              <div class="input-group-addon">元</div>
                                                            </div>
                                                      </div>

                                                  </div>
                                                    <div class="form-group">
                                                      <label for="category" class="col-sm-4 control-label">商品状态：</label>
                                                      <div class="col-sm-8">
                                                          @foreach($status as  $status => $lang)
                                                          <label class="radio-inline">
                                                            <input type="radio" name="status" id="status" value="{{$status}}" {{$status == \App\Enum\ProductEnum::STATUS_SALING  ? 'checked' : ''}}>
                                                            {{$lang}}
                                                          </label>
                                                          @endforeach
                                                      </div>
                                                    </div>
                                            </div>
                                            <div class="tab-pane" id="product-attr">
                                                @include('admin.product.add-attr',compact('attributes'))
                                            </div>
                                            <div class="tab-pane" id="product-desc">描述</div>
                                            <div class="tab-pane" id="product-gellary">相册管理</div>
                                        </div>
                                         <div class="form-group">
                                            <div class="col-sm-8 col-sm-offset-4">
                                              <button type="submit" class="btn btn-primary">&nbsp;保&nbsp;存&nbsp;</button>
                                            </div>
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

