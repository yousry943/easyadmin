@extends('admin.layouts.master')
@section('title')
  registration
@endsection
@section('page-header')
    <!--<section class="content-header">-->
    <!--    <h1>-->
    <!--        Home Page-->
    <!--        <small></small>-->
    <!--    </h1>-->

    <!--</section>-->
@endsection

@section('content')


    <section class="content">

        {{--<div class="row">--}}
            {{--<div class="col-md-12">--}}
                {{--<a href="{{url('/admin/slider/create')}}" class="btn btn-primary pull-right margin-bottom">--}}
                    {{--<i class="fa fa-plus"></i>--}}
                    {{--Add new--}}
                {{--</a>--}}
            {{--</div>--}}
        {{--</div>--}}

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
                                <th>Title</th>
                                <th>First_name</th>
                                <th>Last_name</th>
                                <th>Gender</th>
                                <th>Photo</th>
                                <th>Passport_Nr</th>
                                <th>international_participants</th>
                                <th>Invoice_to_University</th>
                                <th>Email</th>
                                <th>City</th>
                                <th>Country</th>
                                <th>Mobile</th>
                                <th>Accommodation</th>
                                <th>Plan</th>

                                <th>Number_of_adult</th>
                                <th>counting_your_own</th>
                                <th>Single_room</th>
                                <th>Payment_mode</th>
                                <th>Transportation</th>

                                  <th>created_at</th>
                            </tr>
                            @foreach($Registration_details as $Registration_detail)
                                <tr>
                                    <td>{{$Registration_detail->id}}</td>
                                    <td>{{$Registration_detail->Title}}</td>
                                    <td>{{$Registration_detail->First_name}}</td>
                                    <td>{{$Registration_detail->Last_name}}</td>
                                    <td>{{$Registration_detail->Gender}}</td>
                                    <td>{{$Registration_detail->Photo}}</td>
                                    <td>{{$Registration_detail->Passport_Nr}}</td>
                                    <td>{{$Registration_detail->international_participants}}</td>
                                    <td>{{$Registration_detail->Invoice_to_University}}</td>
                                    <td>{{$Registration_detail->Email}}</td>
                                    <td>{{$Registration_detail->City}}</td>
                                    <td>{{$Registration_detail->Country}}</td>
                                    <td>{{$Registration_detail->Mobile}}</td>
                                    <td>{{$Registration_detail->Accommodation}}</td>
                                    <td>{{$Registration_detail->Plan}}</td>
                                    <td>{{$Registration_detail->Number_of_adult}}</td>
                                    <td>{{$Registration_detail->counting_your_own}}</td>
                                    <td>{{$Registration_detail->Single_room}}</td>
                                    <td>{{$Registration_detail->Payment_mode}}</td>
                                    <td>{{$Registration_detail->Transportation}}</td>





                                     <td>{{$Registration_detail->created_at}}</td>



                                          <td>

                                              @if(\Illuminate\Support\Facades\Auth::guard('admin')->user()->can('student.update'))
                                                  <a href="{{url('admin/registration/edit/'.$Registration_detail->id)}}" class="btn btn-info btn-circle"><i class="fa fa-edit"></i></a>
                                              @endif
                                    </td>



                                    <td>

                                        @if(\Illuminate\Support\Facades\Auth::guard('admin')->user()->can('student.delete'))
                                            <a href="{{url('admin/users/ConferenceTracks/show'.'/delete/'.$Registration_detail->id)}}" class="btn btn-danger btn-circle"><i class="fa fa-trash-o"></i></a>
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
