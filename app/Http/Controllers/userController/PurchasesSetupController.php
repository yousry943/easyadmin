<?php

namespace App\Http\Controllers\userController;

use App\Purchases_Setup;
use Illuminate\Http\Request;
use App\chartOfAccount;
use App\Http\Controllers\Controller;

class PurchasesSetupController extends Controller
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
        return view('user.setup.Purchases.create')->with('chartOfAccounts',$chartOfAccounts);
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

        Purchases_Setup::create($request->all());

        return redirect('Purchases_Setup');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Purchases_Setup  $purchases_Setup
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Purchases_Setup  $purchases_Setup
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $Purchases_Setups = Purchases_Setup::find($id);
        // dd($Inventory_Setup);
        $chartOfAccounts = chartOfAccount::all();

        return view('user.setup.Purchases.create',compact('chartOfAccounts','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Purchases_Setup  $purchases_Setup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $Inventory_Setup = Purchases_Setup::findOrFail($id);


          $input = $request->all();

          $Inventory_Setup->fill($input)->save();

          return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Purchases_Setup  $purchases_Setup
     * @return \Illuminate\Http\Response
     */
    public function destroy(Purchases_Setup $purchases_Setup)
    {
        //
    }
}
