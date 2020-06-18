<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Location</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
  @include('user.includes.css')
</head>

<body>

  @include('user.includes.header')
     <section class="site-data-container accountingForm vendorForm">
        <form action="{{url('/addvendor')}}" method="post">
            {{csrf_field()}}
            <div class="site-data-wrapper">
                <div class="data-title-search-container">
                    <div class="data-title-wrapper breadcrumb-wrapper">
                        <div class="pageName">
                            <span><a href="PUR_V_TOC.html">VENDOR /</a></span><span>NEW</span>
                        </div>
                    </div>


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
                            <div class="flexBetween billOpject w-60"><input type="text" placeholder="NAME" name="name"></div>
                            @if ($errors->has('name'))
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            <div class="billinputcontainer">
                                <div class="billInputsLeft">

                                    <div class="flexBetween billOpject"><label for="">PHONE</label><input type="tel" name="phone">
                                    </div>
                                    @if ($errors->has('phone'))
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                                    
                                    <div class="flexBetween billOpject"><label for="">OPINING BALANCE</label><input
                                            type="number" name="balance"></div>
                                      @if ($errors->has('balance'))
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $errors->first('balance') }}</strong>
                                    </span>
                                @endif
                                    <div class="flexBetween billOpject"><label for="">EMAIL</label><input type="email" name="email">
                                    </div>
                                    @if ($errors->has('email'))
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                    
                                    <div class="flexBetween billOpject"><label for="">STREET1</label><input type="text" name="address"></div>
                                     @if ($errors->has('address'))
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                                    <div class="flexBetween billOpject"><label for="">STREET2</label><input type="text" name="address_2"></div>
                                   
                                    
                                    
                                    <div class="flexBetween billOpject"><label for="">CITY</label><input type="text" name="city"></div>
                                       @if ($errors->has('city'))
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                                </div>
                                <div class="billInputsRight">
                                    <div class="flexBetween billOpject"><label for="">ZIP CODE</label><input type="text" name="zipcode"></div>
                                         @if ($errors->has('zipcode'))
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $errors->first('zipcode') }}</strong>
                                    </span>
                                @endif
                                    <div class="flexBetween billOpject payment"><label for="">STATE</label><select  name="state">
                                            <option>choose state</option>
                                            <option name="state" value="us">UNITED STATES</option>
                                            <option name="state" value="eng">ENGLAND</option>
                                        </select>
                                          
                                    </div> 
                                       @if ($errors->has('state'))
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $errors->first('state') }}</strong>
                                    </span>
                                @endif
                                    <div class="flexBetween billOpject"><label for="">COUNTRY</label><select  name="country">
                                            <option>choose country</option>
                                            <option value="alaska">ALASKA</option>
                                            <option name="country" value="chekago">CHEKAGO</option>
                                        </select></div>
                                      @if ($errors->has('country'))
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                                @endif
                                    <div class="flexBetween billOpject"><label for="">TAX ID</label><input type="text"
                                            placeholder="TAX ID" name="tax_id"></div>
                                     @if ($errors->has('tax_id'))
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $errors->first('tax_id') }}</strong>
                                    </span>
                                @endif
                                    <div class="flexBetween billOpject"><label for="">WEBSITE</label><input type="url" name="website" ></div>
                                     @if ($errors->has('website'))
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $errors->first('website') }}</strong>
                                    </span>
                                @endif
                                </div>
                            </div>
                        </div>
                    </div>

                </div><!-- LeftPart -->


                <div class="rightPart"></div>

            </div>
        </form>
    </section>
            <div class="hiddenAllItems"></div>
    
    
      @include('user.includes.js')
</body>

</html>
