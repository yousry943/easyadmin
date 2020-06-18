<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>JOURNAL FORM</title>
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
                        <span><a href="{{url('/journal_entrie/create')}}">JOURNAL /</span></a><span>NEW</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-sections-wrapper flex">
            <div class="leftPart">
                <div class="box-data-container">
                  <form action="{{url('/journal_entrie/store')}}" method="post">
              {{csrf_field()}}
              <div class="bagntion flex">
                  <div class="add-item-btn">
                    <button type="submit" class="save">
                          Send      </button>
                          <button class="discard" type="reset">Discard</button>
                  </div>
              </div>

                   <div class="billInputs flexBetween">
                        <div class="billInputsLeft">

                                <div class="flexBetween billOpject"><label for="">REFRENCE</label>
                                <input type="text" name="refrence" required placeholder="REFRENCE">
                                @if ($errors->has('refrence'))
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $errors->first('refrence') }}</strong>
                                    </span>
                                @endif
                                </div>
                                <div class="flexBetween billOpject"><label for="">DATE</label>
                                <input type="text" name="date" id="jDate" value="">
                                @if ($errors->has('date'))
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $errors->first('date') }}</strong>
                                    </span>
                                @endif 
                                
                            </div>

                        </div>
                        <div class="billInputsRight">

                <div class="flexBetween billOpject">
                  <label for="">SUMMARY</label>
                  <textarea rows="4" name="summary" required placeholder="SUMMARY">

                  </textarea>
                               @if ($errors->has('summary'))
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $errors->first('summary') }}</strong>
                                    </span>
                                @endif
                  
                </div>

                <div class="flexBetween billOpject">
                  <label for="">Currency</label>

                  <select  name="Currency_id" required>
                               @if ($errors->has('Currency_id'))
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $errors->first('Currency_id') }}</strong>
                                    </span>
                                @endif
                    @foreach($Currencys as $Currency)

                                  <option value="{{$Currency->id}}">
                                    {{$Currency->Currency_name}}
                                  </option>
                    @endforeach

                  </select>
                  
                </div>




                        </div>



                   </div>
                   <div class="addlinetable">

                        <table>
                            <thead>
                                <tr>
                                    <th>
                                        Account
                                    </th>
                                    <th>
                                        Description
                                    </th>
                                    <th>
                                        Debit
                                    </th>
                                    <th>
                                        Credit
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                </th>
                            </thead>
                            <tbody class="bodySelection">
                                <tr class="accounts repeatedRow">
                                    <td>

                                        <select   name="chartOfAccount_id[]">

                              @foreach($chartOfAccounts as $chartOfAccount)

                                            <option value="{{$chartOfAccount->id}}">
                                              {{$chartOfAccount->title}}
                                            </option>
                              @endforeach
                                        </select>
                                    </td>
                                    <td><input type="text" name="Description[]">

                                        </td>
                                            <td><input type="number"   name="Debit[]" class="debitInput accountType" placeholder="0.00">   
                                        </td>
                                       <td>
                                           <input type="number"  name="Credit[]" class="creditInput accountType" placeholder="0.00">
                                       <td>
                                        <button type="button" class="deleteAccountRow d-none"><i class="fas fa-trash-alt"></i></button></td>
                            </tr>
                            </tbody>
                            <tfooter>
                                    <tr class="accounts">
                                            <td>
                                            </td>
                                            <td>total</td>
                                            <td class="totaldebitText"></td>
                                            <td class="totalcreditText" ></td>
                                        </tr>
                                   @if ($errors->has('totalDebit'))
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $errors->first('totalDebit') }}</strong>
                                    </span>
                                    @endif
                            </tfooter>
                        </table>
                        <input name="totalDebit" class="d-none" id="totaldebit" type="text">
                        <input name="totalCredit" class=" d-none" id="totalcredit" type="text">
                        <button type="button" class="addMoreInputs add-line">+ add line</button>

                </div>
                </div>
  </form>
            </div><!-- LeftPart -->


            <div class="rightPart"></div>

        </div>
    </section>
    <div class="hiddenAllItems"></div>
 @include('user.includes.js')
</body>

</html>
