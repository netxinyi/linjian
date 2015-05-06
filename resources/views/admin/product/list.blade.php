@extends('admin.layout')

@section('title')
鹦鹉列表
@stop
@section('body')
    <!-- page header -->
    <div class="pageheader">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li>当前位置</li>
                <li><a href="{{route('admin.index')}}">后台管理</a></li>
                <li><a href="{{route('admin.product')}}">鹦鹉管理</a></li>
                <li class="active">鹦鹉列表</li>
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
                        <h1><strong>Projects</strong> Progress</h1>
                        <div class="search">
                          <input type="text" placeholder="Search...">
                        </div>
                        <div class="controls">
                          <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                          <a href="#" class="remove"><i class="fa fa-times"></i></a>
                        </div>
                      </div>
                      <!-- /tile header -->


                      <!-- tile body -->
                      <div class="tile-body no-vpadding">
                        <div class="table-responsive">
                          <table class="table table-custom table-sortable nomargin">
                            <thead>
                              <tr>
                                <th class="sortable">序号</th>
                                <th class="sortable">标题</th>
                                <th class="sortable">价格</th>
                                <th class="sortable">品种</th>
                                <th class="sortable">色系</th>
                                <th class="sortable sort-amount">Status</th>
                                <th class="text-right">操作</th>
                              </tr>
                            </thead>
                            <tbody>
                            @foreach($product_list as $key=>$val)
                              <tr>
                                <td>1</td>
                                <td>Graphic Layout for client</td>
                                <td class="color-red priority">High priority</td>
                                <td class="progress-cell">
                                  <div class="progress-info">
                                    <div class="percent"><span class="animate-number" data-value="50" data-animation-duration="1500">0</span>%</div>
                                  </div>
                                  <div class="progress progress-little">
                                    <div class="progress-bar progress-bar-transparent-white animate-progress-bar" data-percentage="50%" style="width: 50%;"></div>
                                  </div>
                                </td>
                                <td class="text-right"><span id="projectbar1"></span></td>
                              </tr>
                                @endforeach
                            </tbody>
                          </table>
                        </div>
                      </div>
                      <!-- /tile body -->


                      <!-- tile footer -->
                      <div class="tile-footer text-center">
                        <ul class="pagination pagination-sm nomargin pagination-custom">
                          <li class="disabled"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                          <li class="active"><a href="#">1</a></li>
                          <li><a href="#">2</a></li>
                          <li><a href="#">3</a></li>
                          <li><a href="#">4</a></li>
                          <li><a href="#">5</a></li>
                          <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                        </ul>
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