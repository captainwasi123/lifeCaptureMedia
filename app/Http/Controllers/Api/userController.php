<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\userAddress;
use App\Models\User;
use Validator;
use Auth;
use Hash;

class userController extends Controller
{
    public function allAddress(){
        $data = userAddress::where('user_id', Auth::id())->orderBy('id', 'desc')->get();


        if (count($data) == 0) {
            return response()->json('Data not found', 404); 
        }
        
        return response()->json(['address' => $data]);
    }

    public function addAddress(Request $request){
        $data = $request->all();

        if (empty($data['address_1']) || empty($data['address_2']) || empty($data['city']) || empty($data['state']) || empty($data['zipcode'])){
            return response()->json('Invalid Parameters', 500); 
        }

        userAddress::addAddress($data);
        return response()->json(['status' => 200, 'message' => 'Address Successfully Added.']);
    }

    public function viewProfile(){
        $data = User::find(Auth::id());

        if (empty($data->id)) {
            return response()->json('Data not found', 404); 
        }

        $user['firstname'] = $data->firstname;
        $user['lastname'] = $data->lastname;
        $user['dob'] = $data->dob;
        $user['email'] = $data->email;
        
        return response()->json(['User' => $user]);
    }

    public function updateProfile(Request $request){
        $data = $request->all();

        if (empty($data['firstname']) || empty($data['lastname']) || empty($data['dob'])){
            return response()->json('Invalid Parameters', 500); 
        }

        $u = User::find(Auth::id());
        $u->firstname = $data['firstname'];
        $u->lastname = $data['lastname'];
        $u->dob = date('Y-m-d', strtotime($data['firstname']));
        $u->save();

        return response()->json(['status' => 200, 'message' => 'Profile Successfully Updated.']);
    }

    public function changePassword(Request $request){
        $validator = Validator::make($request->all(), [
            'old_password' => ['required','string'],
            'password' => ['required','string', 'min:8'],
            'confirm_password' => 'required|same:password',

        ]);

        if($validator->fails()){
            return  ['success' => false, 'error' =>  $validator->errors()];
        }
        $old_password = $request->input('old_password');
        $password =  $request->input('password');
        $confirm_password = $request->input('confirm_password');

        $user = User::find(Auth::id());

        if (!Hash::check($old_password, $user->password)) {
            return response()->json(['status' => false, 'error' =>'Current password is incorrect.']);
        }else{
            if($password == $confirm_password ){
                $user->password = bcrypt($request->password);
                $user->save();
                return response()->json(['status' => True, 'success' => 'Password updated.']);
            }else{
                return response()->json(['status' => false, 'error' => 'Password does not match.']);
            }
        }
    }
}
