<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>TAX FORM</title>
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
                        <span><a href="{{url('/createtax')}}">TAX /</span></a><span>NEW</span>
                    </div>
                </div>


                <div class="site-sections-wrapper flex">
            <div class="leftPart">
                <div class="box-data-container">
                  <form action="{{url('/addtax')}}" method="post">
              {{csrf_field()}}
              <div class="bagntion flex">
                  <div class="add-item-btn">
                    <button type="submit" class="save">
                          Send      </button>
                          <button class="discard">Discard</button>
                  </div>
              </div>
        <div class="site-sections-wrapper flex">
            <div class="leftPart">
                <div class="box-data-container">
                   <div class="billInputs flexBetween">
                        <div class="billInputsLeft">
                            
                                <div class="flexBetween billOpject"><label for="">NAME</label><input type="text" name = "name" placeholder="NAME"></div>
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                <div class="flexBetween billOpject"><label for="">DEFAULT RATE</label><input type="text" name = "rate"  placeholder="DEFAULT RATE"></div>
                                @if ($errors->has('rate'))
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $errors->first('rate') }}</strong>
                                    </span>
                                    @endif
                           
                        </div>
                        <div class="billInputsRight">
                            <form action="">
                                <div class="flexBetween billOpject"><label for="">DESCRIPTION</label><textarea rows="4" name = "description" placeholder="DESCRIPTION"></textarea></div>
                                @if ($errors->has('description'))
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                    @endif
                            </form>
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