<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Costumer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function index()
    {
        $customer=Costumer::paginate(5);
return view('admin.costumer.costumer',compact('customer')) ;
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
    }


    public function show(Costumer $custumer)
    {

        return view('admin.costumer.show',compact('custumer')) ;
    }

    public function edit(Costumer $custumer)
    {
        //
    }

    public function update(Request $request, Costumer $custumer)
    {
        //
    }

    public function destroy(Costumer $custumer)
    {
        //
    }
}
