<?php

namespace App\Http\Controllers\userController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use  App\Company;
use App\User;
use App\VerifyUser;
class AddUserForCompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      if (\Auth::guard('web')->user()->can('Owner_CompanyPolicy.view')) {
       $users =  \Auth::user();

        $Companys = Company::where('user_id','=',$users->id)->get();
        return view('user.Add_User_For_Company.index',compact('Companys'));
      }

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

        $user = new User();


          $add_user =   $user::create([
             'name' => $request['name'],
             'email' => $request['email'],
             'company_id' => $request['company_id'],
             'verified' => '0',
             'user_type_id'=>'1',
             'password' => Hash::make($request['password']),
         ]);

         $verifyUser = VerifyUser::create([
      'user_id' => $add_user->id,
      'token' => str_random(40)
  ]);
          return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Add_user_For_Company  $add_user_For_Company
     * @return \Illuminate\Http\Response
     */
    public function show(Add_user_For_Company $add_user_For_Company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Add_user_For_Company  $add_user_For_Company
     * @return \Illuminate\Http\Response
     */
    public function edit(Add_user_For_Company $add_user_For_Company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Add_user_For_Company  $add_user_For_Company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Add_user_For_Company $add_user_For_Company)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Add_user_For_Company  $add_user_For_Company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Add_user_For_Company $add_user_For_Company)
    {
        //
    }
}
