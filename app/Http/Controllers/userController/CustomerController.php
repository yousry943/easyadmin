<?php

namespace App\Http\Controllers\userController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\customer;
class CustomerController extends Controller
{
    public function getData()
    {
       $customers = customer::all();
       $output   = '';
      foreach($customers as $customer){

              $output .='<tr data-id="'.$customer->id.'" class="customer_row">
                        <a href="bal7a">
                          <td class="checkNum" contenteditable>
                            <input class="" type="checkbox" id="" name="" />
                          </td>
    
                          <td class="row" contenteditable data-column="name"><span >'.$customer->name.'</span></td>
    
                         <td contenteditable data-column="email"><span>'.$customer->email.'</span></td>
                          <td class="ellipsisTwo" data-column="phone" contenteditable><span>'.$customer->phone.'</span></td>
                          <td class="ellipsisThree" data-column="balance" contenteditable>
                            <span> '.$customer->balance.' </span>
                          </td>
                          <td class="ellipsisFour" data-column="address" contenteditable><span>'.$customer->address.'</td>
                          <td class="ellipsisFive" data-column="website"  contenteditable><span>'.$customer->website.'</span></td>
                          <td class="ellipsisSix" data-column="country" contenteditable><span>'.$customer->country.'</span></td>
                          <td><button type="button" name="delete_btn" data-delete="'.$customer->id.'" class="btn btn-xs btn-
                          
                          danger btn_delete">x</button></td>
                          <td><!-- 8-justForGrid --></td>
                          <td><!-- 9-justForGrid --></td>
                        </a>
                  </tr>';
                    
    }
    $output .= '  
           <tr>  
           <td></td> 
                <td id="customer_name" contenteditable></td>  
                <td id="customer_email" contenteditable></td>
                <td id="customer_phone" contenteditable></td>
                <td id="customer_balance" contenteditable></td>
                <td id="customer_address" contenteditable></td>
                <td id="customer_website" contenteditable></td>
                <td id="customer_country" contenteditable></td>
                
               
                <td contenteditable><button type="button" name="btn_add" id="btn_add" 

                class="btn btn-xs btn-success">+</button></td>  
               <td></td><td></td>
               
           </tr>  
      ';  
    echo $output;
    //    return view('user.customer.index')->with('customers',$customer);

    }

    public function index()
    {
        $customer = customer::all();
        return view('user.customer.index')->with('customers',$customer);

    }



    public function create()
    {
        return view('user.customer.create');
    }


    public function store(Request $request)
    {
        // $this->validate($request,[

        //     'name' => 'required'
        // ]);


        $customer = new customer;

        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->phone = $request['phone'];
        $customer->balance = $request['balance'];
        $customer->address= $request['address'];
        $customer->website = $request['website'];
        $customer->country = $request['country'];
        $customer->zipcode = $request['zipcode'];
        $customer->state = $request['state'];
        $customer->city = 	$request['city'];
        $customer->address_2 = $request['address_2'];
        $customer->tax_id = $request['tax_id'];
    
        $customer->save();
        return redirect('customer');

    }

    public function storeAjax(Request $request)
    {
        // $this->validate($request,[

        //     'name' => 'required'
        // ]);

        $customer = new customer;

        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->phone = $request['phone'];
        $customer->balance = $request['balance'];
        $customer->address= $request['address'];
        $customer->website = $request['website'];
        $customer->country = $request['country'];
       
        $customer->save();
       echo 'data inserted';

    }


    public function editAjax(request $request)
    {
    //   $customer =  customer::find($request['id']);
    //   $customer->$request['coulmn_name'] = $request['text'];
    //   $customer->update();
    customer::where('id',$request['id'])->update([$request['coulmn_name'] => $request['text'] ]);
        echo 'data updated';

    }
    public function deleteAjax($id)
    {
        $item = customer::find($id);
        $item->delete();
        echo 'data deleted';
    }

    public function edit(request $request ,$id)
    {
        $customer = customer::find($id);

        return view('user.customer.edit')->with('customer',$customer);


    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[

            'name' => 'required'
        ]);
        $customer = customer::find($id);
        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->phone = $request['phone'];
        $customer->balance = $request['balance'];
        $customer->address= $request['address'];
        $customer->website = $request['website'];
        $customer->country = $request['country'];
        $customer->zipcode = $request['zipcode'];
        $customer->state = $request['state'];
        $customer->city = 	$request['city'];
        $customer->address_2 = $request['address_2'];
        $customer->tax_id = $request['tax_id'];

        $customer->update();
        return redirect('customer');
    }

    public function destroy($id)
    {
        $item = customer::find($id);
        $item->delete();
        return redirect('customer');
    }
}
