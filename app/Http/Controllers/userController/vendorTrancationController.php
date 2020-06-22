<?php

namespace App\Http\Controllers\userController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\vendorTrancation;
use App\vendor;
class vendorTrancationController extends Controller
{
    //
    
     public function index($id)
     {
         
         $vendorTrancations = vendorTrancation::where('vendor_id', '=', $id)->get();
          
         
         $vendors = vendor::find($id);
            
        $date=date('d-m-Y', strtotime($vendors->updated_at));
         



         return view('user.vendorTrascation.index')
             ->with([
                 'vendors'=> $vendors,
                 'date'=> $date,
                 'vendorTrancations'=> $vendorTrancations
                 
             
             ] );
     }
}
