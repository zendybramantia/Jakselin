<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    
    public function store(Request $request)
    {
        try{
            $this->validate($request, [
                'kuliner_id' => "required",
                'body' => 'required'
            ]);
    
            Comment::create([
                'kuliner_id' => $request->kuliner_id,
                'user_id' => Auth::user()->id,
                'body' => $request->body
            ]);
    
            return redirect('/wisata/' . $request->kuliner_id);
        }catch (\Exception $e) {
            dd($e);
        }
    }

}
