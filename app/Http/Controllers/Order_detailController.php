<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use App\Model\Order_detail;
class Order_detailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
            $od = DB::table('order_detail')
            ->join('orders','order_detail.order_id','=','orders.id')
            ->join('customers','orders.customer_id','=','customers.id')
            ->join('products', 'order_detail.product_id', '=', 'products.id')
            ->get();
            return response()->json($od);   
        }
        catch (\Exception $e) {
            //return error message
            return response()->json(['message' => 'response failed!'], 500);
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
        try{
            $this->validate($request, [
                'order_id' => 'required|min:5',
                'ordercode' => 'required',
                'product_id' => 'required',
                'goods_code' => 'required',
                'quantity' =>'required',
                'sale_price' => 'required',
                'product_image'=>'required',
                'isCancer' =>'required',
                'product_price' => 'required',
                'product_price_sale' => 'required',
            ]);
        
            $od = Order_detail::find($id);
            $od->order_id = $request->input('order_id');
            $od->ordercode = $request->input('ordercode');
            $od->product_id=$request->input('product_id');
            $od->goods_code = $request->input('goods_code');
            $od->quantity = $request->input('quantity');
            $od->sale_price = $request->input('sale_price');
            $od->product_image = $request->input('product_image');
            $od->isCancer = $request->input('isCancer');
            $od->product_price = $request->input('product_price');
            $od->product_price_sale = $request->input('product_price_sale');
            
            $od->save();
        
            return response([
                'order_detail' => $od
            ], 200);
        }
        catch (\Exception $e) {
            //return error message
            return $e->getMessage();
        }
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
        try{
            $this->validate($request, [
                'order_id' => 'required|min:5',
                'ordercode' => 'required',
                'product_id' => 'required',
                'goods_code' => 'required',
                'quantity' =>'required',
                'sale_price' => 'required',
                'product_image'=>'required',
                'isCancer' =>'required',
                'product_price' => 'required',
                'product_price_sale' => 'required',
            ]);
        
            $od = Order_detail::find($id);
            $od->order_id = $request->input('order_id');
            $od->ordercode = $request->input('ordercode');
            $od->product_id=$request->input('product_id');
            $od->goods_code = $request->input('goods_code');
            $od->quantity = $request->input('quantity');
            $od->sale_price = $request->input('sale_price');
            $od->product_image = $request->input('product_image');
            $od->isCancer = $request->input('isCancer');
            $od->product_price = $request->input('product_price');
            $od->product_price_sale = $request->input('product_price_sale');
            
            $od->save();
        
            return response([
                'order_detail' => $od
            ], 200);
        }
        catch (\Exception $e) {
            //return error message
            return $e->getMessage();
        }
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
            $od = Order_detail::find($id);
            $od->delete();
    
          return response()->json('Successfully Deleted');
        }
        catch (\Exception $e) {
            //return error message
            return $e->getMessage();
        }
    }
    public function SumRecord()
    {
        try
        {
            $users =  Order_detail::count();
            return response()->json($users);   
        }
        catch (\Exception $e)
        {
            return $e->getMessage();
        }     
    }
    public function SumRecordInDate()
    {
        try
        {
            $datetoday=date('y-m-d');
            $users =  Order_detail::select('*')->whereDate('created_at',$datetoday)->get();
            $count = count($users);
            return response()->json($count);   
        }
        catch (\Exception $e)
        {
            return $e->getMessage();
        }     
    }
    public function SumRecordInMonth()
    {
        try
        {

                $datemonth=date('m');
                $dateyear=date('y');
                $year='20'.$dateyear;
                $sum=Order_detail::select('*')->whereYear('created_at', $year)->whereMonth('created_at', $datemonth)->get();
                $count = count($sum);
                return response()->json($count);   
        }
        catch (\Exception $e)
        {
            return $e->getMessage();
        }     
    }
    public function MonthlyGrowthRate()
    {
        try
        {
                $users =  Order_detail::count();
                $datemonth=date('m');
                $dateyear=date('y');
                $year='20'.$dateyear;
                $sum=Order_detail::select('*')->whereYear('created_at', $year)->whereMonth('created_at', $datemonth)->get();
                $count = count($sum);
                $rate=(round($count/$users,2)) * 100;
                return response()->json($rate);   
        }
        catch (\Exception $e)
        {
            return $e->getMessage();
        }   
    }
}
