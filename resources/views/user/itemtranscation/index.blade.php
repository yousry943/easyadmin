<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>item transactions</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    @include('user.includes.css')
</head>

<body>

    @include('user.includes.header')

    <section class="site-data-container chartOfAccounts accountTransactionsForm">
        <div class="head">
            <div class="data-title-search-container flexBetween">
                <div class="data-title-wrapper breadcrumb-wrapper">
                    <div class="breadcrumb">
                        <h2>inventory / item transactions</h2>
                    </div>
                </div>

                <div class="search-data-wrapper">
                    <div class="search-form">
                        <div class="search-input flexCenter">
                            <input id="myInput" type="text" name="accountingSearch" placeholder="Search" />
                            <img src="assets/images/search.png" class="search-icon" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="flexBetween bagntion">
                <div class="">
                    <!-- <span><i class="fas fa-plus-circle fs-3x"></i></span>
                    <a href="departmentsForm.html">Add New</a> -->
                </div>

                <div class="flexBetween inner-bagntion">
                    <div class="filter">
                        <!--<a href="#" class="choose"><span><i class="fas fa-bars"></i></span><span>Choose</span><span><i
                                    class="fas fa-caret-down"></i></span></a>-->
                        <!--<a href="#" class=""><span>Print</span><span><i class="fas fa-caret-down"></i></span></a>-->
                        <a href="#" class="action"><span>Action</span><span><i class="fas fa-caret-down"></i></span></a>

                        <div class="chooseMath d-none">
                            <ul>
                                <li>Export</li>
                                <li>Export 2</li>
                                <li>طباعه</li>
                                <li>Send By Email</li>
                                <li>Delete</li>
                            </ul>
                        </div>

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

                    <!-- <div class="sort">
                        <span class="nB">
                            <span><i class="fas fa-angle-left"></i></span>
                            <span><i class="fas fa-angle-right"></i></span>
                        </span>
                        <span class="pageNum"> <span>1</span>/<span>2</span> </span> 
                    </div> -->
                </div>
            </div>

        </div>
        <div class="content">

            <div class="ACC-T-F">
                <div class="flexBetweenNormal">
                    <div class="requ">
                        <label for="">Date Range:</label>
                        <input type="text" name="" id="" value="" class="dateMenu">
                        <div class="dateRangeTol">

                            <ul>
                                <li class="lastWeek">last week</li>
                                <li class="lastMonth">last month</li>
                                <li class="MonthToDate">Month to date</li>
                                <li class="lastYear">last year</li>
                                <li class="YearToDate">year to date</li>
                            </ul>

                            <ol>
                                <li class="flexBetween flexCenter">
                                    <input type="date" class="rangeDate" placeholder="">
                                    <p>Date Range </p>
                                    <span><i class="fas fa-caret-down"></i></span>
                                </li>
                                <li class="flexBetween flexCenter">
                                    <input type="date" class="specificDate" placeholder="">
                                    <p>Specific Date </p>
                                    <span><i class="fas fa-caret-down"></i></span>
                                </li>
                                <li class="flexBetween flexCenter">
                                    <input type="date" class="allDatesBefore" placeholder="">
                                    <input type="date" class="d-none defDatesBefore" placeholder="">
                                    <p>All Dates Before</p>
                                    <span><i class="fas fa-caret-down"></i></span>
                                </li>
                                <li class="flexBetween flexCenter">
                                    <input type="date" class="allDatesAfter" placeholder="">
                                    <input type="date" class="d-none defDatesAfter" placeholder="">
                                    <p>All Dates After</p>
                                    <span><i class="fas fa-caret-down"></i></span>
                                </li>
                            </ol>

                        </div>
                    </div>

                    <!-- <div class="requ">
                        <label for="">Account Type:</label>
                        <select name="" id="">
                            <option value="">Main Account</option>
                            <option value="">Sub Account</option>
                        </select>
                    </div>
                    <div class="requ">
                        <label for="">Main Account:</label>
                        <select name="" id="">
                            <option value="">Please Select</option>
                            <option value="">Sub Account</option>
                        </select>
                    </div> -->
                    <div class="requ">
                        <label for="">Added By:</label>
                        <select name="" id="" class="searchSelect">
                            <option value="">All</option>
                            <option value="">Sub Account</option>
                        </select>
                    </div>
                    <div class="ACC-BTNS">
                        <div class="">
                            <button type="reset">Reset</button>
                            <button type="submit">Show Report</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- <div class="contentOverView content flexCenter">
            <div class="">
                <div class="">
                    <h2>Account Transactions</h2>
                </div>
                <div class="dateRangeNum">from <span class="startDate"> 11/12/2019</span> to <span> 18/12/2019</span>
                </div>
                <div>Currency:<span class="">All (Separated)</span></div>
            </div>
        </div> -->

        <div class="box-data-table-wrapper viewItemStock">
            <table id="myTable" class="box-data-table">
                <thead>
                    <tr>
                        <th>
                            <div class="form-group checkNum">
                                <span class="ellipsisName">
                                    line
                                </span>
                                <span class="sorts"><i class="fas fa-sort-amount-up"></i></span>
                            </div>
                        </th>

                        <th>
                            <div class="ellipsisOne">
                                <span class="">date</span>
                                <span class="sorts"><i class="fas fa-sort-amount-up"></i></span>
                            </div>
                        </th>
                        <th>
                            <div class="ellipsisTwo">
                                <span class="">refrence</span>
                                <span class="sorts"><i class="fas fa-sort-amount-up"></i></span>
                            </div>
                        </th>
                        <th>
                            <div class="ellipsisThree">
                                <span class="">description</span>
                                <span class="sorts"><i class="fas fa-sort-amount-up"></i></span>
                            </div>
                        </th>
                        <th>
                            <div class="ellipsisFour">
                                <span class="">depit </span>
                                <span class="sorts"><i class="fas fa-sort-amount-up"></i></span>
                            </div>
                        </th>
                        <th>
                            <div class="ellipsisFive">
                                <span class="">credit </span>
                                <span class="sorts"><i class="fas fa-sort-amount-up"></i></span>
                            </div>
                        </th>
                        <th>
                            <div class="ellipsisSix">
                                <span class="">balance </span>
                                <span class="sorts"><i class="fas fa-sort-amount-up"></i></span>
                            </div>
                        </th>
                        <th>
                            <div class="ellipsisSeven">
                                <span class="">expenses per item</span>
                                <span class="sorts"><i class="fas fa-sort-amount-up"></i></span>
                            </div>
                        </th>
                        <th>
                            <div class="ellipsisEight">
                                <span class="">price after expenses</span>
                                <span class="sorts"><i class="fas fa-sort-amount-up"></i></span>
                            </div>
                        </th>
                        <th class="ellipsis">
                            <i class="fas fa-ellipsis-v"></i>

                            <div class="ellipsisMenu">
                                <ul>

                                    <li>
                                        <div class="ellipsisTap ellipsisCheck-one">
                                            <span>date</span>
                                            <input type="checkbox" />
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ellipsisTap ellipsisCheck-two">
                                            <span>refrence</span>
                                            <input type="checkbox" />
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ellipsisTap ellipsisCheck-three">
                                            <span>description</span>
                                            <input type="checkbox" />
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ellipsisTap ellipsisCheck-four">
                                            <span>depit</span>
                                            <input type="checkbox" />
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ellipsisTap ellipsisCheck-five">
                                            <span>credit</span>
                                            <input type="checkbox" />
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ellipsisTap ellipsisCheck-six">
                                            <span>balance</span>
                                            <input type="checkbox" />
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ellipsisTap ellipsisCheck-seven">
                                            <span>expenses per item</span>
                                            <input type="checkbox" />
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ellipsisTap ellipsisCheck-eight">
                                            <span>price after expenses</span>
                                            <input type="checkbox" />
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="viewItemStockRow">
                        <td class="ellipsisName">
                            <span>1</span>
                        </td>
                        <td class="ellipsisOne">10/10/2019</td>
                        <td class="ellipsisTwo">1120</td>
                        <td class="ellipsisThree">opening balance</td>
                        <td class="ellipsisFour">
                            <span class="depitAddQuantity">0</span>
                            <span class="depitAddPrice">0</span>
                        </td>
                        <td class="ellipsisFive">
                            <span class="creditAddQuantity">0</span>
                            <span class="creditAddPrice">0</span>
                        </td>
                        <td class="ellipsisSix">
                            <div class="item-action-wrapper">
                                <span class="balanceQuantity">{{$items->Quantity}}</span>

                                <span class="balancePrice"> {{$items->price}} </span>

                                <span>egp</span> </div>
                        </td>
                        <td class="ellipsisSeven">
                            <span class="expenses">0</span>
                        </td>
                        <td class="ellipsisEight">
                            <span class="balanceQuantityAfterExpenses">0</span>
                            <span class="balancePriceAfterExpenses">0</span>
                        </td>

                        <td>
                            <!--  -->
                        </td>
                    </tr>

                    @foreach($itemTranscation as $itemTranscations)
                    <tr class="viewItemStockRow">
                        <td class="ellipsisName">
                            <span>1</span>
                        </td>
                        <td class="ellipsisOne">{{$itemTranscations->date}}</td>
                        <td class="ellipsisTwo">jornalID {{$itemTranscations->Journal_Id}}</td>
                        <td class="ellipsisThree">{{$itemTranscations->descreption}}</td>
                        <td class="ellipsisFour">
                            <span class="depitAddQuantity">{{$itemTranscations->deptquantity}}</span>

                            <span class="depitAddPrice"> {{$itemTranscations->deptprice}}</span>

                            <span>egp</span> </td>
                        <td class="ellipsisFive">
                            <span class="creditAddQuantity">{{$itemTranscations->creditquantity}}</span>

                            <span class="creditAddPrice">{{$itemTranscations->creditprice}}</span>

                            <span>egp</span> </td>
                        <td class="ellipsisSix">
                            <div class="item-action-wrapper">
                                <span class="balanceQuantity">0</span>

                                <span class="balancePrice"> 0 </span>

                                <span>egp</span> </div>
                        </td>
                        <td class="ellipsisSeven">
                            <span class="expenses">10</span>
                        </td>
                        <td class="ellipsisEight">
                            <span class="balanceQuantityAfterExpenses">0</span>
                            <span class="balancePriceAfterExpenses">0</span>
                        </td>

                        <td>
                            <!--  -->
                        </td>
                    </tr>

                    @endforeach
                    <tr class="viewItemStockRow">
                        <td class="ellipsisName">
                            <span>1</span>
                        </td>
                        <td class="ellipsisOne">10/10/2019</td>
                        <td class="ellipsisTwo">1120</td>
                        <td class="ellipsisThree">ending balance</td>
                        <td class="ellipsisFour">
                            <span class="depitAddQuantity">0</span>

                            <span class="depitAddPrice"> 0</span>

                            <span>egp</span> </td>
                        <td class="ellipsisFive">
                            <span class="creditAddQuantity">0</span>

                            <span class="creditAddPrice">0</span>

                            <span>egp</span> </td>
                        <td class="ellipsisSix">
                            <div class="item-action-wrapper">
                                <span class="balanceQuantity endingBalanceItemQ">0</span>

                                <span class="balancePrice endingBalanceItemP"> 0 </span>
                                <span>egp</span>
                            </div>
                        </td>
                        <td class="ellipsisSeven">
                            <span class="expenses">0</span>
                        </td>
                        <td class="ellipsisEight">
                            <span class="balanceQuantityAfterExpenses">0</span>
                            <span class="balancePriceAfterExpenses">0</span>
                        </td>

                        <td>
                            <!--  -->
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="totals">
            <div>
                <span>quantity:</span>
                <span class="finalQuantity">0</span>
            </div>
            <div>
                <span>price:</span>
                <span class="finalPrice">0</span>
                <span>egp</span>
            </div>
            <hr>
            <div>
                <span>total:</span>
                <span class="finalTotal">0</span>
                <span>egp</span>
            </div>
        </div>
    </section>
    <div class="hiddenAllItems"></div>
    @include('user.includes.js')
</body>

</html>