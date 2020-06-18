@extends('admin.layouts.master')
@section('title')
    تعديل الوظيفة
@endsection
@section('page-header')
    <section class="content-header">
        <h1>
                تعديل الوظيفة
                <small></small>
        </h1>

    </section>
@endsection

@section('content')

    <section class="content">
        <div class="row">
            <!-- right column -->
            <div class="col-md-12">
                <!-- Horizontal Form -->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">تعديل <strong>{{$role->title}}</strong></h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->


                    <form class="form-horizontal" method="post" action="{{url('/admin/role/'.$role->id)}}">
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="patch">
                    <div class="box-body" style="margin-right: 30px;">

                    <div class="form-group">

                        <label for="role" class="col-sm-4 control-label">Role</label>

                        <div class="col-sm-4 {{ $errors->has('title') ? ' has-error' : '' }}">
                            <input type="text" name="title" class="form-control" id="title" placeholder="Role" value="{{$role->title}}">
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
                                    <label for="permission" class="control-label">صلاحيات الطالب</label>
                                </div>
                                @foreach($permissions as $permission)
                                    @if($permission->for == 'الطالب')
                                        <div class="checkbox">
                                            <label><input type="checkbox" name="permission[]" value="{{$permission->id}}"
                                                          @foreach ($role->permissions as $perm)
                                                          @if($permission->id == $perm->id)

                                                          checked

                                                        @endif
                                                        @endforeach>
                                                {{$permission->title}}</label>
                                        </div>
                                    @endif
                                @endforeach

                            </div>

                        <div class="col-xs-12 col-sm-3">
                            <div>
                                <label for="permission" class="control-label">
                                 صلاحيات المدرس</label>
                            </div>
                            @foreach($permissions as $permission)
                                @if($permission->for == 'المدرس')
                                    <div class="checkbox">
                                    
                                        <label><input type="checkbox" name="permission[]" value="{{$permission->id}}"
                                                                                @foreach ($role->permissions as $perm)
                                             @if($permission->id == $perm->id)

                                                 checked

                                                        @endif
                                                        @endforeach
                                        >{{$permission->title}}</label>
                                    </div>
                                @endif
                            @endforeach

                        </div>
                        <div class="col-xs-12 col-sm-3">
                            <div>
                                <label for="permission" class="control-label">
                                 صلاحيات الموظف</label>
                            </div>
                            @foreach($permissions as $permission)
                                @if($permission->for == 'الموظف')
                                    <div class="checkbox">
                                    
                                        <label><input type="checkbox" name="permission[]" value="{{$permission->id}}"
                                                                                @foreach ($role->permissions as $perm)
                                             @if($permission->id == $perm->id)

                                                 checked

                                                        @endif
                                                        @endforeach
                                        >{{$permission->title}}</label>
                                    </div>
                                @endif
                            @endforeach

                        </div>
                        <div class="col-xs-12 col-sm-3">
                            <div>
                                <label for="permission" class="control-label">
                                 صلاحيات المرحلة الدراسية</label>
                            </div>
                            @foreach($permissions as $permission)
                                @if($permission->for == 'المرحلة الدراسية')
                                    <div class="checkbox">
                                    
                                        <label><input type="checkbox" name="permission[]" value="{{$permission->id}}"
                                                                                @foreach ($role->permissions as $perm)
                                             @if($permission->id == $perm->id)

                                                 checked

                                                        @endif
                                                        @endforeach
                                        >{{$permission->title}}</label>
                                    </div>
                                @endif
                            @endforeach

                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">

                            <div class="col-xs-12 col-sm-3">
                                <div>
                                    <label for="permission" class="control-label">
                                     صلاحيات السنة الدراسية</label>
                                </div>
                                @foreach($permissions as $permission)
                                    @if($permission->for == 'السنة الدراسية')
                                        <div class="checkbox">
                                        
                                            <label><input type="checkbox" name="permission[]" value="{{$permission->id}}"
                                                                                    @foreach ($role->permissions as $perm)
                                                 @if($permission->id == $perm->id)
    
                                                     checked
    
                                                            @endif
                                                            @endforeach
                                            >{{$permission->title}}</label>
                                        </div>
                                    @endif
                                @endforeach
    
                            </div>
                            <div class="col-xs-12 col-sm-3">
                                <div>
                                    <label for="permission" class="control-label">
                                     صلاحيات المادة الدراسية</label>
                                </div>
                                @foreach($permissions as $permission)
                                    @if($permission->for == 'المادة الدراسية')
                                        <div class="checkbox">
                                        
                                            <label><input type="checkbox" name="permission[]" value="{{$permission->id}}"
                                                                                    @foreach ($role->permissions as $perm)
                                                 @if($permission->id == $perm->id)
    
                                                     checked
    
                                                            @endif
                                                            @endforeach
                                            >{{$permission->title}}</label>
                                        </div>
                                    @endif
                                @endforeach
    
                            </div>
                            <div class="col-xs-12 col-sm-3">
                                <div>
                                    <label for="permission" class="control-label">
                                     صلاحيات الجروب</label>
                                </div>
                                @foreach($permissions as $permission)
                                    @if($permission->for == 'الجروب')
                                        <div class="checkbox">
                                        
                                            <label><input type="checkbox" name="permission[]" value="{{$permission->id}}"
                                                                                    @foreach ($role->permissions as $perm)
                                                 @if($permission->id == $perm->id)
    
                                                     checked
    
                                                            @endif
                                                            @endforeach
                                            >{{$permission->title}}</label>
                                        </div>
                                    @endif
                                @endforeach
    
                            </div>
                            <div class="col-xs-12 col-sm-3">
                                <div>
                                    <label for="permission" class="control-label">
                                     صلاحيات الحضور</label>
                                </div>
                                @foreach($permissions as $permission)
                                    @if($permission->for == 'الحضور')
                                        <div class="checkbox">
                                        
                                            <label><input type="checkbox" name="permission[]" value="{{$permission->id}}"
                                                                                    @foreach ($role->permissions as $perm)
                                                 @if($permission->id == $perm->id)
    
                                                     checked
    
                                                            @endif
                                                            @endforeach
                                            >{{$permission->title}}</label>
                                        </div>
                                    @endif
                                @endforeach
    
                            </div>
    
    
    
                        </div>
                    </div>
                     <div class="row">
                            <div class="form-group">
                                <div class="col-xs-12 col-sm-3">
                                    <div>
                                        <label for="permission" class="control-label">صلاحيات الادمن</label>
                                    </div>
                                    @foreach($permissions as $permission)
                                        @if($permission->for == 'الادمن')
                                            <div class="checkbox">
                                                <label><input type="checkbox" name="permission[]" value="{{$permission->id}}"
                                                              @foreach ($role->permissions as $perm)
                                                              @if($permission->id == $perm->id)

                                                              checked

                                                            @endif
                                                            @endforeach>
                                                    {{$permission->title}}</label>
                                            </div>
                                        @endif
                                    @endforeach

                                </div>

                                <div class="col-xs-12 col-sm-3">
                                    <div>
                                        <label for="permission" class="control-label">
                                            صلاحيات الوظائف</label>
                                    </div>
                                    @foreach($permissions as $permission)
                                        @if($permission->for == 'الوظائف')
                                            <div class="checkbox">

                                                <label><input type="checkbox" name="permission[]" value="{{$permission->id}}"
                                                              @foreach ($role->permissions as $perm)
                                                              @if($permission->id == $perm->id)

                                                              checked

                                                            @endif
                                                            @endforeach
                                                    >{{$permission->title}}</label>
                                            </div>
                                        @endif
                                    @endforeach

                                </div>
                            </div>
                        </div>









                    <!-- /.box-body -->
                    <div class="box-footer">
                    <button type="submit" class="btn btn-info center-block"> save</button>
                    </div>
                    <!-- /.box-footer -->
                    </form>
                </div>

            </div>
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
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


