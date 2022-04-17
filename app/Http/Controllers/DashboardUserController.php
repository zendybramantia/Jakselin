<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class DashboardUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return User::all();
        return view('Dashboard.user.index', [
            'userlist'=> User::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        // return 'ini user';
        return view('Dashboard.user.show', [
            'user' => $user
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('Dashboard.user.edit', [
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        try {
            $user = Auth::user();
            $this->validate($request, [
                'nama' => "required",
                'username' => "required",
                'nohp' => "required",
                'avatar' => "mimes:jpeg,jpg,png"
            ]);

            $userUpdate = User::where('id', $user->id)->first();
            
            if ($request->hasFile("avatar")) {
                $url = $request->file('avatar')->store('profile');
                
                if($user->avatar != 'images/profile.jpg'){
                    File::delete($user->avatar);
                }
                
                $userUpdate->update([
                    "name" => $request->nama,
                    "username" => $request->username,
                    "nohp" => $request->nohp,
                    "avatar" => "storage/" . $url
                ]);
                $userUpdate->save();
            }else{
                
                $userUpdate->update([
                    "name" => $request->nama,
                    "username" => $request->username,
                    "nohp" => $request->nohp
                ]);
                
                $userUpdate->save();
            }
            // dd($userUpdate);
            // return back()->back()->with('success', 'Registrasi berhasil');
            return redirect('/dashboard/users')->with('success', 'Update user berhasil');
        } catch (\Exception $e) {
            // dd($e);
            // return redirect('/dashboard/users/{{ $user->id }}/edit')->with('error', 'Edit user gagal');
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
}
