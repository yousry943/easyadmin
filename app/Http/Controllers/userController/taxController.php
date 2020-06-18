<?php

namespace App\Http\Controllers\userController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\tax;

class taxController extends Controller
{
    public function index()
    {
       $taxes = tax::all();
     

       return view('user.taxes.index')->with('taxes',$taxes);
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.taxes.create');
    }

    public function store(Request $request)
    {

        $this->validate($request,[

            'name' => 'required',
            'description' => 'required',
            'rate'  =>   'required'
           
           
        ]);

        $tax = new tax;
        $tax->name = $request['name'];
        $tax->description = $request['description'];
        $tax->rate = $request['rate'];
        $tax->save();
        return redirect('taxes');

    }

    public function edit(request $request ,$id)
    {
        $tax = tax::find($id);
        
        return view('user.taxes.edit')->with('tax',$tax);
      

    }


   public function update(Request $request, $id)
   {
       $tax = tax::find($id);
       $tax->name = $request->name;
       $tax->description = $request->description;
       $tax->rate = $request->rate;
       $tax->update();
       return redirect('taxes');
   }

   public function destroy($id)
   {
       $tax = tax::find($id);
       $tax->delete();
       return redirect('taxes');
   }
}
