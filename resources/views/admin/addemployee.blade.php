@extends('admin.layouts.master')
@section('title')
اضافه موظف جدد@endsection

@section('page-header')
    <section class="content-header">
        <h1>
اضافه موظف جدد            <small></small>
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


                    <form class="form-horizontal" method="post" action="{{url('/admin/employee/add')}}">
                        {{csrf_field()}}
                    <div class="box-body">
                    <div class="form-group">

                    <label for="username" class="col-sm-4 control-label">الاسم كامل </label>

                        <div class="col-sm-4 {{ $errors->has('fname') ? ' has-error' : '' }}">
                            <input type="text" name="fname" class="form-control" id="username" placeholder="الاسم كامل" value="{{ old('fname') }}">
                            @if ($errors->has('fname'))
                                <span class="help-block">
                    <strong>{{ $errors->first('fname') }}</strong>
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

                    <label for="phone" class="col-sm-4 control-label"> رقم الموبيل </label>

                        <div class="col-sm-4 {{ $errors->has('phone') ? ' has-error' : '' }}">
                            <input type="text" name="phone" class="form-control" id="phone" placeholder="قم الموبيل" value="{{ old('phone') }}">
                            @if ($errors->has('phone'))
                                <span class="help-block">
                    <strong>{{ $errors->first('phone') }}</strong>
                    </span>
                            @endif
                        </div>

                    </div>
                    
                    
                         


                    
                          <div class="form-group">

                    <label for="email" class="col-sm-4 control-label">  البريد الاكترونى </label>

                        <div class="col-sm-4 {{ $errors->has('email') ? ' has-error' : '' }}">
                            <input type="text" name="email" class="form-control" id="email" placeholder="البريد الاكترونى" value="{{ old('email') }}">
                            @if ($errors->has('email'))
                                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                    </span>
                            @endif
                        </div>

                    </div>
                    

                    
                          <div class="form-group">

                    <label for="address" class="col-sm-4 control-label">  العنوان </label>

                        <div class="col-sm-4 {{ $errors->has('address') ? ' has-error' : '' }}">
                            <input type="text" name="address" class="form-control" id="address" placeholder="العنوان" value="{{ old('address') }}">
                            @if ($errors->has('address'))
                                <span class="help-block">
                    <strong>{{ $errors->first('address') }}</strong>
                    </span>
                            @endif
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


