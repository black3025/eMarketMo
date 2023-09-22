<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $add = ([
                'product_id' => $request['prod_id'],
                'qty'=> $request['qty'],
                'price' => $request['price'],
                'contact' => $request['contact']
            ]);
            
            $new = Order::create($add);
            if($new){
                $suc = true;
                $mess ='Order has been placed.';
            }else{
                $suc = false;
                $mess = $add;
            }
         return ['success'=> $suc, 'message'=> $mess];
    }

}
