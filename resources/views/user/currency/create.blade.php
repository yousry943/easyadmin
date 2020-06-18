<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>CURRENCY FORM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
  @include('user.includes.css')
</head>

<body>

  @include('user.includes.header')

    <section class="site-data-container accountingForm">
        <div class="site-data-wrapper">
            <div class="data-title-search-container">
                <div class="data-title-wrapper breadcrumb-wrapper">
                    <div class="pageName">
                        <span><a href="{{url('/createcurrency')}}">CURRENCY /</span></a><span>NEW</span>
                    </div>
                </div>


            </div>
        </div>

        <div class="site-sections-wrapper flex">
            <div class="leftPart">
                <div class="box-data-container">
                  <form action="{{url('/addcurrency')}}" method="post">
              {{csrf_field()}}
              <div class="bagntion flex">
                  <div class="add-item-btn">
                    <button type="submit" class="save">
                          Send      </button>

                  </div>
                  <div class="add-item-btn">
                      <!-- <span class="discard">Discard</span> -->

                          <button class="discard">Discard</button>


                  </div>
              </div>

                   <div class="billInputs flexBetween">
                        <div class="billInputsLeft">

                                <div class="flexBetween billOpject"><label for="">Abbreviation</label>
                                <input type="text" name="Abbreviation" placeholder="Abbreviation">
                                @if ($errors->has('Abbreviation'))
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $errors->first('Abbreviation') }}</strong>
                                    </span>
                                @endif
                                </div>
                                <div class="flexBetween billOpject"><label for="">Symbol</label>
                                <input type="text" name="Symbol" placeholder="Symbol">
                                @if ($errors->has('Symbol	'))
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $errors->first('Symbol') }}</strong>
                                    </span>
                                @endif
                                </div>

                        </div>
                        <div class="billInputsRight">

                <div class="flexBetween billOpject">
                  <label for="">Currency name</label>
                  <input type="text" name="Currency_name" placeholder="Currency name">
                 

                 
                               @if ($errors->has('Currency_name'))
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $errors->first('Currency_name') }}</strong>
                                    </span>
                                @endif
            
                </div>

                
                                <div class="flexBetween billOpject"><label for="">Country</label>
                                <input type="text" name="Country" placeholder="Country">
                                @if ($errors->has('Country	'))
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $errors->first('Country') }}</strong>
                                    </span>
                                @endif
                               

                            
                              

                        </div>
                     </div>
                   </div>
                  
               
  </form> </div>
            </div><!-- LeftPart -->


            <div class="rightPart"></div>

        </div>
    </section>
    <div class="hiddenAllItems"></div>
 @include('user.includes.js')
</body>

</html>
