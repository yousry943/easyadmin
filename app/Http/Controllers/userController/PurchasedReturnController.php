<?php

namespace App\Http\Controllers\userController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\item;
use App\journal_entrie;
use App\journal_datas;
use Helper;
use App\Refrence_Code;
use App\vendor;
use App\purchasedReturn;
use App\purchaseOrder;
use App\Receive_Item;
use App\itemTranscation;
use App\vendorTrancation;
use App\purchaseOrderDetails;
class PurchasedReturnController extends Controller
{
    //
     public function index()
    {
        //
        $purchasedReturn = purchasedReturn::all();

        return view('user.purchasedReturn.index')->with('purchasedReturn',$purchasedReturn);
    }
    
    
    
    
      public function ReturnPurchase($id)
    {
        $purchaseOrder = purchaseOrder::find($id);
        $purchase_order_details=purchaseOrderDetails::where('purchase_order_id', '=', $id)->get();
        $recive_items=Receive_Item::where('purchase_order_id', '=', $id)->get();
        $purchasedReturn=purchasedReturn::where('purchase_order_id', '=', $id)->get();
        $check=count($recive_items);
        $checkReturn=count($purchasedReturn);
        if ($checkReturn==0){
        if($check!=0){
        return view('user.purchasedReturn.e')->with(['purchaseOrder' => $purchaseOrder, 'purchase_order_details' => $purchase_order_details,'recive_items' => $recive_items]);
    }
         else{return redirect('purchecedOrder')->withErrors(['this order not receved', 'this order not receved']);}}
          else{
              
         return redirect('purchecedOrder')->withErrors(['this order returned', 'this order returned']);
          }
    }
    
    
    
    
    
    
  public function store(Request $request)
    {   
        $purchase_order_details=purchaseOrderDetails::where('purchase_order_id', '=', $request['purchaseOrder'])->get();
        $count = count($purchase_order_details);
        $purchaseOrder = purchaseOrder::find($request['purchaseOrder']);
        $journal_entrie = new journal_entrie;
       
        $journal_entrie->refrence = helper::generateCode('jornal');
        $journal_entrie->summary =  "from return order";
        $journal_entrie->Currency_id = $purchaseOrder->currency_id;
        $journal_entrie->date = Carbon::now();
        $journal_entrie->total=$purchaseOrder->total;
        $journal_entrie->Resources = $purchaseOrder->serial_number; //'from order purchase'
        $journal_entrie->save();

        $last_id =   \DB::getPdo()->lastInsertId();
        $journal_entrie_data = new journal_datas;
        $journal_entrie_data->journal_id =  $last_id ;
        $journal_entrie_data->chartOfAccount_id = 1; // get from setup
        $journal_entrie_data->Description = "from return order";
        $journal_entrie_data->save();
       
        
        for($i=0; $i < $count; $i++){
        $get_Refrence_code = Refrence_Code::where('model_name', '=', 'reciveItem')->get();
        
        
       $year = Carbon::now();
        $date_year = $year->year;
        $Refrence = $date_year.'-'.$get_Refrence_code->first()->start.'-'.uniqid();
        $new_start  = $get_Refrence_code->first()->start + 1;

        $Refrence_Code = Refrence_Code::find($get_Refrence_code->first()->id);
        $Refrence_Code->start = $new_start;
        
        $purchasedReturn = new purchasedReturn;
        $purchasedReturn->refernce = $Refrence;
        $purchasedReturn->quantity = $request['quanty'][$i];
        $purchasedReturn->price = $request['price'][$i];
        $purchasedReturn->vendor_id = $request['vendor'];
        $purchasedReturn->item_id = $request['item'][$i];
        $purchasedReturn->purchase_order_id = $request['purchaseOrder'];
        $purchasedReturn->SCHEDUALE_DATE = date("y/m/d");
        $purchasedReturn->save();
            
        $itemTranscation = new itemTranscation;
        $itemTranscation->item_id = $request['item'][$i];
        $itemTranscation->date = date("y/m/d");
        $itemTranscation->Journal_Id = $last_id;
        $itemTranscation->creditquantity = $request['quanty'][$i];
        $itemTranscation->creditprice = $request['price'][$i]; 
        $itemTranscation->descreption = 'ReturnOrder'; 
        $itemTranscation->save();    
            
        $vendorTrancation = new vendorTrancation;
      
            
            
        $item = item::find($request['item'][$i]);
        $balance=$request['price'][$i]*$request['quanty'][$i];
        $itemquantity=$item->ending_Quantity-$request['quanty'][$i];
        
        $endingbalance=$itemquantity*$item->ending_price;
         
        $vendorTrancation = new vendorTrancation;

        $vendorTrancation->vendor_id = $request['vendor'];
        $vendorTrancation->date = date("Y/m/d");
        $vendorTrancation->Journal_Id =$last_id;
        $vendorTrancation->dept=$balance;
        $vendorTrancation->descreption ='returnorder';
        $vendorTrancation->total =$balance;
        $vendorTrancation->save();
            
            
            
        $trancation=$item->transcation+1;
        $item->ending_Quantity = $itemquantity;
        $item->ending_balance = $endingbalance;
        $item->transcation = $trancation;
        $item->update();
        $vendorTrancationee=vendorTrancation::select('total')->where('vendor_id', '=', $request['vendor'])->sum('total');
        $vendor = vendor::find($request['vendor']);
        $vendor->transcation = $vendor->transcation+1;
        $vendor->EndingBalance = $vendor->balance+$vendorTrancationee;
        $vendor->update();
            
              }

        return redirect('purchecedOrder');
    }




    
    
    
    
    
    
}
