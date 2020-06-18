<?php

namespace App\Http\Controllers\userController;

use App\journal_entrie;
use App\journal_datas;
use Illuminate\Http\Request;
use App\chartOfAccount;
use App\Currency;
use Carbon\Carbon;
use Helper;

use App\Http\Controllers\Controller;


class JournalEntrieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


      $journal_entries= journal_entrie::with('get_chart','get_Currency')->get();

      return view('user.journal_entrie.index',compact('journal_entries'));

    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $chartOfAccounts = chartOfAccount::all();
        $Currencys = Currency::all();

        return view('user.journal_entrie.create',compact('chartOfAccounts','Currencys'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      // need front end update
        $this->validate($request,[

            'refrence' => 'required',
            'summary' => 'required',
            'date'  =>   'required',
            'totalDebit' => 'required',
            'chartOfAccount_id.*' =>  'required',
            'Currency_id' => 'required',
        ]);

        // $get_Refrence_code = Refrence_Code::where('model_name', '=', 'jornal')->get();
        //
        // $year = Carbon::now();
        // $date_year = $year->year;
        // $Refrence = $date_year.'-'.$get_Refrence_code->first()->start.'-'.uniqid();
        // $new_start  = $get_Refrence_code->first()->start + 1;
        //
        // $Refrence_Code = Refrence_Code::find($get_Refrence_code->first()->id);
        // $Refrence_Code->start = $new_start;




              $journal_entrie = new journal_entrie;

        	   $journal_entrie->refrence =  Helper::generateCode('journal');
              $journal_entrie->summary = $request['summary'];
              $journal_entrie->Currency_id = $request['Currency_id'];
              $journal_entrie->date = $request['date'];
              $journal_entrie->total=$request['totalDebit'];
              $journal_entrie->Resources = 'journal_entrie';
              $journal_entrie->save();
              $last_id =   \DB::getPdo()->lastInsertId();

// dd($last_id);


      $subject_count = count($request['chartOfAccount_id']);


    		for($i=0; $i < $subject_count; $i++){

                $journal_entrie_data = new journal_datas;
          $journal_entrie_data->journal_id	 =  $last_id ;


    	  $journal_entrie_data->chartOfAccount_id = $request['chartOfAccount_id'][$i];
          $journal_entrie_data->Description = $request['Description'][$i];

          if(!isset($request['Debit'][$i])){
            $journal_entrie_data->Debit = 0;
          }else{
          $journal_entrie_data->Debit =  $request['Debit'][$i];
          }
          if(!isset($request['Credit'][$i])){
            $journal_entrie_data->Credit = 0;
          }else{
          $journal_entrie_data->Credit =  $request['Credit'][$i];
          }


          $journal_entrie_data->save();
          // $Refrence_Code->save();



            }

        return redirect('journal_entrie');
        //->with('success', 'New chartOfAccount added successfully.');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\journal_entrie  $journal_entrie
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $journal = journal_entrie::find($id);
      $journal_data =  journal_datas::where('journal_id',$id)->get();
      $chartOfAccounts = chartOfAccount::all();
      $Currencys = Currency::all();
     return view('user.journal_entrie.single',compact('journal_data','chartOfAccounts','Currencys','journal'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\journal_entrie  $journal_entrie
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $journal = journal_entrie::find($id);
        $journals =  journal_datas::where('journal_id',$journal->id)->get();

        $chartOfAccounts = chartOfAccount::all();
        $Currencys = Currency::all();
       return view('user.journal_entrie.edit',compact('journals','chartOfAccounts','Currencys','journal'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\journal_entrie  $journal_entrie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      // dd($request);
         $this->validate($request,[

            'refrence' => 'required',
            'summary' => 'required',
            'date'  =>   'required',
            'totalDebit' => 'required',
            'chartOfAccount_id.*' =>  'required',
            'Currency_id' => 'required'
        ]);



              $journal_entrie = journal_entrie::find($id);
              $journal_entrie->update([
                'refrence' => $request['refrence'],
                'summary' => $request['summary'],
                'Currency_id' => $request['Currency_id'],
                'date' =>  $request['date'],
                'total' => $request['totalDebit']
              ]);





      $subject =  journal_datas::where('journal_id',$journal_entrie->id)->get();

    		for($i=0; $i < count($subject); $i++){
          $subject[$i]->update([
            'chartOfAccount_id'=> $request['chartOfAccount_id'][$i],
            'Description' => $request['Description'][$i],
            'Debit' =>  $request['Debit'][$i],
            'Credit' =>  $request['Credit'][$i]
          ]);


            }



            return redirect('journal_entrie');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\journal_entrie  $journal_entrie
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        journal_entrie::find($id)->delete();
        return redirect('journal_entrie');

    }
}
