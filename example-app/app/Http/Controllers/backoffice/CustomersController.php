<?php

namespace App\Http\Controllers\backoffice;

use App\Http\Controllers\Controller;
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
        Return redirect('backoffice/customers');
    }


    public function show($id)
    {
        //
    }


    public function edit(Customer $customer)
    {
        return view('backoffice.customers.edit', ['customer'=>$customer]);
    }


    public function update(Request $request, Customer $customer)
    {

        $customer->first_name = $request->input('first_name');
        $customer->last_name = $request->input('last_name');
        $customer->address = $request->input('address');
        $customer->postal_code = $request->input('postal_code');
        $customer->city = $request->input('city');
        $customer->update();
        return redirect('backoffice/customers');
    }


    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect('/backoffice/customers');
    }
}
