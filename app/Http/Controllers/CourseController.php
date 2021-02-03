<?php

namespace App\Http\Controllers;

use App\Model\Course;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
            $course = DB::table('products')->join('teachers', 'products.teacher_id', '=', 'teachers.id')
            ->join('categorys','products.category_id','=','category.id')
            ->join('certificates','products.certificate_id','=','certificates.id')
            ->get();
            return response()->json($course);   
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
                'slug_url' => 'required|min:5',
                'name_product' => 'required',
                'teacher_id' => 'required',
                'introduction_product' => 'required',
                'content_product' => 'required',
                'title_procduct' => 'required',
                'certificate_id' => 'required',
                'category_id'=>'required',
                'name_brand' => 'required|min:5',
                'price' => 'required',
                'price_no_tax' => 'required',
                'price_offsale' => 'required',
                'price_offsale_no_tax' => 'required',
                'product_image' => 'required',
                'product_image_text' => 'required',
                'video'=>'required',
                'material_name'=>'required',
                'search_keywords' => 'required',
                'list_image' => 'required',
                'isPublic' => 'required',
                'isRefund' => 'required',
                'isCertification' => 'required',
                'isOnlinePayment' => 'required',
                'isRate'=>'required',
                'isFreeShip'=>'required',
                'timeRefund'=>'required',
                'count_video' => 'required|min:5',
                'sum_time_video' => 'required',
                'date_start' => 'required',
                'date_end' => 'required',
                'count_discount' => 'required',
                'discount_code' => 'required',
                'activationcode' => 'required',
                'date_promotion_start'=>'required',
                'date_promotion_end'=>'required',
            ]);
        
            $course =Course::find($id);
            $course->slug_url = $request->input('slug_url');
            $course->name_product = $request->input('name_product');
            $course->teacher_id=$request->input('teacher_id');
            $course->introduction_product = $request->input('introduction_product');
            $course->content_product = $request->input('content_product');
            $course->title_procduct=$request->input('title_procduct');
            $course->certificate_id = $request->input('certificate_id');
            $course->category_id = $request->input('category_id');
            $course->name_brand = $request->input('name_brand');
            $course->price=$request->input('price');
            $course->price_no_tax = $request->input('price_no_tax');
            $course->price_offsale = $request->input('price_offsale');
            $course->price_offsale_no_tax=$request->input('price_offsale_no_tax');
            $course->product_image = $request->input('product_image');
            $course->product_image_text = $request->input('product_image_text');
            $course->video = $request->input('video');
            $course->material_name=$request->input('material_name');
            $course->search_keywords = $request->input('search_keywords');
            $course->list_image = $request->input('list_image');
            $course->isPublic=$request->input('isPublic');
            $course->isRefund = $request->input('isRefund');
            $course->isCertification = $request->input('isCertification');
            $course->isOnlinePayment=$request->input('isOnlinePayment');
            $course->isRate = $request->input('isRate');
            $course->isFreeShip = $request->input('isFreeShip');
            $course->timeRefund=$request->input('timeRefund');
            $course->count_video= $request->input('count_video');
            $course->sum_time_video = $request->input('sum_time_video');
            $course->date_start = $request->input('date_start');
            $course->date_end=$request->input('date_end');
            $course->count_discount = $request->input('count_discount');
            $course->activationcode = $request->input('activationcode');
            $course->date_promotion_start=$request->input('date_promotion_start');
            $course->date_promotion_end = $request->input('date_promotion_end');
            
            $course->save();
        
            return response([
                'products' => $course
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
                'slug_url' => 'required|min:5',
                'name_product' => 'required',
                'teacher_id' => 'required',
                'introduction_product' => 'required',
                'content_product' => 'required',
                'title_procduct' => 'required',
                'certificate_id' => 'required',
                'category_id'=>'required',
                'name_brand' => 'required|min:5',
                'price' => 'required',
                'price_no_tax' => 'required',
                'price_offsale' => 'required',
                'price_offsale_no_tax' => 'required',
                'product_image' => 'required',
                'product_image_text' => 'required',
                'video'=>'required',
                'material_name'=>'required',
                'search_keywords' => 'required',
                'list_image' => 'required',
                'isPublic' => 'required',
                'isRefund' => 'required',
                'isCertification' => 'required',
                'isOnlinePayment' => 'required',
                'isRate'=>'required',
                'isFreeShip'=>'required',
                'timeRefund'=>'required',
                'count_video' => 'required|min:5',
                'sum_time_video' => 'required',
                'date_start' => 'required',
                'date_end' => 'required',
                'count_discount' => 'required',
                'discount_code' => 'required',
                'activationcode' => 'required',
                'date_promotion_start'=>'required',
                'date_promotion_end'=>'required',
            ]);
        
            $course =Course::find($id);
            $course->slug_url = $request->input('slug_url');
            $course->name_product = $request->input('name_product');
            $course->teacher_id=$request->input('teacher_id');
            $course->introduction_product = $request->input('introduction_product');
            $course->content_product = $request->input('content_product');
            $course->title_procduct=$request->input('title_procduct');
            $course->certificate_id = $request->input('certificate_id');
            $course->category_id = $request->input('category_id');
            $course->name_brand = $request->input('name_brand');
            $course->price=$request->input('price');
            $course->price_no_tax = $request->input('price_no_tax');
            $course->price_offsale = $request->input('price_offsale');
            $course->price_offsale_no_tax=$request->input('price_offsale_no_tax');
            $course->product_image = $request->input('product_image');
            $course->product_image_text = $request->input('product_image_text');
            $course->video = $request->input('video');
            $course->material_name=$request->input('material_name');
            $course->search_keywords = $request->input('search_keywords');
            $course->list_image = $request->input('list_image');
            $course->isPublic=$request->input('isPublic');
            $course->isRefund = $request->input('isRefund');
            $course->isCertification = $request->input('isCertification');
            $course->isOnlinePayment=$request->input('isOnlinePayment');
            $course->isRate = $request->input('isRate');
            $course->isFreeShip = $request->input('isFreeShip');
            $course->timeRefund=$request->input('timeRefund');
            $course->count_video= $request->input('count_video');
            $course->sum_time_video = $request->input('sum_time_video');
            $course->date_start = $request->input('date_start');
            $course->date_end=$request->input('date_end');
            $course->count_discount = $request->input('count_discount');
            $course->activationcode = $request->input('activationcode');
            $course->date_promotion_start=$request->input('date_promotion_start');
            $course->date_promotion_end = $request->input('date_promotion_end');
            
            $course->save();
        
            return response([
                'products' => $course
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
            $course = Course::find($id);
            $course->delete();
    
          return response()->json('Successfully Deleted');
        }
        catch (\Exception $e) {
            //return error message
            return $e->getMessage();
        }
    }
}
