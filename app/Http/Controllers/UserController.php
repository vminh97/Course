<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Model\User;
use Validator;


class UserController extends Controller
{
    protected function socialAssociation($email,$name,$photo,$id,$type,$data)
    {
        // check for already has account
        $user = User::where('email', $email)->first();
        $data = json_encode($data,JSON_UNESCAPED_UNICODE);
        //if user already found
        if( is_null($user)) {
            // create a new user
            $user = User::create([
                'name' => $name,
                'email' => $email
            ]);
            // relationship create user_social
            $user->socialProviders()->create(
                ['name'=>$name,'email'=>$email,'raw_data'=>$data, 'type' => $type]
            );
        }
        return response()->json(['message'=>"Login successful"]);
    }

    public function handleProviderCallback(Request $request)
    {
        try{
            //request data
            $type = $request->input('type');
            $data = $request->input('data');
            switch ($type) {
                //parse login with facebook
                case 'facebook':
                    return $this->socialAssociation($data['email'], $data['name'], $data['picture']['data']['url'],$data['id'], $type, $data);
                    break;
                //parse login with google
                case 'google':
                    return $this->socialAssociation($data['user']['email'], $data['user']['name'], $data['user']['photo'],$data['user']['id'], $type, $data);
                    break;
                default:
                    # code...
                    break;
            }
        }catch (\Exception $e){
            return $this->respondWithException($e);
        }
    }



    public function register(Request $request)
    {
        //validate incoming request
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);
        try {
            $user = new User;
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $plainPassword = $request->input('password');
            $user->password = app('hash')->make($plainPassword);

            $user->save();
            return response()->json(['user' => $user, 'message' => 'success'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'User Registration Failed!'], 409);
        }

    }
    public function Login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $email    = $request->input('email');
        try {
            $login = User::where('email', $email)->first();
            if ($login) {
                if ($login->count() > 0) {
                    if (Hash::check($request->input('password'), $login->password)) {
                        try {
                            $api_token = sha1($login->id_user.time());
                            User::where('id', $login->id_user)->update(['api_token' => $api_token]);
                            $res['status'] = true;
                            $res['message'] = 'Success login';
                            $res['data'] =  $login;
                            return response($res, 200);
                        } catch (\Illuminate\Database\QueryException $ex) {
                            $res['status'] = false;
                            $res['message'] = $ex->getMessage();
                            return response($res, 500);
                        }
                    } else {
                        $res['success'] = false;
                        $res['message'] = 'Username / email / password not found';
                        return response($res, 401);
                    }
                } else {
                    $res['success'] = false;
                    $res['message'] = 'Username / email / password  not found';
                    return response($res, 401);
                }
            } else {
                $res['success'] = false;
                $res['message'] = 'Username / email / password not found';
                return response($res, 401);
            }
        } catch (\Illuminate\Database\QueryException $ex) {
            $res['success'] = false;
            $res['message'] = $ex->getMessage();
            return response($res, 500);
        }
    }
    public function logout()
    {
        $user = User::find(Auth::id());
        $user->api_token = null;
        $user->save();
        return response()->json(['message'=>'Logout success'],200);
    }
}
