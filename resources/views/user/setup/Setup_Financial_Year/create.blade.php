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
      <form action="{{url('/setup_financial_year/update/1')}}" method="POST">
{{csrf_field()}}
            <div class="site-data-wrapper">
                <div class="data-title-search-container">
                    <div class="data-title-wrapper breadcrumb-wrapper">
                        <div class="pageName">
                            <span><a href="{{url('/setup_financial_year/update/1')}}">FISCAL YEAR /</span></a><span>NEW</span>
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

                                    <div class="flexBetween billOpject">
                                      <label for="">begin</label>
                                      <input type="date" name="Begin" placeholder="begain date">
                                    </div>
                                    <div class="flexBetween billOpject"><label for="">is closed</label>
                                      <select name="Is_Closed">
                                            <option disabled>y/n</option>
                                            <option  value="yes">yes</option>
                                            <option  value="no">no</option>
                                        </select></div>
                                </div>
                                <div class="billInputsRight">
                                    <div class="flexBetween billOpject">
                                      <label for="">end</label>
                                      <input name="End" type="date"
                                                placeholder="end date"></div>
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
