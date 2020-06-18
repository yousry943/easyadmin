    <!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>UNIT OF MEASUREMENT FORM</title>
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
                        <span><a href="{{url('/unit')}}">MEASURE UNITS /</span></a><span>NEW</span>
                    </div>
                </div>


                <div class="site-sections-wrapper flex">
            <div class="leftPart">
                <div class="box-data-container">
                  <form action="{{url('/addunit')}}" method="post">
              {{csrf_field()}}
              <div class="bagntion flex">
                  <div class="add-item-btn">
                    <button type="submit" class="save">
                          Send      </button>
                  </div>
                  <div class="add-item-btn">
                      <button class="discard">Discard</button>
                  </div>
              </div>

              <div class="site-sections-wrapper flex">
            <div class="leftPart">
                <div class="box-data-container">
                   <div class="billInputs flexBetween">
                        <div class="billInputsLeft">
                                <div class="flexBetween billOpject"><label for="">UNIT NAME</label><input type="text" name = "unit"></div>
                                @if ($errors->has('unit'))
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $errors->first('unit') }}</strong>
                                    </span>
                                    @endif
                                <div class="flexBetween billOpject"><label for="">DESCRIPTION</label><input type="text"  name = "description"></div>
                        </div>
                        <div class="billInputsRight">
                                <div class="flexBetween billOpject"><label for="">DECIMALS</label><input type="number"  name = "decimals"></div>
                                @if ($errors->has('decimals'))
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $errors->first('decimals') }}</strong>
                                    </span>
                                    @endif
                                <div class="flexBetween billOpject"><label for="">CONVERSION</label><input type="text"  name = "conversion"></div>
                                @if ($errors->has('conversion'))
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $errors->first('conversion') }}</strong>
                                    </span>
                                    @endif
                        </div>
                        
                   </div>
                </div>
                
            </div><!-- LeftPart -->   
            <div class="rightPart"></div>

</div>
</section>
<div class="hiddenAllItems"></div>
@include('user.includes.js')
</body>

</html>