<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MemberModel;

class MemberController extends Controller
{
    public function index()
    {
        $stored = MemberModel::all();
        return view('members.index',['stored1'=>$stored]);
    }

    public function create()
    {
        $a = new MemberModel;
        $a->a_name = "林幸真";
        $a->birth = "1990/3/17";
        $a->account = "G9543";
        $a->password = "Q742w8dzsg";
        $a->balance=1500;
        $a->save();
        $a->toArray();
        return view('members.create',$a);

    }

    public function edit($id)
    {
        $temp = MemberModel::findOrFail($id);
        $temp->balance = 3000;
        $temp->save();

        $bal = $temp->toArray();

        return view('members.edit')->with([
            'name'=>$bal['a_name'],
            'money'=>$bal['balance'],
            'id'=>$bal['id']
        ]);
    }

    public function show($id)
    {
        $temp =MemberModel::find($id);
        if ($temp == null)
            return "No record";
        $temp->toArray();
        return view('members.show',$temp);
    }
}
