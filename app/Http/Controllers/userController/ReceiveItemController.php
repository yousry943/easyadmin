<?php

namespace App\Http\Controllers\userController;
use App\Receive_Item;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\purchaseOrder;
use App\purchaseOrderDetails;
use App\journal_entrie;
use App\journal_datas;
use Carbon\Carbon;
use App\Refrence_Code;
use Helper;
use App\item;
use App\itemTranscation;
class ReceiveItemController extends Controller
{
   
    
    
    
    
    
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Receive_Items = Receive_Item::all();
//       
        return view('user.Receive_Item.index')->with('Receive_Items',$Receive_Items);
    }
    
    
    
    
    
    
    

    public function CreatReciveWithPurchase($id)
    {
        $purchaseOrder = purchaseOrder::find($id);
        $purchase_order_details=purchaseOrderDetails::where('purchase_order_id', '=', $id)->get();
        $recive_items=Receive_Item::where('purchase_order_id', '=', $id)->get();
        $check=count($recive_items);

        if($check==0){
        return view('user.Receive_Item.create')->with(['purchaseOrder' => $purchaseOrder, 'purchase_order_details' => $purchase_order_details ]);
    }
    else{return redirect('purchecedOrder')->withErrors(['this order receved', 'this order receved']);}
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        
        
        
        $purchase_order_details=purchaseOrderDetails::where('purchase_order_id', '=', $request['purchaseOrder'])->get();
        $count = count($purchase_order_details);
        
        
        $journal_entrie = new journal_entrie;
        $purchaseOrder = purchaseOrder::find($request['purchaseOrder']);
        $journal_entrie->refrence = helper::generateCode('jornal');
        $journal_entrie->summary =  "from Recive Items";
        $journal_entrie->Currency_id = $purchaseOrder->currency_id;
        $journal_entrie->date = Carbon::now();
        $journal_entrie->total=$purchaseOrder->total;
        $journal_entrie->Resources = $purchaseOrder->serial_number; //'from order purchase'
        $journal_entrie->save();

        $last_id =   \DB::getPdo()->lastInsertId();
        $journal_entrie_data = new journal_datas;
        $journal_entrie_data->journal_id	 =  $last_id ;
        $journal_entrie_data->chartOfAccount_id = 1; // get from setup
        $journal_entrie_data->Description = "from order purchase";
        $journal_entrie_data->save();
        
        
        
        
        
        for($i=0; $i < $count; $i++){
        $get_Refrence_code = Refrence_Code::where('model_name', '=', 'reciveItem')->get();
        
        
       $year = Carbon::now();
        $date_year = $year->year;
        $Refrence = $date_year.'-'.$get_Refrence_code->first()->start.'-'.uniqid();
        $new_start  = $get_Refrence_code->first()->start + 1;

        $Refrence_Code = Refrence_Code::find($get_Refrence_code->first()->id);
        $Refrence_Code->start = $new_start;
        
        $Receive_Items = new Receive_Item;
        $Receive_Items->refernce = $Refrence;
        $Receive_Items->quantity = $request['quanty'][$i];
        $Receive_Items->price = $request['price'][$i];
        $Receive_Items->vendor_id = $request['vendor'];
       
        $Receive_Items->item_id = $request['item'][$i];
        $Receive_Items->purchase_order_id = $request['purchaseOrder'];
        $Receive_Items->SCHEDUALE_DATE = date("y/m/d");
        $Receive_Items->OPERATION_TYPE = $request['type'];
        $Receive_Items->save();
            
        $itemTranscation = new itemTranscation;
        $itemTranscation->item_id = $request['item'][$i];
        $itemTranscation->date = date("y/m/d");
        $itemTranscation->Journal_Id = $last_id;
        $itemTranscation->deptquantity = $request['quanty'][$i];
        $itemTranscation->deptprice = $request['price'][$i]; 
        $itemTranscation->save();    
            
            
        $item = item::find($request['item'][$i]);
        $balance=$request['price'][$i]*$request['quanty'][$i];
        $itemquantity=$item->ending_Quantity+$request['quanty'][$i];
        $r=$item->ending_balance;
        $price=($balance+$r)/$itemquantity; 
        $ending=$price*$itemquantity;
        $trancation=$item->transcation+1;
        $item->ending_Quantity = $itemquantity;
        $item->ending_price = $price;
        $item->ending_balance = $ending;
        $item->transcation = $trancation;
        $item->update();
            
              }
       
        
        return redirect('purchecedOrder');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Receive_Item  $receive_Item
     * @return \Illuminate\Http\Response
     */
    public function show(Receive_Item $receive_Item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Receive_Item  $receive_Item
     * @return \Illuminate\Http\Response
     */
//    public function edit($id)
//    {
//        
//
//        $Receive_Item = Receive_Item::find($id);
//        // count($Receive_Item->purchase_order->purchaseOrderDetails);
//       $items = $Receive_Item->purchase_order->purchaseOrderDetails;
//    //    $itemsDetails = $Receive_Item->purchase_order->purchaseOrderDetails[0]->items[0]->name;
//    // $item->items[$counter]->Units_Of_Measure_id->unit
//    //    dd($itemsDetails);
//        return view('user.Receive_Item.edit')->with(['Receive_Item' => $Receive_Item, 'items' => $items  ]);
//    }
//
//    /**
//     * Update the specified resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @param  \App\Receive_Item  $receive_Item
//     * @return \Illuminate\Http\Response
//     */
//    public function update(Request $request, $id)
//    {
//        //
//        $Receive_Items = Receive_Item::find($id);
//        $Receive_Items->SCHEDUALE_DATE = $request['SCHEDUALE_DATE'];
//        $Receive_Items->OPERATION_TYPE = $request['OPERATION_TYPE'];
//        $Receive_Items->update();
//
//
//        // journal_entrie::updateOrCreate();
//
//        $journal_entrie = new journal_entrie;
//        $purchaseOrder = purchaseOrder::find($Receive_Items->purchase_order_id);
//        $journal_entrie->refrence = helper::generateCode('jornal');
//        $journal_entrie->summary =  "from Recive Items";
//        $journal_entrie->Currency_id = $purchaseOrder->currency_id;
//        $journal_entrie->date = Carbon::now();
//        $journal_entrie->total=$purchaseOrder->total;
//        $journal_entrie->Resources = $purchaseOrder->serial_number; //'from order purchase'
//        $journal_entrie->save();
//
//        $last_id =   \DB::getPdo()->lastInsertId();
//
//
//            $journal_entrie_data = new journal_datas;
//            $journal_entrie_data->journal_id	 =  $last_id ;
//
//
//            $journal_entrie_data->chartOfAccount_id = 1; // get from setup
//            $journal_entrie_data->Description = "from order purchase";
//
//        
//
//
//            $journal_entrie_data->save();
//                return redirect('reciveItem');
//
//    }
//
//    /**
//     * Remove the specified resource from storage.
//     *
//     * @param  \App\Receive_Item  $receive_Item
//     * @return \Illuminate\Http\Response
//     */
//    public function destroy($id)
//    {
//        //
//        $Receive_Items = Receive_Item::find($id);
//        $Receive_Items->delete();
//        return redirect('reciveItem');
//    }
}
