<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Validator;
use Flashy;

class AdminController extends Controller
{
    public function password(){
        return view('admin.password');
    }

    public function change(Request $request){
        $validator = Validator::make($request->all(), [
            'old_password' => 'required|min:3|max:20',
            'new_password' => 'required|min:3|max:20',
        ]);

        if ($validator->fails()) {
            return redirect()->route('ChangePassword')->withErrors($validator);
        }

        $user = User::find(1);
        if(!\Hash::check($request->old_password, $user->password)){
            Flashy::error('Old password doesn\'t match');
            return redirect()->route('ChangePassword');
        }
        $user->password = bcrypt($request->pld_password);
        $user->update();
        Flashy::success('Password changed successfully');
        return redirect()->route('AdminHome');
    }

}
