<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>chartOfAccounts Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
 @include('user.includes.css')
</head>

<body>
 @include('user.includes.header')
 <section class="site-data-container chartOfAccounts chartOfAccountsForm">
        <form action="">

            <div class="site-data-wrapper">
                <div class="data-title-search-container">
                    <div class="data-title-wrapper breadcrumb-wrapper">
                        <div class="pageName">
                            <span><a href="chartOfAccounts.html">Chart Of Accounts /</span></a><span>NEW</span>
                        </div>
                    </div>


                    <div class="bagntion flex">
                        <div class="add-item-btn">
                            <button class="save" type="submit">Save</button>
                            <button class="discard" type="reset">Discard</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="ACC-T-F">
                    <div action="" class="flexCenter">
                        <div class="requ">
                            <label for="">Account Type</label>
                            <select name="" id="" style="width:100%" disabled="true">
                                <option value="">Main Account</option>
                                <option value="">Sub Account</option>
                            </select>
                        </div>
                        <div class="requ">
                            <label for="">Code</label>
                            <input type="text" placeholder="00000001" readonly>
                        </div>
                        <div class="requ">
                            <label for="">Name</label>
                            <input type="text" name="" placeholder="aly aly" readonly>
                        </div>
                        <div class="requ">
                            <label for="">Main Account</label>
                            <select name="" id="" disabled="true">
                                <option value="">Please Select</option>
                                <option value="">Sub Account</option>
                            </select>
                        </div>
                        <div class="requ">
                            <label for="">type</label>
                            <div>
                                <input type="radio" id="credit" name="accountType">
                                <label for="credit">credit</label>
                                <input type="radio" id="depit" name="accountType">
                                <label for="depit">depit</label>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </form>
    </section>
  
 @include('user.includes.js')
</body>

</html>
