<?php

namespace App\Http\Controllers\userController;
use App\location;
use App\wherehouse;
use Illuminate\Http\Request;
use App\items_locations;
use App\Http\Controllers\Controller;

class LocationController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $location = location::all();
         $locationWithItems = items_locations::all();

        return view('user.location.index')->with(['location'=> $location, 'locationWithItems' =>  $locationWithItems]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $wherehouse = wherehouse::all();
        return view('user.location.create')->with('wherehouse',$wherehouse);
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

            'code' => 'required',
            'name' => 'required'
            
            


        ]);


        $location = new location;
        $location->code = $request['code'];
        $location->name = $request['name'];
        $location->desc = $request['desc'];
        $location->wharehous_id = $request['wharehous_id'];
        
       
        $location->save();

        return redirect('location');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Currency  $currency
     * @return \Illuminate\Http\Response
     */
    public function show(location $location)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Currency  $currency
     * @return \Illuminate\Http\Response
     */
    public function edit(request $request ,$id)
    {
        $location = location::find($id);
        $wherehouse = wherehouse::all();
        return view('user.location.edit')->with(['location'=> $location, 'wherehouse' => $wherehouse  ]);


    }

  
    public function update(Request $request, $id)
    {
        $location = location::find($id);
        $location->code = $request->code;
        $location->name = $request->name;
        $location->desc = $request->desc;
        $location->wharehous_id = $request['wharehous_id'];
       
        $location->update();
        return redirect('location');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Currency  $currency
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $location = location::find($id);
        $location->delete();
        
         return redirect('location');
    }

}
