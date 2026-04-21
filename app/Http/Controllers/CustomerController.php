<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * 1. THE CONSTRUCTOR IS REMOVED. 
     * Laravel 11 controllers do not support $this->middleware() by default.
     */

    public function index()
    {
        // Manual Security Check
        if (!session()->has('user_logged_in')) {
            return redirect('/')->with('error', 'Please login first.');
        }

        $customers = Customer::all();
        return view('customers.index', compact('customers'));
    }

    public function create()
    {
        if (!session()->has('user_logged_in')) {
            return redirect('/');
        }
        return view('customers.create');
    }

    public function store(Request $request)
    {
        Customer::create([
            'name' => $request->name,
            'address' => $request->address,
            'gender' => $request->gender,
            'dob' => $request->dob,
        ]);

        return redirect()->route('customers.index');
    }

    public function edit(Customer $customer)
    {
        // Manual Security Check
        if (!session()->has('user_logged_in')) {
            return redirect('/');
        }

        return view('customers.edit', compact('customer'));
    }

    public function update(Request $request, Customer $customer)
    {
        $customer->update([
            'name' => $request->name,
            'address' => $request->address,
            'gender' => $request->gender,
            'dob' => $request->dob,
        ]);

        return redirect()->route('customers.index');
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect()->route('customers.index');
    }

    public function show(Customer $customer)
    {
        // Unused
    }
}
