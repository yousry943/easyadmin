<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Inventory_Setup</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    @include('user.includes.css')
</head>

<body>

    @include('user.includes.header')


    <section class="site-data-container accountingForm currencyform setup">
        <!-- tabs -->
        <div class="content-container">
            <div class="flex-container">
                <div class="setup-tabs">
                    <aside>
                        <div class="aside-container">
                            <ul class="setup-taps-links">
                                <li id="account" class="selected-taps">account information</li>
                                <li id="cost-center">cost centers</li>
                                <li id="financial-year">financial year</li>
                                <li id="routing">routing</li>
                                <li id="numbering-sequence">numbering sequence</li>
                            </ul>
                        </div>
                    </aside>
                </div>
                <div class="setup-forms">
                    <form action="" class="sys-settings account" id="">
                        <div class="site-data-container accountingForm vendorForm setupForm">

                            <div class="site-data-wrapper">
                                <div class="data-title-search-container setup-data-title-search-container">
                                    <div class="bagntion flex">
                                        <div class="add-item-btn">
                                            <button class="save" type="submit">Save</button>
                                            <button class="discard" type="reset">Discard</button>
                                        </div>
                                    </div>
                                    <div class="data-title-wrapper breadcrumb-wrapper">
                                        <div class="pageName">
                                            <span>business details</span>
                                        </div>
                                    </div>



                                </div>
                            </div>
                            <div class="site-sections-wrapper flex">
                                <div class="leftPart">
                                    <div class="box-data-container">
                                        <div class="billInputs flexBetween">

                                            <div class="billinputcontainer">
                                                <div class="billInputsLeft">

                                                    <div class="flexBetween billOpject"><label for="">business
                                                            name</label><input type="text" placeholder="business name">
                                                    </div>
                                                    <div class="flexBetween billOpject"><label
                                                            for="">mobile</label><input type="text">
                                                    </div>
                                                    <div class="flexBetween billOpject"><label
                                                            for="">telephone</label><input type="text"
                                                            placeholder="address">
                                                    </div>
                                                    <div class="flexBetween billOpject"><label
                                                            for="">address</label><input type="text"
                                                            placeholder="phone NO">
                                                    </div>
                                                </div>
                                                <div class="billInputsRight">

                                                    <div class="flexBetween billOpject"><label
                                                            for="">country</label><select class="searchSelect">
                                                            <option disabled>choose country</option>
                                                            <option name="" value="egypt">egypt</option>
                                                            <option name="" value="unitedState">united state</option>
                                                        </select></div>
                                                    <div class="flexBetween billOpject"><label for="">C.R</label><input
                                                            type="text" placeholder="website"></div>
                                                    <div class="flexBetween billOpject"><label for="">tax
                                                            id</label><input type="text" placeholder="tax id"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div><!-- LeftPart -->

                                <div class="rightPart"></div>

                            </div>


                        </div>
                        <div class="site-data-container accountingForm vendorForm setupForm">

                            <div class="site-data-wrapper">
                                <div class="data-title-search-container setup-data-title-search-container">
                                    <div class="data-title-wrapper breadcrumb-wrapper">
                                        <div class="pageName">
                                            <span>account settings</span>
                                        </div>
                                    </div>



                                </div>
                            </div>
                            <div class="site-sections-wrapper flex">
                                <div class="leftPart">
                                    <div class="box-data-container">
                                        <div class="billInputs flexBetween">

                                            <div class="billinputcontainer">
                                                <div class="billInputsLeft">

                                                    <div class="flexBetween billOpject"><label
                                                            for="">currency</label><select class="searchSelect">
                                                            <option disabled>choose currency</option>
                                                            <option name="" value="EGP">EGP</option>
                                                            <option name="" value="USD">USD</option>
                                                        </select></div>
                                                    <div class="flexBetween billOpject"><label for="">time
                                                            zone</label><select class="searchSelect">
                                                            <option disabled>choose time zone</option>
                                                            <option name="" value="zone1">zone1</option>
                                                            <option name="" value="zone2">zone2</option>
                                                        </select></div>
                                                    <div class="flexBetween billOpject"><label for="">date
                                                            format</label><select class="searchSelect">
                                                            <option disabled>choose format</option>
                                                            <option name="" value="format1">format1</option>
                                                            <option name="" value="format2">format2</option>
                                                        </select></div>

                                                </div>
                                                <div class="billInputsRight">
                                                    <div class="flexBetween billOpject"><label for="">date
                                                            language</label><select class="searchSelect">
                                                            <option disabled>choose language</option>
                                                            <option name="" value="arabic">arabic</option>
                                                            <option name="" value="english">english</option>
                                                        </select></div>
                                                    <div class="flexBetween billOpject"><label for="">logo</label><input
                                                            type="file"></div>
                                                    <div class="flexBetween billOpject"><label for="">company
                                                            regestiry</label><input type="text"
                                                            placeholder="company regestiry"></div>
                                                    <div class="flexBetween billOpject"><label for="">default
                                                            currency</label><select class="searchSelect">
                                                            <option disabled>choose currency</option>
                                                            <option name="" value="egp">egp</option>
                                                            <option name="" value="usd">usd</option>
                                                        </select></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div><!-- LeftPart -->

                                <div class="rightPart"></div>

                            </div>


                        </div>
                    </form>
                    <div class="site-data-wrapper dataTables_wrapper no-footer sys-settings cost-center" id="">
                        <div class="data-title-search-container flexBetween">
                            <div class="data-title-wrapper breadcrumb-wrapper">
                                <div class="breadcrumb">
                                    <h2>cost center</h2>
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
                                <a href="SETUP_fiscalYear_ADN.html" class="save"><span><i
                                            class="fas fa-plus-circle fs-3x"></i></span>Add
                                    New</a>
                            </div>

                            <div class="flexBetween inner-bagntion">
                                <div class="filter">
                                    <a href="#" class="action"><span class="">Action</span><span><i
                                                class="fas fa-caret-down"></i></span></a>

                                    <!-- <div class="actionMath d-none">
                            <ul>
                                <li>Export 2</li>
                                <li>طباعه</li>
                                <li>Send By Email</li>
                                <li>Delete</li>
                            </ul>
                        </div>  -->
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
                                                        <span class="">NO</span>
                                                        <span class="sorts"><i class="fas fa-sort-amount-up"></i></span>
                                                    </div>
                                                </th>
                                                <th class="ellipsisOne">
                                                    <div>
                                                        <span class="">Name</span>
                                                        <span class="sorts"><i class="fas fa-sort-amount-up"></i></span>
                                                    </div>
                                                </th>
                                                <th class="ellipsisTwo">
                                                    <div>
                                                        <span class="">code</span>
                                                        <span class="sorts"><i class="fas fa-sort-amount-up"></i></span>
                                                    </div>
                                                </th>
                                                <th class="ellipsisThree">
                                                    <div>
                                                        <span class="">parent cost center</span>
                                                        <span class="sorts"><i class="fas fa-sort-amount-up"></i></span>
                                                    </div>
                                                </th>
                                                <th class="ellipsisFour">
                                                    <div>
                                                        <span class="">actions</span>
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
                                                                    <span>name</span>
                                                                    <input type="checkbox" />
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="ellipsisTap ellipsisCheck-two">
                                                                    <span>code</span>
                                                                    <input type="checkbox" />
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="ellipsisTap ellipsisCheck-three">
                                                                    <span>parent cost center</span>
                                                                    <input type="checkbox" />
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="ellipsisTap ellipsisCheck-four">
                                                                    <span>actions</span>
                                                                    <input type="checkbox" />
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="checkNum">
                                                    <input class="" type="checkbox" id="" name="" />
                                                </td>
                                                <td><span>121</span></td>
                                                <td class="ellipsisOne"><span>hussien</span></td>
                                                <td class="ellipsisTwo">
                                                    <span>1111</span>
                                                </td>
                                                <td class="ellipsisThree">
                                                    <span>accounting</span>
                                                </td>
                                                <td class="ellipsisFour">
                                                    <span>action</span>
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
                    <div class="site-data-wrapper dataTables_wrapper no-footer sys-settings financial-year" id="">
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
                                <a href="SETUP_fiscalYear_ADN.html" class="save"><span><i
                                            class="fas fa-plus-circle fs-3x"></i></span>Add
                                    New</a>
                            </div>

                            <div class="flexBetween inner-bagntion">
                                <div class="filter">
                                    <a href="#" class="action"><span class="">Action</span><span><i
                                                class="fas fa-caret-down"></i></span></a>

                                    <!-- <div class="actionMath d-none">
                            <ul>
                                <li>Export 2</li>
                                <li>طباعه</li>
                                <li>Send By Email</li>
                                <li>Delete</li>
                            </ul>
                        </div>  -->
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
                                            <tr>
                                                <td class="checkNum">
                                                    <input class="" type="checkbox" id="" name="" />
                                                </td>
                                                <td><span>1-1-2020</span></td>
                                                <td class="ellipsisOne"><span>10-10-2020</span></td>
                                                <td class="ellipsisTwo">
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
                    <!-- end of finicial -->
                    <!-- start the routing -->
                    <form action="" class="sys-settings routing">
                        <div class="site-data-container accountingForm vendorForm setupForm">

                            <div class="site-data-wrapper">
                                <div class="data-title-search-container setup-data-title-search-container">
                                    <div class="bagntion flex">
                                        <div class="add-item-btn">
                                            <button class="save" type="submit">Save</button>
                                            <button class="discard" type="reset">Discard</button>
                                        </div>
                                    </div>
                                    <div class="data-title-wrapper breadcrumb-wrapper">
                                        <div class="pageName">
                                            <span>purchases routing</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="site-sections-wrapper flex">
                                <div class="leftPart">
                                    <div class="box-data-container">
                                        <div class="billInputs flexBetween">
                                            <div class="billinputcontainer">
                                                <div class="billInputsLeft">

                                                    <div class="flexBetween billOpject"><label for="">suppliers</label>
                                                        <select class="searchSelect">
                                                            <option disabled>choose supplier</option>
                                                            <option name="" value="supplier1">supplier1</option>
                                                            <option name="" value="supplier2">supplier2</option>
                                                        </select>
                                                    </div>
                                                    <div class="flexBetween billOpject"><label for="">purchases</label>
                                                        <select class="searchSelect">
                                                            <option disabled>choose purchase</option>
                                                            <option name="" value="purchase1">purchase1</option>
                                                            <option name="" value="purchase2">purchase2</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="billInputsRight">

                                                    <div class="flexBetween billOpject"><label for="">purchases
                                                            returns</label>
                                                        <select class="searchSelect">
                                                            <option disabled>choose purchases returns</option>
                                                            <option name="" value="purchases returns">purchases returns
                                                            </option>
                                                            <option name="" value="purchases returns">purchases returnse
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <div class="flexBetween billOpject"><label for="">expenses</label>
                                                        <select class="searchSelect" id="searchSelectMulti"name="states[]" multiple="multiple">
                                                            <option disabled>choose expenses</option>
                                                            <option name="" value="oonnee">one</option>
                                                            <option name="" value="ttwwoo">two</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div><!-- LeftPart -->

                                <div class="rightPart"></div>

                            </div>


                        </div>
                        <div class="site-data-container accountingForm vendorForm setupForm">

                            <div class="site-data-wrapper">
                                <div class="data-title-search-container setup-data-title-search-container">
                                    <div class="data-title-wrapper breadcrumb-wrapper">
                                        <div class="pageName">
                                            <span>sales routing</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="site-sections-wrapper flex">
                                <div class="leftPart">
                                    <div class="box-data-container">
                                        <div class="billInputs flexBetween">

                                            <div class="billinputcontainer">
                                                <div class="billInputsLeft">

                                                    <div class="flexBetween billOpject"><label for="">clients</label>
                                                        <select class="searchSelect">
                                                            <option disabled>choose currency</option>
                                                            <option name="" value="client1">client1</option>
                                                            <option name="" value="client2">client2</option>
                                                        </select>
                                                    </div>
                                                    <div class="flexBetween billOpject"><label for="">sales</label>
                                                        <select class="searchSelect">
                                                            <option disabled>choose sales</option>
                                                            <option name="" value="sale1">sale1</option>
                                                            <option name="" value="sale2">sale2</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="billInputsRight">
                                                    <div class="flexBetween billOpject"><label for="">returns</label>
                                                        <select class="searchSelect">
                                                            <option disabled>choose returns</option>
                                                            <option name="" value="returns">returns</option>
                                                            <option name="" value="returns">returns</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div><!-- LeftPart -->

                                    <div class="rightPart"></div>

                                </div>
                            </div>
                            <div class="site-data-container accountingForm vendorForm setupForm">

                                <div class="site-data-wrapper">
                                    <div class="data-title-search-container setup-data-title-search-container">
                                        <div class="data-title-wrapper breadcrumb-wrapper">
                                            <div class="pageName">
                                                <span>inventory routing</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="site-sections-wrapper flex">
                                    <div class="leftPart">
                                        <div class="box-data-container">
                                            <div class="billInputs flexBetween">
                                                <div class="billinputcontainer">
                                                    <div class="billInputsLeft">

                                                        <div class="flexBetween billOpject"><label for="">stores</label>
                                                            <select class="searchSelect">
                                                                <option disabled>choose store</option>
                                                                <option name="" value="store1">store1</option>
                                                                <option name="" value="store2">store2</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div><!-- LeftPart -->

                                    <div class="rightPart"></div>

                                </div>
                                <!-- ########### -->
                                <div class="site-data-container accountingForm vendorForm setupForm">

                                    <div class="site-data-wrapper">
                                        <div class="data-title-search-container setup-data-title-search-container">
                                            <div class="data-title-wrapper breadcrumb-wrapper">
                                                <div class="pageName">
                                                    <span>treasury routing</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="site-sections-wrapper flex">
                                        <div class="leftPart">
                                            <div class="box-data-container">
                                                <div class="billInputs flexBetween">
                                                    <div class="billinputcontainer">
                                                        <div class="billInputsLeft">

                                                            <div class="flexBetween billOpject"><label
                                                                    for="">treasuries</label>
                                                                <select class="searchSelect">
                                                                    <option disabled>choose treasury</option>
                                                                    <option name="" value="treasury1">treasury1
                                                                    </option>
                                                                    <option name="" value="treasury2">treasury2
                                                                    </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div><!-- LeftPart -->

                                        <div class="rightPart"></div>

                                    </div>
                                    <!-- ################### -->
                                    <div class="site-data-container accountingForm vendorForm setupForm">


                                        <div class="site-data-wrapper">
                                            <div class="data-title-search-container setup-data-title-search-container">
                                                <div class="data-title-wrapper breadcrumb-wrapper">
                                                    <div class="pageName">
                                                        <span>requistion journal settings</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="site-sections-wrapper flex">
                                            <div class="leftPart">
                                                <div class="box-data-container">
                                                    <div class="billInputs flexBetween">
                                                        <div class="billinputcontainer">
                                                            <div class="billInputsLeft">

                                                                <div class="flexBetween billOpject"><label
                                                                        for="">inbound
                                                                        requistion</label>
                                                                    <select class="searchSelect">
                                                                        <option disabled>choose inbound requistion
                                                                        </option>
                                                                        <option name="" value="inbound requistion">
                                                                            inbound
                                                                            requistion
                                                                        </option>
                                                                        <option name="" value="inbound requistion">
                                                                            inbound
                                                                            requistion
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                                <div class="flexBetween billOpject"><label
                                                                        for="">outbound
                                                                        requistion</label>
                                                                    <select class="searchSelect">
                                                                        <option disabled>choose outbound requistion
                                                                        </option>
                                                                        <option name="" value="outbound requistion">
                                                                            outbound
                                                                            requistion
                                                                        </option>
                                                                        <option name="" value="outbound requistion">
                                                                            outbound
                                                                            requistion
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="billInputsRight">

                                                                <div class="flexBetween billOpject"><label
                                                                        for="">stocking
                                                                        outbound</label>
                                                                    <select class="searchSelect">
                                                                        <option disabled>choose stocking outbound
                                                                        </option>
                                                                        <option name="" value="stocking outbound">
                                                                            stocking
                                                                            outbound
                                                                        </option>
                                                                        <option name="" value="stocking outbound">
                                                                            stocking
                                                                            outbound
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                                <div class="flexBetween billOpject"><label
                                                                        for="">stocking
                                                                        inbound</label>
                                                                    <select class="searchSelect">
                                                                        <option disabled>choose stocking inbound
                                                                        </option>
                                                                        <option name="" value="stocking inbound">
                                                                            stocking
                                                                            inbound
                                                                        </option>
                                                                        <option name="" value="stocking inbound">
                                                                            stocking
                                                                            inbound
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div><!-- LeftPart -->

                                            <div class="rightPart"></div>

                                        </div>
                                    </div> <!-- ########### -->
                    </form>
                    <!-- end routing -->
                    <!-- start serials -->

                    <!---form transfer-->


                    <!-- ff-->
                    <!-- end serials -->
                </div>
            </div>
        </div>
        <!-- start routing -->

        <!-- end -->
        <form action="" class="sys-settings numbering-sequence">
            <div class="site-data-container accountingForm vendorForm setupForm">

                <div class="site-data-wrapper">
                    <div class="data-title-search-container setup-data-title-search-container">
                        <div class="bagntion flex">
                            <div class="add-item-btn">
                                <button class="save" type="submit">Save</button>
                                <button class="discard" type="reset">Discard</button>
                            </div>
                        </div>
                        <div class="data-title-wrapper breadcrumb-wrapper">
                            <div class="pageName">
                                <span>vendors</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="site-sections-wrapper flex">
                    <div class="leftPart">
                        <div class="box-data-container">
                            <div class="billInputs flexBetween">

                                <div class="billinputcontainer">
                                    <div class="billInputsLeft">

                                        <div class="flexBetween billOpject"><label for="">start
                                                text</label><input type="text" placeholder="business name">
                                        </div>
                                        <div class="flexBetween billOpject"><label for="">start
                                                number</label><input type="text" placeholder="start number">
                                        </div>
                                    </div>
                                    <div class="billInputsRight">

                                        <div class="flexBetween billOpject"><label for="">serial
                                                format</label><input type="text" placeholder="serial format">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div><!-- LeftPart -->

                    <div class="rightPart"></div>

                </div>


            </div>
            <!-- end -->
            <div class="site-data-container accountingForm vendorForm setupForm">

                <div class="site-data-wrapper">
                    <div class="data-title-search-container setup-data-title-search-container">
                        <div class="data-title-wrapper breadcrumb-wrapper">
                            <div class="pageName">
                                <span>purchase orders</span>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="site-sections-wrapper flex">
                    <div class="leftPart">
                        <div class="box-data-container">
                            <div class="billInputs flexBetween">

                                <div class="billinputcontainer">
                                    <div class="billInputsLeft">

                                        <div class="flexBetween billOpject"><label for="">start
                                                text</label><input type="text" placeholder="business name">
                                        </div>
                                        <div class="flexBetween billOpject"><label for="">start
                                                number</label><input type="text" placeholder="start number">
                                        </div>
                                    </div>
                                    <div class="billInputsRight">

                                        <div class="flexBetween billOpject"><label for="">serial
                                                format</label><input type="text" placeholder="serial format">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div><!-- LeftPart -->

                    <div class="rightPart"></div>

                </div>


            </div>
            <!-- end -->
            <div class="site-data-container accountingForm vendorForm setupForm">

                <div class="site-data-wrapper">
                    <div class="data-title-search-container setup-data-title-search-container">

                        <div class="data-title-wrapper breadcrumb-wrapper">
                            <div class="pageName">
                                <span>purchase orders refund</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="site-sections-wrapper flex">
                    <div class="leftPart">
                        <div class="box-data-container">
                            <div class="billInputs flexBetween">

                                <div class="billinputcontainer">
                                    <div class="billInputsLeft">

                                        <div class="flexBetween billOpject"><label for="">start
                                                text</label><input type="text" placeholder="business name">
                                        </div>
                                        <div class="flexBetween billOpject"><label for="">start
                                                number</label><input type="text" placeholder="start number">
                                        </div>
                                    </div>
                                    <div class="billInputsRight">

                                        <div class="flexBetween billOpject"><label for="">serial
                                                format</label><input type="text" placeholder="serial format">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div><!-- LeftPart -->

                    <div class="rightPart"></div>

                </div>


            </div>
            <!-- end -->
            <div class="site-data-container accountingForm vendorForm setupForm">

                <div class="site-data-wrapper">
                    <div class="data-title-search-container setup-data-title-search-container">

                        <div class="data-title-wrapper breadcrumb-wrapper">
                            <div class="pageName">
                                <span>payments</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="site-sections-wrapper flex">
                    <div class="leftPart">
                        <div class="box-data-container">
                            <div class="billInputs flexBetween">

                                <div class="billinputcontainer">
                                    <div class="billInputsLeft">

                                        <div class="flexBetween billOpject"><label for="">start
                                                text</label><input type="text" placeholder="business name">
                                        </div>
                                        <div class="flexBetween billOpject"><label for="">start
                                                number</label><input type="text" placeholder="start number">
                                        </div>
                                    </div>
                                    <div class="billInputsRight">

                                        <div class="flexBetween billOpject"><label for="">serial
                                                format</label><input type="text" placeholder="serial format">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div><!-- LeftPart -->

                    <div class="rightPart"></div>

                </div>


            </div>
            <!-- end -->
            <div class="site-data-container accountingForm vendorForm setupForm">

                <div class="site-data-wrapper">
                    <div class="data-title-search-container setup-data-title-search-container">

                        <div class="data-title-wrapper breadcrumb-wrapper">
                            <div class="pageName">
                                <span>receive items</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="site-sections-wrapper flex">
                    <div class="leftPart">
                        <div class="box-data-container">
                            <div class="billInputs flexBetween">

                                <div class="billinputcontainer">
                                    <div class="billInputsLeft">

                                        <div class="flexBetween billOpject"><label for="">start
                                                text</label><input type="text" placeholder="business name">
                                        </div>
                                        <div class="flexBetween billOpject"><label for="">start
                                                number</label><input type="text" placeholder="start number">
                                        </div>
                                    </div>
                                    <div class="billInputsRight">

                                        <div class="flexBetween billOpject"><label for="">serial
                                                format</label><input type="text" placeholder="serial format">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div><!-- LeftPart -->

                    <div class="rightPart"></div>

                </div>


            </div>
            <!-- end -->
            <div class="site-data-container accountingForm vendorForm setupForm">

                <div class="site-data-wrapper">
                    <div class="data-title-search-container setup-data-title-search-container">

                        <div class="data-title-wrapper breadcrumb-wrapper">
                            <div class="pageName">
                                <span>purchase orders statuses</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="site-sections-wrapper flex">
                    <div class="leftPart">
                        <div class="box-data-container">
                            <div class="billInputs flexBetween">

                                <div class="billinputcontainer">
                                    <div class="billInputsLeft">

                                        <div class="flexBetween billOpject"><label for="">start
                                                text</label><input type="text" placeholder="business name">
                                        </div>
                                        <div class="flexBetween billOpject"><label for="">start
                                                number</label><input type="text" placeholder="start number">
                                        </div>
                                    </div>
                                    <div class="billInputsRight">

                                        <div class="flexBetween billOpject"><label for="">serial
                                                format</label><input type="text" placeholder="serial format">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div><!-- LeftPart -->

                    <div class="rightPart"></div>

                </div>


            </div>
            <!-- end -->
            <div class="site-data-container accountingForm vendorForm setupForm">

                <div class="site-data-wrapper">
                    <div class="data-title-search-container setup-data-title-search-container">
                        <div class="data-title-wrapper breadcrumb-wrapper">
                            <div class="pageName">
                                <span>customers</span>
                            </div>
                        </div>



                    </div>
                </div>
                <div class="site-sections-wrapper flex">
                    <div class="leftPart">
                        <div class="box-data-container">
                            <div class="billInputs flexBetween">

                                <div class="billinputcontainer">
                                    <div class="billInputsLeft">

                                        <div class="flexBetween billOpject"><label for="">start
                                                text</label><input type="text" placeholder="business name">
                                        </div>
                                        <div class="flexBetween billOpject"><label for="">start
                                                number</label><input type="text" placeholder="start number">
                                        </div>
                                    </div>
                                    <div class="billInputsRight">

                                        <div class="flexBetween billOpject"><label for="">serial
                                                format</label><input type="text" placeholder="serial format">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div><!-- LeftPart -->

                    <div class="rightPart"></div>

                </div>


            </div>
            <!-- end -->
            <div class="site-data-container accountingForm vendorForm setupForm">

                <div class="site-data-wrapper">
                    <div class="data-title-search-container setup-data-title-search-container">

                        <div class="data-title-wrapper breadcrumb-wrapper">
                            <div class="pageName">
                                <span>sales orders</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="site-sections-wrapper flex">
                    <div class="leftPart">
                        <div class="box-data-container">
                            <div class="billInputs flexBetween">

                                <div class="billinputcontainer">
                                    <div class="billInputsLeft">

                                        <div class="flexBetween billOpject"><label for="">start
                                                text</label><input type="text" placeholder="business name">
                                        </div>
                                        <div class="flexBetween billOpject"><label for="">start
                                                number</label><input type="text" placeholder="start number">
                                        </div>
                                    </div>
                                    <div class="billInputsRight">

                                        <div class="flexBetween billOpject"><label for="">serial
                                                format</label><input type="text" placeholder="serial format">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div><!-- LeftPart -->

                    <div class="rightPart"></div>

                </div>


            </div>
            <!-- end -->
            <div class="site-data-container accountingForm vendorForm setupForm">

                <div class="site-data-wrapper">
                    <div class="data-title-search-container setup-data-title-search-container">

                        <div class="data-title-wrapper breadcrumb-wrapper">
                            <div class="pageName">
                                <span>sales orders refunds</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="site-sections-wrapper flex">
                    <div class="leftPart">
                        <div class="box-data-container">
                            <div class="billInputs flexBetween">

                                <div class="billinputcontainer">
                                    <div class="billInputsLeft">

                                        <div class="flexBetween billOpject"><label for="">start
                                                text</label><input type="text" placeholder="business name">
                                        </div>
                                        <div class="flexBetween billOpject"><label for="">start
                                                number</label><input type="text" placeholder="start number">
                                        </div>
                                    </div>
                                    <div class="billInputsRight">

                                        <div class="flexBetween billOpject"><label for="">serial
                                                format</label><input type="text" placeholder="serial format">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div><!-- LeftPart -->

                    <div class="rightPart"></div>

                </div>


            </div>
            <!-- end -->
            <div class="site-data-container accountingForm vendorForm setupForm">

                <div class="site-data-wrapper">
                    <div class="data-title-search-container setup-data-title-search-container">

                        <div class="data-title-wrapper breadcrumb-wrapper">
                            <div class="pageName">
                                <span>recepits</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="site-sections-wrapper flex">
                    <div class="leftPart">
                        <div class="box-data-container">
                            <div class="billInputs flexBetween">

                                <div class="billinputcontainer">
                                    <div class="billInputsLeft">

                                        <div class="flexBetween billOpject"><label for="">start
                                                text</label><input type="text" placeholder="business name">
                                        </div>
                                        <div class="flexBetween billOpject"><label for="">start
                                                number</label><input type="text" placeholder="start number">
                                        </div>
                                    </div>
                                    <div class="billInputsRight">

                                        <div class="flexBetween billOpject"><label for="">serial
                                                format</label><input type="text" placeholder="serial format">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div><!-- LeftPart -->

                    <div class="rightPart"></div>

                </div>


            </div>
            <!-- end -->
            <div class="site-data-container accountingForm vendorForm setupForm">

                <div class="site-data-wrapper">
                    <div class="data-title-search-container setup-data-title-search-container">
                        <div class="data-title-wrapper breadcrumb-wrapper">
                            <div class="pageName">
                                <span>delviered items</span>
                            </div>
                        </div>



                    </div>
                </div>
                <div class="site-sections-wrapper flex">
                    <div class="leftPart">
                        <div class="box-data-container">
                            <div class="billInputs flexBetween">

                                <div class="billinputcontainer">
                                    <div class="billInputsLeft">

                                        <div class="flexBetween billOpject"><label for="">start
                                                text</label><input type="text" placeholder="business name">
                                        </div>
                                        <div class="flexBetween billOpject"><label for="">start
                                                number</label><input type="text" placeholder="start number">
                                        </div>
                                    </div>
                                    <div class="billInputsRight">

                                        <div class="flexBetween billOpject"><label for="">serial
                                                format</label><input type="text" placeholder="serial format">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div><!-- LeftPart -->

                    <div class="rightPart"></div>

                </div>


            </div>
            <!-- end -->
            <div class="site-data-container accountingForm vendorForm setupForm">

                <div class="site-data-wrapper">
                    <div class="data-title-search-container setup-data-title-search-container">

                        <div class="data-title-wrapper breadcrumb-wrapper">
                            <div class="pageName">
                                <span>saled orders statuses</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="site-sections-wrapper flex">
                    <div class="leftPart">
                        <div class="box-data-container">
                            <div class="billInputs flexBetween">

                                <div class="billinputcontainer">
                                    <div class="billInputsLeft">

                                        <div class="flexBetween billOpject"><label for="">start
                                                text</label><input type="text" placeholder="business name">
                                        </div>
                                        <div class="flexBetween billOpject"><label for="">start
                                                number</label><input type="text" placeholder="start number">
                                        </div>
                                    </div>
                                    <div class="billInputsRight">

                                        <div class="flexBetween billOpject"><label for="">serial
                                                format</label><input type="text" placeholder="serial format">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div><!-- LeftPart -->

                    <div class="rightPart"></div>

                </div>


            </div>
            <!-- end -->
            <div class="site-data-container accountingForm vendorForm setupForm">

                <div class="site-data-wrapper">
                    <div class="data-title-search-container setup-data-title-search-container">

                        <div class="data-title-wrapper breadcrumb-wrapper">
                            <div class="pageName">
                                <span>invoices</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="site-sections-wrapper flex">
                    <div class="leftPart">
                        <div class="box-data-container">
                            <div class="billInputs flexBetween">

                                <div class="billinputcontainer">
                                    <div class="billInputsLeft">

                                        <div class="flexBetween billOpject"><label for="">start
                                                text</label><input type="text" placeholder="business name">
                                        </div>
                                        <div class="flexBetween billOpject"><label for="">start
                                                number</label><input type="text" placeholder="start number">
                                        </div>
                                    </div>
                                    <div class="billInputsRight">

                                        <div class="flexBetween billOpject"><label for="">serial
                                                format</label><input type="text" placeholder="serial format">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div><!-- LeftPart -->

                    <div class="rightPart"></div>

                </div>


            </div>
            <!-- end -->
            <div class="site-data-container accountingForm vendorForm setupForm">

                <div class="site-data-wrapper">
                    <div class="data-title-search-container setup-data-title-search-container">

                        <div class="data-title-wrapper breadcrumb-wrapper">
                            <div class="pageName">
                                <span>item journals</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="site-sections-wrapper flex">
                    <div class="leftPart">
                        <div class="box-data-container">
                            <div class="billInputs flexBetween">

                                <div class="billinputcontainer">
                                    <div class="billInputsLeft">

                                        <div class="flexBetween billOpject"><label for="">start
                                                text</label><input type="text" placeholder="business name">
                                        </div>
                                        <div class="flexBetween billOpject"><label for="">start
                                                number</label><input type="text" placeholder="start number">
                                        </div>
                                    </div>
                                    <div class="billInputsRight">

                                        <div class="flexBetween billOpject"><label for="">serial
                                                format</label><input type="text" placeholder="serial format">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div><!-- LeftPart -->

                    <div class="rightPart"></div>

                </div>


            </div>
            <!-- end -->
        </form>

    </section>
    <div class="hiddenAllItems"></div>
    @include('user.includes.js')
</body>

</html>