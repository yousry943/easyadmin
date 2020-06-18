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
      <form action="{{url('/Purchases_Setup/update/1')}}" method="post">
{{csrf_field()}}
            <div class="site-data-wrapper">
                <div class="data-title-search-container">
                    <div class="data-title-wrapper breadcrumb-wrapper">
                        <div class="pageName">
                            <span>PURCHASES SETUP</span>
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
                                    <label for="">Purchases account</label>
                                    <select name="Purchases_Account" id="">
                                      @foreach($chartOfAccounts as $chartOfAccount)
                                           <option  value="{{$chartOfAccount->id}}">{{$chartOfAccount->title}}</option>
                                      @endforeach
                                    </select>
                                </div>

                                <div class="flexBetween billOpject">
                                    <label for="">Purchases payable account</label>
                                    <select name="Purchases_payable_account" id="">
                                      @foreach($chartOfAccounts as $chartOfAccount)
                                           <option  value="{{$chartOfAccount->id}}">{{$chartOfAccount->title}}</option>
                                      @endforeach
                                    </select>
                                </div>




                            </div>

                            <div class="billInputsRight">
                                <div class="flexBetween billOpject">
                                    <label for="">Purchases discount account</label>
                                    <select name="Purchases_discount_account" id="">
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
