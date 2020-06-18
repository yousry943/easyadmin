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

                </div>


            </div>
        </div>

        <div class="site-sections-wrapper flex">
            <div class="leftPart">
                <div class="box-data-container">
                  <form action="{{url('/updatecurrency') . '/' .$currency->id }}" method="post">
              {{csrf_field()}}
              <div class="bagntion flex">
                  <div class="add-item-btn">
                    <button type="submit" class="save">
                          Save      </button>
                  </div>
                  <div class="add-item-btn">
                      <button class="discard">Discard</button>
                  </div>
              </div>

                   <div class="billInputs flexBetween">
                        <div class="billInputsLeft">

                                <div class="flexBetween billOpject"><label for="">Abbreviation</label>
                                <input type="text" name="Abbreviation"  value = "{{$currency->Abbreviation}}" required>
                                @if ($errors->has('Abbreviation'))
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $errors->first('Abbreviation') }}</strong>
                                    </span>
                                @endif
                                <span><i class="fas fa-caret-down"></i></span></div>
                                <div class="flexBetween billOpject"><label for="">Symbol	</label>
                                <input type="text" name="Symbol" value = "{{$currency->Symbol}}">
                                @if ($errors->has('Symbol'))
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $errors->first('Symbol') }}</strong>
                                    </span>
                                @endif
                                <span><i class="fas fa-caret-down"></i></span></div>

                        </div>
                        <div class="billInputsRight">

                <div class="flexBetween billOpject">
                  <label for="">Currency_name</label>
                  <input type="text" name="Currency_name" value = "{{$currency->Currency_name}}">



                               @if ($errors->has('Currency_name'))
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $errors->first('Currency_name') }}</strong>
                                    </span>
                                @endif

                </div>


                                <div class="flexBetween billOpject"><label for="">Country	</label>
                                <input type="text" name="Country" value = "{{$currency->Country}}">
                                @if ($errors->has('Country'))
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $errors->first('Country') }}</strong>
                                    </span>
                                @endif


<!-- 


                                <span><i class="fas fa-caret-down"></i></span></div>
                                <div class="flexBetween billOpject"><label for="">created_at	</label>
                                <input type="datetime" name="created_at" value = "{{$currency->created_at}}">
                                @if ($errors->has('created_at	'))
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $errors->first('created_at	') }}</strong>
                                    </span>
                                @endif


                                <span><i class="fas fa-caret-down"></i></span></div>
                                <div class="flexBetween billOpject"><label for="">updated_at	</label>
                                <input type="datetime" name="updated_at" value = "{{$currency->updated_at}}">
                                @if ($errors->has('updated_at	'))
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $errors->first('updated_at	') }}</strong>
                                    </span>
                                @endif



                        </div>
</div>
                   </div>

                </div> -->
  </form>
            </div><!-- LeftPart -->


            <div class="rightPart"></div>

        </div>
    </section>
    <div class="hiddenAllItems"></div>
 @include('user.includes.js')
</body>

</html>
