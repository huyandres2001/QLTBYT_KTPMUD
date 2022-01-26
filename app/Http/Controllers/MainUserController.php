<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\KhoaPhong;
use App\Http\Requests\PasswordRequest;

class MainUserController extends Controller
{
    public function PostLogin(Request $request)
    {
        # code...
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/dashboard');
        } else {
            return back()->with('warning', 'Email hoặc mật khẩu không đúng!');
        }
    }
    public function UserDashboard()
    {
        # code...
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('user.index', compact('user'));
    }
    public function Logout()
    {
        Auth::logout();
        return Redirect()->route('login');
    }

    public function UserProfile()
    {
        $id = Auth::user()->id; //take the id
        $user = User::find($id); //find the id in the models
        return view('user.profile.view_profile', compact('user')); //compact() creates an array from existing variables given as string arguments to it.
    }
    public function UserProfileEdit()
    {  
        $data['user'] = User::find(Auth::user()->id);
        $data['DSKhoaPhong'] = KhoaPhong::all();
        return view('user.profile.view_profile_edit', $data); //edit data of the user
    }
    public function UserProfileStore(Request $request)
    {
        # code...
        $data = User::find(Auth::user()->id);
        $data->SoDienThoai = $request->SoDienThoai;
        $data->DiaChi = $request->DiaChi;
        $data->NgaySinh = $request->NgaySinh;
        $data->idKhoaPhong = $request->idKhoaPhong;
        if($request->file('profile_photo_path'))
        {
           $file = $request->file('profile_photo_path');
           @unlink(public_path('upload/UserImages/'.$data->profile_photo_path));
           $filename = date('Ymd').$file->getClientOriginalName();
           $file->move(public_path('upload/UserImages'), $filename);
           $data['profile_photo_path'] = $filename;
        }
        $data->save();
        return redirect()->route('user.profile.edit')->with('message','Thay đổi thông tin thành công');
    }
    public function UserPasswordView()
    { 
        $id = Auth::user()->id; //take the id
        $user = User::find($id); //find the id in the models
        return view('user.profile.view_password', compact('user'));
    }
    public function UserPasswordUpdate(PasswordRequest $request)
    {
        # code...
        $validateData = $request->validate([
            'current_password' => 'required',
            'password' => 'required|confirmed',
        ]);
        $hashedPassword = Auth::user()->password;
        if(Hash::check($request->current_password, $hashedPassword)){
            $user = User::find(Auth::id());
            $user->password = Hash::make($request->password);
            $user->save();
            return redirect()->route('user.password.view');
        }
        else
        {
            return redirect()->back()->with('error', 'Mật khẩu cũ không đúng');
        }
    }
}
