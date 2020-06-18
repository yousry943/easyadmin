<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>INVENTORY LOCATION TRANSFER update</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
  @include('user.includes.css')
</head>

<body>
@include('user.includes.header')
    <section class="site-data-container accountingForm locationForm">
    <form action="{{url('/Inventory_Location_Transfers/update/'.$id)}}" method="post">

               {{csrf_field()}}
        <div class="site-data-wrapper">
            <div class="data-title-search-container">
                <div class="data-title-wrapper breadcrumb-wrapper">
                    <div class="pageName">
                        <span><a href="{{url('/Inventory_Location_Transfers/store')}}">INVENTORY LOCATION TRANSFER /</span></a><span>NEW</span>
                    </div>
                </div>


                  
                <div class="bagntion flex">
                    <div class="add-item-btn">
                          <button type="submit" class="save">
                                Send      </button>
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
                                  <label for="">FROM LOCATION</label>
                                  <select name="From_Location">
                                    @foreach($locations as $location)
                                    <option value="{{$Inventory_Location_Transfers->first()->get_From_Location()->first()->id}}">{{$Inventory_Location_Transfers->first()->get_From_Location()->first()->name}}</option>

                                    <option value="{{$location->id}}">{{$location->name}}</option>
                                    @endforeach
                                  </select>
                            </div>
                            <div class="flexBetween billOpject">
                              <label for="">TO LOCATION</label>

                              <select name="To_Location">

                                @foreach($locations as $location)

<option value="{{$Inventory_Location_Transfers->first()->get_To_Location()->first()->id}}">{{$Inventory_Location_Transfers->first()->get_To_Location()->first()->name}}</option>
                                <option value="{{$location->id}}">{{$location->name}}</option>
                                @endforeach
                              </select>
                        </div>
                                <div class="flexBetween billOpject">
                                  <label for="">DATE</label>
                                  <input type="text" name="Date" class="date-today" value="{{$Inventory_Location_Transfers->first()->Date}}">
                                </div>
                                <!-- <div class="flexBetween billOpject">
                                  <label for="">REFERENCE</label> -->
                                  <input hidden type="text" name="Reference" value="{{$Inventory_Location_Transfers->first()->Reference}}">
                                <!-- </div> -->
                                <div class="flexBetween billOpject">
                                  <label for="">ITEM CODE</label>
                                  <input type="text" name="Item_Code" value="{{$Inventory_Location_Transfers->first()->Item_Code}}"></div>

                        </div>
                        <div class="billInputsRight">

                                <div class="flexBetween billOpject">
                                  <label for="">ITEM DESCRIPTION</label>
                                  <textarea rows="4" name="Item_Description">{{$Inventory_Location_Transfers->first()->Item_Description}}</textarea>
                                </div>
                                <div class="flexBetween billOpject">
                                  <label for="">QUANTITY</label>
                                  <input type="text" name="Quantity" value="{{$Inventory_Location_Transfers->first()->Quantity}}">
                                </div>
                                <div class="flexBetween billOpject">
                                  <label for="">MEMO</label>
                                  <textarea rows="4" name="Memo">{{$Inventory_Location_Transfers->first()->Memo}}</textarea>
                                </div>
                                <div class="flexBetween billOpject">
                                  <label for="">Unit</label>
                                  <textarea rows="4" name="Unit">{{$Inventory_Location_Transfers->first()->Unit}}</textarea>
                                </div>

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
                                            description
                                        </th>
                                        <!-- <th>
                                            Unit Of Measure
                                        </th> -->
                                        <th>
                                            Action
                                        </th>
                                </thead>
                                <tbody class="bodySelection">
          <tr class="items accounts">
          <td><input type="text" name=""></td>
				<td>
					<select name="" class="searchSelect">
						<option value="">
							two
						</option>
					</select>
        </td>
        <td><input type="text" name=""  class="quantity" placeholder="0"></td>
                <td><input type="text" name=""></td>
				<!-- <td>
				<select name="tax_id">
					<option>
						choose unit of measure
                    </option>
                  
				</select>
			</td> -->
            <td>
                <button type="button" class="deleteAccountRow d-none"><i class="fas fa-trash-alt"></i></button></td>
            </tr>
         
                                </tbody>
                            </table>
                            <button type="button" class="addMoreInputsTwo">+ add line</button>
                            </form>
    </section>
    <div class="hiddenAllItems"></div>
  @include('user.includes.js')
</body>

</html>
