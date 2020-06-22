<?php

namespace App\Http\Controllers\userController;

use App\Inventory_Setup;
use Illuminate\Http\Request;
use App\chartOfAccount;
use App\Http\Controllers\Controller;

class InventorySetupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Inventory_Setup= Inventory_Setup::with('get_To_Location','get_From_Location')->get();
         // dd($Inventory_Setup);
              return view('user.Inventory_Setup.index',compact('Inventory_Setup'));
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
        return view('user.setup.Inventory_Setup.create')->with('chartOfAccounts',$chartOfAccounts);
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

        Inventory_Setup::create($request->all());

        return redirect('/home');
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Inventory_Setup  $inventory_Setup
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $Inventory_Setups = Inventory_Setup::find($id);
        // dd($Inventory_Setup);
        $chartOfAccounts = chartOfAccount::all();

        return view('user.setup.Inventory_Setup.create',compact('chartOfAccounts','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Inventory_Setup  $inventory_Setup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $Inventory_Setup = Inventory_Setup::findOrFail($id);


          $input = $request->all();

          $Inventory_Setup->fill($input)->save();

          return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Inventory_Setup  $inventory_Setup
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inventory_Setup $inventory_Setup)
    {
        //
        $Inventory_Setups = Inventory_Setup::find($id);
        $Inventory_Setups->delete();
        return redirect('Inventory_Setup');
    }
}
