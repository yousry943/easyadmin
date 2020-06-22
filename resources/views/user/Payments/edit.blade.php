<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>ITEM CATEGORY</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    @include('user.includes.css')

</head>

<body>
  @include('user.includes.header')
    
  <section class="site-data-container accountingForm">
        <form action="">
            <div class="site-data-wrapper">
                <div class="data-title-search-container">
                    <div class="data-title-wrapper breadcrumb-wrapper">
                        <div class="pageName">
                            <span><a href="PUR_P_TOC.html">PAYMENT /</a></span><span>NEW</span>
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
            <div class="site-sections-wrapper flex">
                <div class="leftPart">
                    <div class="box-data-container">
                        <div class="billInputs flexBetween">
                            <div class="billInputsLeft">
                                <div class="flexBetween billOpject"><label for="">PAYMENT FOR</label><select>
                                        <option>choose PURCHASE ORDER</option>
                                        <option name="" value="O1">ORDER1</option>
                                        <option name="" value="O2">ORDER2</option>
                                    </select>
                                </div>
                                <div class="flexBetween billOpject"><label for="">PAYMENT NUMBER</label><input
                                        type="text"></div>
                                <div class="flexBetween billOpject"><label for="">PARTNER</label><input type="text">
                                </div>
                                <div class="flexBetween billOpject"><label for="">PAYMENT TYPE</label><select>
                                        <option>choose PAYMENT TYPE</option>
                                        <option name="" value="PT1">CASH</option>
                                        <option name="" value="PT2">CHEQUE</option>
                                        <option name="" value="PT3">BANK TRANSFER</option>
                                        <option name="" value="PT4">VENDOR BALANCE</option>
                                    </select>
                                </div>
                                <div class="flexBetween billOpject"><label for="">PAYED BY</label><input type="text">
                                </div>
                                <div class="flexBetween billOpject"><label for="">PAYMENT TRANSACTION</label><input
                                        type="text"></div>
                                <div class="flexBetween billOpject"><label for="">PARTNER TYPE</label><select>
                                        <option>choose PARTNER TYPE</option>
                                        <option name="" value="PAR1">1</option>
                                        <option name="" value="PAR2">2</option>
                                        <option name="" value="PAR3">3</option>
                                        <option name="" value="PAR4">4</option>
                                    </select>
                                </div>
                                <div class="flexBetween billOpject"><label for="">PARTNER</label><select>
                                        <option>choose PARTNER</option>
                                        <option name="" value="PAR1">1</option>
                                        <option name="" value="PAR2">2</option>
                                        <option name="" value="PAR3">3</option>
                                        <option name="" value="PAR4">4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="billInputsRight">
                                <div class="flexBetween billOpject"><label for="">PAYMENT AMOUNT</label><input
                                        type="text"></div>
                                <div class="flexBetween billOpject"><label for="">PAYMENT JOURNAL</label><select>
                                        <option>choose PAYMENT JOURNAL</option>
                                        <option name="" value="J1">JOURNAL1</option>
                                        <option name="" value="J2">JOURNAL2</option>
                                    </select>
                                </div>
                                <div class="flexBetween billOpject"><label for="">CURRENCY</label><select>
                                        <option>choose CURRENCY</option>
                                        <option name="" value="CUR1">CURRENCY1</option>
                                        <option name="" value="CUR2">CURRENCY2</option>
                                    </select>
                                </div>
                                <div class="flexBetween billOpject"><label for="">PAYMENT DETAILS</label><textarea
                                        rows="4"></textarea></div>
                                <div class="flexBetween billOpject"><label for="">DELVIRY RECEIPT</label><textarea
                                        rows="4"></textarea></div>
                                <div class="flexBetween billOpject"><label for="">CHOOSE IMAGE</label><input
                                        type="file"></div>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- LeftPart -->


                <div class="rightPart"></div>

            </div>
        </form>
    </section>  
    
    
    
<div class="hiddenAllItems"></div>
@include('user.includes.js')
</body>

</html>