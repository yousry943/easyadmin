<?php

namespace App\Http\Controllers\userController;;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\itemTranscation;
use App\item;
class ItemTranscationController extends Controller
{
    //
    
   public function index($id)
    { 
    $items = item::find($id);
    $itemTranscation = itemTranscation::where('item_id', '=', $id)->get();




         return view('user.itemtranscation.index')->with(['itemTranscation'=> $itemTranscation,'items'=>$items] );
}}
