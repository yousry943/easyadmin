<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Chart Of Accounts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <link href="{{ asset('assets/erb_front/css/treeview.css') }}" rel="stylesheet">
 @include('user.includes.css')
</head>

<body>
 @include('user.includes.header')



    <section class="site-data-container chartOfAccounts">

        <div class="head">
            <div class="data-title-search-container flexBetween">
                <div class="data-title-wrapper breadcrumb-wrapper">
                    <div class="breadcrumb">
                        <h2>Chart Of Account</h2>
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
                    <a href="{{url('/chartOfAccounts/create')}}" class="save">
                    <span><i class="fas fa-plus-circle fs-3x"></i></span>
                    Add New

</a>
                </div>

                <div class="flexBetween inner-bagntion">
                    <div class="filter">
                        <a href="#" class="filters"><span><i
                                    class="fas fa-filter"></i></span><span>Fillter</span><span><i
                                    class="fas fa-caret-down"></i></span></a>
                        <a href="#" class="choose"><span><i class="fas fa-bars"></i></span><span>Choose</span><span><i
                                    class="fas fa-caret-down"></i></span></a>
                        <a href="#" class=""><span>Print</span><span><i class="fas fa-caret-down"></i></span></a>
                        <a href="#" class="action"><span>Action</span><span><i class="fas fa-caret-down"></i></span></a>

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

        </div>
        <div class="donate flex">
            <div class="chartName justFlex">
                <h3>Chart Of Account</h3>
            </div>
            <div class="chartTotal">
                <p class="amount"><span class="">0.00</span><span class="">LE.EG</span></p>
                <p class="case">DONATE</p>
            </div>

            <div class="chartBtn">
                <span><i class="fas fa-chart-pie"></i></span>
            </div>

            <!-- <div class="addJounal justFlex">
                <a href="#"><i class="fas fa-plus fa-lg"></i><span>New Journal</span></a>
            </div> -->

        </div>
        <div class="content flex">
            <div class="side">

                <div class="inner-side">

                  <ul id="tree1">

                      @foreach($categories as $category)


                          <li data-id="{{$category->id}}">


                               {{ $category->title }}



                              @if(count($category->childs))
                                  @include('user.chartOfAccount.manageChild',['childs' => $category->childs])
                              @endif

                          </li>

                      @endforeach

                    </ul>


                </div>
            </div>
            <div class="overview">
                <div class="overviewContainer">
<div id="loadingDiv">

<img src="{{ asset('/img/Spinner.gif')}}">
</div>
                  @foreach($allCategories as $allCategorie)

<a  class="blueLink"  href="{{url('chartOfAccounts/tree')}}/{{ $allCategorie->id }}">
                    <div class="item flexBetweenNormal justFlex">
                        <div class="flex chart-flex">
                            <div class="chart-title">
                                <i class="fas fa-folder fa-3x"></i>
                                <span>{{ $allCategorie->title }}</span>
                            </div>
<<<<<<< HEAD
                            <div class="">
                                <h5>{{ $allCategorie->title }}</h5>

                                -------------------
                                <h5>entries</h5>
{!! $allCategorie->get_jornal->sum('Debit') !!}

=======
                            
                            <div class="chart-entries">
                            <h5>entries</h5>
                                <span>{!! $allCategorie->get_jornal->sum('Debit') !!}</span>
>>>>>>> bb7289bcf1e7a134472cfd9c8fa9538686b5a406
                            </div>
                           
                         
                        </div>

                    </div><!-- Item --></a>
                    <div class="flex d-counter-container">
                            <div class="debit">
                            {{$allCategorie->amount}}
                       <a href="#">

                        <p>Debit</p>
                        <h5>
                     
                  
                        </h5>
                        </a>
                            </div>
                            <div class="debitTool">
                                <i class="fas fa-caret-down"></i>
                                
                            </div>
                            <ul class="item-action">
                                    <li>
                                        <a href="{{url('/chartOfAccounts/edit') . '/' .$category->id }}"><span><i class="fas fa-edit"></i> edit</span></a>
                                    </li>
                                    <li>
                                        <a href="{{url('/chartOfAccounts/destroy') . '/' .$category->id }}"><span class="itemActionRed"><i class="far fa-trash-alt"></i> delete</span></a>
                                    </li>
                                </ul>
<<<<<<< HEAD
                            </div>

=======
>>>>>>> 2c3da66c2e4292fb6fb22f370caf92f3456893c8
                        </div>
                @endforeach

                    </div><!-- Item -->

                   <!--  <div class="addAccount">
                        <i class="fas fa-plus-square"></i><span>Add Account</span>
                    </div> -->
                    <!--  <div class="addAccountPopUp justFlex">
                        <div class="addAccountForm">
                            <div class="closingForm"></div>
                        </div>
                    </div> -->
                </div>
            </div>


    </section>
    <script src="{{ asset('assets/erb_front/js/treeview.js') }}"></script>
 @include('user.includes.js')
</body>

</html>
