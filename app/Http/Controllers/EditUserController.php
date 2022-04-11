<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class EditUserController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('editUser', ['user' => $user]);
    }

    public function update(Request $request)
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
                $file = $request->file("avatar");
                $filename = time() . "." . $file->getClientOriginalExtension();
                
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

            return redirect('/profile');
        } catch (\Exception $e) {
            dd($e);
            return redirect('/profile');
        }
    }

    public function upload(Request $request)
    {
        $this->validate(
            $request,
            [
                'image' => ['required', 'max:500', 'mimes:jpg']
            ],
            [
                'image.required' => "Harus upload image",
                "image.max" => "Ukuran file maksimal 500 KB",
                "image.mimes" => "Tipe file hanya boleh JPG"
            ]
        );
        $uuid = Str::uuid()->toString();
        $extension = $request->image->extension();
        $imageName = $uuid . '.' . $extension;
        $request->image->move(public_path('images'), $imageName);
        return redirect()->back()->with("success", "Upload berhasil!");
    }
}
