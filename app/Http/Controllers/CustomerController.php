<?php

namespace App\Http\Controllers;

use App\Model\Customer;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facedes\Excel;
use App\Exports\TestExport;
class CustomerController extends Controller
{
    // use Excel;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try
        {
            $items = Customer::all();
            return response()->json($items);   
        }
        catch (\Exception $e)
        {
            return $e->getMessage();
        }
    }
    public function find($id)
    {
        try
        {
            $items = Customer::select('*')->where('id',$id)->get();
            return response()->json($items);   
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
    public function store(Request $request)
    {
        try {             
            $customer = new Customer();
            $customer->customer_name = $request['customer_name'];
            $customer->birthday = $request['birthday'];
            $customer->address=$request['address'];
            $customer->email = $request['email'];
            $customer->status = $request['status'];
            $customer->first_name = $request['first_name'];
            $customer->last_name = $request['last_name'];
            $customer->phone = $request['phone'];
            $customer->save();
        
            return response([
                'teacher' => $customer
            ], 200);
        }
        catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $post = Customer::find($id);
            return response()->json($post);
        }
        catch (\Exception $e) {
            //return error message
            return $e->getMessage();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {          
            $customer = Customer::find($id);
            $customer->customer_name = $request->customer_name;
            $customer->birthday = $request->birthday;
            $customer->address=$request->address;
            $customer->email = $request->email;
            $customer->status = $request->status;
            $customer->first_name = $request->first_name;
            $customer->last_name = $request->last_name;
            $customer->phone = $request->phone;
            $customer->save();
        
            return response()->json(['message'=>"successful"]);
        }
        catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $category = Customer::find($id);
            $category->delete();
    
            return response('Delete Successfully', 200);
        }
        catch (\Exception $e) {
            //return error message
            return $e->getMessage();
        }


    }
    public function export()
    {  
        return Excel::dowload(new TestExport(), 'categorys.xlxs');
    }
}
