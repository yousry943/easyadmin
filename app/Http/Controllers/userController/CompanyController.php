<?php

namespace App\Http\Controllers\userController;

use  App\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      return view('user.company.index');
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

      $Company = new Company();

        $Company::create($request->all());
        return redirect()->back();

        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Account_Setting  $account_Setting
     * @return \Illuminate\Http\Response
     */
    public function show(Account_Setting $account_Setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Account_Setting  $account_Setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Account_Setting $account_Setting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Account_Setting  $account_Setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Account_Setting $account_Setting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Account_Setting  $account_Setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Account_Setting $account_Setting)
    {
        //
    }
}
