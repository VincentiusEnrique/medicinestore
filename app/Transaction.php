<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }
    public function buyer()
    {
        return $this->belongsTo('App\Buyer','buyer_id');
    }
    public function medicines()
    {
        return $this->belongsToMany('App\Medicine','medicine_transaction','transaction_id','medicine_id')
        ->withpivot('quantity','price');
    }
    public function showAjax(Request $REQUEST)
    {
        $id = ($request->get('id'));
        $data = Transaction::find($id);
        $products = $data->products;
        return response()->json(array(
            'msg'=>view('transaction.showmodal',compact('data','dataproduk'))->render()
        ),200);
    }

    
}
