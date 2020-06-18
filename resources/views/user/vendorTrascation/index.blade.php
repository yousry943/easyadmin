<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Vendor transactions</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
  @include('user.includes.css')
</head>

<body>

  @include('user.includes.header')

    <section class="site-data-container chartOfAccounts accountTransactionsForm">
<form action="">
        <div class="head">
            <div class="data-title-search-container flexBetween">
                <div class="data-title-wrapper breadcrumb-wrapper">
                    <div class="breadcrumb">
                        <h2>Vendor Transactions</h2>
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

                    <div class="sort">
                        <span class="nB">
                            <span><i class="fas fa-angle-left"></i></span>
                            <span><i class="fas fa-angle-right"></i></span>
                        </span>
                        <span class="pageNum"> <span>1</span>/<span>2</span> </span>
                    </div>
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

        <div class="box-data-table-wrapper">
            <table id="myTable" class="box-data-table">
                <thead>
                    <tr>
                        <th>
                                <div class="ellipsisOne">
                                   <span class="">line</span>
                                <span class="sorts"><i class="fas fa-sort-amount-up"></i></span>
                                </div>
                        </th>
                        <th>
                            <div class="ellipsisName">
                                <span class="">Date</span>
                                <span class="sorts"><i class="fas fa-sort-amount-up"></i></span>
                            </div>
                        </th>
                        <th>
                            <div class="ellipsisOne">
                                <span class="">refrence </span>
                                <span class="sorts"><i class="fas fa-sort-amount-up"></i></span>
                            </div>
                        </th>
                        <th>
                            <div class="ellipsisOne">
                                <span class="">Description </span>
                                <span class="sorts"><i class="fas fa-sort-amount-up"></i></span>
                            </div>
                        </th>
                        <th>
                            <div class="ellipsisTwo">
                                <span class="">debit</span>
                                <span class="sorts"><i class="fas fa-sort-amount-up"></i></span>
                            </div>
                        </th>
                        <th>
                            <div class="ellipsisThree">
                                <span class="">credit</span>
                                <span class="sorts"><i class="fas fa-sort-amount-up"></i></span>
                            </div>
                        </th>
                        <th>
                            <div class="ellipsisFour">
                                <span class="">total</span>
                                <span class="sorts"><i class="fas fa-sort-amount-up"></i></span>
                            </div>
                        </th>

                        <th class="ellipsis">
                            <i class="fas fa-ellipsis-v"></i>

                            <div class="ellipsisMenu">
                                <ul>

                                    <li>
                                        <div class="ellipsisTap ellipsisCheck-one">
                                            <span>Journal ID</span>
                                            <input type="checkbox" />
                                        </div>
                                    </li>

                                    <li>
                                        <div class="ellipsisTap ellipsisCheck-two">
                                            <span>debit</span>
                                            <input type="checkbox" />
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ellipsisTap ellipsisCheck-three">
                                            <span>cridet</span>
                                            <input type="checkbox" />
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="transactionRow">
                        <td class="checkNum">
                       <div></div>
                        </td>
                        <td class="ellipsisName">
                                <div class="item-action-wrapper">
                                    <span>{{$date}}</span>
                                </div>
                            </td>
                        <td></td>
                        <td class="end-open-balance" >Opening balance :</td>
                        <td class="depit-transaction">{{$vendors->balance}}</td>
                        <td class="credit-transaction">0</td>
                        <td class="total-balance">0</td>
                        <td>
                                <!--  -->
                            </td>
                    </tr>
                  

                    

                    
               @foreach($vendorTrancations as $vendorTrancation)
                    <tr class="transactionRow">
                        <a href="bal7a">
                            <td class="checkNum">
<!--                                <input class="" type="checkbox" id="" name="" />-->
                            </td>

                            <td class="ellipsisName">
                                <div class="item-action-wrapper">
                                    <span>{{$vendorTrancation->date}}</span>
                                </div>
                            </td>
                        <td> 
                            <a class="blackLink" href="{{url('/journal_entrie/'.$vendorTrancation->Journal_Id)}}">jornalID {{$vendorTrancation->Journal_Id}}</a>
                            
                            </td>
                            
                            
                            
                            <td><span class="ellipsisOne">{{$vendorTrancation->descreption}}</span></td>
                            <td><span class="ellipsisTwo depit-transaction">{{$vendorTrancation->dept}}	</span></td>
                            <td>
                                <span class="ellipsisThree credit-transaction">{{$vendorTrancation->credit}}	</span>
                            </td>
                            <td class="total-balance" id="lastTotal">
                                <span>0</span>
                            </td>
                            <td>
                                <!--  -->
                            </td>
                        </a>
                    </tr>
                    @endforeach
                    <tr class="transactionRow">
                        <td class="checkNum">
<!--                                <input class="" type="checkbox" id="" name="" />-->
                        </td>
                     <td class="ellipsisName">
                                <div class="item-action-wrapper">
                                    <span>date</span>
                                </div>
                            </td>
                        <td></td>
                        <td class="end-open-balance">ending balance :</td>
                        <td id="lastDepit" class="vendorTrans">0</td>
                        <td id="lastCredit">0</td>
                        <td id="lastTotalBalance">0</td>
                        <td>
                                <!--  -->
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </form>
    </section>
    <div class="hiddenAllItems"></div>
 @include('user.includes.js')
</body>

</html>