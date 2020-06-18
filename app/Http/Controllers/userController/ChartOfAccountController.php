<?php

namespace App\Http\Controllers\userController;

use App\chartOfAccount;
use App\journal_datas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ChartOfAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
  {
    $categories = chartOfAccount::where('parent_id', '=', 0)->with('get_jornal')->get();

    $allCategories = chartOfAccount::where('parent_id', '=', 0)->with('get_jornal')->get();
  


  //  $amount =   DB::select('select * from chart_of_accounts where parent_id = 0 and ', [1]);
  //   $totalAmount = 0;
  //   $count = count( $allCategories[0]->childs);

  //   for($i = 0; $i < $count ; $i++ ){
  //   $totalAmount +=  $allCategories[$i]->childs[$i]->amount;
  //   echo $allCategories[$i]->childs[$i]->amount;
  // }

  //   dd($totalAmount);
    return view('user.chartOfAccount.index',compact('categories','allCategories'));
  }


  public function  tree ($folderid)
  {
    $categories = chartOfAccount::where('parent_id', '=', $folderid)
    ->with('get_jornal')->get();
    // dd($categories);
    if($categories->isEmpty())
    {

      $categories = chartOfAccount::where('id', '=', $folderid)
      ->with('get_jornal')->get();
    }
     // dd($categories);
    return view('user.chartOfAccount.tree',compact('categories'));
  }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $categories = chartOfAccount::where('parent_id', '=', 0)->with('get_jornal')->get();

      $chartOfAccounts = chartOfAccount::where('parent_id', '=', 0)->with('get_jornal')->get();

<<<<<<< HEAD
      $allchartOfAccounts = chartOfAccount::all();



=======
    $allchartOfAccounts =  chartOfAccount::all();
>>>>>>> bb7289bcf1e7a134472cfd9c8fa9538686b5a406
      return view('user.chartOfAccount.create',compact('chartOfAccounts','allchartOfAccounts','categories'));


        // return view('user.chartOfAccount.create',compact('chartOfAccounts','allchartOfAccounts'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
        ]);

       $parent;
        $input = $request->all();
        $input['parent_id'] = empty($input['parent_id']) ? 0 : $input['parent_id'];
        
        if($input['parent_id'] !== 0){
          chartOfAccount::where('id','=',$input['parent_id'])->increment('amount',$input['amount']);
          $parent = chartOfAccount::where('id','=',$input['parent_id'])->select('parent_id')->get();
        
            while($parent[0]->parent_id !== 0)
            {
              chartOfAccount::where('id','=',$parent[0]->parent_id)->increment('amount',$input['amount']);
              $parent =   chartOfAccount::where('id','=',$parent[0]->parent_id)->select('parent_id')->get();
              if(!isset($parent[0]->parent_id)){
                
                break;
              }
            }
          }
          
         
         

  
        chartOfAccount::create($input);

       

        return back()->with('success', 'New chartOfAccount added successfully.');

    }
    /**
     * Display the specified resource.
     *
     * @param  \App\chartOfAccount  $chartOfAccount
     * @return \Illuminate\Http\Response
     */
    public function show(chartOfAccount $chartOfAccount)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\chartOfAccount  $chartOfAccount
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $chartOfAccounts = chartOfAccount::find($id);
      $allchartOfAccounts = chartOfAccount::all();

      return view('user.chartOfAccount.edit',compact('chartOfAccounts','allchartOfAccounts','id'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\chartOfAccount  $chartOfAccount
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {



      $chartOfAccount = chartOfAccount::findOrFail($id);


        $input = $request->all();

        $chartOfAccount->fill($input)->save();
        return redirect('/chartOfAccounts');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\chartOfAccount  $chartOfAccount
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

  $journal_datas = journal_datas::where('chartOfAccount_id', '=', $id)->first();
if ($journal_datas === null) {
  $chartOfAccount = chartOfAccount::find($id);
  $chartOfAccount->delete();
  return redirect('/chartOfAccounts');
}else{
  return 'please  delete  jornal first ';
}


    }


    public function getdata($id)
    {
      $chartOfAccount = chartOfAccount::find($id)->childs()->get();
      $returnHTML = view('user.chartOfAccount.contentajax')->with('allCategories', $chartOfAccount)->render();
      
      return response()->json(array('success' => true, 'html'=>$returnHTML));

    }
}
