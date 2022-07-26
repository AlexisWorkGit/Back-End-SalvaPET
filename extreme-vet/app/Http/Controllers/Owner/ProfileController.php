<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Owner;
use App\Http\Requests\Owner\ProfileRequest;

class ProfileController extends Controller
{
    public function edit()
    {
        $owner=Owner::findOrFail(auth()->guard('owner')->user()['id']);
        return view('owner.profile.edit',compact('owner'));
    }

    public function update(ProfileRequest $request)
    {
        Owner::where('id',auth()->guard('owner')->user()['id'])
                ->update($request->except('_token'));
        
        session()->flash('success',__('Profile updated successfully'));

        return redirect()->back();
    }
}
