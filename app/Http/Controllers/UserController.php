<?php

namespace App\Http\Controllers;

use Auth;
use Hash;
use Validator;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('password.confirm')->only(['showChangePasswordForm']);
        $this->middleware(['permission:password-update,require_all,guard:web'])->only(['changePassword','showChangePasswordForm']);
        $this->middleware(['permission:profile-read|profile-update,require_all,guard:web'])->only(['setUserImage','setUserNameAndEmail']);
    }

    public function logOut(){
        Auth::logout();
        return redirect('login');
    }

    public function setUserImage(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'image' => ['required','regex:/^(https?:\/\/.*\.(?:png|jpg|jpeg))/']
        ]);

        if ($validator->fails()) {
            return redirect()->route('users.edit')->withInput($request->input())->withErrors($validator);
        }
        
        $user = Auth::user();
        $user->image = $request->get('image');
        $user->save();
        return redirect()->route('users.edit')->with('message', 'โปรไฟล์ของคุณอัพเดตเรียบร้อยแล้วค่ะ.');
    }

    public function setUserNameAndEmail(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required|max:25',
            'email' => 'required|email|unique:users,email,'.auth()->user()->id
        ]);

        if ($validator->fails()) {
            return redirect()->route('users.edit')->withInput($request->input())->withErrors($validator);
        }
        
        $user = Auth::user();
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->save();
        return redirect()->route('users.edit')->with('message', 'อัพเดตข้อมูลผู้ใช้งานเรียบร้อยแล้วค่ะ.');
    }

    public function showChangePasswordForm()
    {
        $user = auth()->user();
        return view('auth.userprofile')->with(['user' => $user]);
    }
    
    public function changePassword(Request $request)
    {
        if (!(Hash::check($request->get('currentPassword'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->route('users.edit',['','#vert-tabs-password'])->withInput($request->input())->with("error","รหัสผ่านปัจจุบันของคุณไม่ตรงกับรหัสผ่านที่คุณระบุ กรุณาลองอีกครั้ง");
        }

        if(strcmp($request->get('currentPassword'), $request->get('newPassword')) == 0){
            //Current password and new password are same
            return redirect()->route('users.edit',['','#vert-tabs-password'])->withInput($request->input())->with("error","รหัสผ่านใหม่เหมือนกับรหัสผ่านก่อนหน้านี้ กรุณาเลือกรหัสผ่านอื่น");
        }

        $validator =  Validator::make($request->all(),[
            'currentPassword' => 'required',
            'newPassword' => 'min:8|required_with:confirmPassword|same:confirmPassword'
        ],
        [
            'currentPassword.required' => 'กรุณากรอกรหัสด้วยค่ะ.',
            'newPassword.required_with' => 'คุณกรอกรหัสไม่เหมือนกัน.',
            'newPassword.same' => 'คุณกรอกรหัสไม่เหมือนกัน.'
        ]); 

        if ($validator->fails()) {
            return redirect()->route('users.edit',['','#vert-tabs-password'])->withInput($request->input())->with("error",$validator->errors()->first());
        }

        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('newPassword'));
        $user->save();

        return redirect()->route('users.edit',['','#vert-tabs-password'])->with("message","เปลี่ยนรหัสผ่านสำเร็จแล้ว");
    }
}
