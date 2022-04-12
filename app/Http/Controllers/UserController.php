<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        return view('profile', ['user' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $this->validate($request, [
                'name' => "required",
                'email' => 'required|email',
                'password' => 'required',
                'username' => "required",
                'nohp' => "required"
            ]);

            User::create([
                'nama' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'username' => $request->username,
                'nohp' => $request->nohp
            ]);
            return redirect('/login')->with('success', 'Registrasi berhasil');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response("Nama, Email, atau Password tidak valid", 400);
        } catch (\Exception $e) {
            dd($e);
            return response("Internal Server Error", 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $user = Auth::user();
        return view('editUser', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserRequest  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        try {
            $user = Auth::user();
            $this->validate($request, [
                'nama' => "required",
                'username' => "required",
                'nohp' => "required",
                'avatar' => "required|mimes:jpeg,jpg,png"
            ]);

            if ($request->hasFile("avatar")) {
                $url = $request->file('avatar')->store('profile');
                
                if($user->avatar != 'images/profile.jpg'){
                    File::delete('assets/images/profile' . $user->avatar);
                }

                User::where('id', $user->id)->update([
                    "nama" => $request->nama,
                    "username" => $request->username,
                    "nohp" => $request->nohp,
                    "avatar" => "storage/" . $url
                ]);
            }else{
                User::where('id', $user->id)->update([
                    "nama" => $request->nama,
                    "username" => $request->username,
                    "nohp" => $request->nohp
                ]);
            }
            
            return redirect('/profile')->with('success', 'Registrasi berhasil');
        } catch (\Exception $e) {
            return redirect('/profile')->with('error', 'Edit user gagal');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

    public function login(Request $request){
        if (Auth::attempt(["email" => $request->get('email-login'), "password" => $request->get('pass-login')])) {
            $user = Auth::user();
            // dd($user);
            return redirect('/profile');
        } else {
            return response("Nama atau password salah", 400);
        }
    }
}
