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
       

        <div class="site-sections-wrapper flex">
            <div class="leftPart">
                <div class="box-data-container">
                  <form action="{{url('/journal_entrie/update/'.$journal->id)}}" method="post">

                    {{csrf_field()}}
                    <div class="bagntion flex">
                        <div class="add-item-btn">
                            <button type="submit" class="save">
                                Save      </button>
                                <button class="discard" type="reset">Discard</button>
                        </div>
                    </div>

                   <div class="billInputs flexBetween">
                        <div class="billInputsLeft">

                                <div class="flexBetween billOpject"><label for="">REFRENCE</label>
                                <input type="text" name="refrence" value="{{$journal->refrence}}" require ></div>
                                @if ($errors->has('refrence'))
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $errors->first('refrence') }}</strong>
                                    </span>
                                @endif
                                <div class="flexBetween billOpject"><label for="">DATE</label>
                                <input type="text" name="date" value="{{$journal->date}}" require></div>
                                @if ($errors->has('date'))
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $errors->first('date') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="billInputsRight">

                                <div class="flexBetween billOpject"><label for="">SUMMARY</label>
                                <textarea rows="4" name="summary"  require>{{$journal->summary}}</textarea></div>
                                @if ($errors->has('summary'))
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $errors->first('summary') }}</strong>
                                    </span>
                                @endif
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
                                   
                                </th>
                            </thead>
                            <tbody class="bodySelection">
                             
                            @foreach($journals as  $jour)
                                <tr class="accounts">
                                    <td>
                                    <select   name="chartOfAccount_id[]">
                                       


                                       @foreach($chartOfAccounts as $chartOfAccount)
   
                                                       <option value="{{$chartOfAccount->id}}" 
                                                           
                                                       
                                                       @if($journal->chartOfAccount_id == $chartOfAccount->id)
                                                       <?php echo 'selected' ?>
                                                       @endif
                                                       
                                                       >
                                                       
                                                       {{$chartOfAccount->title}}
   
                                                       </option>
                                       @endforeach
                                           </select>
                                        
                                    </td>
                                    <td>
                                        <input type="text" name="Description[]" value="{{$jour->Description}}">
                                      
                                   </td>
                               
                                    <td><input type="number" name="Debit[]" value="{{$jour->Debit}}" class="debitInput" placeholder="0.00">
                                     
                                   </td>
                                    <td><input type="number" name="Credit[]" value="{{$jour->Credit }}" class="creditInput" placeholder="0.00">
                                   
                                    <td><button type="button" class="deleteAccountRow d-none"><i class="fas fa-trash-alt"></i></button></td>
                            </tr>

                            @endforeach
                            </tbody>
                            <tfooter>
                                    <tr class="accounts">
                                            <td>
                                            </td>
                                            <td>total</td>
                                            <td class="totaldebitText"></td>
                                            <td class="totalcreditText" ></td>
                                            <td>{{$journal->total}}</td>
                                        </tr>
                                        @if ($errors->has('totalDebit'))
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $errors->first('totalDebit') }}</strong>
                                    </span>
                                @endif
                            </tfooter>
                            
                           
                        </table>
                        <input name="totalDebit" class="d-none" id="totaldebit" type="text" value="{{$journal->summary}}">
                        <input name="totalCredit" class=" d-none" id="totalcredit" type="text" value="{{$journal->summary}}">
                        
                        <!-- <button type="button" class="addMoreInputs">+ add line</button> -->

                </div>
                </div>

            </div><!-- LeftPart -->
  </form>

            <div class="rightPart"></div>

        </div>
    </section>
    <div class="hiddenAllItems"></div>
 @include('user.includes.js')
</body>

</html>