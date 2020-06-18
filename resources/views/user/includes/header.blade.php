<section class="top-nav-container mainBgColor">
    <div class="top-nav-wrapper flexBetween">
        <div class="left-nav-wrapper flexCenter">
            <div class="landingDashboard-icon flexCenter">
                <div>
                    <a href="landingDashboard.html" target="_self">


  <img src="{{ asset('assets/erb_front/assets/images/stock-vector-business-network-vector-icon-335658944.png')}}" /></a>
                </div>
            </div>

            <div class="sub-nav-wrapper">
                <ul class="flexCenter">
                    <li>
                        <div class="main-nav-link">
                            <a href="#">Overview</a>
                        </div>
                    </li>

                    <li>
                        <div class="main-nav-link dOne">
                            <span>Accounting</span><span><i class="fas fa-caret-down"></i></span>
                        </div>
                        <div class="sub-nav-link-wrapper showOne">
                            <div class="sub-nav-link">
                                <a href="#">Chart Of Accounts</a>
                            </div>
                            <div class="sub-nav-link">
                                <a href="#">Journals Entries</a>
                            </div>
                            <div class="sub-nav-link">
                                <a href="#">General Ledger</a>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="main-nav-link dTwo">
                            <span>Purchases</span><span><i class="fas fa-caret-down"></i></span>
                        </div>
                        <div class="sub-nav-link-wrapper showTwo">
                            <div class="sub-nav-link">
                                <a href="#">Vendors</a>
                            </div>

                            <div class="sub-nav-link">
                                <a href="#">Purchase Orders</a>
                            </div>
                            <div class="sub-nav-link">
                                <a href="#">Purchases Returns </a>
                            </div>
                            <div class="sub-nav-link">
                                <a href="#">Payments</a>
                            </div>
                            <div class="sub-nav-link">
                                <a href="#">Receive Items</a>
                            </div>

                        </div>
                    </li>

                    <li>
                        <div class="main-nav-link dThree">
                            <span>Sales</span><span><i class="fas fa-caret-down"></i></span>
                        </div>
                        <div class="sub-nav-link-wrapper showThree">
                            <div class="sub-nav-link">
                                <a href="{{asset('/customer')}}">Customer</a>
                            </div>
                            <div class="sub-nav-link">
                                <a href="#">Sales Orders</a>
                            </div>
                            <div class="sub-nav-link">
                                <a href="#">Credit Notes</a>
                            </div>
                            <div class="sub-nav-link">
                                <a href="#">Receipts</a>
                            </div>
                            <div class="sub-nav-link">
                                <a href="#">Delivered Items</a>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="main-nav-link dFive">
                            <span>Inventories</span><span><i class="fas fa-caret-down"></i></span>
                        </div>
                        <div class="sub-nav-link-wrapper showFive">
                            <div class="sub-nav-link">
                                <a href="{{asset('/item')}}">Items</a>
                            </div>
                            <div class="sub-nav-link">
                                <a href="{{asset('/ItemCategory')}}">Item Categories</a>
                            </div>
                            <div class="sub-nav-link">
                                <a href="{{asset('/item_group')}}">Item Groups</a>
                            </div>
                            <div class="sub-nav-link">
                                <a href="{{asset('/unit')}}">Units of measure </a>
                            </div>
                            <div class="sub-nav-link">
                                <a href="{{asset('/wherehouse')}}">Warehouses</a>
                            </div>
                            <div class="sub-nav-link">
                                <a href="{{asset('/location')}}">Locations</a>
                            </div>
                            <div class="sub-nav-link">
                                <a href="{{asset('/Inventory_Location_Transfers')}}">Inventory Location Transfers</a>
                            </div>
                            <div class="sub-nav-link">
                                <a href="#">Inventory Count</a>
                            </div>
                            <div class="sub-nav-link">
                                <a href="#">Inventory Alerts</a>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="main-nav-link dSix">
                            <span>Configuration</span><span><i class="fas fa-caret-down"></i></span>
                        </div>
                        <div class="sub-nav-link-wrapper showSix">
                            <div class="sub-nav-link">
                                <a href="{{asset('/currency')}}">Currencies</a>
                            </div>
                            <div class="sub-nav-link">
                                <a href="C_EXR_TOC.html">Exchange Rates</a>
                            </div>
                            <div class="sub-nav-link">
                                <a href="{{asset('/taxes')}}">Taxes</a>
                            </div>
                            <div class="sub-nav-link">
                                <a href="T_TG_TOC.html">Tax Groups</a>
                            </div>
                            <!-- @if(\Illuminate\Support\Facades\Auth::guard('web')->user()->can('Owner_CompanyPolicy.view')) -->
                            <div class="sub-nav-link">
                                <a href="{{route('company')}}">ACCOUNT SETTING</a>
                            </div>

                            <div class="sub-nav-link">
                                <a href="{{route('Add_user_For_Company')}}">Add user For Company</a>
                            </div>
                              <!-- @endif -->

                        </div>
                    </li>

                    <li>
                        <div class="main-nav-link dSeven">
                            <span>Reports</span><span><i class="fas fa-caret-down"></i></span>
                        </div>
                        <div class="sub-nav-link-wrapper showSeven">
                            <div class="sub-nav-link">
                                <a href="#">Trial Balance </a>
                            </div>
                            <div class="sub-nav-link">
                                <a href="#">Income Statement</a>
                            </div>
                            <div class="sub-nav-link">
                                <a href="#">Balance Sheet</a>
                            </div>
                            <div class="sub-nav-link">
                                <a href="#">Cash Flow Statement</a>
                            </div>
                            <div class="sub-nav-link">
                                <a href="#">Profit and Loss</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="main-nav-link dEight">
                            <span> {{ trans('header.Bank') }}</span><span><i class="fas fa-caret-down"></i></span>
                        </div>
                        <div class="sub-nav-link-wrapper showEight">
                            <div class="sub-nav-link">
                                <a href="#">L/C </a>
                            </div>
                            <div class="sub-nav-link">
                                <a href="#">L/G</a>
                            </div>
                            <div class="sub-nav-link">
                                <a href="#">Loans</a>
                            </div>
                            <div class="sub-nav-link">
                                <a href="#">Checks</a>
                            </div>
                            <div class="sub-nav-link">
                                <a href="#">Form4</a>
                            </div>
                            <div class="sub-nav-link">
                                <a href="#">Transfers</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="user-section-wrapper flexCenter">
            <div class="user-data flexBetween">
                <div class="notMsg">
                    <span class="notiBtn"><i class="fas fa-bell"></i></span>
                    <span class="msgBtn"><i class="far fa-envelope"></i></span>
                </div>
                <div class="notiBox notification">
                    <ul>
                        <li>a</li>
                        <li>b</li>
                        <li>c</li>
                        <li>d</li>
                        <li>e</li>
                    </ul>
                </div>
                <div class="notiBox msgs">
                    <ul>
                        <li>1</li>
                        <li>2</li>
                        <li>3</li>
                        <li>4</li>
                        <li>5</li>
                    </ul>
                </div>

                <div class="user-img-wrap flexCenter">

                    <img src="{{ asset('assets/erb_front/assets/images/sort-down.png')}}" class="down-arrow" />
                    <span class="user-name">  {{\Illuminate\Support\Facades\Auth::guard('web')->user()->name}}</span>

                    <img class="user-img" src="{{ asset('assets/erb_front/assets/images/user.png')}}" />
                </div>
                <div class="user-setting-data">
                    <ul>
                        <li>
                            <a href="#">Documentaion</a>
                        </li>
                        <li>
                            <a href="#">Support</a>
                        </li>
                        <li>
                            <a href="{{url('/company')}}">Preferences</a>
                        </li>
                        <li class="settings-menu">
                            <span class="settings-trigger">settings <i class="fas fa-sort-down"></i></span>
                            <ul class="settings-dropdown-menu">
                                <li>
                                    <a href="#">company</a>
                                </li>
                                <li>
                                    <a href="{{url('/setup_financial_year/edit/1')}}">fiscal year</a>
                                </li>
                                <li>
                                    <a href="{{url('/Inventory_Setup/edit/1')}}">inventory</a>
                                </li>
                                <li>
                                    <a href="{{url('/Purchases_Setup/edit/1')}}">purchases</a>
                                </li>
                                <li>
                                    <a href="{{url('/Sales_Setup/edit/1')}}">sales</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{url('home/user/logout')}}">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="mobile-menu-icon flexCenter">
                <img src="assets/images/menu-icon.png" />
            </div>
        </div>
    </div>
</section>
