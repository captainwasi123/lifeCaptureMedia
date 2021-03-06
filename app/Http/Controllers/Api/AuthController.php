<?php

namespace App\Http\Controllers\Api;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Api\BaseController as BaseController;
use App\Models\User;
use Validator;
use bcrypt;
class AuthController extends BaseController
{

    public function login(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password, 'status'=>1])){ 
            $auth = Auth::user(); 
            $success['token'] =  $auth->createToken('LaravelSanctumAuth')->plainTextToken; 
            $success['firstname'] =  $auth->firstname;
   
            return $this->handleResponse($success, 'User logged-in!');
        } 
        else{ 
            return $this->handleError('Unauthorised.', ['error'=>'Unauthorised']);
        } 
    }


    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'firstname' => 'required',
            'lastname' => 'required',
            'username' => 'required',
            'email' => 'required|unique:tbl_users_info|email',
            'confirm_email' => 'required|same:email',
            'password' => 'required',
            'dob' => 'required',

        ]);
   
        if($validator->fails()){
            return $this->handleError($validator->errors());       
        }
   
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $input['status'] = '1';
        $user = User::create($input);
        $success['token'] =  $user->createToken('LaravelSanctumAuth')->plainTextToken;
        $success['firstname'] =  $user->firstname;
        $success['lastname'] =  $user->lastname;
        $success['username'] =  $user->username;
        $success['email'] =  $user->email;
        $success['status'] =  $user->status;
        $success['dob'] =  $user->dob;
        $success['addressline01'] =  $user->addressline01;
        $success['addressline02'] =  $user->addressline02;
        $success['state'] =  $user->state;
        $success['zipcode'] =  $user->zipcode;

        return $this->handleResponse($success, 'User successfully registered!');
    }

    public function logout(){
        $user = request()->user();

        $user->tokens()->where('id', $user->currentAccessToken()->id)->delete();
        Auth::user()->tokens->each(function($token, $key) {
            $token->delete();
        });
        
        return response()->json(['status' => 200, 'message' => 'Successfully Logged out.']);
    }




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
        //
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
