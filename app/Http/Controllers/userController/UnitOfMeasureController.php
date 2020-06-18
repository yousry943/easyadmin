<?php

namespace App\Http\Controllers\userController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\unit_of_measures;

class UnitOfMeasureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $measures = unit_of_measures::all();
       return view('user.unitofmeasures.index')->with('measures',$measures);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.unitofmeasures.create');
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

            'unit' => 'required',
            'description' => 'required',
            'decimals'  =>   'required',
            'conversion' => 'required'
            

        ]);


        $measure = new unit_of_measures;
        $measure->measure_unite = $request['unit'];
        $measure->measure_description = $request['description'];

        $measure->measure_decimal = $request['decimals'];
        $measure->measure_conversion = $request['conversion'];




        $measure->save();
        return redirect('unit');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Currency  $currency
     * @return \Illuminate\Http\Response
     */
    public function show(unit_of_measures $measure)
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
        $measure = unit_of_measures::find($id);

        return view('user.unitofmeasures.edit')->with('measure',$measure);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Currency  $currency
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $measure = unit_of_measures::find($id);
        $measure->measure_unite = $request->unit;
        $measure->measure_description = $request->description;
        $measure->measure_decimal = $request->decimals;
        $measure->measure_conversion = $request->conversion;

        $measure->update();
        return redirect('unit');
    }
 

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Currency  $currency
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $measure = unit_of_measures::find($id);
        $measure->delete();
        return redirect('unit');
    }
}


