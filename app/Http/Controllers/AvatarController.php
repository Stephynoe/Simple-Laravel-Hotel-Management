<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\updateAvatarRequest;
use Illuminate\Support\Facades\Storage;

class AvatarController extends Controller
{
    public function update(updateAvatarRequest $formdata)
    {
         
        $path = $formdata->file('avatar')->store('avatars', 'public');
        //dd($path);

        auth()->user()->update(['avatar' => $path]);
        
        return back()->with(
            'message', 'Avatar has been updated successfully'
        );
    }
}
