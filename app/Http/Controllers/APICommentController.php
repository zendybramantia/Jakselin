<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Comment;
use Illuminate\Http\Request;

class APICommentController extends Controller
{
    
    public function store(Request $request, $userid, $kulinerid)
    {
        try{
            $this->validate($request, [
                'body' => 'required'
            ]);
    
            Comment::create([
                'kuliner_id' => $kulinerid,
                'user_id' => $userid,
                'body' => $request->body
            ]);
    
            return response()->json([
                'message' => 'Success'
            ]);
        }catch (\Exception $e) {
            dd($e);
        }
    }

}
