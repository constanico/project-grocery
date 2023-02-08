<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\Password;

class ProfileController extends Controller
{
    public function register(){
        return view('profile.register');
    }

    public function postregister(Request $request){
        $request->validate([
            'firstname' => 'required|alpha|max:25',
            'lastname' => 'required|alpha|max:25',
            'email' => 'required|email:dns',
            'role' => 'required',
            'gender' => 'required',
            'picture' => 'required|image',
            'password' => ['required', 'confirmed', Password::min(8)->numbers()],
        ]);

        $file = $request->file('picture');
        $imageName = time().'.'.$file->getClientOriginalExtension();
        Storage::putFileAs('public/images', $file, $imageName);
        $imageName = 'images/'.$imageName;

        DB::table('users')->insert([
            [
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'email' => $request->email,
                'role' => $request->role,
                'gender' => $request->gender,
                'picture' => $imageName,
                'password' => bcrypt($request->password),
            ]
        ]);

        return redirect('/login');
    }

    public function login(){
        return view('profile.login');
    }

    public function postlogin(Request $request){
        $data = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required|min:8'
        ]);

        if(Auth::attempt($data)){
            $request->session()->regenerate();
            return redirect()->intended('/home');
        }

        return back()->with('error', 'Email atau Password salah');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function profile(){
        $user = User::find(Auth::user()->id);

        return view('profile.profile', compact('user'));
    }

    public function save(Request $request) {
        $request->validate([
            'firstname' => 'required|alpha|max:25',
            'lastname' => 'required|alpha|max:25',
            'email' => 'required|email:dns',
            'gender' => 'required',
            'picture' => 'required|image',
            'password' => ['required', 'confirmed', Password::min(8)->numbers()],
        ]);

        $file = $request->file('picture');
        $imageName = time().'.'.$file->getClientOriginalExtension();
        Storage::putFileAs('public/images', $file, $imageName);
        $imageName = 'images/'.$imageName;

        auth()->user()->update([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'gender' => $request->gender,
            'picture' => $imageName,
            'password' => bcrypt($request->password),
        ]);

        return view('profile.saved');
    }

    public function maintenance() {
        $user = User::all();

        return view('profile.maintenance', compact('user'));
    }

    public function update($id) {
        $user = User::where('id', $id)->first();

        return view('profile.update', compact('user'));
    }

    public function postupdate(Request $request, $id) {
        $user = User::where('id', $id)->first();

        $request->validate([
            'role' => 'required'
        ]);

        $user->role = $request->role;
        $user->save();

        return redirect('/home');
    }
}
