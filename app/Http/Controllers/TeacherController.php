<?php

namespace App\Http\Controllers;

use App\Model\Teacher;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facedes\Excel;
use App\Exports\TestExport;
class TeacherController extends Controller
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
            $items = Teacher::all();
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
            $items = Teacher::select('*')->where('id',$id)->get();
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
            $request->validate([
                'image_teacher' => 'mimes:jpg,jepg,png|max:2048',
            ]);          
            $teacher = new Teacher();
            $teacher->customer_name = $request['customer_name'];
            $teacher->gender = $request['gender'];
            $teacher->image_customer = $request['image_customer']->getClientOriginalName();
            $teacher->image_teacher = $data;
            $teacher->birthday = $request['birthday'];
            $teacher->address=$request['address'];
            $teacher->email = $request['email'];
            $teacher->status = $request['status'];
            $teacher->first_name = $request['first_name'];
            $teacher->last_name = $request['last_name'];
            $teacher->phone = $request['phone'];
            $teacher->save();
        
            return response([
                'teacher' => $teacher
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
            $post = Teacher::find($id);
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
            $teacher = Teacher::find($id);
            $teacher->customer_name = $request->customer_name;
            $teacher->birthday = $request->birthday;
            $teacher->address=$request->address;
            $teacher->email = $request->email;
            $teacher->status = $request->status;
            $teacher->first_name = $request->first_name;
            $teacher->last_name = $request->last_name;
            $teacher->phone = $request->phone;
            $teacher->save();
        
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
            $category = Teacher::find($id);
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
