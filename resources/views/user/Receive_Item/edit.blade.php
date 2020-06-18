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
        <form action="{{url('updatereciveItem/'.$Receive_Item->id)}}" method="post">
        {{csrf_field()}}
       
            <div class="site-data-wrapper">
                <div class="data-title-search-container">
                    <div class="data-title-wrapper breadcrumb-wrapper">
                        <div class="pageName">
                            <span><a href="#">RECEIVE ITEM /</span></a><span>Edit</span>
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
                                
                               
                                <div class="flexBetween billOpject"><label for="">Vendor</label>
                                <select>
                                        <option>{{$Receive_Item->vendor->name}}</option>
                                        
                                    </select>
                                </div>
                                <div class="flexBetween billOpject"><label for="">OPERATION TYPE</label>
                                <select name="OPERATION_TYPE">
                                       
                                        <option  value="تسليم جزئ">تسليم جزئى</option>
                                        <option  value="تسليم بالقطعه">تسليم بالقطعه</option>
                                    </select>
                                </div>
                            </div>
                            <div class="billInputsRight">
                                <div class="flexBetween billOpject"><label for="">SCHEDUALE DATE</label>
                                <input type="text" name="SCHEDUALE_DATE"  value="{{$Receive_Item->SCHEDUALE_DATE}}"></div>
                                <div class="flexBetween billOpject"><label for="">SOURCE DOCUMENT</label>
                                <input type="text"  value="{{$Receive_Item->SOURCE_DOCUMENT}}"></div>
                                

                            </div>

                        </div>


                        <table>

                        <thead>
             <th>row number</th>
             <th>Item Name</th>
             <th>Item Quenty</th>
             <th>Item Unit</th>
                        </thead>
                        <tbody>
                            @php 

                             $counter = 0;
                             $numberRow = 1;
                            @endphp
                        @foreach($items as $item)
                        <tr>
                           <td>{{$numberRow++}}</td>
                            <td> {{$item->items[$counter]->name}} </td>
                            <td> {{$item->qnty}} </td>

                            <td> {{$item->items[$counter]->unit->measure_unite}} </td>
                        </tr>
                         
                        @endforeach
                        </tbody>
                        </table>

                     
              
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