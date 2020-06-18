<?php

namespace App\Http\Controllers\userController;
use App\tax;
use App\item;
use App\vendor;
use App\Currency;
use Carbon\Carbon;
use App\journal_datas;
use App\purchaseOrder;
use App\Refrence_Code;
use App\journal_entrie;
use App\vendorTrancation;
use Illuminate\Http\Request;
use App\purchaseOrderDetails;
use App\Http\Controllers\Controller;


class PurchaseOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $purchaseOrder = purchaseOrder::all();


       return view('user.purchacedOrder.index')->with('purchaseOrder',$purchaseOrder);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vendor = vendor::all();
        $Currency = Currency::all();
        $items    = item::all();
        $taxs    = tax::all();

        return view('user.purchacedOrder.create')->with([
            'vendors'=> $vendor,
            'Currencys'=> $Currency,
            'items'   => $items,
            'taxs'    => $taxs
            ])
        
        ;
    }

    public function store(Request $request)
    {
   

        $this->validate($request,[

            'serial_number' => 'required',
            'vendor_id' => 'required',
            'vendor_referance' => 'required',
            'bill_date' => 'required',
            'bill_due_date' => 'required',
            'currency_id' => 'required',
            'total' => 'required',
            'item_id.*' => 'required',
            
            'qnty.*' => 'required',
            'unit_price.*' => 'required',
            'price_item.*' => 'required',
            
            'tax_id.*' => 'required',
            


        ]);


        if(isset($request['draft'])){
                $purchase  = new purchaseOrder;
                $purchase->serial_number = $request['serial_number'];
                $purchase->vendor_id = $request['vendor_id'];
                $purchase->vendor_referance = $request['vendor_referance'];
                $purchase->bill_date = $request['bill_date'];
                $purchase->bill_due_date   =  $request['bill_due_date'];
                $purchase->currency_id = $request['currency_id'];
                $purchase->exluded = $request['untaxedtotal'];
                $purchase->tax = $request['tax'];
                $purchase->total = $request['total'];
                $purchase->to_pay = $request['total'];
                $purchase->save();
                $last_id =   \DB::getPdo()->lastInsertId();

                 $count = count($request['item_id']);
  
  
              for($i=0; $i < $count; $i++){
  
            $purchase_order_details = new purchaseOrderDetails;
            $purchase_order_details->purchase_order_id	 =  $last_id ;
            $purchase_order_details->item_id = $request['item_id'][$i];
            $purchase_order_details->desc =    $request['desc'][$i];
            $purchase_order_details->qnty = $request['qnty'][$i];
            $purchase_order_details->unit_price = $request['unit_price'][$i];
            $purchase_order_details->price_item = $request['price_item'][$i];
            $purchase_order_details->tax_id   = $request['tax_id'][$i];
//            dd($request['tax_id'][$i]);
                  $purchase_order_details->save();
  
              }


                
        }
        
       
      
  

  
        return redirect('purchecedOrder');

    }

    
    public function show($id)
    {
        
        
    }

    public function post($id)
    {
        $purchaseOrder = purchaseOrder::find($id);


        $get_Refrence_code = Refrence_Code::where('model_name', '=', 'jornal')->get();

        $year = Carbon::now();
        $date_year = $year->year;
        $Refrence = $date_year.'-'.$get_Refrence_code->first()->start.'-'.uniqid();
        $new_start  = $get_Refrence_code->first()->start + 1;

        $Refrence_Code = Refrence_Code::find($get_Refrence_code->first()->id);
        $Refrence_Code->start = $new_start;




              $journal_entrie = journal_entrie::firstOrNew([ 'Resources' => $purchaseOrder->serial_number]);

        	  $journal_entrie->refrence = $Refrence;
              $journal_entrie->summary =  "from order purchase";
              $journal_entrie->Currency_id = $purchaseOrder->currency_id;
              $journal_entrie->date = Carbon::now();
              $journal_entrie->total=$purchaseOrder->total;
//              $journal_entrie->Resources = $purchaseOrder->serial_number; //'from order purchase'
              $journal_entrie->save();

              $last_id =   \DB::getPdo()->lastInsertId();

// dd($last_id);


    //   $subject_count = count($request['chartOfAccount_id']);


    		// for($i=0; $i < $subject_count; $i++){
if($last_id!='0'){
        $journal_entrie_data = new journal_datas;
          $journal_entrie_data->journal_id	 =  $last_id ;


    	  $journal_entrie_data->chartOfAccount_id = 1; // get from setup
          $journal_entrie_data->Description = "from order purchase";

       


          $journal_entrie_data->save();
          $Refrence_Code->save();
        
        $vendorTrancation = new vendorTrancation;

        $vendorTrancation->vendor_id = $purchaseOrder->vendor_id;
        $vendorTrancation->date = date("Y/m/d");
        $vendorTrancation->Journal_Id =$last_id;
        $vendorTrancation->descreption ='invoice order';
        $vendorTrancation->credit=$purchaseOrder->total;
        $vendorTrancation->total=-$purchaseOrder->total;
        $vendorTrancation->save();

        $vendorTrancationee=vendorTrancation::select('total')->where('vendor_id', '=', $purchaseOrder->vendor_id)->sum('total');
          
          
            $vendor = vendor::find($purchaseOrder->vendor_id);
            $vendor->transcation = $vendor->transcation+1;
            $vendor->EndingBalance = $vendor->balance+$vendorTrancationee;
            $vendor->update();



}
        
          return redirect('purchecedOrder');
        
     }

       
  
    public function edit(request $request ,$id)
    {
        $purchaseOrder = purchaseOrder::find($id);
        $vendor = vendor::where('id','!=', $purchaseOrder->vendor_id) ->get();
        $CurrencyOrder = Currency::find($purchaseOrder->currency_id);
        $Currency = Currency::where('id','!=', $purchaseOrder->currency_id) ->get();
        $items    = item::all();
        $OrderDetail    = purchaseOrderDetails::where('purchase_order_id','=',$id) ->get();
        $taxs    = tax::all();
        $vendorOrder = vendor::find($purchaseOrder->vendor_id);
       
        return view('user.purchacedOrder.edit')->with(
            [
                'vendors'=> $vendor,
                'Currencys'=> $Currency,
                'items'   => $items,
                'taxs'    => $taxs,
                'purchaseOrder' => $purchaseOrder,
                'vendorOrder' => $vendorOrder,
                 'CurrencyOrder' => $CurrencyOrder,
                'OrderDetails' => $OrderDetail
                ]);
            }


    public function update(Request $request, $id)
    {
        $this->validate($request,[

            'serial_number' => 'required',
            'vendor_id' => 'required',
            'vendor_referance' => 'required',
            'bill_date' => 'required',
            'bill_due_date' => 'required',
            'currency_id' => 'required',
            'total' => 'required',
            'item_id.*' => 'required',
            
            'qnty.*' => 'required',
            'unit_price.*' => 'required',
            'price_item.*' => 'required',
            
            'tax_id.*' => 'required',
            


        ]);
        $purchase  = purchaseOrder::find($id);

               $purchase->serial_number = $request->serial_number;
                $purchase->vendor_id = $request->vendor_id;
                $purchase->vendor_referance = $request->vendor_referance;
                $purchase->bill_date = $request->bill_date;
                $purchase->bill_due_date   =  $request->bill_due_date;
                $purchase->currency_id = $request->currency_id;
                $purchase->total = $request->total;
                $purchase->update();
        
        $OrderDetail= purchaseOrderDetails::where('purchase_order_id','=',$id) ->get();
       

    		for($i=0; $i < count($OrderDetail); $i++){
          $OrderDetail[$i]->update([
              'item_id' => $request['item_id'][$i],
            'desc' => $request['desc'][$i],
            'qnty' => $request['qnty'][$i],
            'unit_price' => $request['unit_price'][$i],
            'price_item' => $request['price_item'][$i],
            'tax_id'   => $request['tax_id'][$i]
            
          ]);
        }

                return redirect('purchecedOrder');

    }



public function reciveItem($id)
{
      $purchase  = purchaseOrder::find($id);

  return view('user.Receive_Item.edit')->with('purchase', $purchase);

}


public function saveReciveItem($id)
{
    
}

  
    
    
   


public function veiw(){

    return view('user.purchacedOrder.view');


}

    public function destroy($id)
    {
        $purchaseOrder = purchaseOrder::find($id);
        $purchaseOrder->delete();
        
         return redirect('purchecedOrder');
    }
}
