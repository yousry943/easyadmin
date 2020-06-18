<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>ITEM CATEGORY</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    @include('user.includes.css')

</head>

<body>
  @include('user.includes.header')
    
  <section class="site-data-container accountingForm">
        <form action="{{url('/addpayment')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="site-data-wrapper">
                <div class="data-title-search-container">
                    <div class="data-title-wrapper breadcrumb-wrapper">
                        <div class="pageName">
                            <span><a href="PUR_P_TOC.html">PAYMENT /</a></span><span>NEW</span>
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
                                <div class="flexBetween billOpject"><label for="">PAYMENT FOR</label><input type="text" name="purchaseOrder" value="{{$purchaseOrder->serial_number}}" disabled>
                                </div>
                                <div class="flexBetween billOpject"><label for="">date</label><input type="text" name="date" value="{{$date}}"  >
                                </div>
                                
                                <div class="flexBetween billOpject"><label for="">PAYMENT NUMBER</label><input type="text" name="payment_number"></div>
                                <div class="flexBetween billOpject"><label for="">PARTNER</label><input type="text" value="{{$purchaseOrder->vendor->name}}" disabled>
                                </div>
                                <div class="flexBetween billOpject"><label for="">PAYMENT TYPE</label><select name="payment_type">
                                        <option>choose PAYMENT TYPE</option>
                                        <option name="" value="PT1">CASH</option>
                                        <option name="" value="PT2">CHEQUE</option>
                                        <option name="" value="PT3">BANK TRANSFER</option>
                                        <option name="" value="PT4">VENDOR BALANCE</option>
                                    </select>
                                </div>
                                <div class="flexBetween billOpject"><label for="">PAYED BY</label><input type="text" name="PAYED_BY">
                                </div>
                                
                                
                                <div class="flexBetween billOpject">
                                    <input type="hidden" name="purchaseOrderid" value="{{$purchaseOrder->id}}">
                                </div>
                                <div class="flexBetween billOpject" ><input type="hidden" name="vendorid" value="{{$purchaseOrder->vendor->id}}">
                                </div>
                            </div>
                            <div class="billInputsRight">
                                <div class="flexBetween billOpject"><label for="">PAYMENT AMOUNT</label><input type="text" name="PAYMENT_AMOUNT"></div>
                                
                                
                                
                                <div class="flexBetween billOpject"><label for="">CURRENCY</label><input type="text" value="{{$purchaseOrder->Currency->Currency_name}}" disabled>
                                </div>
                                <div class="flexBetween billOpject"><label for="">PAYMENT DETAILS</label><textarea
                                        rows="4" name="payment_detail"></textarea></div>
                                <div class="flexBetween billOpject"><label for="">DELVIRY RECEIPT</label><textarea
                                        rows="4" name="DELVIRY_RECEIPT"></textarea></div>
                                <div class="flexBetween billOpject"><label for="">CHOOSE IMAGE</label>
                                <input type="file" name="image"></div>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- LeftPart -->


                <div class="rightPart"></div>

            </div>
        </form>
    </section>  
    
    
    
<div class="hiddenAllItems"></div>
@include('user.includes.js')
</body>

</html>