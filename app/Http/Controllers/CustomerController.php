<?php

namespace App\Http\Controllers;

use App\Model\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
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
    public function changeAvatar(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|mimes:jpg,jpeg,png,gif,mp4',
         ],
         [
            'file.required'=>'Bạn chưa nhập file',
            'file.mimes' => 'Chỉ chấp nhận file với đuôi .jpg .jpeg .png .gif',
         ]);
         try{
                    $post= Customer::find(Auth::user()->id);
                    $post->addMedia($request->file('file'))->withManipulations([
                        'thumb' => ['orientation' => '90'],
                        'otherConversion' => ['orientation' => '90'],
                     ])
                     ->withCustomProperties([
                        'generated_conversions' => [
                            'small' => true,'medium' => true,'large' => true,
                        ]
                    ])
                    ->withResponsiveImages()->toMediaCollection('avatar');
                    $post->getMedia();
                    return response()->json([
                        'status' => 'successfully']);
            }
            catch(\Exception $e)
            {
                return $this->respondWithException($e);
            }
    }
    public function changeName(Request $request)
    {
        $this->validate($request, [
            'password' => 'required|min:3',
            'newname' => 'required|min:3',
            'retypenewname'=> 'required|min:3|same:newname',
        ]);
        try{
            if(Hash::check($request->input('password'),Auth::user()->password)){
                Customer::find(Auth::user()->id)->update(['name'=> $request->newname]);
                return response()->json([
                    'status' => 'successfully',
                ]);
            }else{
                return response()->json(['status' => 'fail'],401);
            }
        }catch (\Exception $e){
            return $this->respondWithException($e);
        }
    }
    public function changePassword(Request $request)
    {
        $this->validate($request, [
            'password' => 'required|min:3',
            'newpassword' => 'required|min:3',
            'retypenewpassword'=> 'required|min:3|same:newpassword',
        ]);
        try{
            if(Hash::check($request->input('password'),Auth::user()->password)){
                Customer::find(Auth::user()->id)->update(['name'=> $request->newpassword]);
                return response()->json([
                    'status' => 'successfully',
                ]);
            }else{
                return response()->json(['status' => 'fail'],401);
            }
        }catch (\Exception $e){
            return $this->respondWithException($e);
        }
    }
    public function changeEmail(Request $request)
    {
        $this->validate($request, [
            'password' => 'required|min:3',
            'newemail' => 'required|email',
            'retypenewemail'=> 'required|email|same:newemail',
        ]);
        try{
            if(Hash::check($request->input('password'),Auth::user()->password)){
                Customer::find(Auth::user()->id)->update(['email'=> $request->newemail]);
                return response()->json([
                    'status' => 'successfully',
                ]);
            }else{
                return response()->json(['status' => 'fail'],401);
            }
        }catch (\Exception $e){
            return $this->respondWithException($e);
        }
    }
    // public function verify(Request $request)
    // {
    //     $newemail = $request->input('newemail');
    //     $this->validate($request, [
    //         'password' => 'required|min:3',
    //         'newemail' => 'required|email',
    //         'retypenewemail'=> 'required|same:newemail|email',
    //     ]);
    //     try{
    //         if(Hash::check($request->input('password'),Auth::user()->password)){
    //             $verify_email=Customer::find(Auth::user()->id)->update(['verify_email' => 'base64_encode(str_random(40))']);
    //             if($newemail){
    //                 $newemail->notify( new VerifyEmail($verify_email) );
    //             }
    //             return response()->json([
    //                 'status' => 'successfully',
    //             ]);
    //         }else{
    //             return response()->json(['status' => 'fail'],401);
    //         }
    //     }catch (\Exception $e){
    //         return $this->respondWithException($e);
    //     }
    // }
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
