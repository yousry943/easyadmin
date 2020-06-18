<?php

namespace App\Http\Controllers\userController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\item_group;

class ItemGroupController extends Controller
{
    public function index()
    {
       $item_group = item_group::all();

       return view('user.item_group.index')->with('item_group',$item_group);
    }



    public function create()
    {
        return view('user.item_group.create');
    }


    public function store(Request $request)
    {
        $this->validate($request,[

            'name' => 'required'
        ]);


        $item_group = new item_group;
        $item_group->group_name = $request['name'];
        $item_group->group_description = $request['desc'];
    
        $item_group->save();
        return redirect('item_group');

    }

    public function edit(request $request ,$id)
    {
        $item_group = item_group::find($id);

        return view('user.item_group.edit')->with('item_group',$item_group);


    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[

            'name' => 'required'
        ]);
        $item_group = item_group::find($id);
        $item_group->group_name = $request->name;
        $item_group->group_description = $request->desc;
        $item_group->update();
        return redirect('item_group');
    }

    public function destroy($id)
    {
        $item = item_group::find($id);
        $item->delete();
        return redirect('item_group');
    }
}
