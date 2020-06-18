@extends('admin.layouts.master')
@section('title')
show  users
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
                {{--<a href="{{url('/admin/users/create')}}" class="btn btn-primary pull-right margin-bottom">--}}
                    {{--<i class="fa fa-plus"></i>--}}
                    {{--Add new--}}
                {{--</a>--}}
            {{--</div>--}}
        {{--</div>--}}

        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                     <form  method="get" action="{{ url('/admin/users/show/0') }}">
                    <div class="box-header">
                        <h3 class="box-title">
                          </h3>

                        <div class="box-tools">
            <a class="fa fa-refresh fa-spin" style="float: right;position: relative;margin-right: -400%; top:4px;" href="{{url('admin/users/show')}}"></a>
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
                                <th>serial</th>
                                <th>Name</th>

                                <th>familyName</th>
                                   <th>Title</th>
                                   <th>Affilation</th>
                                   <th>Country</th>
                                <th>email</th>

                                <th>user type</th>
                                <th>user  permation  </th>
                                  <th>created_at</th>
                                  <th>updated_at</th>
                                      <th>Edit</th>
                                          <th>Delete</th>

                            </tr>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>

                                    <td>{{$user->familyName}}</td>
                                      <td>{{$user->Title}}</td>
                                        <td>{{$user->Affilation}}</td>
                                    <td>{{$user->Country}}</td>
                                    <td>{{$user->email}}</td>

                                    <td>{{ $user->get_user_type_id()->first()->name}}</td>

                                    <td>  @foreach ($user->roles as $manager_role)
                                            {{$manager_role->title}}
                                    @endforeach
                                    </td>

<td>{{$user->created_at}}</td>
<td>{{$user->updated_at}}</td>








                                          <td>

                                              @if(\Illuminate\Support\Facades\Auth::guard('admin')->user()->can('student.update'))
                                                  <a href="{{url('admin/users/show'.'/edit/'.$user->id)}}" class="btn btn-info btn-circle"><i class="fa fa-edit"></i></a>
                                              @endif
                                    </td>



                                    <td>

                                        @if(\Illuminate\Support\Facades\Auth::guard('admin')->user()->can('student.delete'))
                                            <a href="{{url('admin/users/show'.'/delete/'.$user->id)}}" class="btn btn-danger btn-circle"><i class="fa fa-trash-o"></i></a>
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

                            {{ $users->links() }}
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
