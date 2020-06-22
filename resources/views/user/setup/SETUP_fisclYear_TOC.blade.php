<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Location</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
  @include('user.includes.css')
</head>

<body>

  @include('user.includes.header')

    <section class="site-data-container">
        <div class="site-data-wrapper dataTables_wrapper no-footer" id="myTable_wrapper">
            <div class="data-title-search-container flexBetween">
                <div class="data-title-wrapper breadcrumb-wrapper">
                    <div class="breadcrumb">
                        <h2>FISCAL YEAR</h2>
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
                    <a href="SETUP_fiscalYear_ADN.html" class="save"><span><i class="fas fa-plus-circle fs-3x"></i></span>Add
                        New</a>
                </div>

                <div class="flexBetween inner-bagntion">
                    <div class="filter">
                        <a href="#" class="action"><span class="">Action</span><span><i class="fas fa-caret-down"></i></span></a>

                     <!-- <div class="actionMath d-none">
                            <ul>
                                <li>Export 2</li>
                                <li>طباعه</li>
                                <li>Send By Email</li>
                                <li>Delete</li>
                            </ul>
                        </div>  -->
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
                                            <span class="">begin date</span>
                                            <span class="sorts"><i class="fas fa-sort-amount-up"></i></span>
                                        </div>
                                    </th>
                                    <th class="ellipsisOne">
                                        <div>
                                            <span class="">end date</span>
                                            <span class="sorts"><i class="fas fa-sort-amount-up"></i></span>
                                        </div>
                                    </th>
                                    <th class="ellipsisTwo">
                                        <div>
                                            <span class="">is closed</span>
                                            <span class="sorts"><i class="fas fa-sort-amount-up"></i></span>
                                        </div>
                                    </th>
                                    <th class="headOfAction"><span class="ellipsisAction">Action</span></th>
                                    <th>
                                        <!-- justForGrid -->
                                    </th>

                                    <th class="ellipsis">
                                        <i class="fas fa-ellipsis-v"></i>

                                        <div class="ellipsisMenu">
                                            <ul>
                                                <li>
                                                    <div class="ellipsisTap ellipsisCheck-one">
                                                        <span>end date</span>
                                                        <input type="checkbox" />
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="ellipsisTap ellipsisCheck-two">
                                                        <span>is closed</span>
                                                        <input type="checkbox" />
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr onclick="location.href='http://#';">
                                        <td class="checkNum">
                                            <input class="" type="checkbox" id="" name="" />
                                        </td>
                                        <td class="ellipsisOne"><span>1-1-2020</span></td>
                                        <td class="ellipsisTwo"><span>10-10-2020</span></td>
                                        <td class="ellipsisThree">
                                            <span>yes</span>
                                        </td>
                                        <td>
                                            <div class="item-action">
                                                <div><i class="fas fa-edit"></i><a href="#">edit</a></div>
                                                <div class="itemActionRed"><i class="far fa-trash-alt"></i><a
                                                        href="#">delete</a></div>
                                            </div>
                                        </td>
                                        <td>
                                            <!-- 8-justForGrid -->
                                        </td>
                                        <td>
                                            <!-- 9-justForGrid -->
                                        </td>
                                </tr>
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