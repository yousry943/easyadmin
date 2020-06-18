@extends('admin.layouts.master')
@section('title')
    Add registration
@endsection
@section('page-header')
    <section class="content-header">
        <h1>
          registration
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
                        <h3 class="box-title">registration Form</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal" method="post" action="{{url('/admin/registration')}}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="box-body">

                            <div class="form-group">
                                <label for="title" class="col-sm-1 control-label">Title</label>
                                <div class="col-sm-5 {{ $errors->has('title') ? ' has-error' : '' }}">
                                    <input type="text" name="Title" class="form-control" id="Title" placeholder="Title" value="{{ old('Title') }}" required autofocus>
                                    @if ($errors->has('Title'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('Title') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                </div>

                                <div class="form-group">
                                    <label for="title" class="col-sm-1 control-label">First_name</label>
                                    <div class="col-sm-5 {{ $errors->has('title') ? ' has-error' : '' }}">
                                        <input type="text" name="First_name" class="form-control" id="First_name" placeholder="First_name" value="{{ old('First_name') }}" required autofocus>
                                        @if ($errors->has('First_name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('First_name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    </div>



                                    <div class="form-group">
                                        <label for="title" class="col-sm-1 control-label">Last_name</label>
                                        <div class="col-sm-5 {{ $errors->has('title') ? ' has-error' : '' }}">
                                            <input type="text" name="Last_name" class="form-control" id="Last_name" placeholder="Last_name" value="{{ old('Last_name') }}" required autofocus>
                                            @if ($errors->has('Last_name'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('Last_name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        </div>



                                        <div class="form-group">
                                            <label for="title" class="col-sm-1 control-label">Gender</label>
                                            <div class="col-sm-5 {{ $errors->has('title') ? ' has-error' : '' }}">
                                                <input type="text" name="Gender" class="form-control" id="Gender" placeholder="Gender" value="{{ old('Gender') }}" required autofocus>
                                                @if ($errors->has('Gender'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('Gender') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            </div>



                                            <div class="form-group">
                                                <label for="title" class="col-sm-1 control-label">Passport_Nr</label>
                                                <div class="col-sm-5 {{ $errors->has('Passport_Nr') ? ' has-error' : '' }}">
                                                    <input type="text" name="Passport_Nr" class="form-control" id="Passport_Nr" placeholder="Passport_Nr" value="{{ old('Passport_Nr') }}" required autofocus>
                                                    @if ($errors->has('Passport_Nr'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('Passport_Nr') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                </div>



                                                <div class="form-group">
                                                    <label for="title" class="col-sm-1 control-label">international_participants</label>
                                                    <div class="col-sm-5 {{ $errors->has('international_participants') ? ' has-error' : '' }}">
                                                        <input type="text" name="international_participants" class="form-control" id="Passport_Nr" placeholder="international_participants" value="{{ old('international_participants') }}" required autofocus>
                                                        @if ($errors->has('international_participants'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('international_participants') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                    </div>


                                                    <div class="form-group">
                                                        <label for="title" class="col-sm-1 control-label">Invoice_to_University</label>
                                                        <div class="col-sm-5 {{ $errors->has('Invoice_to_University') ? ' has-error' : '' }}">
                                                            <input type="text" name="Invoice_to_University" class="form-control" id="Invoice_to_University" placeholder="Invoice_to_University" value="{{ old('Invoice_to_University') }}" required autofocus>
                                                            @if ($errors->has('Invoice_to_University'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('Invoice_to_University') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                        </div>



                                                        <div class="form-group">
                                                            <label for="title" class="col-sm-1 control-label">Email</label>
                                                            <div class="col-sm-5 {{ $errors->has('Email') ? ' has-error' : '' }}">
                                                                <input type="email" name="Email" class="form-control" id="Email" placeholder="Email" value="{{ old('Email') }}" required autofocus>
                                                                @if ($errors->has('Email'))
                                                                    <span class="help-block">
                                                                        <strong>{{ $errors->first('Email') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                            </div>


                                                            <div class="form-group">
                                                                <label for="title" class="col-sm-1 control-label">City</label>
                                                                <div class="col-sm-5 {{ $errors->has('City') ? ' has-error' : '' }}">
                                                                    <input type="text" name="City" class="form-control" id="Email" placeholder="City" value="{{ old('City') }}" required autofocus>
                                                                    @if ($errors->has('City'))
                                                                        <span class="help-block">
                                                                            <strong>{{ $errors->first('City') }}</strong>
                                                                        </span>
                                                                    @endif
                                                                </div>
                                                                </div>



                                                                <div class="form-group">
                                                                    <label for="title" class="col-sm-1 control-label">Country</label>
                                                                    <div class="col-sm-5 {{ $errors->has('Country') ? ' has-error' : '' }}">
                                                                        <input type="text" name="Country" class="form-control" id="Country" placeholder="Country" value="{{ old('Country') }}" required autofocus>
                                                                        @if ($errors->has('Country'))
                                                                            <span class="help-block">
                                                                                <strong>{{ $errors->first('Country') }}</strong>
                                                                            </span>
                                                                        @endif
                                                                    </div>
                                                                    </div>





                                                                        <div class="form-group">
                                                                            <label for="title" class="col-sm-1 control-label">Mobile</label>
                                                                            <div class="col-sm-5 {{ $errors->has('Country') ? ' has-error' : '' }}">
                                                                                <input type="text" name="Mobile" class="form-control" id="name" placeholder="Mobile" value="{{ old('Mobile') }}" required autofocus>
                                                                                @if ($errors->has('Mobile'))
                                                                                    <span class="help-block">
                                                                                        <strong>{{ $errors->first('Mobile') }}</strong>
                                                                                    </span>
                                                                                @endif
                                                                            </div>
                                                                            </div>


                                                                            <div class="form-group">
                                                                                <label for="title" class="col-sm-1 control-label">Accommodation</label>
                                                                                <div class="col-sm-5 {{ $errors->has('Country') ? ' has-error' : '' }}">
                                                                                    <input type="text" name="Accommodation" class="form-control" id="name" placeholder="Accommodation" value="{{ old('Accommodation') }}" required autofocus>
                                                                                    @if ($errors->has('Accommodation'))
                                                                                        <span class="help-block">
                                                                                            <strong>{{ $errors->first('Accommodation') }}</strong>
                                                                                        </span>
                                                                                    @endif
                                                                                </div>
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label for="title" class="col-sm-1 control-label">Plan</label>
                                                                                    <div class="col-sm-5 {{ $errors->has('Plan') ? ' has-error' : '' }}">
                                                                                        <input type="text" name="Plan" class="form-control" id="Plan" placeholder="Plan" value="{{ old('Plan') }}" required autofocus>
                                                                                        @if ($errors->has('Plan'))
                                                                                            <span class="help-block">
                                                                                                <strong>{{ $errors->first('Plan') }}</strong>
                                                                                            </span>
                                                                                        @endif
                                                                                    </div>
                                                                                    </div>



                                                                                    <div class="form-group">
                                                                                        <label for="title" class="col-sm-1 control-label">Number_of_adult</label>
                                                                                        <div class="col-sm-5 {{ $errors->has('Number_of_adult') ? ' has-error' : '' }}">
                                                                                            <input type="text" name="Number_of_adult" class="form-control" id="Plan" placeholder="Number_of_adult" value="{{ old('Number_of_adult') }}" required autofocus>
                                                                                            @if ($errors->has('Number_of_adult'))
                                                                                                <span class="help-block">
                                                                                                    <strong>{{ $errors->first('Number_of_adult') }}</strong>
                                                                                                </span>
                                                                                            @endif
                                                                                        </div>
                                                                                        </div>



                                                                                        <div class="form-group">
                                                                                            <label for="title" class="col-sm-1 control-label">counting_your_own</label>
                                                                                            <div class="col-sm-5 {{ $errors->has('Number_of_adult') ? ' has-error' : '' }}">
                                                                                                <input type="text" name="counting_your_own" class="form-control" id="counting_your_own" placeholder="counting_your_own" value="{{ old('counting_your_own') }}" required autofocus>
                                                                                                @if ($errors->has('counting_your_own'))
                                                                                                    <span class="help-block">
                                                                                                        <strong>{{ $errors->first('counting_your_own') }}</strong>
                                                                                                    </span>
                                                                                                @endif
                                                                                            </div>
                                                                                            </div>


                                                                                            <div class="form-group">
                                                                                                <label for="title" class="col-sm-1 control-label">Single_room</label>
                                                                                                <div class="col-sm-5 {{ $errors->has('Number_of_adult') ? ' has-error' : '' }}">
                                                                                                    <input type="text" name="Single_room" class="form-control" id="Single_room" placeholder="Single_room" value="{{ old('Single_room') }}" required autofocus>
                                                                                                    @if ($errors->has('Single_room'))
                                                                                                        <span class="help-block">
                                                                                                            <strong>{{ $errors->first('Single_room') }}</strong>
                                                                                                        </span>
                                                                                                    @endif
                                                                                                </div>
                                                                                                </div>


                                                                                                <div class="form-group">
                                                                                                    <label for="title" class="col-sm-1 control-label">Payment_mode</label>
                                                                                                    <div class="col-sm-5 {{ $errors->has('Number_of_adult') ? ' has-error' : '' }}">
                                                                                                        <input type="text" name="Payment_mode" class="form-control" id="Payment_mode" placeholder="Payment_mode" value="{{ old('Payment_mode') }}" required autofocus>
                                                                                                        @if ($errors->has('Payment_mode'))
                                                                                                            <span class="help-block">
                                                                                                                <strong>{{ $errors->first('Payment_mode') }}</strong>
                                                                                                            </span>
                                                                                                        @endif
                                                                                                    </div>
                                                                                                    </div>



                                                                                                    <div class="form-group">
                                                                                                        <label for="title" class="col-sm-1 control-label">Transportation</label>
                                                                                                        <div class="col-sm-5 {{ $errors->has('Transportation') ? ' has-error' : '' }}">
                                                                                                            <input type="text" name="Transportation" class="form-control" id="Transportation" placeholder="Transportation" value="{{ old('Transportation') }}" required autofocus>
                                                                                                            @if ($errors->has('Transportation'))
                                                                                                                <span class="help-block">
                                                                                                                    <strong>{{ $errors->first('Transportation') }}</strong>
                                                                                                                </span>
                                                                                                            @endif
                                                                                                        </div>
                                                                                                        </div>






                                <div class="form-group">
                                <label for="photo" class="col-sm-1 control-label">Photo</label>
                                <div class="col-sm-5 {{ $errors->has('photo') ? ' has-error' : '' }}">
                                    <input type="file" name="Photo" id="photo" class="form-control">
                                    @if ($errors->has('Photo'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('Photo') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group">

                                <label for="description" class="col-sm-1 control-label">Description</label>
                                <div class="col-sm-11 {{ $errors->has('Description') ? ' has-error' : '' }}">
                                    <div class="box-body pad">
                                        <textarea name="Description" class="form-control" placeholder="Description" id="editor1">{{ old('Description') }}</textarea>
                                        @if ($errors->has('Description'))
                                            <span class="help-block">
                                                    <strong>{{ $errors->first('Description') }}</strong>
                                                </span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">

                            </div>

                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-info center-block">Save <i class="fa fa-save" style="margin-left: 5px"></i></button>
                        </div>
                        <!-- /.box-footer -->
                    </form>
                </div>
                <!-- /.box -->
                <!-- general form elements disabled -->

                <!-- /.box -->
            </div>
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
    </section>

@endsection

@section('css')

@endsection

@section('js')
    <script src="{{ asset('assets/bower_components/ckeditor/ckeditor.js')}}"></script>
    <script>
        $(function () {
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('editor1')
            //bootstrap WYSIHTML5 - text editor
            $('.textarea').wysihtml5()
        })
    </script>

@endsection
