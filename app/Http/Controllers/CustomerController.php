<?php

namespace App\Http\Controllers;

use App\Model\Customer;
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
        try
        {
            $customer = Customer::all();
            return response()->json($customer);   
        }
        catch (\Exception $e)
        {
            return $e->getMessage();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        $this->validate($request, [
            'customer_name' => 'required|min:5',
            'birthday' => 'required|min:5',
            'address' => 'required|min:5',
            'email' =>'required|email',
            'status'=>'required',
            'first_name'=>'required|min:5',
            'last_name'=>'required|min:5',
            'phone'=>'required|numeric'


        ]);
    
        $customer = Customer::find($id);
        $customer->customer_name = $request->input('customer_name');
        $customer->birthday = $request->input('birthday');
        $customer->address=$request->input('address');
        $customer->email = $request->input('email');
        $customer->status = $request->input('status');
        $customer->first_name = $request->input('first_name');
        $customer->last_name = $request->input('last_name');
        $customer->phone = $request->input('phone');
        $customer->save();
    
        return response([
            'customer' => $customer
        ], 200);
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
        //
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
        $this->validate($request, [
            'customer_name' => 'required|min:5',
            'birthday' => 'required|min:5',
            'address' => 'required|min:5',
            'email' =>'required|email',
            'status'=>'required',
            'first_name'=>'required|min:5',
            'last_name'=>'required|min:5',
            'phone'=>'required|numeric'


        ]);
    
        $customer = Customer::find($id);
        $customer->customer_name = $request->input('customer_name');
        $customer->birthday = $request->input('birthday');
        $customer->address=$request->input('address');
        $customer->email = $request->input('email');
        $customer->status = $request->input('status');
        $customer->first_name = $request->input('first_name');
        $customer->last_name = $request->input('last_name');
        $customer->phone = $request->input('phone');
        $customer->save();
    
        return response([
            'customer' => $customer
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $customer = Customer::find($id);
            $customer->delete();
    
          return response()->json('Successfully Deleted');
        }
        catch (\Exception $e) {
            //return error message
            return $e->getMessage();
        }
    }
}
