<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>INVENTORY LOCATION TRANSFER FORM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
  @include('user.includes.css')
</head>

<body>
@include('user.includes.header')
    <section class="site-data-container accountingForm locationForm">
    <form action="{{url('/Inventory_Location_Transfers/store')}}" method="post">
               {{csrf_field()}}
        <div class="site-data-wrapper">
            <div class="data-title-search-container">
                <div class="data-title-wrapper breadcrumb-wrapper">
                    <div class="pageName">
                        <span><a href="{{url('/Inventory_Location_Transfers')}}">INVENTORY LOCATION TRANSFER /</span></a><span>NEW</span>
                    </div>
                </div>

                
                <div class="bagntion flex">
                    <div class="add-item-btn">
                          <button type="submit" class="save">
                                Send     
                          </button>
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
                        <div class="flexBetween billOpject">
                                  <label for="">serial NO</label>
                                  <input type="text" name="Item_Code" readonly></div>
                                <div class="flexBetween billOpject">
                                  <label for="">FROM LOCATION</label>
                                  <select name="From_Location" id="item_location_id">
                                      <option> select From Location</option>
                                  @foreach($locations as $location)
                                        <option  value="{{$location->id}}" >{{$location->name}}-{{@$location->wherehous->name}}</option>
                                        @endforeach
                                  </select>
                            </div>
                            <div class="flexBetween billOpject">
                              <label for="">TO LOCATION</label>
                              <select name="To_Location">
                              <option> select To Location</option>
                              @foreach($locations as $location)
                                        <option  value="{{$location->id}}">{{$location->name}}-{{@$location->wherehous->name}}</option>
                               @endforeach
                              </select>
                        </div>
                                <div class="flexBetween billOpject">
                                  <label for="">DATE</label>
                                  <input type="text" name="Date" class="date-today">
                                </div>
                                <!-- <div class="flexBetween billOpject">
                                  <label for="">REFERENCE</label>
                                  <input type="text" name="Reference">
                                </div> -->
                                

                        </div>
                        <div class="billInputsRight">
                          

                                <div class="flexBetween billOpject">
                                  <label for="">DESCRIPTION</label>
                                  <textarea rows="4" name="Item_Description"></textarea>
                                </div>
                                <!-- <div class="flexBetween billOpject">
                                  <label for="">QUANTITY</label>
                                  <input type="text" name="Quantity">
                                </div> -->
                                <div class="flexBetween billOpject">
                                  <label for="">MEMO</label>
                                  <textarea rows="4" name="Memo"></textarea>
                                </div>
                                <!-- <div class="flexBetween billOpject">
                                  <label for="">Unit</label>
                                  <textarea rows="4" name="Unit"></textarea>
                                </div> -->

                        </div>
                     

                   </div>
                </div>

            </div><!-- LeftPart -->


            <div class="rightPart"></div>

        </div>
        <div class="addlinetable">
                            <table>
                                <thead>
                                    <tr>
                                        <th>
                                            line
                                        </th>
                                        <th>
                                            item
                                        </th>
                                        <th>
                                            Quantity
                                        </th>
                                        <th>
                                        Unit Of Measure
                                        </th>
                                        <th>
                                            description
                                        </th>
                                        <th>
                                            Price
                                        </th>
                                        <th>
                                            Action
                                        </th>
                                </thead>
                                <tbody class="bodySelection" id="itemTable">
         
         
                                </tbody>
<tfoot>
  <tr>
    <td>Total:</td>
    <td></td><td></td><td></td><td></td><td></td><td>00.0</td>
  </tr>

</tfoot>
                            </table>
                            <button type="button" class="addMoreInputsTwo">+ add line</button>
                            </form>

    </section>
    <div class="hiddenAllItems"></div>
  @include('user.includes.js')
</body>

</html>
