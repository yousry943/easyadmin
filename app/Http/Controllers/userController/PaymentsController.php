<?php

namespace App\Http\Controllers\userController;

use App\Payments;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class PaymentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Payments = Payments::all();
        return view('user.Payments.index')->with('Payments',$Payments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('user.Payments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Payments::create($request->all());
        return redirect('Paymentses');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Payments  $payments
     * @return \Illuminate\Http\Response
     */
    public function show(Payments $payments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Payments  $payments
     * @return \Illuminate\Http\Response
     */
    public function edit(Payments $payments)
    {
        //

        $Payments = Payments::find($id);

        return view('user.Payments.edit')->with('Payments',$Payments);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Payments  $payments
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payments $payments)
    {
        //
        //
        $Payments = Payments::find($id);
        $Payments->name = $request->name;
        $Payments->description = $request->description;
        $Payments->rate = $request->rate;
        $Payments->update();
        return redirect('Payments');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Payments  $payments
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payments $payments)
    {
        //
        $Payments = Payments::find($id);
        $Payments->delete();
        return redirect('Payments');
    }
}
