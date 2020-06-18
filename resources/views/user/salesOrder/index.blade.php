<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>sales ORDER</title>
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
              <h2>slaes ORDER</h2>
            </div>
          </div>

          <div class="search-data-wrapper">
            <form class="search-form">
              <div class="search-input flexCenter">
                <input
                  id="myInput"
                  type="text"
                  name="accountingSearch"
                  placeholder="Search"
                />
                <img src="assets/images/search.png" class="search-icon" />
              </div>
            </form>
          </div>
        </div>

        <div class="flexBetween bagntion">
          <div class="add-item-btn">
            <span><i class="fas fa-plus-circle fs-3x"></i></span>
            <a href="{{url('/createpurchecedOrder')}}">Add New</a>
          </div>

          <div class="flexBetween inner-bagntion">
            <div class="filter">
              <a href="#" class="filters"
                ><span><i class="fas fa-filter"></i></span><span>Fillter</span
                ><span><i class="fas fa-caret-down"></i></span
              ></a>
              <a href="#" class="choose"
                ><span><i class="fas fa-bars"></i></span><span>Choose</span
                ><span><i class="fas fa-caret-down"></i></span
              ></a>
              <a href="#" class=""
                ><span>Print</span><span><i class="fas fa-caret-down"></i></span
              ></a>
              <a href="#" class="action"
                ><span>Action</span><span><i class="fas fa-caret-down"></i></span
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
                      <div>
                          <span class="">Vendor</span>
                        <span class="sorts"
                          ><i class="fas fa-sort-amount-down"></i></span
                        >
                      </div>
                    </th>
                    <th class="ellipsisOne">
                            <div>
                                <span class="">Bill Date</span>
                              <span class="sorts"
                                ><i class="fas fa-sort-amount-down"></i></span
                              >
                            </div>
                          </th>
                   
                    <th class="ellipsisTwo">
                      <div>
                          <span class="">Number</span>
                        <span class="sorts"
                          ><i class="fas fa-sort-amount-down"></i></span
                        >
                      </div>
                    </th>
                    <th class="ellipsisThree">
                      <div>
                          <span class="">Payment Ref.</span>
                        <span class="sorts"
                          ><i class="fas fa-sort-amount-down"></i></span
                        >
                      </div>
                    </th>
                    <th class="ellipsisFour">
                      <div>
                          <span class="">Due Date</span>
                        <span class="sorts"
                          ><i class="fas fa-sort-amount-down"></i></span
                        >
                      </div>
                    </th>
                    <th class="ellipsisFive">
                      <div>
                          <span class="">Source Document</span>
                        <span class="sorts"
                          ><i class="fas fa-sort-amount-down"></i></span
                        >
                      </div>
                    </th>
                    <th class="ellipsisSix">
                      <div>
                        <span class="">Tax Excluded</span>
                      <span class="sorts"
                        ><i class="fas fa-sort-amount-down"></i></span
                      >
                    </div>
                    </th>
                    <th class="ellipsisSeven">
                      <div>
                        <span class="">Tax</span>
                      <span class="sorts"
                        ><i class="fas fa-sort-amount-down"></i></span
                      >
                    </div>
                    </th>
                    <th class="ellipsisEight">
                        <div>
                          <span class="">Total</span>
                        <span class="sorts"
                          ><i class="fas fa-sort-amount-down"></i></span
                        >
                      </div>
                      </th>
                      <th class="ellipsisNine">
                        <div>
                          <span class="">Paid</span>
                        <span class="sorts"
                          ><i class="fas fa-sort-amount-down"></i></span
                        >
                      </div>
                      </th>
                      <th class="ellipsisTen">
                        <div>
                          <span class="">To Pay</span>
                        <span class="sorts"
                          ><i class="fas fa-sort-amount-down"></i></span
                        >
                      </div>
                      </th>
                      <th class="ellipsisEleven"> 
                        <div>
                          <span class="">PO Status</span>
                        <span class="sorts"
                          ><i class="fas fa-sort-amount-down"></i></span
                        >
                      </div>
                      </th>
                      <th class="ellipsisTwelve">
                        <div>
                          <span class="">Item Status</span>
                        <span class="sorts"
                          ><i class="fas fa-sort-amount-down"></i></span
                        >
                      </div>
                      </th>
                      <th><span class="ellipsisAction">post</span></th>
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
                              <span>Bill Date</span>
                              <input type="checkbox" />
                            </div>
                          </li>
                          <li>
                            <div class="ellipsisTap ellipsisCheck-two">
                              <span>Number</span>
                              <input type="checkbox" />
                            </div>
                          </li>
                          <li>
                            <div class="ellipsisTap ellipsisCheck-three">
                              <span>Payment Ref.</span>
                              <input type="checkbox" />
                            </div>
                          </li>
                          <li>
                            <div class="ellipsisTap ellipsisCheck-four">
                              <span>Due Date</span>
                              <input type="checkbox" />
                            </div>
                          </li>
                          <li>
                            <div class="ellipsisTap ellipsisCheck-five">
                              <span>Source Document</span>
                              <input type="checkbox" />
                            </div>
                          </li>
                          <li>
                            <div class="ellipsisTap ellipsisCheck-six">
                              <span>Tax Excluded</span>
                              <input type="checkbox" />
                            </div>
                          </li>
                          <li>
                            <div class="ellipsisTap ellipsisCheck-seven">
                              <span>Tax</span>
                              <input type="checkbox" />
                            </div>
                          </li>
                          <li>
                            <div class="ellipsisTap ellipsisCheck-eight">
                              <span>Total</span>
                              <input type="checkbox" />
                            </div>
                          </li>
                          <li>
                            <div class="ellipsisTap ellipsisCheck-nine">
                              <span>Paid</span>
                              <input type="checkbox" />
                            </div>
                          </li>
                          <li>
                            <div class="ellipsisTap ellipsisCheck-ten">
                              <span>To Pay</span>
                              <input type="checkbox" />
                            </div>
                          </li>
                          <li>
                            <div class="ellipsisTap ellipsisCheck-eleven">
                              <span>PO Status</span>
                              <input type="checkbox" />
                            </div>
                          </li>
                          <li>
                            <div class="ellipsisTap ellipsisCheck-twelve">
                              <span>Items Status</span>
                              <input type="checkbox" />
                            </div>
                          </li>
                        </ul>
                      </div>
                    </th>
                  </tr>
                </thead>
                <tbody>
                @foreach($purchaseOrder as $purchaseOrder)
                    <tr>
                        <a href="bal7a">
                          <td class="checkNum">
                            <input class="" type="checkbox" id="" name="" />
                          </td>
                          <td>
                            <span>{{$purchaseOrder->vendor->name}}</span>
                          </td>
                          <td class="ellipsisOne"><span>{{$purchaseOrder->bill_date}}</span></td>
                          <td class="ellipsisTwo"><span>what is number </span></td>
    
                          <td class="ellipsisThree"><span>what is </span></td>
                          
                          <td class="ellipsisFour">
                            <span> {{$purchaseOrder->bill_due_date}}  </span>
                          </td>
                          <td class="ellipsisFive"> what is <span></td>
                          <td class="ellipsisSix"><span> what is </span></td>
                          <td class="ellipsisSeven"><span>? </span></td>
                          <td class="ellipsisEight"><span> {{$purchaseOrder->total}}</span></td>
                          <td class="ellipsisNine"><span> ? </span></td>
                          <td class="ellipsisTen"><span>? </span></td>
                          <td class="ellipsisEleven"><span> Drafat </span></td>
                          <td class="ellipsisTwelve"><span> </span></td>
                          <td class="post-dropdown-container">
                                            <span class="post-dropdown">controller</span>
                                            <div class="post-dropdown-menu">
                                            <ul>

                                            
                                            <li><a href="{{url('postinvoice/'.$purchaseOrder->id)}}">make it post</a></li>
                                                <li><a href="{{url('/paymentorder/'.$purchaseOrder->id)}}">register payment</a></li>
                                                <li><a href="#">add credit note</a></li>
                                                <li><a href="{{url('createreciveItemWithPurchase/'.$purchaseOrder->id)}}">Revice items</a></li>
                                                <li><a href="#">reset to draft</a></li>
                                            </ul>
                                            </div>
                                        </td>
                          <td>
                            <div class="item-action">
                            <a href="{{url('/editpurchecedOrder') . '/' .$purchaseOrder->id }}"><div><i class="fas fa-edit"></i><span>edit</span></div></a>
                            <a href="{{url('/deletepurchecedOrder') . '/' .$purchaseOrder->id }}"><div class="itemActionRed"><i class="far fa-trash-alt">  <span>   delete</span></i></div></a>
                            </div>
                          </td>
                          <td><!-- 8-justForGrid --></td>
                          <td><!-- 9-justForGrid --></td>
                        </a>
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