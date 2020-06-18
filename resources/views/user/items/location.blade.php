<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>ITEM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
  @include('user.includes.css')
</head>

<body>

  @include('user.includes.header')
    <section class="site-data-container">
        <div class="site-data-wrapper">
            <div class="data-title-search-container flexBetween">
                <div class="data-title-wrapper breadcrumb-wrapper">
                    <div class="breadcrumb">
                        <h2>ITEM</h2>
                    </div>
                </div>

                <div class="search-data-wrapper">
                    <form class="search-form">
                        <div class="search-input flexCenter">
                            <input id="myInput" type="text" name="accountingSearch" placeholder="Search" />
                            <img src="assets/images/search.png" class="search-icon" />
                        </div>
                    </form>
                </div>
            </div>

            <div class="flexBetween bagntion">
               

                <div class="flexBetween inner-bagntion">
                    <div class="filter">
                        <!--<a href="#" class="filters"><span><i
                                    class="fas fa-filter"></i></span><span>Fillter</span><span><i
                                    class="fas fa-caret-down"></i></span></a>-->
                        <!--<a href="#" class="choose"><span><i class="fas fa-bars"></i></span><span>Choose</span><span><i
                                    class="fas fa-caret-down"></i></span></a>-->
                        <!--<a href="#" class=""><span>Print</span><span><i class="fas fa-caret-down"></i></span></a>-->
                        <a href="#" class="action"><span>Action</span><span><i class="fas fa-caret-down"></i></span></a>

                        <!--<div class="filterMath d-none">
                            <ul>
                                <li>Export</li>
                                <li>Export 2</li>
                                <li>طباعه</li>
                                <li>Send By Email</li>
                                <li>Delete</li>
                            </ul>
                        </div>

                        <div class="chooseMath d-none">
                            <ul>
                                <li>Export</li>
                                <li>Export 2</li>
                                <li>طباعه</li>
                                <li>Send By Email</li>
                                <li>Delete</li>
                            </ul>
                        </div>-->

                        <div class="actionMath d-none">
                            <ul>
                                <li>Export</li>
                                <li>Export 2</li>
                                <li>طباعه</li>
                                <li>Send By Email</li>
                                <li>Delete</li>
                            </ul>
                        </div>
                    </div>

                    <div class="sort">
                        <span class="nB">
                            <span><i class="fas fa-angle-left"></i></span>
                            <span><i class="fas fa-angle-right"></i></span>
                        </span>
                        <span class="pageNum"> <span>1</span>/<span>2</span> </span>
                    </div>
                </div>
            </div>

            <div class="site-sections-wrapper">
                <div class="box-data-container">
                    <div class="box-data-table-wrapper">
                        <table id="myTable" class="box-data-table">
                            <thead>
                                <tr>
                                    <th>
                                        <form>
                                            <div class="form-group checkNum">
                                                <input class="" type="checkbox" id="toggle" />
                                            </div>
                                        </form>
                                    </th>
                                    <th>
                                        <div class="ellipsisName">
                                            <span class="">Item Code</span>
                                            <span class="sorts"><i class="fas fa-sort-amount-down"></i></span>
                                        </div>
                                    </th>
                                    <th data-sort="string" class="ellipsisOne">
                                        <div>
                                            <span class="">Item Name</span>
                                            <span class="sorts"><i class="fas fa-sort-amount-down"></i></span>
                                        </div>
                                    </th>
                                    <th data-sort="float" class="ellipsisTwo">
                                        <div>
                                            <span class="">Price</span>
                                            <span class="sorts"><i class="fas fa-sort-amount-down"></i></span>
                                        </div>
                                    </th>
                                    <th class="ellipsisThree">
                                        <div>
                                            <span class="">Status</span>
                                            <span class="sorts"><i class="fas fa-sort-amount-down"></i></span>
                                        </div>
                                    </th>
                                    <th class="ellipsisFour">
                                        <div>
                                            <span class="">transactions</span>
                                            <span class="sorts"><i class="fas fa-sort-amount-down"></i></span>
                                        </div>
                                    </th>
                                    <th data-sort="float" class="ellipsisFive">
                                        <div>
                                            <span class="">Ending Balance</span>
                                            <span class="sorts"><i class="fas fa-sort-amount-down"></i></span>
                                        </div>
                                    </th>

                                    <th data-sort="float" class="ellipsisSix">
                                        <div>
                                            <span class="">Barcode</span>
                                            <span class="sorts"><i class="fas fa-sort-amount-down"></i></span>
                                        </div>
                                    </th>
                                    <th><span class="ellipsisAction">Action</span></th>
                                    <th>
                                        <!-- justForGrid -->
                                    </th>

                                    <th class="ellipsis">
                                        <i class="fas fa-ellipsis-v"></i>

                                        <div class="ellipsisMenu">
                                            <ul>
                                                <li>
                                                    <div class="ellipsisTap ellipsisCheck-one">
                                                        <span>Item Name</span>
                                                        <input type="checkbox" />
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="ellipsisTap ellipsisCheck-two">
                                                        <span>Price</span>
                                                        <input type="checkbox" />
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="ellipsisTap ellipsisCheck-three">
                                                        <span>Status</span>
                                                        <input type="checkbox" />
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="ellipsisTap ellipsisCheck-four">
                                                        <span>Transactions</span>
                                                        <input type="checkbox" />
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="ellipsisTap ellipsisCheck-five">
                                                        <span>Ending Balance</span>
                                                        <input type="checkbox" />
                                                    </div>
                                                </li>




                                            </ul>
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($items as $item)
                                <tr>
                                    <a href="bal7a">
                                        <td class="checkNum">
                                            <input class="" type="checkbox" id="" name="" />
                                        </td>

                                        <td><span>{{$item->code}}</span></td>

                                        <td class="ellipsisOne"><span>{{$item->name}}</span></td>
                                        <td class="ellipsisTwo"><span>542 static</span></td>
                                        <td class="ellipsisThree">
                                            <span>On Hand <a href="#" class="ellipsisLink">view item stock</a></span>
                                        </td>

                                        <td class="ellipsisFour"><span><a href="#">0</a></span></td>
                                        <td class="ellipsisFive"><span><a href="#" class="ellipsisLink">

                                            <?php $end= $item->Opening_Balance+($item->price *$item->Quantity);
                                            echo $end;
                                            ?>

                                            </a></span></td>

                                          <td class="ellipsisSix"><span><a href="#" class="ellipsisLink"> <?php
                                                            // echo DNS1D::getBarcodeHTML("$item->code", "C39");
                                              ?> </a></span></td>



                                        <td>
                                            <div class="item-action">
                                                <div><i class="fas fa-edit"></i><a href="{{url('/editItem/'. $item->id)}}">edit</a></div>
                                                <div class="itemActionRed"><i class="far fa-trash-alt"></i><a
                                                        href="{{url('/deleteItem/'. $item->id)}}">delete</a></div>
                                            </div>
                                        </td>
                                        <td>
                                            <!-- 8-justForGrid -->
                                        </td>
                                        <td>
                                            <!-- 9-justForGrid -->
                                        </td>
                                    </a>
                                </tr>
                               @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="hiddenAllItems"></div>
    @include('user.includes.js')
