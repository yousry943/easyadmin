<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>ACCOUNT SETTING FORM</title>
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
                        <span><a href="C_C_TOC.html">ACCOUNT SETTING </span></a>
                    </div>
                </div>

                <form action="{{url('company/store')}}" method="post">
{{csrf_field()}}
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
                                <div class="flexBetween billOpject"><label for="">Business Details</label><input type="text" placeholder="Business Details" name="Business_Details"></div>
                                <div class="flexBetween billOpject"><label for="">First Name</label><input type="text" name="First_Name" placeholder="First Name" ></div>
                                <div class="flexBetween billOpject"><label for="">Last Name</label><input type="text" name="Last_Name" placeholder="Last Name"></div>
                                <div class="flexBetween billOpject"><label for="">Mobile</label><input type="text" name="Mobile" placeholder="Mobile"></div>
                                <div class="flexBetween billOpject"><label for="">Telephone</label><input type="text" name="Telephone" placeholder="Telephone"></div>
                                <div class="flexBetween billOpject"><label for="">Address 1</label><input type="text" name="Address1" placeholder="Address 1"></div>
                                <div class="flexBetween billOpject"><label for="">Address 2</label><input type="text" name="Address2" placeholder="Address 2"></div>
                                <div class="flexBetween billOpject"><label for="">City</label><select name="City">
                                    <option value="">choose CITY</option>
                                    <option  value="city1">CITY1</option>
                                    <option  value="city2">CITY2</option>
                                </select>
                                </div>
                                <div class="flexBetween billOpject"><label for="">State</label><select name="State">
                                    <option value="">choose STATE</option>
                                    <option  value="STATE1">STATE1</option>
                                    <option  value="STATE2">STATE2</option>
                                </select>
                                </div>
                                <div class="flexBetween billOpject"><label for="">Postal Code</label><input type="text" name="Postal_Code" placeholder="Postal Code"></div>

                        </div>
                        <div class="billInputsRight">

                                <div class="flexBetween billOpject"><label for="">country</label><select name="country">
                                    <option value="">choose COUNTRY</option>
                                    <option  value="CUR1">COUNTRY1</option>
                                    <option  value="CUR2">COUNTRY2</option>
                                </select>
                                </div>
                                <div class="flexBetween billOpject"><label for="">C.R</label><input type="text" name="C.R" placeholder="C.R"></div>
                                <div class="flexBetween billOpject"><label for="">TAX ID</label><input type="text" name="TAX" placeholder="TAX ID"></div>
                                <div class="flexBetween billOpject"><label for="">currency</label><select name="currency">
                                    <option value="">choose CURRENCY</option>
                                    <option  value="CUR1">CURRENCY1</option>
                                    <option  value="CUR2">CURRENCY2</option>
                                </select>
                                </div>
                                <div class="flexBetween billOpject"><label for="">Time Zone</label><select name="Time_Zone">
                                    <option value="">choose TIME ZONE</option>
                                    <option  value="CUR1">ZONE1</option>
                                    <option  value="CUR2">ZONE2</option>
                                </select>
                                </div>
                                <div class="flexBetween billOpject"><label for="">Date Format</label><input type="date" name="Date" ></div>
                                <div class="flexBetween billOpject"><label for="">Language</label><select name="Language">
                                    <option value="">choose LANGUAGE</option>
                                    <option   value="CUR1">LANGUAGE1</option>
                                    <option   value="CUR2">LANGUAGE2</option>
                                </select>
                                </div>
                                <div class="flexBetween billOpject"><label for="">You Sell</label><select name="Sell">
                                    <option value="">choose ITEMS</option>
                                    <option  value="CUR1">ITEM1</option>
                                    <option   value="CUR2">ITEM2</option>
                                </select>
                                </div>
                                <div class="flexBetween billOpject"><label for="">Printing Method</label><select name="Printing">
                                    <option value="">choose METHOD</option>
                                    <option  value="CUR1">BROWSER</option>
                                    <option  value="CUR2">BROWSER</option>
                                </select>
                                </div>
<input type="text" name="user_id" value="{{\Illuminate\Support\Facades\Auth::guard('web')->user()->id}}" hidden>

                                <!-- <div class="flexBetween billOpject"><label for="">CHOOSE LOGO</label><input type="file"></div> -->

                        </div>
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
