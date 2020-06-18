@extends('admin.layouts.master')
@section('title')
Add users
  @endsection

@section('page-header')
    <section class="content-header">
        <h1>
          Add users
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
                        <h3 class="box-title">   </h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->


                    <form class="form-horizontal" method="post" action="{{url('/admin/users/show/edit').'/'.$user->first()->id}}">
                        {{csrf_field()}}
                    <div class="box-body">
                    <div class="form-group">

                    <label for="username" class="col-sm-4 control-label">  Name </label>

                        <div class="col-sm-4 {{ $errors->has('name') ? ' has-error' : '' }}">
                            <input type="text" name="name" class="form-control" id="name" value="{{$user->first()->name}}"  placeholder="Name">
                            @if ($errors->has('name'))
                                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                    </span>
                            @endif
                        </div>

                    </div>


                    <!--  <div class="form-group">-->

                    <!--<label for="lname" class="col-sm-4 control-label">الاسم الثانى </label>-->

                    <!--    <div class="col-sm-4 {{ $errors->has('lname') ? ' has-error' : '' }}">-->
                    <!--        <input type="text" name="lname" class="form-control" id="lname" placeholder="لاسم الثانى" value="{{ old('lname') }}">-->
                    <!--        @if ($errors->has('lname'))-->
                    <!--            <span class="help-block">-->
                    <!--<strong>{{ $errors->first('lname') }}</strong>-->
                    <!--</span>-->
                    <!--        @endif-->
                    <!--    </div>-->

                    <!--</div>-->


                    <!--  <div class="form-group">-->

                    <!--<label for="tname" class="col-sm-4 control-label">الاسم الثالث </label>-->

                    <!--    <div class="col-sm-4 {{ $errors->has('tname') ? ' has-error' : '' }}">-->
                    <!--        <input type="text" name="tname" class="form-control" id="tname" placeholder="لاسم الثالث" value="{{ old('tname') }}">-->
                    <!--        @if ($errors->has('tname'))-->
                    <!--            <span class="help-block">-->
                    <!--<strong>{{ $errors->first('tname') }}</strong>-->
                    <!--</span>-->
                    <!--        @endif-->

                    <!--</div> </div>-->




                       <div class="form-group">

                    <label for="phone" class="col-sm-4 control-label">familyName </label>

                        <div class="col-sm-4 {{ $errors->has('phone') ? ' has-error' : '' }}">
                            <input type="text" name="familyName" class="form-control" id="familyName" placeholder="familyName"  value="{{$user->first()->familyName}}"  >
                            @if ($errors->has('familyName'))
                                <span class="help-block">
                    <strong>{{ $errors->first('familyName') }}</strong>
                    </span>
                            @endif
                        </div>

                    </div>


                             <div class="form-group">

<label for="email" class="col-sm-4 control-label"> Title </label>

    <div class="col-sm-4 {{ $errors->has('email') ? ' has-error' : '' }}">
        <input type="text" name="Title" class="form-control" id="Title" placeholder="Title" value="{{$user->first()->Title}}"  >
        @if ($errors->has('Title'))
            <span class="help-block">
<strong>{{ $errors->first('Title') }}</strong>
</span>
        @endif
    </div>

</div>


<div class="form-group">

<label for="email" class="col-sm-4 control-label"> Affilation </label>

<div class="col-sm-4 {{ $errors->has('Affilation') ? ' has-error' : '' }}">
<input type="text" name="Affilation" class="form-control" id="Affilation" placeholder="Title" value="{{$user->first()->Affilation}}"  >
@if ($errors->has('Affilation'))
<span class="help-block">
<strong>{{ $errors->first('Affilation') }}</strong>
</span>
@endif
</div>

</div>





                        <div class="form-group">

                    <label for="classes" class="col-sm-4 control-label"> Country </label>

                        <div class="col-sm-4 {{ $errors->has('Country') ? ' has-error' : '' }}">


                            <!--<input type="text" name="education_year" class="form-control" id="education_year" placeholder="قم الموبيل" value="{{ old('education_year') }}">-->
                            <select class="form-control" name="Country"   >

                            @include('user.includes.country')


                  </select>


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
                    <input type="text" name="email" class="form-control" id="email" placeholder="email" value="{{$user->first()->email}}"  >
                    @if ($errors->has('email'))
                    <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                    </div>

                    </div>



                        <div class="form-group">

                            <label for="mom_id" class="col-sm-4 control-label">  user type </label>

                            <div class="col-sm-4 {{ $errors->has('user_type_id') ? ' has-error' : '' }}">


                            <!--<input type="text" name="education_year" class="form-control" id="education_year" placeholder="قم الموبيل" value="{{ old('education_year') }}">-->
                                <select class="form-control" name="user_type_id"  >


                    <option selected  value="{{ $user->first()->get_user_type_id()->first()->id}}"> {{ $user->first()->get_user_type_id()->first()->name}} </option>


                                    @foreach($types as $type)
                    <option value="{{ $type->id}}"> {{ $type->name}} </option>
                                    @endforeach


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
                                        <label><input type="radio" name="role[]" value="{{$role->id}}"
                                          @foreach ($manager->roles as $manager_role)
                                            @if($role->id == $manager_role->id)

                                            checked

                                            @endif
                                          @endforeach>{{$role->title}}</label>
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
