<?php

namespace App\Http\Controllers\userController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\wherehouse;
use App\location;
use Helper;
class WherehouseController extends Controller
{
    public function index()
    {
        $wherehouse = wherehouse::all();

        return view('user.wherehouse.index',compact('wherehouse'));
    }

    public function create()
    {
        $locations = location::all();
        return view('user.wherehouse.create')->with('locations',$locations);
    }

    public function store(Request $request)
    {



        // $this->validate($request,[
        //
        //     'code' => 'required',
        //     'name' => 'required',
        //     'desc'  =>   'required',
        //     'serial' => 'required',
        //     'location' =>  'required',
        //     'op_pa' => 'required',
        //     'part' => 'required',
        //     'account' => 'required',
        //     'contact_delviery' => 'required',
        //     'address' => 'required',
        //     'tel' => 'required',
        //     'fax' => 'required',
        //     'email' => 'required',
        //
        //

        // ]);
        $wherehouse = new wherehouse;
        $wherehouse->code = $request['code'];
        $wherehouse->name = $request['name'];
        $wherehouse->desc = $request['desc'];
        $wherehouse->serial = $request['serial'];
        $wherehouse->contact_delviery = $request['contact_delviery'];
        $wherehouse->address = $request['address'];
        $wherehouse->tel = $request['tel'];
        $wherehouse->second_tel = $request['second_tel'];
        $wherehouse->fax = $request['fax'];
        $wherehouse->email = $request['email'];
        $wherehouse->oppening_balance = $request['oppening_balance'];
     
     //    $wherehouse->image = Helper::uploadImage(
     //     $request->file('img'),
     //     'uplodes' .DIRECTORY_SEPARATOR. 'wherehouse_image' .DIRECTORY_SEPARATOR
     // );
        $wherehouse->save();
        return redirect('wherehouse');
    }


    public function edit($id)
    {
        //
        $wherehouses = wherehouse::find($id);
        //dd($wherehouses);
        $locations = location::all();

        return view('user.wherehouse.edit',compact('wherehouses','locations'));
    }

    public function update(Request $request,$id)
    {
        //
        $wherehouse = wherehouse::find($id);
        $wherehouse->code = $request['code'];
        $wherehouse->name = $request['name'];
        $wherehouse->desc = $request['desc'];
        $wherehouse->serial = $request['serial'];
        $wherehouse->contact_delviery = $request['contact_delviery'];
        $wherehouse->address = $request['address'];
        $wherehouse->tel = $request['tel'];
        $wherehouse->second_tel = $request['second_tel'];
        $wherehouse->fax = $request['fax'];
        $wherehouse->email = $request['email'];
        $wherehouse->oppening_balance = $request['oppening_balance'];
        $wherehouse->update();
        return redirect('wherehouse');


    }


    public function destroy($id)
    {
        //
        $wherehouse = wherehouse::find($id);
        $wherehouse->delete();
        return redirect('wherehouse');
    }
}
