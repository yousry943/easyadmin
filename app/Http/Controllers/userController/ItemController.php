<?php

namespace App\Http\Controllers\userController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\item;
use App\item_category;
use App\location;
use App\unit_of_measures;
use App\tax;
use App\Currency;
use App\chartOfAccount;
use App\wherehouse;
use App\items_locations;
use Helper;
class ItemController extends Controller
{
     public function index()
     {
            $items = item::all();
            //dd($items);



         return view('user.items.index')->with(['items'=> $items] );
     }

     public function create()
    {


        $categorys = item_category::all();
        $locations = location::with('wherehous')->get();
        //dd($locations);

        $units     = unit_of_measures::all();
        $taxs      = tax::all();
        $Currencys      = Currency::all();
        $chartOfAccount  = chartOfAccount::all();

        return view('user.items.create')->with( ['categorys' => $categorys ,
                                                 'locations' => $locations,
                                                 'units'     => $units ,
                                                 'taxs'      => $taxs ,
                                                 'chartOfAccount' => $chartOfAccount,
                                                 'Currencys'=>$Currencys
                                                 ]);
    }

    public function store(Request $request)
    {
        $this->validate($request,[

            'name' => 'required',

        ]);

// item type not found
        $item = new item;
        $item->currency_id = $request['curancy'];
        $item->code = $request['code'];
        $item->name = $request['name'];
        $item->Category_id = $request['Category_id'];
        $item->status_id = $request['status_id'];
        $item->desc = $request['desc'];
        $item->Units_Of_Measure_id = $request['Units_Of_Measure_id'];
        $item->Tax_id = $request['Tax_id'];
        $item->Serial_Number = $request['serial_number'];
        $item->Part_Number = $request['part_number'];
        $item->Location_id = 	$request['Location_id'];
        $item->Opening_Balance = 0;
        $item->price = $request['price'];

        $item->Quantity = $request['Quantity'];
        $item->ending_Quantity = $request['Quantity'];
        $item->ending_price = $request['price'];
        $item->ending_balance =$request['Opening_Balance']+($request['price']*$request['Quantity']) ;
        
        $item->image = Helper::uploadImage(
            $request->file('image'),
            'uplodes' .DIRECTORY_SEPARATOR.'items_image' .DIRECTORY_SEPARATOR
        );

       
 

        $item->save();
        $items_locations = new items_locations;

        $items_locations->location_id = $request['Location_id'];
        $items_locations->item_id     = \DB::getPdo()->lastInsertId();
        $items_locations->qnty        = $request['Quantity'];
        $items_locations ->save();
        return redirect('item');
    }


    public function edit($id)
    {
        $item = item::find($id);

        $categorys = item_category::all();
       $Currencys      = Currency::all();
        $locations = location::with('wherehous')->get();
        $units     = unit_of_measures::all();
        $taxs      = tax::all();
//        $chartOfAccount  = chartOfAccount::all();

        return view('user.items.edit')->with( [
        'categorys' => $categorys ,
        'locations' => $locations,
        'units'     => $units ,
         'taxs'      => $taxs ,
        'Currencys'=>$Currencys,

        'item' => $item
        ]);


    }

 public function update(Request $request, $id)
    {
        $item = item::find($id);
                      
     $item->currency_id = $request->curancy;
        $item->code = $request->code;
        $item->name = $request->name;
        $item->Category_id = $request->Category_id;
        $item->status_id = $request->status_id;
        $item->desc = $request->desc;
        $item->Units_Of_Measure_id = $request->Units_Of_Measure_id;
        $item->Tax_id = $request->Tax_id;
        $item->Serial_Number = $request->serial_number;
        $item->Part_Number = $request->part_number;
        $item->Location_id = 	$request->Location_id;
        $item->Opening_Balance =0;
        $item->price = $request->price;

        $item->Quantity = $request->Quantity;
        

        if($request->file('image')){
            $item->image = Helper::uploadImage(
                $request->file('image'),
                'uplodes' .DIRECTORY_SEPARATOR.'items_image' .DIRECTORY_SEPARATOR
            );


        }else{
            $item->image = $item->image;
        }

       




        $item->update();



        return redirect('item');
    }


public function destroy($id)
{

    $item = item::find($id);

    $item->delete();
    return redirect('item');

}

public function getItemsWithLocation($locationId)
{
    $items =  item::where('location_id','=',$locationId)->get();
    return view('user.items.location',compact('items'));
}


public function getRelatedItemsWithLocation($locationId)
{
    $items =  item::where('location_id',$locationId)->get();
    $returnHTML = view('user.items.locationItems')->with('items', $items)->render();
    return response()->json(array('success' => true, 'html'=>$returnHTML));
}

public function getItemAjaxforItemLOcationTransfer($id)
{
    $items =  item::find($id);

    $quantity  = $items->Quantity;
    $unit  = $items->unit->measure_unite;
    $desc  = $items->name;
    $price  = $items->ending_price;

    return response()->json(array('success' => true,'quantity' => $quantity,'unit' => $unit, 'desc' => $desc , 'price' => $price));
}




}
