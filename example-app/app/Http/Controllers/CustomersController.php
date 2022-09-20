<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{

    public function index()
    {
        $customers = Customer::all();
        return view('backoffice.customers.customers-list', compact('customers'));
    }


    public function create()
    {
        return view('backoffice.customers.create');
    }


    public function store(Request $request)
    {
        $customer = new Customer();
        $customer->first_name = $request->first_name;
        $customer->last_name = $request->last_name;
        $customer->address = $request->address;
        $customer->postal_code = $request->postal_code;
        $customer->city = $request->city;
        $customer->save();
        Return redirect('/backoffice/customers');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        $customer = Customer::find($id);
        $customer->delete();
        return redirect('/backoffice/customers');
    }
}
