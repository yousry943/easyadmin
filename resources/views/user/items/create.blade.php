<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>ITEM FORM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
  @include('user.includes.css')
</head>

<body>

  @include('user.includes.header')
    <section class="site-data-container accountingForm ItemForm">
        <form  action="{{url('/addItem')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
            <div class="site-data-wrapper">
                <div class="data-title-search-container">
                    <div class="data-title-wrapper breadcrumb-wrapper">
                        <div class="pageName">
                            <span><a href="INV_I_TOC.html">ITEM /</a></span><span>NEW</span>
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
                                <div class="flexBetween billOpject"><label for="">Item Code</label><input type="text" name="code">
                                    <!-- <span><i class="fas fa-caret-down"></i></span> -->
                                </div>
                                <div class="flexBetween billOpject"><label for="">Item Name</label><input type="text" name="name">
                                    <!-- <span><i class="fas fa-caret-down"></i></span> -->
                                </div>

<!--                                <div class="flexBetween billOpject"><label for="">Item barCode</label><input type="text" name="barCode">-->
                                    <!-- <span><i class="fas fa-caret-down"></i></span> -->
<!--                                </div>-->
<!--                                <div class="flexBetween billOpject"><label for="">Item barCode image</label><input type="text" name="barCode_image">-->
                                    <!-- <span><i class="fas fa-caret-down"></i></span> -->
<!--                                </div>-->
<!--                                <div class="flexBetween billOpject"><label for="">Item generate barCode</label><input type="text" name="barCode_g_image">-->
                                    <!-- <span><i class="fas fa-caret-down"></i></span> -->
<!--                                </div>-->
<!--                                <div class="flexBetween billOpject"><label for="">Item generate barCode image</label><input type="text" name="barCode_g_image">-->
                                    <!-- <span><i class="fas fa-caret-down"></i></span> -->
<!--                                </div>-->

                                <div class="flexBetween billOpject"><label for="">Status</label>
                                <select name="status_id">
                                        <option>choose status</option>
                                        <option  value="1">ON HAND</option>
                                        <option  value="2">RESERVED</option>
                                        <option  value="3">PAID</option>
                                        <option  value="4">POSTPONED</option>
                                        <option  value="5">VENDOR CREDIT NOTE</option>

                                    </select>
                                </div>
                                <div class="flexBetween billOpject"><label for="">DESCRIPTION</label><textarea
                                        rows="4" name="desc"></textarea><!-- <span><i class="fas fa-caret-down"></i></span> -->
                                </div>
                                <div class="flexBetween billOpject"><label for="">Category</label>
                                <select name="Category_id">


                                       @foreach($categorys as $catgory)
                                            <option  value="{{$catgory->id}}">{{$catgory->category_name}}</option>
                                       @endforeach

                                    </select>
                                </div>
                                <div class="flexBetween billOpject"><label for="">Item Tax Type</label>
                                <select name="Tax_id">
                                        <option>choose Tax Type</option>
                                        @foreach($taxs as $tax)
                                        <option  value="{{$tax->id}}">{{$tax->name}}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="flexBetween billOpject"><label for="">Item Type</label>
                                <select name="type">
                                        <option>choose Type</option>
                                        <option  value="1">Product </option>
                                        <option  value="2">Service</option>
                                    </select>
                                </div>

                                <div class="flexBetween billOpject"><label for="">Units Of Measure</label>
                                <select name="Units_Of_Measure_id">
                                        <option>choose unit</option>
                                        @foreach($units as $unit)
                                        <option  value="{{$unit->id}}">{{$unit->measure_unite}}</option>
                                        @endforeach

                                    </select>

                                </div>
                                <div class="flexBetween billOpject"><label for="">Serial Number</label><input
                                        type="text" name="serial_number"><!-- <span><i class="fas fa-caret-down"></i></span> -->
                                </div>
                                <div class="flexBetween billOpject"><label for="">Part Number</label><input type="text" name="part_number">
                                    <!-- <span><i class="fas fa-caret-down"></i></span> -->
                                </div>

                            </div>
                            <div class="billInputsRight">
                                <div class="flexBetween billOpject"><label for="">Default Location</label>
                                <select name="Location_id">
                                        <!-- <option  value="1" >hot area</option> -->
                                        @foreach($locations as $location)
                                        <option  value="{{$location->id}}">{{$location->name}}-{{@$location->wherehous->name}}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="flexBetween billOpject"><label for="">Opening  Price balance</label><input
                                        type="number" name="price"><!-- <span><i class="fas fa-caret-down"></i></span> -->
                                </div>
                                <div class="flexBetween billOpject"><label for="">Opening Quantity</label><input
                                        type="number" name="Quantity"><!-- <span><i class="fas fa-caret-down"></i></span> -->
                                </div>
                                

                                <!-- <div class="flexBetween billOpject payment"><label for="">Editable
                                        Description</label><input type="checkbox"> </div>
                                <div class="flexBetween billOpject payment"><label for="">Exclude From
                                        Sales</label><input type="checkbox"> </div>
                                <div class="flexBetween billOpject payment"><label for="">Exclude From
                                        Purchases</label><input type="checkbox"> </div>-->
                                <div class="flexBetween billOpject">
                                    <label for="">choose image</label>
                                    <input type="file" name="image">
                                </div>
                                <!-- <div class="flexBetween billOpject"><label for="">dimension 1</label><select>
                                        <option>choose dimension</option>
                                        <option name="" value="doone">1</option>
                                        <option name="" value="dotwo">2</option>
                                        <option name="" value="dothree">3</option>
                                        <option name="" value="dofour">4</option>
                                        <option name="" value="dofive">5</option>
                                    </select>
                                </div>
                                <div class="flexBetween billOpject"><label for="">dimension 2</label><select>
                                        <option>choose dimension</option>
                                        <option name="" value="dtone">1</option>
                                        <option name="" value="dttwo">2</option>
                                        <option name="" value="dtthree">3</option>
                                        <option name="" value="dtfour">4</option>
                                        <option name="" value="dtfive">5</option>
                                    </select>
                                </div> -->

                                <div class="flexBetween billOpject"><label for="">Currancy</label><select name="curancy">


                                        @foreach($Currencys as $Currency)
                                        <option  value="{{$Currency->id}}">{{$Currency->	Currency_name}}</option>
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
