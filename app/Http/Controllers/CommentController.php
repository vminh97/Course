<?php

namespace App\Http\Controllers;

use Egulias\EmailValidator\Warning\Comment;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use App\Model\Comments;
class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
            $comments = DB::table('comments')->join('customers', 'comments.customer_id', '=', 'customers.id')
            ->join('products','comments.product_id','=','products.id')->get();
            return response()->json($comments);   
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
                'customer_id' => 'required|min:5',
                'customers_code' => 'required',
                'customers_name' => 'required',
                'content_comment' => 'required',
                'star_comment' => 'required',
                'comment_image' => 'required',
                'status' => 'required',
                'isPublic'=>'required'
            ]);
        
            $comment = Comments::find($id);
            $comment->customer_id = $request->input('customer_id');
            $comment->customers_code = $request->input('customers_code');
            $comment->customers_name=$request->input('customers_name');
            $comment->content_comment = $request->input('content_comment');
            $comment->comment_image = $request->input('comment_image');
            $comment->status=$request->input('status');
            $comment->isPublic = $request->input('isPublic');
            
            $comment->save();
        
            return response([
                'comment' => $comment
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
                'customer_id' => 'required|min:5',
                'customers_code' => 'required',
                'customers_name' => 'required',
                'content_comment' => 'required',
                'star_comment' => 'required',
                'comment_image' => 'required',
                'status' => 'required',
                'isPublic'=>'required'
            ]);
        
            $comment = Comments::find($id);
            $comment->customer_id = $request->input('customer_id');
            $comment->customers_code = $request->input('customers_code');
            $comment->customers_name=$request->input('customers_name');
            $comment->content_comment = $request->input('content_comment');
            $comment->comment_image = $request->input('comment_image');
            $comment->status=$request->input('status');
            $comment->isPublic = $request->input('isPublic');
            
            $comment->save();
        
            return response([
                'comment' => $comment
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
            $comment = Comments::find($id);
            $comment->delete();
    
          return response()->json('Successfully Deleted');
        }
        catch (\Exception $e) {
            //return error message
            return $e->getMessage();
        }
    }
}
