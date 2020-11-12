<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductNameController extends Controller
{
    public function index($id)
    {
        return view('index');
    }

    public function create()
    {

        return view('create');

    }

    public function edit($id)
    {
        return view('edit');
    }

    public function show($id)
    {

        return view('show');
    }

}
