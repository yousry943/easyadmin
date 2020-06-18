<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Add User For  Company </title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
 @include('user.includes.css')
</head>

<body>

 @include('user.includes.header')

    <section class="site-data-container accountingForm currencyform">
        <div class="site-data-wrapper">
            <div class="data-title-search-container">
                <div class="data-title-wrapper breadcrumb-wrapper">
                    <div class="pageName">
                        <span><a href="C_C_TOC.html">Add User For  Company  </span></a>
                    </div>
                </div>

                <form action="{{url('Add_user_For_Company/store')}}" method="post">
{{csrf_field()}}
                <div class="bagntion flex">
                    <div class="add-item-btn">
                        <span class="save">

                          <button type="submit" class="save">
                                Send      </button>

                          <span>

                    </div>

                    <div class="add-item-btn">
                        <span class="discard">Discard<span>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-sections-wrapper flex">
            <div class="leftPart">

                <div class="box-data-container">

                   <div class="billInputs flexBetween">
                        <div class="billInputsLeft">
                                <div class="flexBetween billOpject"><label for="">User Name</label><input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus placeholder=" Name" > </div>
                                <div class="flexBetween billOpject"><label for="">Email</label><input id="name" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="Email" > </div>

                                <div class="flexBetween billOpject"><label for="">password</label><input type="text" name="password" ></div>
                                <div class="flexBetween billOpject"><label for="">Password Confirmation</label><input type="text" name="password_confirmation" ></div>

                                <div class="flexBetween billOpject"><label for="">Company</label><select name="company_id">
                                  @foreach($Companys as $Company)
                                    <option value="{{$Company->id}}">{{$Company->Business_Details}}</option>

                                  @endforeach
                                </select>
                                </div>


                        </div>

<!-- <input type="text" name="user_id" value="{{\Illuminate\Support\Facades\Auth::guard('web')->user()->id}}" hidden> -->

                                <!-- <div class="flexBetween billOpject"><label for="">CHOOSE LOGO</label><input type="file"></div> -->


                            </form>
                   </div>
                </div>

            </div><!-- LeftPart -->


            <div class="rightPart"></div>

        </div>
    </section>
    <div class="hiddenAllItems"></div>
 @include('user.includes.js')
</body>

</html>
