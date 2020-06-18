<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
 @include('user.includes.css')
  </head>
  <body>
     @include('user.includes.header')
    <!-- <section class="top-nav-container mainBgColor">
      <div class="section top-nav-wrapper flexBetween">
        <div class="user-section-wrapper">
          <div class="user-data">
            <div class="user-img-wrap flexCenter">
              <img class="user-img" src="assets/images/user.png" />
              <span class="user-name">Mouhab Bassem</span>
              <img src="assets/images/sort-down.png" class="down-arrow" />
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
                  <a href="#">Preferences</a>
                </li>
                <li>
                  <a href="#">Logout</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <section class="services-data-container">
      <div class="section services-data-wrapper">
        <div class="welcome-user">
          <h1>Welcome, <span class="welcome-user-name">{{\Illuminate\Support\Facades\Auth::guard('web')->user()->name}}</span></h1>
          <p>
            "Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."
"There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain..."
          </p>
        </div>
        <div class="services-items-container">
          <div class="services-items-wrapper flexWrap" id="sortable">
            <div class="services-item account-item">
              <div class="item-line"></div>
              <div class="services-data">
                <a href="statistics.html">
                  <div class="service-item-img">

                    <img src="{{ asset('assets/erb_front/assets/images/chart.png')}}" />
                  </div>
                  <div class="services-title">
                    <h3>الأحصائيات</h3>
                    <p>
                      Accounting is the measurement, processing, and
                      communication of financial and non financial information
                      about economic entities such as ...
                    </p>
                  </div>
                </a>
              </div>
            </div>

            <div class="services-item inventory-item">
              <div class="item-line"></div>
              <div class="services-data">
                <a href="employees.html">
                  <div class="service-item-img">

                    <img src="{{ asset('assets/erb_front/assets/images/inventory.png')}}" />
                  </div>

                  <div class="services-title">
                    <h3>الموظفين</h3>
                    <p>
                      Inventory or stock is the goods and materials that a
                      business holds for the ultimate goal of resale.
                    </p>
                  </div>
                </a>
              </div>
            </div>

            <div class="services-item bank-item">
              <div class="item-line"></div>
              <div class="services-data">
                <a href="departments.html">
                  <div class="service-item-img">

                    <img src="{{ asset('assets/erb_front/assets/images/bank.png')}}" />
                  </div>
                  <div class="services-title">
                    <h3>الأدارات</h3>
                    <p>
                      A bank is a financial institution licensed to receive
                      deposits and make loans.
                    </p>
                  </div>
                </a>
              </div>
            </div>

            <div class="services-item hr-item">
              <div class="item-line"></div>
              <div class="services-data">
                <a href="reports.html">
                  <div class="service-item-img">
                    <img src="{{ asset('assets/erb_front/assets/images/hr.png')}}" />
                  </div>
                  <div class="services-title">
                    <h3>التقارير</h3>
                    <p>
                      Human resource management is the strategic approach to the
                      effective management of people in an organization so that
                      they help the business to gain a competitive advantage..
                    </p>
                  </div>
                </a>
              </div>
            </div>

            <div class="services-item projects-item">
              <div class="item-line"></div>
              <div class="services-data">
                <a href="attendance.html">
                  <div class="service-item-img">

                    <img src="{{ asset('assets/erb_front/assets/images/project.png')}}" />
                  </div>
                  <div class="services-title">
                    <h3>الحضور و الأنصراف</h3>
                    <p>
                      Contemporary business and science treat as a project any
                      undertaking, carried out individually or collaboratively
                      and possibly involving research or design..
                    </p>
                  </div>
                </a>
              </div>
            </div>

            <div class="services-item events-item">
              <div class="item-line"></div>
              <div class="services-data">
				  <a href="vacations.html">
                <div class="service-item-img">

                  <img src="{{ asset('assets/erb_front/assets/images/calendar.png')}}" />
                </div>
                <div class="services-title">
                  <h3>الأجازات</h3>
                  <p>
                    Event description excites punters: tell them what will
                    happen at the event, who will be speaking, and what they
                    might get out of attending.
                  </p>
				</div>
			</a>
              </div>
            </div>

            <div class="services-item purchase-item">
              <div class="item-line"></div>
              <div class="services-data">
				  <a href="missions.html">
                <div class="service-item-img">

                  <img src="{{ asset('assets/erb_front/assets/images/purchase.png')}}" />
                </div>
                <div class="services-title">
                  <h3><a href="purchasingDashboard.html">المأموريات</a></h3>
                  <p>
                    Purchase is a statement outlining the essential
                    characteristics and functions of an item, service, or
                    materiel required to meet the minimum needs of the
                    Government.
                  </p>
				</div>
			</a>
              </div>
            </div>

            <div class="services-item settings-item">
              <div class="item-line"></div>
              <div class="services-data">
				  <a href="permissions.html">
                <div class="service-item-img">

                  <img src="{{ asset('assets/erb_front/assets/images/settings.png')}}" />
                </div>
                <div class="services-title">
                  <h3>الأذونات</h3>
                  <p>
                    Setting is an environment which lets you to control your
                    site and your personal data.
                  </p>
				</div>
			</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
 @include('user.includes.js')
  </body>
</html>
