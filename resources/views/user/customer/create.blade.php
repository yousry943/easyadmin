<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>CURRENCY</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    @include('user.includes.css')

</head>

<body>
  @include('user.includes.header')
   
    
   

  <section class="site-data-container accountingForm vendorForm">
        <form action="{{url('/addcustomer')}}" method="post">
           {{csrf_field()}}
            <div class="site-data-wrapper">
                <div class="data-title-search-container">
                    <div class="data-title-wrapper breadcrumb-wrapper">
                        <div class="pageName">
                            <span><a href="PUR_V_TOC.html">VENDOR /</span></a><span>NEW</span>
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
                            <div class="flexBetween billOpject w-60">
                            <input type="text" name="name" placeholder="NAME">
                        </div>
                            <div class="billinputcontainer">
                                <div class="billInputsLeft">

                                    <div class="flexBetween billOpject"><label for="">PHONE</label><input type="text" name="phone">
                                    </div>
                                    <div class="flexBetween billOpject"><label for="">OPINING BALANCE</label><input
                                            type="text" name="balance"></div>
                                    <div class="flexBetween billOpject"><label for="">EMAIL</label><input type="text" name="email">
                                    </div>
                                    <!-- <div class="flexBetween billOpject"><label for="">LANGUAGE</label><select>
                                            <option>choose language</option>
                                            <option name="" value="er">عربى</option>
                                            <option name="" value="en">english</option>
                                        </select></div> -->
                                    <div class="flexBetween billOpject"><label for="">STREET1</label><input type="text" name="address"
                                            placeholder="STREET1"></div>
                                    <div class="flexBetween billOpject"><label for="">STREET2</label><input type="text"
                                            placeholder="ADDRESS2" name="address_2"></div>
                                    <div class="flexBetween billOpject"><label for="">CITY</label><input type="text"
                                            placeholder="CITY" name="city"></div>
                                </div>
                                <div class="billInputsRight">
                                    <div class="flexBetween billOpject"><label for="">ZIP CODE</label><input type="text"
                                            placeholder="ZIP CODE" name="zipcode"></div>
                                    <div class="flexBetween billOpject payment"><label for="">STATE</label>
                                    <select name="state">
                                            <option>choose state</option>
                                            <option name="" value="us">UNITED STATES</option>
                                            <option name="" value="eng">ENGLAND</option>
                                    </select>

                                    </div>
                                    <div class="flexBetween billOpject"><label for="">COUNTRY</label>
                                    <select name="country">
                                            <option>choose country</option>
                                            <option  value="alaska">ALASKA</option>
                                            <option  value="chekago">CHEKAGO</option>
                                        </select></div>
                                    <div class="flexBetween billOpject"><label for="">TAX ID</label><input type="text"
                                            placeholder="TAX ID" name="tax_id"></div>
                                    <div class="flexBetween billOpject"><label for="">WEBSITE</label><input type="text"
                                            placeholder="WEBSITE" name="website"></div>
                                 
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