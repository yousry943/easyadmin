@extends('admin.layouts.master')
@section('title')
@endsection

@section('page-header')
    <section class="content-header">
        <h1>
                اضافة وظيفة

            <small></small>
        </h1>

    </section>
@endsection

@section('content')

    <section class="content">
        <div class="row">
            <!-- right column -->
            <div class="col-xs-12">
                <!-- Horizontal Form -->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">  Add Roll
                            </h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->



                    <div class="box-body" style="margin-right: 30px;">
                            <form class="form-horizontal" method="post" action="{{url('/admin/role')}}">
                                {{csrf_field()}}
                    <div class="form-group">

                    <label for="title" class="col-sm-4 control-label">   Roll  Name    </label>

                        <div class="col-sm-4 {{ $errors->has('title') ? ' has-error' : '' }}">
                            <input type="text" name="title" class="form-control" id="title" placeholder="اسم الوظيفة" value="{{ old('title') }}">
                            @if ($errors->has('title'))
                                <span class="help-block">
                    <strong>{{ $errors->first('title') }}</strong>
                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-xs-12 col-sm-3">
                                <div>
                                    <label for="permission" class="control-label"> auther permation   </label>
                                </div>
                                @foreach($permissions as $permission)
                                    @if($permission->for == 'auther')
                                        <div class="checkbox">
                                            <label><input type="checkbox" name="permission[]" value="{{$permission->id}}"
                                                        >
                                                {{$permission->title}}</label>
                                        </div>
                                    @endif
                                @endforeach

                            </div>

                        <div class="col-xs-12 col-sm-3">
                            <div>
                                <label for="permission" class="control-label">
                                reviewer permation  </label>
                            </div>
                            @foreach($permissions as $permission)
                                @if($permission->for == 'reviewer')
                                    <div class="checkbox">

                                        <label><input type="checkbox" name="permission[]"value="{{$permission->id}}"

                                        >{{$permission->title}}</label>
                                    </div>
                                @endif
                            @endforeach

                        </div>

                        </div>
                    </div>

                    <div class="box-footer">
                    <button type="submit" class="btn btn-info center-block">save</button>
                    </div>
                </form>

                </div>

            </div>
        </div>
    </section>

@endsection

@section('css')

    <link rel="stylesheet" href="{{ asset('assets/bower_components/select2/dist/css/select2.min.css')}}">
@endsection

@section('js')

    <script src="{{ asset('assets/bower_components/select2/dist/js/select2.min.js')}}"></script>


    <script>
        $('.select2').select2()
    </script>
@endsection
