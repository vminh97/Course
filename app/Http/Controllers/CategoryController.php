<?php

namespace App\Http\Controllers;

use App\Model\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
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
            $items = Category::all();
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
    public function listcategorydad()
    {
        try
        {
            $items = Category::select('*')->where('order_number','1')->get();
            return response()->json($items);   
        }
        catch (\Exception $e)
        {
            return $e->getMessage();
        }
    }
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
        try {
        $this->validate($request, [
            'namecategory' => 'required|min:5',
            'displaycategory' => 'required|numeric|gt:0',
            'categorymain' => 'required|min:5',
            'order_number' => 'required|numeric|gt:0',
        ]);
        
    
        $category = Category::find($id);
        $category->Name = $request->input('namecategory');
        $category->nameDisplay = $request->input('displaycategory');
        $category->parent_id=$request->input('categorymain');
        $category->category_status = $request->input('categorymain');
        $category->order_number = $request->input('order_number');
        $category->slug_url = $request->input('slug_url');
        
        $category->save();
    
        return response([
            'category' => $category
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
        try {
            $this->validate($request, [
                'namecategory' => 'required|min:5',
                'displaycategory' => 'required|numeric|gt:0',
                'categorymain' => 'required|min:5',
                'order_number' => 'required|numeric|gt:0',
            ]);
            
        
            $category = Category::find($id);
            $category->Name = $request->input('namecategory');
            $category->nameDisplay = $request->input('displaycategory');
            $category->parent_id=$request->input('categorymain');
            $category->category_status = $request->input('categorymain');
            $category->order_number = $request->input('order_number');
            $category->slug_url = $request->input('slug_url');
            
            $category->save();
        
            return response([
                'category' => $category
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
            $category = Category::find($id);
            $category->delete();
    
          return response()->json('Successfully Deleted');
        }
        catch (\Exception $e) {
            //return error message
            return $e->getMessage();
        }


    }
}
