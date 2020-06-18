<?php

namespace App\Http\Controllers\userController;

use App\Refrence_Code;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;


class RefrenceCodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $get_Refrence_code = Refrence_Code::where('model_name', '=', 'jornal')->get();

        $year = Carbon::now(); 
        $date_year = $year->year;
        $Refrence = $date_year.'-'.$get_Refrence_code->first()->start.'-'.uniqid();
           $new_start  = $get_Refrence_code->first()->start + 1;

          $Refrence_Code = Refrence_Code::find($get_Refrence_code->first()->id);
          $Refrence_Code->start = $new_start;

          $Refrence_Code->save();
dd($Refrence);


}





    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Refrence_Code  $refrence_Code
     * @return \Illuminate\Http\Response
     */
    public function show(Refrence_Code $refrence_Code)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Refrence_Code  $refrence_Code
     * @return \Illuminate\Http\Response
     */
    public function edit(Refrence_Code $refrence_Code)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Refrence_Code  $refrence_Code
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Refrence_Code $refrence_Code)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Refrence_Code  $refrence_Code
     * @return \Illuminate\Http\Response
     */
    public function destroy(Refrence_Code $refrence_Code)
    {
        //
    }
}
