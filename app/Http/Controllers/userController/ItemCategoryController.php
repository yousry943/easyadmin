<?php

namespace App\Http\Controllers\userController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\item_category;
class ItemCategoryController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $item_categories = item_category::all();


       return view('user.itemcategory.index')->with('item_categories',$item_categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.itemcategory.create');
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

            'category_name' => 'required',
            


        ]);


        $item_categories = new item_category;
        $item_categories->category_name = $request['category_name'];
        $item_categories->category_description = $request['category_description'];
       
        $item_categories->save();
        return redirect('ItemCategory');

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
        $item_category = item_category::find($id);

        return view('user.itemcategory.edit')->with('item_category',$item_category);


    }

  
    public function update(Request $request, $id)
    {
        $item_category = item_category::find($id);
        $item_category->category_name = $request->category_name;
        $item_category->category_description = $request->category_description;
       
        $item_category->update();
        return redirect('ItemCategory');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Currency  $currency
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item_category = item_category::find($id);
        $item_category->delete();
        
         return redirect('ItemCategory');
    }
}
