<?php

namespace App\Http\Controllers;

use App\Model\Certificates;
use Illuminate\Http\Request;

class CertificateController extends Controller
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
            $items = Certificates::all();
            return response()->json($items);   
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
                'name_certificate' => 'required|min:5',
                'type_certificate' => 'required',
                'title_certificate' => 'required',
                'content_certificate' => 'required',
            ]);
        
            $certificate = Certificates::find($id);
            $certificate->name_certificate = $request->input('name_certificate');
            $certificate->type_certificate = $request->input('type_certificate');
            $certificate->title_certificate=$request->input('title_certificate');
            $certificate->content_certificate = $request->input('content_certificate');
            
            $certificate->save();
        
            return response([
                'certificate' => $certificate
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
                'name_certificate' => 'required|min:5',
                'type_certificate' => 'required',
                'title_certificate' => 'required',
                'content_certificate' => 'required',
            ]);
        
            $certificate = Certificates::find($id);
            $certificate->name_certificate = $request->input('name_certificate');
            $certificate->type_certificate = $request->input('type_certificate');
            $certificate->title_certificate=$request->input('title_certificate');
            $certificate->content_certificate = $request->input('content_certificate');
            
            $certificate->save();
        
            return response([
                'certificate' => $certificate
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
        try
        {
            $Certificates = Certificates::find($id);
            $Certificates->delete();
    
          return response()->json('Successfully Deleted');
        }
        catch (\Exception $e) {
            //return error message
            return $e->getMessage();
        }


   }
    
}
