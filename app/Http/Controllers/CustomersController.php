<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::all(); //all() c'est une methode Eloquent qui correspond à select* from client
        return view("adminsites.customer.index",compact("customers"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("websites.register");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Controle sur les champs
        $request->validate([
            'fistname'=>'required|max:100|',
            'lastname'=>'required|max:100',
            'tel'=>'required|numeric',
            'email'=>'required',
            'password'=>'required',
            'adresse'=>'required'

        ]);
        // Insertion dans la base de donnees
        Customer::create($request->all());

        return redirect()->route('websites.login');
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
