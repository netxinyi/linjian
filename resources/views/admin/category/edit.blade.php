@extends('admin.layout')

@section('body')
    <!-- page header -->
    <div class="pageheader">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li>当前位置</li>
                <li><a href="{{route('admin.index')}}">后台管理</a></li>
                <li><a href="{{route('admin.product')}}">分类管理</a></li>
                <li class="active">编辑分类</li>
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
                             <h1>编辑分类</h1>
                        </div>
                          <!-- /tile header -->

                          <!-- tile body -->
                          <div class="tile-body">

                          <form class="form-horizontal" role="form" action="{{route('admin.category.doEdit',array($category_id))}}" data-parsley-validate method="post">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="row">
                                <div rel="message" class="col-md-8">
                                    <div class="col-sm-offset-4 col-sm-8">
                                        @if(session('success'))
                                             <div class="alert alert-greensea alert-dismissable">
                                                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                  {{session('success')}}
                                                </div>
                                        @elseif($errors->has('cat_name'))
                                            @foreach($errors->all() as $message)
                                                 <div class="alert alert-red alert-dismissable">
                                                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                      <strong>错误：</strong>{{$message}}
                                                 </div>
                                             @endforeach
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-8">

                                          <div class="form-group">
                                            <label for="cat_name" class="col-sm-4 control-label">分类名称：</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control parsley-validated" value="{{old('cat_name',$cat_name)}}" id="cat_name" name="cat_name" data-parsley-trigger="blur" required data-parsley-required-message="请填写分类名称">

                                            </div>
                                          </div>

                                         <div class="form-group">
                                             <label for="cat_description" class="col-sm-4 control-label">分类简介：</label>
                                             <div class="col-sm-8">
                                               <textarea class="form-control" id="cat_description" rows="6" name="cat_description">{{old('cat_description',$cat_description)}}</textarea>
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