<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Model\User;
use Validator;
use Auth;
class UserController extends Controller
{
    public function register(Request $request)
    {
        //validate incoming request
        $this->validate($request, [
            'fullname' => 'required|string',
            'username' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);

        try {

            $user = new User;
            $user->fullname = $request->input('fullname');
            $user->username = $request->input('username');
            $user->email = $request->input('email');
            $plainPassword = $request->input('password');
            $user->password = app('hash')->make($plainPassword);

            $user->save();

            //return successful response
            return response()->json(['user' => $user, 'message' => 'success'], 200);

        } catch (\Exception $e) {
            //return error message
            return response()->json(['message' => 'User Registration Failed!'], 409);
        }

    }
    /**
     * @OA\Post(
     *   path="/api/login",
     *   tags={"Auth"},
     *   summary="login",
     *   description="Login a user and generate token",
     *   operationId="Login",
     *   @OA\RequestBody(
     *       required=true,
     *       @OA\MediaType(
     *           mediaType="application/json",
     *           @OA\Schema(
     *               type="object",
     *               @OA\Property(
     *                   property="email",
     *                   description="User email",
     *                   type="string",
     *                   example="ihamzehald@gmail.com"
     *               ),
     *               @OA\Property(
     *                   property="password",
     *                   description="User password",
     *                   type="string",
     *                   example="larapoints123"
     *               ),
     *           )
     *       )
     *   ),
     *  @OA\Response(
     *         response="200",
     *         description="ok",
     *         content={
     *             @OA\MediaType(
     *                 mediaType="application/json",
     *                 @OA\Schema(
     *                     @OA\Property(
     *                         property="access_token",
     *                         type="string",
     *                         description="JWT access token"
     *                     ),
     *                     @OA\Property(
     *                         property="token_type",
     *                         type="string",
     *                         description="Token type"
     *                     ),
     *                     @OA\Property(
     *                         property="expires_in",
     *                         type="integer",
     *                         description="Token expiration in miliseconds",
     *                         @OA\Items
     *                     ),
     *                     example={
     *                          "id": "15",
     *                          "fullname": "Đào Thị Uyên",
     *                          "username": "uyendt",
     *                          "email": "daothiuyen1199@gmail.com",
     *                          "created_at": "2020-08-12T08:35:07.000000Z",
     *                          "updated_at": "2020-08-12T08:35:07.000000Z",
     *                          "api_token": "51f3e74a71363a13757013b6119a77d1"
     *                     }
     *                 )
     *             )
     *         }
     *     ),
     *   @OA\Response(response="401",description="Unauthorized"),
     * )
     */
//    public function login(Request $request)
//    {
//        $this->validate($request, [
//            'email' => 'required|email',
//            'password' => 'required',
//        ]);
//
//        if ($request->has('email') && $request->has('password')) {
//            $password = sha1($request->get('password'));
//            $user = User:: where("email", $request->get('email'))
//                ->where("password", $password)
//                ->first();
//            $db_code = $user->db_code;
//            $posts = Post::on($db_code)->get();
//            if ($user) {
//                $token=md5($user->email);
//                $user->api_token=$token;
//                $user->save();
//                return response()->json(['message'=>'Login thành công','user'=>$user,'posts'=>$posts],200);
//            } else {
//                return response()->json(['message'=>'Invalid login'],401);
//            }
//        } else {
//            return response()->json(['status' => 'fail'],404);
//        }
//    }

    public function Login(Request $request)
    {

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);


        $email    = $request->input('email');
        try {
            $login = User::where('email', $email)->first();
            var_dump($login);
            if ($login) {
                if ($login->count() > 0) {
                    if (Hash::check($request->input('password'), $login->password)) {
                        try {
                            $api_token = sha1($login->id_user.time());

                            $create_token = User::where('id', $login->id_user)->update(['api_token' => $api_token]);
                            $res['status'] = true;
                            $res['message'] = 'Success login';
                            $res['data'] =  $login;
                            $res['api_token'] =  $api_token;

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

    /**
     * @OA\GET(
     *   path="/api/logout",
     *   tags={"Auth"},
     *   summary="logout",
     *   description="Logout a user",
     *   operationId="Logout",
     *  @OA\Response(
     *         response="200",
     *         description="ok",
     *     ),
     *   @OA\Response(response="401",description="Unauthorized"),
     * )
     */

    public function logout()
    {
        $user = Auth::user();
        $user->api_token = null;
        $user->save();
        return response()->json(['message'=>'Logout success'],200);
    }
}
