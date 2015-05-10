@extends('admin.layout')

@section('title')
分类列表
@stop
@section('body')
    <!-- page header -->
    <div class="pageheader">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li>当前位置</li>
                <li><a href="{{route('admin.index')}}">后台管理</a></li>
                <li><a href="{{route('admin.category')}}">分类管理</a></li>
                <li class="active">分类列表</li>
            </ol>
        </div>
    </div>
    <!-- /page header -->
<!-- content main container -->
    <div class="main">


                <!-- row -->
                <div class="row">


                  <!-- col 12 -->
                  <div class="col-md-12">


                    <!-- tile -->
                    <section class="tile color transparent-black">




                      <!-- tile header -->
                      <div class="tile-header">


                        <div class="controls">
                          <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                          <a href="#" class="remove"><i class="fa fa-times"></i></a>
                        </div>
                      </div>
                      <!-- /tile header -->


                      <!-- tile body -->
                      <div class="tile-body no-vpadding">
                        <div class="table-responsive">

                                @if(session('success'))
                                     <div class="alert alert-greensea alert-dismissable">
                                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                          {{session('success')}}
                                        </div>
                                @elseif(session('error'))

                                         <div class="alert alert-red alert-dismissable">
                                              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                              <strong>错误：</strong>{{session('error')}}
                                         </div>

                                @endif

                          <table class="table table-custom table-sortable nomargin">
                            <thead>
                              <tr>

                                <th class="sortable sort-asc">分类ID</th>
                                <th class="sortable">分类名称</th>
                                <th>鹦鹉数量</th>
                                <th>分类简介</th>
                                <th class="text-center">操作</th>
                              </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $key=>$val)
                              <tr>
                                <td>{{$val->category_id}}</td>
                                <td>{{$val->cat_name}}</td>
                                 <td>{{count($val->products)}}</td>
                                <td>{{$val->cat_description}}</td>
                                <td class="actions text-center">
                                    <a href="{{route('admin.category.edit',array($val->category_id))}}" class="edit">编辑<i class="fa fa-edit"></i> </a>
                                    <a href="{{route('admin.category.delete',array($val->category_id))}}" class="delete">删除<i class="fa fa-times"></i> </a>
                                </td>
                              </tr>
                                @endforeach
                            </tbody>
                          </table>
                        </div>
                      </div>
                      <!-- /tile body -->


                      <!-- tile footer -->
                      <div class="tile-footer text-center">
                        <?php echo $pagination->render();?>
                      </div>
                      <!-- /tile footer -->



                    </section>
                    <!-- /tile -->


                  </div>
                  <!-- /col 12 -->



                </div>
                <!-- /row -->


                <!-- row -->
                <div class="row">







                </div>
                <!-- /row -->



              </div>
              <!-- /content container -->

@stop

@section('footer-last-js')
    <script type="text/javascript">

    </script>
@stop