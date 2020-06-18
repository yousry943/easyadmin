<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>JOURNAL</title>
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
                        <h2>JOURNAL</h2>
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
                <div class="add-item-btn">
                    <a href="{{url('/journal_entrie/create')}}" class="save"><span><i class="fas fa-plus-circle fs-3x"></i></span>Add New</a>
                </div>

                <div class="flexBetween inner-bagntion">
                    <div class="filter">
                        <a href="#" class="filters"><span><i class="fas fa-filter"></i></span><span>Fillter</span
                ><span><i class="fas fa-caret-down"></i></span
              ></a>
                        <a href="#" class="choose"><span><i class="fas fa-bars"></i></span><span>Choose</span
                ><span><i class="fas fa-caret-down"></i></span
              ></a>
                        <a href="#" class=""><span>Print</span><span><i class="fas fa-caret-down"></i></span
              ></a>
                        <a href="#" class="action"><span>Action</span><span><i class="fas fa-caret-down"></i></span
              ></a>

                        <div class="filterMath d-none">
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
                                         <span class="">Date</span>
                                            <span class="sorts"><i class="fas fa-sort-amount-down"></i></span>
                                        </div>
                                    </th>
                                    <th class="ellipsisOne">
                                    <div>
                                        <span class="">Refrence</span>
                                                            <span class="sorts"><i class="fas fa-sort-amount-down"></i></span
                                        >
                                    </div>
                                    </th>
                                    <th class="ellipsisTwo">
                                    <div>
                                        <span class="">Summary</span>
                                                            <span class="sorts"><i class="fas fa-sort-amount-down"></i></span
                                        >
                                    </div>
                                    </th>


                                  


                    <!-- <th class="ellipsisThree">
                      <div>
                          <span class="">Debtor</span>
                                            <span class="sorts"><i class="fas fa-sort-amount-down"></i></span
                        >
                      </div>
                    </th> -->
                    <!-- <th class="ellipsisFour">
                      <div>
                          <span class="">creadtor</span>
                                            <span class="sorts"><i class="fas fa-sort-amount-down"></i></span
                        >
                      </div>
                    </th> -->
                    <th class="ellipsisFive">
                      <div>
                        <span class="">Total</span>
                                            <span class="sorts"><i class="fas fa-sort-amount-down"></i></span>
                    </div>
                    <th class="ellipsisTwo">
                                    <div>
                                        <span class="">Currency</span>
                                                            <span class="sorts"><i class="fas fa-sort-amount-down"></i></span
                                        >
                                    </div>
                                    </th>
                    </th>
                    <th class="ellipsisSix">
                      <div>
                        <span class="">Resources</span>
                                            <span class="sorts"><i class="fas fa-sort-amount-down"></i></span
                      >
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
                                                        <span>Refrence</span>
                                                        <input type="checkbox" />
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="ellipsisTap ellipsisCheck-two">
                                                        <span>Summary</span>
                                                        <input type="checkbox" />
                                                    </div>
                                                </li>


                                                <li>
                                                    <div class="ellipsisTap ellipsisCheck-two">
                                                        <span>Currency</span>
                                                        <input type="checkbox" />
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="ellipsisTap ellipsisCheck-three">
                                                        <span>Debtor</span>
                                                        <input type="checkbox" />
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="ellipsisTap ellipsisCheck-four">
                                                        <span>creadtor</span>
                                                        <input type="checkbox" />
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="ellipsisTap ellipsisCheck-five">
                                                        <span>Total</span>
                                                        <input type="checkbox" />
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="ellipsisTap ellipsisCheck-six">
                                                        <span>Resources</span>
                                                        <input type="checkbox" />
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                  @foreach($journal_entries as $journal_entrie)
                                  <tr onclick="location.href='{{url('/journal_entrie/'.$journal_entrie->id)}}'">
                                  
                                        <td class="checkNum">
                                            <input class="" type="checkbox" id="" name="" />
                                        </td>
                                        <td> <span>{{$journal_entrie->date}}</span> </td>

                                        <td class="ellipsisOne"><span>{{$journal_entrie->refrence}}</span></td>
                                        <td class="ellipsisTwo"><span>{{$journal_entrie->summary}}</span></td>
                                        <!-- <td class="ellipsisThree">
                                          @if ($journal_entrie->Debit=='')
                                          <span><span class="depitorcredit">--</span></span>
                                            @else
                                            <span><span class="depitorcredit">{{$journal_entrie->get_chart->first()->title}}</span></span>
                                             @endif
                                        </td> -->
                                        <!-- <td class="ellipsisFour">
                                          @if ($journal_entrie->Credit=='')
                                          <span><span class="depitorcredit">--</span></span>
                                          @else
                                          <span><span class="depitorcredit">{{$journal_entrie->get_chart->first()->title}}</span>
                                          @endif
                                        </td> -->
                                        <td class="ellipsisFive"><span>{{$journal_entrie->total}}</span></td>
                                        <td class="ellipsisTwo"><span>{{@$journal_entrie->get_Currency->first()->Currency_name}}</span></td>

                                        <td class="ellipsisSix"><span>{{$journal_entrie->Resources}}</span></td>
                                        <td>
                                            <div class="item-action">
                                                <a href="{{url('/journal_entrie/edit') . '/' .$journal_entrie->id }}"><div><i class="fas fa-edit"></i><span>edit</span></div></a>
                                                <a href="{{url('/journal_entrie/delete') . '/' .$journal_entrie->id }}"><div class="itemActionRed"><i class="far fa-trash-alt">  <span>   delete</span></i></div></a>
                                            </div>
                                        </td>
                                        <td>
                                            <!-- 8-justForGrid -->
                                        </td>
                                        <td>
                                            <!-- 9-justForGrid -->
                                        </td>
                                        
                                </tr>
                                  @endforeach


                            </tbody>
                        </table>
                        <!--                                 <div class="flexCenter bagntionBTNS">
                    <div class="innerBtns flexBetweenNormal">
                      <div class="btn">Previous</div>
                      <div class="btn ">1</div>
                      <div class="btn">2</div>
                      <div class="btn">Next</div>
                    </div>
                  </div> -->
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <div class="hiddenAllItems"></div>
 @include('user.includes.js')
</body>

</html>
