<?php

namespace App\Http\Controllers\userController;
use App\vendor;
use App\payment;
use App\Currency;
use Carbon\Carbon;
use App\purchaseOrder;
use App\journal_datas;
use App\Refrence_Code;
use App\journal_entrie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Helper;
use App\vendorTrancation;
class PaymentController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Payments = payment::all();
//        $vendor = vendor::find($payment->vendor_id)
        return view('user.Payments.index')->with('Payments',$Payments);
    }


     public function vendorTranscation()
    {

        return view('user.vendorTrascation.index');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
         $purchaseOrder = purchaseOrder::find($id);
         $date=date("Y/m/d");
       
        
        
       
        return view('user.Payments.create')->with(
            [

                'purchaseOrder'=> $purchaseOrder,
                 'date'=>$date
                        

                ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $get_Refrence_code = Refrence_Code::where('model_name', '=', 'payment')->get();
        $year = Carbon::now();
        $date_year = $year->year;
        $Refrence = $date_year.'-'.$get_Refrence_code->first()->start.'-'.uniqid();
        $new_start  = $get_Refrence_code->first()->start + 1;

        $Refrence_Code = Refrence_Code::find($get_Refrence_code->first()->id);
        $Refrence_Code->start = $new_start;
//        dd($request['date']);
        $payment = new payment;
        $payment->payment_number = $request['payment_number'];
        $payment->purchecedorder_id = $request['purchaseOrderid'];
        $payment->vendor_id = $request['vendorid'];
        $payment->PAYED_BY = $request['PAYED_BY'];
        $payment->date = $request['date'];
        $payment->payment_serial = $Refrence;
        $payment->PAYMENT_AMOUNT = $request['PAYMENT_AMOUNT'];
        $payment->payment_type = $request['payment_type'];
        $payment->payment_detail = $request['payment_detail'];
        $payment->DELVIRY_RECEIPT = $request['DELVIRY_RECEIPT'];
        $payment->DELVIRY_image = Helper::uploadImage(

        $request->file('image'),
        'uplodes' .DIRECTORY_SEPARATOR.'payment_image' .DIRECTORY_SEPARATOR
       );
        $payment->save();
        $purchaseOrder = purchaseOrder::find($request['purchaseOrderid']);
        $allpaid=$purchaseOrder->paid+$request['PAYMENT_AMOUNT'];
        $topay=$purchaseOrder->total-$allpaid;
        
        $purchaseOrder->paid =$allpaid;
        $purchaseOrder->to_pay =$topay;
         $purchaseOrder->update();

        $get_Refrence_code = Refrence_Code::where('model_name', '=', 'jornal')->get();
        
        
       $year = Carbon::now();
        $date_year = $year->year;
        $Refrence = $date_year.'-'.$get_Refrence_code->first()->start.'-'.uniqid();
        $new_start  = $get_Refrence_code->first()->start + 1;

        $Refrence_Code = Refrence_Code::find($get_Refrence_code->first()->id);
        $Refrence_Code->start = $new_start;

      
        

        $journal_entrie = new journal_entrie;

        $journal_entrie->refrence = helper::generateCode('jornal');
//      $journal_entrie->Credit = $request['PAYMENT_AMOUNT'];

              $journal_entrie->summary =  "payment";
              $journal_entrie->Currency_id = $purchaseOrder->currency_id;
              $journal_entrie->date = Carbon::now();
              $journal_entrie->total= $request['PAYMENT_AMOUNT'];
              $journal_entrie->Resources = $purchaseOrder->serial_number; //'from order purchase'
              $journal_entrie->save();

              $last_id =   \DB::getPdo()->lastInsertId();

   

        $journal_entrie_data = new journal_datas;
          $journal_entrie_data->journal_id	 =  $last_id ;


    	  $journal_entrie_data->chartOfAccount_id = 1; // get from setup
          $journal_entrie_data->Description = "from order purchase";

        


          $journal_entrie_data->save();
          $Refrence_Code->save();

        
        
        
        
        
        // vendorTranscation data
        $vendorTrancation = new vendorTrancation;

        $vendorTrancation->vendor_id = $request['vendorid'];
        $vendorTrancation->date = date("Y/m/d");
        $vendorTrancation->Journal_Id =$last_id;
        $vendorTrancation->dept=$request['PAYMENT_AMOUNT'];
        $vendorTrancation->descreption ='payment';
        $vendorTrancation->total =$request['PAYMENT_AMOUNT'];
        $vendorTrancation->save();
       
        $vendorTrancationee=vendorTrancation::select('total')->where('vendor_id', '=', $request['vendorid'])->sum('total');
       
            
            $vendor = vendor::find($request['vendorid']);
            $vendor->transcation = $vendor->transcation+1;
            $vendor->EndingBalance = $vendor->balance+$vendorTrancationee;
            $vendor->update();
        
        
        
            
            
        
        
        return redirect('purchecedOrder');

    }

   
    

    
   
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Payments  $payments
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $Payment = Payment::find($id);
        $Payment->delete();
        return redirect('payment');
    }
}
