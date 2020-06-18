<?php

namespace App\Http\Controllers\userController;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Inventory_Location_Transfers;
use App\location;
use App\Inventory_Location_Transfers_data;
use App\items_locations;
class Inventory_Location_TransfersController extends Controller
{
    public function index()
    {

  $Inventory_Location_Transfers= Inventory_Location_Transfers::with('get_To_Location','get_From_Location')->get();
   // dd($Inventory_Location_Transfers);
        return view('user.Inventory_Location_Transfers.index',compact('Inventory_Location_Transfers'));
    }

    public function create()
    {
        $locations = location::all();
        return view('user.Inventory_Location_Transfers.create')->with('locations',$locations);
    }

    public function store(Request $request)
    {
    //   dd($request);
        // $this->validate($request,[
        //
        //     'code' => 'required',
        //     'name' => 'required',
        //     'desc'  =>   'required',
        //     'serial' => 'required',
        //     'location' =>  'required',
        //     'op_pa' => 'required',
        //     'part' => 'required',
        //     'account' => 'required'
        //
        //
        // ]);
        $Inventory_Location_Transfers = new Inventory_Location_Transfers();
        $Inventory_Location_Transfers->Item_Description = $request['Item_Description'];
        $Inventory_Location_Transfers->From_Location = $request['From_Location'];
        $Inventory_Location_Transfers->To_Location = $request['To_Location'];
        $Inventory_Location_Transfers->Date = $request['Date'];
        $Inventory_Location_Transfers->Memo = $request['Memo'];
        

        
        $Inventory_Location_Transfers->save();

        $last_id =   \DB::getPdo()->lastInsertId();
        $updateLocatioItemsFromLocatio = items_locations::where('location_id',$request['From_Location']);

        $updateLocatioItemsToLocatio ;
        if(items_locations::where('location_id',$request['to_Location'])){
            $updateLocatioItemsToLocatio = items_locations::where('location_id',$request['To_Location'])->get();
        }else{
            $updateLocatioItemsToLocatio = new items_locations();
        }
        dd( $updateLocatioItemsToLocatio );
        items_locations::firstOrCreate(['location_id' => $request['From_Location'] ]);
for($i = 0; $i < count($request['item_id']); $i++)
{
    $Inventory_Location_Transfers_data = new Inventory_Location_Transfers_data();
    $Inventory_Location_Transfers_data->transfer_id = $last_id;
    $Inventory_Location_Transfers_data->item_id = $request['item_id'][$i];
    $Inventory_Location_Transfers_data->qnt = $request['qnt'][$i];
    $Inventory_Location_Transfers_data->unit = '0';
    $updateLocatioItems->where('item_id',$request['item_id'][$i])->decrement('qnty',$request['qnt'][$i]);
    $updateLocatioItemsToLocatio = items_locations::firstOrCreate(['location_id' => $request['to_Location'], ['item_id'=> $request['item_id'][$i]] ])
    ->increment('qnty',$request['qnt'][$i]);
    $Inventory_Location_Transfers_data->save();
}



        return redirect('Inventory_Location_Transfers');
    }


    public function edit($id)
    {
        //

        $Inventory_Location_Transfers = Inventory_Location_Transfers::find($id)->with('get_To_Location','get_From_Location')->get();
        // dd($Inventory_Location_Transfers);
        $locations = location::all();

        return view('user.Inventory_Location_Transfers.edit',compact('Inventory_Location_Transfers','locations','id'));
    }

    public function update(Request $request,$id)
    {



      $Inventory_Location_Transfers = Inventory_Location_Transfers::findOrFail($id);


        $input = $request->all();

        $Inventory_Location_Transfers->fill($input)->save();


        return redirect('Inventory_Location_Transfers');


    }


    public function destroy($id)
    {
        //
        $Inventory_Location_Transfers = Inventory_Location_Transfers::find($id);
        $Inventory_Location_Transfers->delete();
        return redirect('Inventory_Location_Transfers');
    }
}
