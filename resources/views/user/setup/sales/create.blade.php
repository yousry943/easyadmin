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




    <section class="site-data-container accountingForm currencyform">
      <form action="{{url('/Sales_Setup/update/1')}}" method="post">
{{csrf_field()}}
            <div class="site-data-wrapper">
                <div class="data-title-search-container">
                    <div class="data-title-wrapper breadcrumb-wrapper">
                        <div class="pageName">
                            <span>SALES SETUP</span>
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
                            <div class="billInputsLeft">

                                <div class="flexBetween billOpject">
                                    <label for="">Sales account</label>
                                    <select name="Sales_account" id="">
                                      @foreach($chartOfAccounts as $chartOfAccount)
                                           <option  value="{{$chartOfAccount->id}}">{{$chartOfAccount->title}}</option>
                                      @endforeach
                                    </select>
                                </div>

                                <div class="flexBetween billOpject">
                                    <label for="">Sales payable account</label>
                                    <select name="Sales_payable_account" id="">
                                      @foreach($chartOfAccounts as $chartOfAccount)
                                           <option  value="{{$chartOfAccount->id}}">{{$chartOfAccount->title}}</option>
                                      @endforeach
                                    </select>
                                </div>




                            </div>

                            <div class="billInputsRight">
                                <div class="flexBetween billOpject">
                                    <label for="">Sales discount account</label>
                                    <select name="Sales_discount_account" id="">
                                      @foreach($chartOfAccounts as $chartOfAccount)
                                           <option  value="{{$chartOfAccount->id}}">{{$chartOfAccount->title}}</option>
                                      @endforeach
                                    </select>
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
