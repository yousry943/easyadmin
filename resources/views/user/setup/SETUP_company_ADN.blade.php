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

    <section class="site-data-container accountingForm vendorForm">
        <form action="">
            <div class="site-data-wrapper">
                <div class="data-title-search-container">
                    <div class="data-title-wrapper breadcrumb-wrapper">
                        <div class="pageName">
                            <span>COMPANY</span>
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

                            <div class="billinputcontainer">
                                <div class="billInputsLeft">

                                    <div class="flexBetween billOpject"><label for="">company name</label><input type="text"
                                            placeholder="company name">
                                    </div>
                                    <div class="flexBetween billOpject"><label for="">company logo</label><input type="file">
                                    </div>
                                    <div class="flexBetween billOpject"><label for="">address</label><input type="text"
                                            placeholder="address">
                                    </div>
                                    <div class="flexBetween billOpject"><label for="">phone NO</label><input type="tel"
                                            placeholder="phone NO">
                                    </div>
                                    <div class="flexBetween billOpject"><label for="">email</label><input type="email"
                                            placeholder="email">
                                    </div>
                                </div>
                                <div class="billInputsRight">
                                    <div class="flexBetween billOpject"><label for="">website</label><input type="url"
                                            placeholder="website"></div>
                                    <div class="flexBetween billOpject"><label for="">tax id</label><input type="text"
                                            placeholder="tax id"></div>
                                    <div class="flexBetween billOpject"><label for="">company regestiry</label><input type="text"
                                            placeholder="company regestiry"></div>
                                    <div class="flexBetween billOpject"><label for="">default currency</label><select>
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
        </form>
    </section>
    <div class="hiddenAllItems"></div>
    @include('user.includes.js')
</body>

</html>