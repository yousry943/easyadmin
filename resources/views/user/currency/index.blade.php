<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>CURRENCY</title>
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
                        <h2>CURRENCY</h2>
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
                    
                    <a href="{{url('/createcurrency')}}" class="save"><span><i class="fas fa-plus-circle fs-3x"></i></span>Add New</a>
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
                                            <span class="">Abbreviation</span>
                                            <span class="sorts"><i class="fas fa-sort-amount-down"></i></span>

                                      </div>
                                      </th>
                    <th class="ellipsisOne">
                      <div>
                          <span class="">Symbol</span>
                            <span class="sorts"><i class="fas fa-sort-amount-down"></i></span
                        >
                      </div>
                    </th>
                    <th class="ellipsisTwo">
                      <div>
                          <span class="">Currency_name</span>
                            <span class="sorts"><i class="fas fa-sort-amount-down"></i></span
                        >
                      </div>
                    </th>


                    <th class="ellipsisTwo">
                      <div>
                          <span class="">Country</span>
                          <span class="sorts"><i class="fas fa-sort-amount-down"></i></span
                        >
                      </div>
                    </th>


                    <th class="ellipsisThree">
                      <div>
                          <span class="">default</span>
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
                                                        <span>Abbreviation</span>
                                                        <input type="checkbox" />
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="ellipsisTap ellipsisCheck-two">
                                                        <span>Symbol</span>
                                                        <input type="checkbox" />
                                                    </div>
                                                </li>


                                                <li>
                                                    <div class="ellipsisTap ellipsisCheck-two">
                                                        <span>Currency_name</span>
                                                        <input type="checkbox" />
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="ellipsisTap ellipsisCheck-three">
                                                        <span>Country</span>
                                                        <input type="checkbox" />
                                                    </div>
                                                </li>
                                              
                                            </ul>
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                  @foreach($currencies as $currency)
                                <tr>
                                    <a href="bal7a">
                                        <td class="checkNum">
                                            <input class="" type="checkbox" id="" name="" />
                                        </td>

                                        <td><span>{{$currency->Abbreviation}}</span></td>

                                        <td class="ellipsisOne"><span>{{$currency->Symbol}}</span></td>
                                        <td class="ellipsisTwo"><span>{{$currency->Currency_name}}</span></td>
                                        <td class="ellipsisTwo"><span>{{$currency->Country}}</span></td>
                                        @if($currency->default == 1)
                                            <td class="ellipsisSeven"><span>

                                        
                                                    <span  class="depitorcredit activecur default clickdefault"><a href="{{url('/currency/makeItDefault/'. $currency->id)}}">default currency</a>
                                                </span>
                                                </span>
                                            </td>
                                         @else

                                         <td class="ellipsisSeven"><span>                             
                                            <span  class="depitorcredit default clickdefault"><a href="{{url('/currency/makeItDefault/'. $currency->id)}}">make default</a>
                                            </span>
                                            </span>
                                            </td>

                                         @endif
                                       <td>
                                            <div class="item-action">
                                                <a href="{{url('/editcurrency') . '/' .$currency->id }}"><div><i class="fas fa-edit"></i><span>edit</span></div></a>
                                                <a href="{{url('/deletecurrency') . '/' .$currency->id }}"><div class="itemActionRed"><i class="far fa-trash-alt">  <span>   delete</span></i></div></a>
                                            </div>
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

</body>

</html>
