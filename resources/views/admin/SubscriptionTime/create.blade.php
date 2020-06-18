@extends('admin.layouts.master')
@section('title')
اضاقة وقت
@endsection

@section('page-header')
    <section class="content-header">
        <h1>
            اضافة وقت
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
                            <h3 class="box-title">اضافة وقت</h3>
                        </div>
                    <!-- /.box-header -->
                    <!-- form start -->
               <div class="col-md-6">
                    <form class="form-horizontal" method="post" action="{{route('SubscriptionTimeStore')}}">
                        {{csrf_field()}}
                        <div class="box-body">
                            <div class="form-group">

                                <label for="company" class="col-sm-4 control-label">اسم الشركة </label>
                                <div class="col-sm-4 {{ $errors->has('company_id') ? ' has-error' : '' }}">
                                    <select name="company_id" id="company" class="form-control">
                                            @foreach($companys as $company)
                                                <option value="{{$company->id}}">{{$company->First_Name}}</option>
                                            @endforeach
                                    </select>
                                    @if ($errors->has('company_id'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('company_id') }}</strong>
                                        </span>
                                    @endif
                                </div>

                            </div>
                            <div class="form-group">
                              <label for="start_date" class="col-sm-4 control-label"> موعد البدء </label>
                                <div class="col-sm-4 {{ $errors->has('start_date') ? ' has-error' : '' }}">
                                    <input type="date" name="start_date" class="form-control" id="start_date" placeholder="start_date">
                                    @if ($errors->has('start_date'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('start_date') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                              <label for="end_date" class="col-sm-4 control-label"> موعد الانهاء </label>
                                <div class="col-sm-4 {{ $errors->has('end_date') ? ' has-error' : '' }}">
                                    <input type="date" name="end_date" class="form-control" id="end_date" placeholder="end_date">
                                    @if ($errors->has('end_date'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('end_date') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="box-footer">
                                <button type="submit" class="btn btn-info center-block">save</button>
                            </div>

                        </div>
                   </form>
                </div>
                </div>
            </div>
        </div>
        
    </section>

@endsection


