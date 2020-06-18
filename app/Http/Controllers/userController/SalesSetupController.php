<?php

namespace App\Http\Controllers\userController;

use App\Sales_Setup;
use Illuminate\Http\Request;
use App\chartOfAccount;
use App\Http\Controllers\Controller;

class SalesSetupController extends Controller
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
        $chartOfAccounts = chartOfAccount::all();
        return view('user.setup.sales.create')->with('chartOfAccounts',$chartOfAccounts);
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

        Sales_Setup::create($request->all());

        return redirect('Sales_Setup');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sales_Setup  $sales_Setup
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sales_Setup  $sales_Setup
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $Sales_Setups = Sales_Setup::find($id);
        // dd($Inventory_Setup);
        $chartOfAccounts = chartOfAccount::all();

        return view('user.setup.sales.create',compact('chartOfAccounts','Sales_Setups','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sales_Setup  $sales_Setup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $Inventory_Setup = Sales_Setup::findOrFail($id);


          $input = $request->all();

          $Inventory_Setup->fill($input)->save();

          return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sales_Setup  $sales_Setup
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sales_Setup $sales_Setup)
    {
        //
    }
}
