<?php

namespace App\Http\Controllers;

use App\Models\PurchaseRecordModel;
use Illuminate\Http\Request;

class purchaseRecordController extends Controller
{
    public function index()
    {
        $stored = PurchaseRecordModel::all();
        return view('purchase_records.index',['stored1'=>$stored]);
    }

    public function create()
    {
        $a = new PurchaseRecordModel;
        $a->b_number = "20000010";
        $a->b_date = "1990/3/17";
        $a->serial_number = "G9543";
        $a->a_id="1";
        $a->p_id="1";
        $a->save();
        $a->toArray();
        return view('purchase_records.create',$a);

    }

    public function edit($id)
    {
        $temp = PurchaseRecordModel::find($id);
        $temp->serial_number = "M4QKxfVE2TbgKVh";

        $temp->save();



        return view('purchase_records.edit')->with([
            'b_id'=>$temp['b_id'],
            'b_num'=>$temp['b_number'],
            's_num'=>$temp['serial_number']
        ]);
    }

    public function show($id)
    {
        $temp =PurchaseRecordModel::find($id);
        if ($temp == null)
            return "No record";
        $temp->toArray();
        return view('purchase_records.show',$temp);
    }
}
