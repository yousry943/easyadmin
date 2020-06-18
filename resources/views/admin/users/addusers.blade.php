@extends('admin.layouts.master')
@section('title')
Add New User

@endsection

@section('page-header')
    <section class="content-header">
        <h1>
Add New User             <small></small>
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
                        <h3 class="box-title">   </h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->


                    <form class="form-horizontal" method="post" action="{{url('/admin/users/add')}}">
                        {{csrf_field()}}
                    <div class="box-body">
                    <div class="form-group">

                    <label for="username" class="col-sm-4 control-label">  Name </label>

                        <div class="col-sm-4 {{ $errors->has('name') ? ' has-error' : '' }}">
                            <input type="text" name="name" class="form-control" id="username" placeholder="Name" value="{{ old('name') }}">
                            @if ($errors->has('name'))
                                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                    </span>
                            @endif
                        </div>

                    </div>



                    <div class="form-group">
                      <label for="username" class="col-sm-4 control-label">  familyName </label>
                        <div class="col-sm-4 {{ $errors->has('familyName') ? ' has-error' : '' }}">
                            <input type="text" name="familyName" class="form-control" id="familyName" placeholder="familyName" value="{{ old('familyName') }}">
                             @if ($errors->has('familyName'))
                                <span class="help-block">
                                  <strong>{{ $errors->first('familyName') }}</strong>
                                </span>
                             @endif
                        </div>
                    </div>



                    <div class="form-group">

                    <label for="username" class="col-sm-4 control-label">  Title </label>

                        <div class="col-sm-4 {{ $errors->has('Title') ? ' has-error' : '' }}">
                            <input type="text" name="Title" class="form-control" id="Title" placeholder="Title" value="{{ old('Title') }}">
                            @if ($errors->has('Title'))
                                <span class="help-block">
                    <strong>{{ $errors->first('Title') }}</strong>
                    </span>
                            @endif
                        </div>

                    </div>




                    <div class="form-group">

                    <label for="username" class="col-sm-4 control-label">  Affilation </label>

                        <div class="col-sm-4 {{ $errors->has('Affilation') ? ' has-error' : '' }}">
                            <input type="text" name="Affilation" class="form-control" id="Affilation" placeholder="Affilation" value="{{ old('Affilation') }}">
                            @if ($errors->has('Affilation'))
                                <span class="help-block">
                    <strong>{{ $errors->first('Affilation') }}</strong>
                    </span>
                            @endif
                        </div>

                    </div>




                    <div class="form-group">

                    <label for="username" class="col-sm-4 control-label">  Country </label>

                        <div class="col-sm-4 {{ $errors->has('Country') ? ' has-error' : '' }}">
                            <input type="text" name="Country" class="form-control" id="Country" placeholder="Country" value="{{ old('Country') }}">
                            @if ($errors->has('Country'))
                                <span class="help-block">
                    <strong>{{ $errors->first('Country') }}</strong>
                    </span>
                            @endif
                        </div>

                    </div>







                      <div class="form-group">

<label for="email" class="col-sm-4 control-label"> Email </label>

    <div class="col-sm-4 {{ $errors->has('email') ? ' has-error' : '' }}">
        <input type="text" name="email" class="form-control" id="email" placeholder="email" value="{{ old('email') }}">
        @if ($errors->has('email'))
            <span class="help-block">
<strong>{{ $errors->first('email') }}</strong>
</span>
        @endif
    </div>

</div>







  <div class="form-group">

<label for="password" class="col-sm-4 control-label"> password  </label>

    <div class="col-sm-4 {{ $errors->has('password') ? ' has-error' : '' }}">
        <input type="password" name="password" class="form-control" id="password" placeholder="password" value="{{ old('password') }}">
        @if ($errors->has('password'))
            <span class="help-block">
<strong>{{ $errors->first('password') }}</strong>
</span>
        @endif
    </div>

</div>



  <div class="form-group">

<label for="cpassword" class="col-sm-4 control-label"> confirm password</label>

    <div class="col-sm-4 {{ $errors->has('cpassword') ? ' has-error' : '' }}">
        <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="confirm password" value="{{ old('password_confirmation') }}">
        @if ($errors->has('cpassword'))
            <span class="help-block">
<strong>{{ $errors->first('cpassword') }}</strong>
</span>
        @endif
    </div>

</div>






                        <div class="form-group">

                    <label for="education_year" class="col-sm-4 control-label"> user type </label>

                        <div class="col-sm-4 {{ $errors->has('user_type_id') ? ' has-error' : '' }}">


                            <!--<input type="text" name="education_year" class="form-control" id="education_year" placeholder="قم الموبيل" value="{{ old('education_year') }}">-->
                            <select class="form-control" name="user_type_id"  value="{{ old('user_type_id') }}" >
                                <option> </option>



                          <option value="1"> author</option>
                          <option value="2"> reviewer</option>
                          <option value="3"> editor</option>





                  </select>


                            @if ($errors->has('user_type_id'))
                                <span class="help-block">
                    <strong>{{ $errors->first('user_type_id') }}</strong>
                    </span>
                            @endif
                        </div>

                    </div>


                    <div class="form-group">

                        <label for="role" class="col-sm-4 control-label">Assign Role</label>

                        <div class="col-lg-4 text-center">
                            <div class="row">
                                @foreach($roles as $role)


                                    <label>
                                      <input type="radio" name="role[]" value="{{$role->id}}"

                                        @if($role->id == $role->id)

                                        checked

                                        @endif
                                        >{{$role->title}}</label>
                                      @endforeach



                            </div>

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
