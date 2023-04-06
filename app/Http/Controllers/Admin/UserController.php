<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Exception;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        try {
            $responseData = response()->json([
                'status'   => 'success',
                'datas' => $user
            ]);
            return $responseData;
        }
        catch (Exception $error) {
            throw $error;
        }
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User;
        $user->user_fullname = $request->user_fullname;
        $user->email = $request->email;
        $user->user_image = $request->user_image;
        $user->user_phone = $request->user_phone;
        $user->password = $request->password;
        $user->user_account = $request->user_account;
        $user->user_bank = $request->user_bank;
        $user->user_status = $request->user_status;
        $user->save();
        
        return redirect('/admin/user')->with('success', 'New Ticket has been added!');
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
        $user = User::find($id);
        try {
            $responseData = response()->json([
                'status'   => 'successfully update data',
                'datas' => $user->update($request->all())
            ]);
            return $responseData;
        }
        catch (Exception $error) {
            throw $error;
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
        $item = User::findOrFail($id);
        try {
            $responseData = response()->json([
                'status'   => 'successfully delete data',
                'datas' => $item->delete()
            ]);
            return $responseData;
        }
        catch (Exception $error) {
            throw $error;
        }
    }
}
