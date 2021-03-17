<?php

namespace App\Http\Controllers;

use App\Model\Category;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facedes\Excel;
use App\Exports\TestExport;
class CategoryController extends Controller
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
            $items = Category::all();
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
            $items = Category::select('*')->where('id',$id)->get();
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
    public function store(Request $request)
    {
        try {
            $this->validate($request, [
                'Name' => 'required|min:3',
                'name_Display' => 'required|min:3',
            ]);              
            $category = new Category();
            $category->Name = $request['Name'];
            $category->name_Display = $request['name_Display'];
            $category->parent_id=$request['parent_id'];
            if($request['is_display']==='true') {$request_display=1;}
            else{$request_display=0; }            
            $category->is_display = $request_display;
            $category->category_status = $request['category_status'];
            $category->order_number = $request['order_number'];
            $slug_url=str_replace(' ','_',$request['name_Display']);
            $category->slug_url = $slug_url;
            $category->save();
        
            return response([
                'category' => $category
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
            $post = Category::find($id);
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
            $this->validate($request, [
                'Name' => 'required|min:3',
                'name_Display' => 'required|min:3',
            ]);              
            $category = Category::find($id);
            $category->Name = $request->Name;
            $category->name_Display = $request->name_Display;
            $category->parent_id=$request->parent_id;
            if($request->is_display==='true') {$request_display=1;}
            else{$request_display=0; }            
            $category->is_display = $request_display;
            $category->category_status = $request->category_status;
            $category->order_number = $request->order_number;
            $slug_url=str_replace(' ','_',$request->name_Display);
            $category->slug_url = $slug_url;
            $category->save();
        
            return response()->json(['message'=>"successful"]);
        }
        catch (\Exception $e) {
            //return error message
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
            $category = Category::find($id);
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
