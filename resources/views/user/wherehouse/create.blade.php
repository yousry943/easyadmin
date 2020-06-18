<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>wherehouse_add</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    @include('user.includes.css')

</head>

<body>

    @include('user.includes.header')

    <section class="site-data-container accountingForm">
        <div class="site-data-wrapper">
            <div class="data-title-search-container">
                <div class="data-title-wrapper breadcrumb-wrapper">
                    <div class="pageName">
                        <span><a href="{{url('/wherehouse')}}">WARE HOUSE /</span></a><span>NEW</span>
                    </div>
                </div>


                <div class="site-sections-wrapper flex">
                    <div class="leftPart">
                        <div class="box-data-container">

<form action="{{url('/wherehouse_add')}}" method="post">
            {{csrf_field()}}
            <div class="site-data-wrapper">
                <div class="data-title-search-container">

                

                    <div class="bagntion flex">
                        <div class="add-item-btn">
                            <button class="save" type="submit">Save</button>
                            <button class="discard" type="reset">Discard</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-sections-wrapper flex">
                <div class="leftPart">
                    <div class="box-data-container">
                        <div class="billInputs flexBetween">
                            <div class="billInputsLeft">

                                <!-- static input -->
                                <!-- <div class="flexBetween billOpject"><label for="">WAREHOUSE</label><select>
                                            <option disabled>choose warehouse</option>
                                            <option name="" value="warehouse1">warehouse1</option>
                                            <option name="" value="warehouse2">warehouse2</option>
                                        </select>
                                    </div> -->
                                <!-- <div class="flexBetween billOpject"><label for="">LOCATION CODE</label><input
                                        type="text" name="code"></div>
                                @if ($errors->has('code'))
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $errors->first('code') }}</strong>
                                </span>
                                @endif


                                @if ($errors->has('name'))
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif -->
                                <div class="flexBetween billOpject">
                                    <label for="">WAREHOUSE CODE</label>
                                    <input type="text" name="code" ></div>
                                @if ($errors->has('code'))
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $errors->first('code') }}</strong>
                                </span>
                                @endif
                                <div class="flexBetween billOpject">
                                    <label for="">WAREHOUSE NAME</label>
                                    <input type="text" name="name">
                                </div>
                                <div class="flexBetween billOpject">
                                    <label for="">CONTACT FOR DELIVERIES</label>
                                    <input type="text" name="contact_delviery">
                                </div>
                                <div class="flexBetween billOpject">
                                    <label for=""> Openning balance</label>
                                    <input type="number" name="oppening_balance">
                                </div>

                                @if ($errors->has('contact_delviery'))
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $errors->first('contact_delviery') }}</strong>
                                </span>
                                @endif

                                <div class="flexBetween billOpject"><label for="">ADDRESS</label><textarea
                                        name="address" rows="4"></textarea></div>
                            </div>
                            @if ($errors->has('address'))
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $errors->first('address') }}</strong>
                            </span>
                            @endif

                            <div class="billInputsRight">
                                <div class="flexBetween billOpject"><label for="">TELEPHONE NO</label><input name="tel"
                                        type="text"></div>
                                @if ($errors->has('tel'))
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $errors->first('tel') }}</strong>
                                </span>
                                @endif

                                <div class="flexBetween billOpject"><label for="">SECONDRY PHONE NUMBER</label><input
                                        name="second_tel" type="text"></div>


                                <div class="flexBetween billOpject"><label for="">Fax NO</label>
                                    <input name="fax" type="text"></div>
                                @if ($errors->has('fax'))
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $errors->first('fax') }}</strong>
                                </span>
                                @endif


                                <div class="flexBetween billOpject"><label for="">E-MAIL</label>
                                    <input name="email" type="text">
                                </div>
                                @if ($errors->has('email'))
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>

                        </div>
                    </div>

                </div><!-- LeftPart -->


                <div class="rightPart"></div>

            </div>
        </form>
                        </div>
                    </div>
                    <!-- LeftPart -->


                    <div class="rightPart"></div>

                </div>
    </section>
    <div class="hiddenAllItems"></div>
    @include('user.includes.js')
</body>

</html>
