<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Customer::all();
        return view('customer.index')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    

        $customer = new Customer;
        $customer->no_id = $request->input('no_id');
        $customer->titel = $request->input('titel');
        $customer->nama_customer = $request->input('nama_customer');
        $customer->telp_customer = $request->input('telp_customer');
        $customer->save();
    
        return redirect(route('customer.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Customer::findOrFail($id);
            return view('customer.edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $customer = Customer::find($id);
        $customer->no_id = $request->input('no_id');
        $customer->titel = $request->input('titel');
        $customer->nama_customer = $request->input('nama_customer');
        $customer->telp_customer = $request->input('telp_customer');
        $customer->save();

        return redirect('/customer')->with('success', 'Customer Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $id = Customer::find($id);
       $id->delete();
       return redirect('/customer');
    }
}
