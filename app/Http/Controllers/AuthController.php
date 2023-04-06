<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function createUser(Request $request)
    {

        try {
            $validatedData = $request->validate([
                'user_fullname' => 'required|max:255',
                'email' => 'required|email:dns|unique:users',
                'user_phone' => 'required',
                'password' => 'required|min:8'
            ]);
            $validatedData['password'] = Hash::make($validatedData['password']);
            $createData = User::create($validatedData);
            $filteredData = [
                "User_name" => $createData->user_fullname,
                "User_email" => $createData->email
            ];
            $responseData = response()->json([
                'status'   => 'Register Successful',
                'datas' => $filteredData,
            ]);
            return $responseData;
        } catch (Exception $error) {
            throw $error;
        }
    }

    public function loginUser(Request $request)
    {
        try {
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                $user = Auth::user();
                $filteredData = [
                    'User_name' => $user->user_fullname,
                    'User_email' => $user->email,
                    'User_phone' => $user->user_phone,
                    'User_bank' => $user->user_bank,
                    'User_account' => $user->user_account,
                    'User_status' => $user->user_status,
                    'isLogin' => true,
                    // 'User_token' => Str::random(60),
                ];
                $responseData = response()->json([
                    'status'   => 'Login Successful',
                    'datas' => $filteredData,
                ]);
                return $responseData;
            } else {
                return response()->json([
                    'status' => 'error',
                    'datas'   => 'Login Failed'
                ]);
            }
        } catch (Exception $error) {
            throw $error;
        }
    }

    public function logoutUser()
    {
        Auth::logout();
        Session::flush();
    }
}
