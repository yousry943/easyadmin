<?php

namespace App\Http\Controllers\userController;

use App\setup_financial_year;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\chartOfAccount;


class SetupFinancialYearController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('user.setup.Setup_Financial_Year.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //
        // $this->validate($request,[
        //
        //     'code' => 'required',
        //     'name' => 'required',
        //     'desc'  =>   'required',
        //     'serial' => 'required',
        //     'location' =>  'required',
        //     'op_pa' => 'required',
        //     'part' => 'required',
        //     'account' => 'required'
        //
        //
        // ]);

        setup_financial_year::create($request->all());

        return redirect('setup_financial_year');
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\setup_financial_year  $setup_financial_year
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        //
        $Purchases_Setups = setup_financial_year::find($id);
        // dd($Inventory_Setup);
        $chartOfAccounts = chartOfAccount::all();

        return view('user.setup.Setup_Financial_Year.create',compact('chartOfAccounts','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\setup_financial_year  $setup_financial_year
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {

        //
     $Inventory_Setup = setup_financial_year::findOrFail($id);



          $input = $request->all();
    

          $Inventory_Setup->fill($input)->save();


          return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\setup_financial_year  $setup_financial_year
     * @return \Illuminate\Http\Response
     */
    public function destroy(setup_financial_year $setup_financial_year)
    {
        //
    }
}
