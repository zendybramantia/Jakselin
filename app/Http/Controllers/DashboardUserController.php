<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
        $this->authorize('admin');
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
        return view('Dashboard.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validData = $request->validate([
            'name' => 'required',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8',
            'username' => 'required|unique:users',
            'nohp' => 'required|min:12|max:12'
        ]);

        $validData['password'] = bcrypt($validData['password']);

        User::create($validData);

        return redirect('/dashboard/users')->with('success', 'Registrasi '.$request->name.' berhasil');
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
    public function update(Request $request, User $user)
    {
        $data = $user;
        $this->validate($request, [
            'name' => "required",
            'username' => "required",
            'nohp' => "required",
            'avatar' => "mimes:jpeg,jpg,png"
        ]);

        $userUpdate = User::where('id', $data->id)->first();
        
        if ($request->hasFile("avatar")) {
            $url = $request->file('avatar')->store('profile');
            
            if($user->avatar != 'images/profile.jpg'){
                File::delete($user->avatar);
            }
            
            $userUpdate->update([
                "name" => $request->name,
                "username" => $request->username,
                "nohp" => $request->nohp,
                "avatar" => "storage/" . $url
            ]);
            $userUpdate->save();
        }else{
            
            $userUpdate->update([
                "name" => $request->name,
                "username" => $request->username,
                "nohp" => $request->nohp
            ]);
            
            $userUpdate->save();
        }
        // dd($userUpdate);
        // return back()->back()->with('success', 'Registrasi berhasil');
        // dd($userUpdate);
        return redirect('/dashboard/users/' . $user->id)->with('success', 'Update user berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        try{
            User::where('id', $user->id)->delete();
        } catch (\Exception $e) {
            dd($e);
        }
        return redirect('/dashboard/users')->with('success', 'User '.$user->name.' berhasil dihapus');
    }
}
