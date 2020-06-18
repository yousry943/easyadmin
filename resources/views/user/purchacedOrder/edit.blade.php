<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>edit purshase</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
  @include('user.includes.css')
</head>

<body>

  @include('user.includes.header')
  <div class="hiddenAllItems"></div>
    


  <section class="site-data-container accountingForm locationForm">
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
           YOU MUST FILL ALL REQUIRED DATA
        </ul>
    </div>
@endif

  <form action="{{url('/updatepurchecedOrder/' . $purchaseOrder->id)}}" method="post">
     {{csrf_field()}}
            <div class="site-data-wrapper">
                <div class="data-title-search-container">
                    <div class="data-title-wrapper breadcrumb-wrapper">
                        <div class="pageName">
                            <span><a href="">PURCHASE ORDER /</a></span>w<span>NEW</span>
                        </div>
                    </div>
                      <div class="bagntion flex">
                        <div class="add-item-btn">
                            <button class="save" name="afaf" type="submit">Save</button>
                            <button class="discard" type="reset">Discard</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-sections-wrapper flex">
                <div class="leftPart">
                    <div class="post flexBetween">
                        <!-- <div class="add-item-btn postanddraft">
                         <button type="submit" name="sara"></button> 
                            <p class="posted"><span>post</span>
                                <p>
                                    <div class="drafted">
                                        <span>register payment</span>
                                        <span>add credit note</span>
                                        <span class="resetdraft">reset to draft</span>
                                    </div>
                                    <div class="draftMenu">
                                        <ul>
                                            <li>register payment</li>
                                            <li>add credit note</li>
                                            <li class="resetdraft">reset to draft</li >
                                        </ul>
                                    </div>
                        </div> -->
                        <div class="draft justFlex alignSelfStretch">
                            <div class="arrow dr">DRAFT </div>
                            <div class="pos">POSTED</div>
                        </div>
                    </div>
                    <div class="box-data-container">
                        <h1 class="">Draft Bill</h1>
                        <p>Serial number:</p><input type="number" name="serial_number" value="{{$purchaseOrder->serial_number}}" required>
                       
                        <div class="billDate"><span>BILL/2019/</span></div>
                        <div class="billInputs flexBetween">
                            <div class="billInputsLeft">
                                <div class="flexBetween billOpject"><label for="">VENDOR</label>
                                <select name="vendor_id" required>
                                <option  value="{{$vendorOrder->id}}">{{$vendorOrder->name}}</option> 
                                        @foreach($vendors as $vendor )
                                        <option value=""></option>
                                        <option  value="{{$vendor->id}}">{{$vendor->name}}</option>
                                       
                                        @endforeach
                                    </select>

                                </div>
                                
                                <div class="flexBetween billOpject">
                                    <label for="">VENDOR REFRENCE</label>
                                    <input type="text" name="vendor_referance" value="{{$purchaseOrder->vendor_referance}}" required>
                                </div>
                                
                                <div class="flexBetween billOpject">
                                    <label for="">AUTO COMPLETE</label><select>
                                        <option name="" value="A">A</option>
                                        <option name="" value="B">B</option>
                                    </select>
                                </div>
                                
                                <div class="flexBetween billOpject">
                                <label for="">BANK ACCOUNT</label><select>
                                        <option>choose account</option>
                                        <option name="" value="A">A</option>
                                        <option name="" value="B">B</option>
                                    </select>
                                </div>
                               
                            </div>
                            <div class="billInputsRight">
                                <div class="flexBetween billOpject"><label for="">BILL DATES</label>
                                   <input type="date" name="bill_date" value="{{$purchaseOrder->bill_date}}" required>
                                </div>
                               
                                <div class="flexBetween billOpject">
                                <label for="">DUE DATES</label>
                                   <input type="date" name="bill_due_date" value="{{$purchaseOrder->bill_due_date}}" required>
                                </div>
                               
                                <div class="flexBetween billOpject">
                                <label for="">CURRENCY</label>
                                <select name="currency_id" required>
                                  <option  value="{{$CurrencyOrder->id}}"> {{$CurrencyOrder->Currency_name}}</option>  
                                       @foreach($Currencys as $Currency )
                               
                                        <option  value="{{$Currency->id}}">{{$Currency->Currency_name}}</option>
                                        
                                        @endforeach
                                    </select>
                                  
                                    
                                </div>
                              
                            </div>

                        </div>
                        <div class="addlinetable">
                            <table>
                                <thead>
                                    <tr>
                                        <th>
                                            Item
                                        </th>
                                        <th>
                                            Description
                                        </th>
                                        <th>
                                            Quantity
                                        </th>
                                        <th>
                                            Unit Price
                                        </th>
                                        <th>
                                            Price
                                        </th>
                                        <th>
                                            Tax
                                        </th>
                                        <!-- <th>
                                            Unit Of Measure
                                        </th> -->
                                        <th>
                                            Action
                                        </th>
                                </thead>
                                <tbody class="bodySelection">
                                 
                                  @foreach($OrderDetails as $OrderDetail)  
                                    <tr class="items accounts">
				                   <td>
					             <select name="item_id[]" required>
                                     
                                @foreach($items as $item)
						        <option value="{{$item->id}}">
							      {{$item->name}}
						        </option>
					            @endforeach
					         </select>
				            </td>
                <td><input type="text" name="desc[]" value="{{$OrderDetail->desc}}" required></td>
                   

				<td><input type="text" name="qnty[]"  class="quantity" placeholder="0" value="{{$OrderDetail->qnty}}" required></td>
				<td><input type="text" name="unit_price[]" id="unitPrice" class="unitPrice" placeholder="0.00" value="{{$OrderDetail->unit_price}}" required>
                <td><input type="text" name="price_item[]"  id="price" class="price" placeholder="0.00" value="{{$OrderDetail->price_item}}" required>
             
				<td class="tax-con">
					<select class="tax" name="tax_id[]" required>
                    @foreach($taxs as $tax)
					<option value="{{$tax->id}}">
						{{$tax->name}}
					</option>
					@endforeach
					</select>
				</td>
				
            <td>
                <button type="button" class="deleteAccountRow d-none"><i class="fas fa-trash-alt"></i></button></td>
            </tr>
                                    @endforeach
         
                                </tbody>
                            </table>
                            <button type="button" class="addMoreInputs">+ add line</button>
                            <div class="totals">
                                <div id="totalcon" class="totalcon">
                                    <div id="untaxedamount">
                                        <span class="total-name">
                                            Untaxed Amount:
                                        </span>

                                        <span class="total-value">
                                            <span class="currency">
                                                $
                                            </span>
                                            <span id="untaxedvalue">
                                                0.00
                                            </span>
                                            </span>
                                    </div>
                                    <div id="taxes">
                                        <span class="total-name">
                                            Taxes:
                                        </span>

                                        <span class="total-value">
                                            <span class="currency">
                                                $
                                            </span>
                                            <span class="value" id="taxesvalue">
                                                0.00
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                <div id="final-total" class="final-total">
                                    <span class="total-name">
                                        Total:
                                    </span>
                                    <span class="total-value">
                                        <span class="currency">
                                            $
                                        </span>
                                        <span class="finalTotalValue">
                                            0.00
                                        </span>
                                        <input name="total" type="hidden" id="getTotal">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- LeftPart -->


                <div class="rightPart"></div>

            </div>
        </form>

  </section>









    
    @include('user.includes.js')
</body>

</html>