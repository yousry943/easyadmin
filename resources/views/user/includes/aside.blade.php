<aside class="main-sidebar">


    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('assets/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{\Illuminate\Support\Facades\Auth::guard('web')->user()->fname}}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">


            <!--    <a href="#">-->
            <!--        <i class="fa fa-language"></i>-->
            <!--        <span>{{__('messages.adminLang')}}</span>-->
            <!--        <span class="pull-right-container">-->
            <!--</span>-->
            <!--    </a>-->
                <!--<ul class="treeview-menu">-->
                <!--    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)-->
                <!--        <li>-->
                <!--             <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">-->
                <!--                 <i class="fa fa-circle-o"></i>      {{ $properties['native'] }}-->
                <!--             </a>-->
                <!--        </li>-->
                <!--        @endforeach-->
                <!--</ul>-->
            </li>

            <!--<li class="">-->
            <!--    <a href="{{url(  LaravelLocalization::setLocale().'/admin')}}">-->
            <!--        <i class="fa fa-dashboard"></i> <span> {{__('messages.title')}} </span>-->
            <!--    </a>-->
            <!--</li>-->

            <!--<li class="">-->
            <!--    <a href="{{url( LaravelLocalization::setLocale().'/admin/users')}}">-->
            <!--        <i class="fa fa-plane"></i> <span>{{__('messages.users')}}</span>-->
            <!--    </a>-->
            <!--</li>-->

            <!--<li class="treeview">-->
            <!--    <a href="{{url( LaravelLocalization::setLocale().'/admin/manager')}}">-->
            <!--        <i class="fa fa-language"></i>-->
            <!--        <span>المدفوعات</span>-->
            <!--        <span class="pull-right-container">-->
            <!--</span>-->
            <!--    </a>-->
            <!--    <ul class="treeview-menu">-->
            <!--            <li>-->
            <!--                <a rel="alternate" href="{{url( LaravelLocalization::setLocale().'/admin/manager')}}">-->
            <!--                    <i class="fa fa-circle-o"></i> طباعة فواتير-->
            <!--                </a>-->
            <!--            </li>-->
            <!--        <li>-->
            <!--            <a rel="alternate" href="{{url( LaravelLocalization::setLocale().'/admin/manager')}}">-->
            <!--                <i class="fa fa-circle-o"></i>طباعة تقارير-->
            <!--            </a>-->
            <!--        </li>-->
            <!--    </ul>-->
            <!--</li>-->




                        <li class="treeview">
                <a href="{{url( LaravelLocalization::setLocale().'/admin/manager')}}">
                    <i class="fa fa-language"></i>
                    <span>حضور</span>
                    <span class="pull-right-container">
            </span>
                </a>
                <ul class="treeview-menu">

                    <li>
                        <a rel="alternate" href="{{url( LaravelLocalization::setLocale().'home/attande/show')}}">
                            <i class="fa fa-circle-o"></i> حضور طلاب
                        </a>
                    </li>
                </ul>
            </li>


       <li class="treeview">
                <a href="{{url( LaravelLocalization::setLocale().'home/admin/manager')}}">
                    <i class="fa fa-language"></i>
                    <span>الفواتير</span>
                    <span class="pull-right-container">
            </span>
                </a>
                <ul class="treeview-menu">

                    <li>
                        <a rel="alternate" href="{{url( LaravelLocalization::setLocale().'home/invoice/show')}}">
                            <i class="fa fa-circle-o"></i> اظهار الفواتير
                        </a>
                    </li>
                </ul>
            </li>

  <li class="treeview">
                <a href="{{url( LaravelLocalization::setLocale().'/admin/manager')}}">
                    <i class="fa fa-language"></i>
                    <span>الامتحنات</span>
                    <span class="pull-right-container">
            </span>
                </a>
                <ul class="treeview-menu">

                    <li>
                        <a rel="alternate" href="{{url( LaravelLocalization::setLocale().'home/invoice/show')}}">
                            <i class="fa fa-circle-o"></i>  اجراء الامتحنات
                        </a>
                    </li>
                </ul>

                   <ul class="treeview-menu">

                     <li>
                         <a rel="alternate" href="{{url( LaravelLocalization::setLocale().'home/invoice/show')}}">
                             <i class="fa fa-circle-o"></i>  نتيجه  الامتحنات
                         </a>
                     </li>
                 </ul>


            </li>





                        <!-- <li class="treeview">
                <a href="{{url( LaravelLocalization::setLocale().'/admin/manager')}}">
                    <i class="fa fa-language"></i>
                    <span>المدرسين</span>
                    <span class="pull-right-container">
            </span>
                </a>
                <ul class="treeview-menu">
                        <li>
                            <a rel="alternate" href="{{url( LaravelLocalization::setLocale().'/admin/teacher/add')}}">
                                <i class="fa fa-circle-o"></i>  اضافه مدرسين
                            </a>
                        </li>
                    <li>
                        <a rel="alternate" href="{{url( LaravelLocalization::setLocale().'/admin/teacher/show')}}">
                            <i class="fa fa-circle-o"></i> اظهار مدرسين
                        </a>
                    </li>
                </ul>
            </li> -->



           <!-- <li class="treeview">
                <a href="{{url( LaravelLocalization::setLocale().'/admin/manager')}}">
                    <i class="fa fa-language"></i>
                    <span>الموظفين</span>
                    <span class="pull-right-container">
            </span>
                </a>
                <ul class="treeview-menu">
                        <li>
                            <a rel="alternate" href="{{url( LaravelLocalization::setLocale().'/admin/employee/add')}}">
                                <i class="fa fa-circle-o"></i>  اضافه موظف
                            </a>
                        </li>
                    <li>
                        <a rel="alternate" href="{{url( LaravelLocalization::setLocale().'/admin/employee/show')}}">
                            <i class="fa fa-circle-o"></i> اظهار موظف
                        </a>
                    </li>
                </ul>
            </li>
             -->

            <!-- <li class="treeview">
                <a href="{{url( LaravelLocalization::setLocale().'/admin/class')}}">
                    <i class="fa fa-language"></i>
                    <span>السنه الدراسيه </span>
                    <span class="pull-right-container">
            </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a rel="alternate" href="{{url( LaravelLocalization::setLocale().'/admin/education')}}">
                            <i class="fa fa-circle-o"></i> المراحل الدراسية
                        </a>
                    </li>
                    <li>
                        <a rel="alternate" href="{{url( LaravelLocalization::setLocale().'/admin/class')}}">
                            <i class="fa fa-circle-o"></i> السنين الدراسية
                        </a>
                    </li>
                    <li>
                        <a rel="alternate" href="{{url( LaravelLocalization::setLocale().'/admin/subject')}}">
                            <i class="fa fa-circle-o"></i> المواد الدراسية
                        </a>
                    </li>
                </ul>
            </li> -->

            <!-- <li class="treeview">
                <a href="{{url( LaravelLocalization::setLocale().'/admin/group')}}">
                    <i class="fa fa-language"></i>
                    <span>المجموعات</span>
                    <span class="pull-right-container">
            </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a rel="alternate" href="{{url( LaravelLocalization::setLocale().'/admin/group/create')}}">
                            <i class="fa fa-circle-o"></i>  اضافه مجموعة
                        </a>
                    </li>
                    <li>
                        <a rel="alternate" href="{{url( LaravelLocalization::setLocale().'/admin/group')}}">
                            <i class="fa fa-circle-o"></i> اظهار المجموعات
                        </a>
                    </li>
                </ul>
            </li> -->

            <!-- <li class="treeview">
                <a href="{{url(LaravelLocalization::setLocale().'admin/attendance-student/create')}}">
                    <i class="fa fa-language"></i>
                    <span>الحضور</span>
                    <span class="pull-right-container">
            </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a rel="alternate" href="{{url(LaravelLocalization::setLocale().'admin/attendance-student')}}">
                            <i class="fa fa-circle-o"></i> عرض حضور الطلاب
                        </a>
                    </li>
                    <li>
                        <a rel="alternate" href="{{url(LaravelLocalization::setLocale().'admin/attendance-student/create')}}">
                            <i class="fa fa-circle-o"></i> تسجيل الحضور
                        </a>
                    </li>
                </ul>
            </li> -->
            <!--<li class="">-->
            <!--    <a href="{{url( LaravelLocalization::setLocale().'/admin/slider')}}">-->
            <!--        <i class="fa fa-plane"></i> <span>الحضور</span>-->
            <!--    </a>-->
            <!--</li>-->
            <!--<li class="">-->
            <!--    <a href="#">-->
            <!--        <i class="fa fa-folder-open"></i> <span>المجاميع</span>-->
            <!--    </a>-->
            <!--</li>-->

            <!--<li class="">-->
            <!--    <a href="#">-->
            <!--        <i class="fa fa-folder-open"></i> <span>الاجندة الالكترونية</span>-->
            <!--    </a>-->
            <!--</li>-->
            <!--<li class="">-->
            <!--    <a href="#">-->
            <!--        <i class="fa fa-folder-open"></i> <span>اختبارات</span>-->
            <!--    </a>-->
            <!--</li>-->
            <!--<li class="">-->
            <!--    <a href="#">-->
            <!--        <i class="fa fa-folder-open"></i> <span>قائمة المتفوقين</span>-->
            <!--    </a>-->
            <!--</li>-->
            <!--<li class="">-->
            <!--    <a href="#">-->
            <!--        <i class="fa fa-folder-open"></i> <span>تحميل البيانات</span>-->
            <!--    </a>-->
            <!--</li>-->
            <!--<li class="">-->
            <!--    <a href="{{url( LaravelLocalization::setLocale().'/admin/setting')}}">-->
            <!--        <i class="fa fa-plane"></i> <span>{{__('messages.siteSetting')}} </span>-->
            <!--    </a>-->
            <!--</li>-->
        </ul>
    </section>
    <!-- radio -->

    <!-- /.sidebar -->
</aside>
