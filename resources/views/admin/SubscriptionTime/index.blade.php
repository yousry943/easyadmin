@extends('admin.layouts.master')
@section('title')
  registration
@endsection
@section('page-header')
    <section class="content-header">
       <h1>
           Home Page
           <small></small>
       </h1>

   </section>
@endsection

@section('content')


    <section class="content">

       <div class="row">
          <div class="col-md-12">
               <a href="{{url('/admin/SubscriptionTime/create')}}" class="btn btn-primary pull-right margin-bottom">
                    <i class="fa fa-plus"></i>
                    Add new
                </a>
           </div>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                     <form  method="get" action="{{ url('/admin/registration/show') }}">
                    <div class="box-header">
                        <h3 class="box-title">
                          </h3>

                        <div class="box-tools">
            <a class="fa fa-refresh fa-spin" style="float: right;position: relative;margin-right: -400%; top:4px;" href="{{url('admin/registration/show')}}"></a>
                            <div class="input-group input-group-sm" style="width: 150px;">

                                <input type="text" name="search" class="form-control pull-right"
                                       placeholder="Search">


                                <div class="input-group-btn">

                                    <button type="submit" class="btn btn-default">
                                        <i class="fa fa-search"></i></button>
                                </div>


                            </div>
                        </div>


                    </div>
                    </form>


                    <!-- /.box-header -->



                    <div class="box-body table-responsive no-padding">

                        <table class="table table-hover">

                            <tr>
                              <th>ID</th>
                                <th>company name</th>
                                <th>start_date</th>
                                <th>end_date</th>
                                <th>status</th>


                                  <th>created_at</th>
                            </tr>
                            @foreach($Subscription_times as $Subscription_time )
                                <tr>
                                    <td>{{$Subscription_time->id}}</td>
                                    <td>{{ $Subscription_time->company()->first()->Business_Details}}</td>


                                    <td>{{$Subscription_time->start_date}}</td>
                                    <td>{{$Subscription_time->end_date}}</td>
                                    <td>{{$Subscription_time->status}}</td>




                                     <td>{{$Subscription_time->created_at}}</td>
                                          <td>
                                              @if(\Illuminate\Support\Facades\Auth::guard('admin')->user()->can('student.update'))
                                                  <a href="{{url('/admin/SubscriptionTime/edit/'.$Subscription_time->id)}}" class="btn btn-info btn-circle"><i class="fa fa-edit"></i></a>
                                              @endif
                                         </td>

                                         

                                    <td>

                                        @if(\Illuminate\Support\Facades\Auth::guard('admin')->user()->can('student.delete'))
                                            <a href="{{url('/admin/SubscriptionTime/delete/'.$Subscription_time->id)}}" class="btn btn-danger btn-circle"><i class="fa fa-trash-o"></i></a>
                                        @endif
                                    </td>





                                </tr>
                            @endforeach
                        </table>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix">
                        <ul class="pagination pagination-sm no-margin pull-right">
                            <!--<li><a href="#">&laquo;</a></li>-->
                            <!--<li><a href="#">1</a></li>-->
                            <!--<li><a href="#">2</a></li>-->
                            <!--<li><a href="#">3</a></li>-->
                            <!--<li><a href="#">&raquo;</a></li>-->

                        </ul>
                    </div>
                </div>
                <!-- /.box -->
            </div>
        </div>

        <br>

    </section>

@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/bower_components/lightbox2-master/lightbox.css')}}">
@endsection

@section('js')

    <script src="{{ asset('assets/bower_components/lightbox2-master/lightbox.js')}}"></script>

@endsection
