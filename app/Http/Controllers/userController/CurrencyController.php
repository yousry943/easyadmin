<?php

namespace App\Http\Controllers\userController;

use App\Currency;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class CurrencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $currencies = Currency::all();


       return view('user.currency.index')->with('currencies',$currencies);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.currency.create');
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

            'Abbreviation' => 'required',
            'Symbol' => 'required',
            'Currency_name'  =>   'required',
            'Country' => 'required'
            


        ]);


        $currency = new Currency;
        $currency->Abbreviation = $request['Abbreviation'];
        $currency->Symbol = $request['Symbol'];
        $currency->Currency_name = $request['Currency_name'];
        $currency->Country = $request['Country'];
    
        $currency->save();
        return redirect('currency');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Currency  $currency
     * @return \Illuminate\Http\Response
     */
    public function show(Currency $currency)
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
        $currency = Currency::find($id);

        return view('user.currency.edit')->with('currency',$currency);


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
        $currency = Currency::find($id);
        $currency->Abbreviation = $request->Abbreviation;
        $currency->Symbol = $request->Symbol;
        $currency->Currency_name = $request->Currency_name;
        $currency->Country = $request->Country;

        $currency->update();
        return redirect('currency');
    }
    public function makeItDefault($id)
    {
        \DB::table('currencies')->update(['default' => 0]);
        $currency = Currency::find($id);
        $currency->default = 1;

        $currency->update();
        return redirect('currency');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Currency  $currency
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $currency = Currency::find($id);
        $currency->delete();
        return redirect('currency');
    }
}
