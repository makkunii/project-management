<?php

namespace App\Http\Controllers\API;


use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Sanctum\PersonalAccessToken;

class RegisterController extends BaseController

{
    /**
    * Register api
    *
    * @return \Illuminate\Http\Response
    */

    /** get all users */
    public function index()
    {
        $users = User::all();
        return $this->sendResponse($users, 'Displaying all users data');
    }
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "name" => ['required','min:4'],
            "username" => ['required','min:4'],
            "email" => ['required','email', Rule::unique('users','email')],
            "password" => 'required|same:password|min:6'
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $success['token'] =  $user->createToken('MyApp')->plainTextToken;
        $success['name'] =  $user->name;


        return $this->sendResponse($success, 'User register successfully.');
    }
    public function login(Request $request)
    {
        $request->validate([
            "email" => 'required',
            "password" => 'required'

       ]);

      $usernameinput = $request["email"];
      $password = $request["password"];

        //check which one is in use
        $field = filter_var($usernameinput, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        if (Auth::attempt([$field => $usernameinput, 'password' => $password])) {

            $user = Auth::user();
              /** @var \App\Models\MyUserModel $user **/
            $success['token'] =  $user->createToken('makkunii')->plainTextToken;
            $success['name'] =  $user->name;
            $success['username'] =  $user->username;
            $success['id'] = $user->id;


            return $this->sendResponse($success, 'User login successfully.');
        } else {
            return $this->sendError('Unauthorised.', ['error'=>'Unauthorised']);
        }

    }
    public function logout(Request $request) {
          // Get bearer token from the request
            $user_token = $request["token"];
            $accessToken = $request->bearerToken();
            if($user_token) {
                $token = PersonalAccessToken::findToken($user_token);
                $token->delete();

                return response()->json(['Message'=> 'User Logged out'], 200);
            }
            else
            {
                return response()->json(['Message'=> 'EWAN KORIN'], 500);
            }




    }
}
