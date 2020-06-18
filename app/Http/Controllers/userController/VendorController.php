<?php

namespace App\Http\Controllers\userController;
use App\Http\Controllers\Controller;
use App\vendor;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $vendors = vendor::all();
        return view('user.vendor.index')->with('vendors',$vendors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

          return view('user.vendor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request,[

            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'balance' => 'required',
            'address' => 'required',
            'website' => 'required',
            'country' => 'required',
            'zipcode' => 'required',
             'state' => 'required',
             'city' => 'required',
             
             'tax_id' => 'required',
            


        ]);

        $vendor = new vendor;
        $vendor->name = $request['name'];
        $vendor->email = $request['email'];
        $vendor->phone = $request['phone'];
        $vendor->balance = $request['balance'];
        $vendor->EndingBalance = $request['balance'];
        $vendor->address = $request['address'];
        $vendor->website = $request['website'];
        $vendor->country = $request['country'];
        $vendor->zipcode = $request['zipcode'];
        $vendor->state = $request['state'];
        $vendor->city = $request['city'];
        $vendor->tax_id = $request['tax_id'];
        $vendor->address_2 = $request['address_2'];
        $vendor->save();
        
        return redirect('vendor');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function show(vendor $vendor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function edit(request $request ,$id)
    {
        //
        $vendors = vendor::find($id);

        return view('user.vendor.edit')->with('vendors',$vendors);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function update(request $request ,$id)
    {
        
        
          $this->validate($request,[

            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'balance' => 'required',
            'address' => 'required',
            'website' => 'required',
            'country' => 'required',
            'zipcode' => 'required',
             'state' => 'required',
             'city' => 'required',
             'tax_id' => 'required',
            


        ]);

        //
        $vendor = vendor::find($id);
         $vendor->name = $request->name;
        $vendor->email = $request->email;
        $vendor->phone = $request->phone;
        $vendor->balance = $request->balance;
        $vendor->address = $request->address;
        $vendor->website = $request->website;
        $vendor->country = $request->country;
        $vendor->zipcode = $request->zipcode;
        $vendor->state = $request->state;
        $vendor->city = $request->city;
        $vendor->tax_id = $request->tax_id;
        $vendor->address_2 =$request->address_2;
        
        $vendor->update();
        return redirect('vendor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $vendor = vendor::find($id);
        $vendor->delete();
        return redirect('vendor');
    }
}
