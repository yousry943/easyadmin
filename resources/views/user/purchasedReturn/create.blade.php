<!--
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>RECEIVE ITEM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />


    @include('user.includes.css')
</head>

<body>
@include('user.includes.header')
    

   

    <section class="site-data-container accountingForm">
        <form action="{{url('/addreciveItem')}}" method="post">
            {{csrf_field()}}
            <div class="site-data-wrapper">
                <div class="data-title-search-container">
                    <div class="data-title-wrapper breadcrumb-wrapper">
                        <div class="pageName">
                            <span><a href="PUR_RI_TOC.html">RECEIVE ITEM /</a></span><span>NEW</span>
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
-->
<!--                                <div class="flexBetween billOpject"><label for="">PARTNER</label><input type="text" value="{{$purchaseOrder->vendor->name}}" disabled>-->
<!--
                                </div>
                                <div class="flexBetween billOpject"><label for="">OPERATION TYPE</label><select name="type">
                                        <option>choose type</option>
                                        <option  value="تسليم جزئ">تسليم جزئى</option>
                                        <option  value="تسليم بالقطعه">تسليم بالقطعه</option>
                                    </select>
                                </div>
                            </div>
                            <div class="billInputsRight">
-->
                                
<!--
                                @foreach($recive_items as  $recive_item )
                                <div class="billInputs flexBetween">
                                <div class="billInputsLeft">
                                <div class="flexBetween billOpject"><label for="">item</label><input
                                       class="widthInputQ" type="text" value="{{$recive_item->items->name}}" disabled></div></div>
                                    <div class="billInputsRight">
                                    <div class="flexBetween billOpject">
                                <label for="">quantity</label>
                           <input class="widthInputQ" type="number" max="" value="" name="quanty[]" ></div></div>
                                    <input type="hidden" name="item[]" value="{{$recive_item->item_id}}" ></div>
                                 
                                @endforeach
-->
                            
                            
<!--
                      <input type="hidden" name="vendor" value="{{$purchaseOrder->vendor->id}}" >
                      <input type="hidden" name="purchaseOrder" value="{{$purchaseOrder->id}}" >
-->
                            
<!--
                            </div>

                        </div>
              
                    </div>

                </div>
                 LeftPart 


                <div class="rightPart"></div>

          
        </form>
    </section>
    <div class="hiddenAllItems"></div>
 @include('user.includes.js')
</body>

</html>-->
