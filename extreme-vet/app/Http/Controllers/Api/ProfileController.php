<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\Response;
use Illuminate\Validation\Rule;
use App\Models\Animal;
use App\Models\Owner;
use App\Models\Group;

class ProfileController extends Controller
{
    public function dashboard(Request $request)
    {
        $groups=Group::whereHas('animal',function($q)use($request){
            return $q->where('owner_id',$request->user()->id);
        })->count();

        $pending_groups=Group::whereHas('animal',function($q)use($request){
            return $q->where('owner_id',$request->user()->id);
        })->where('done',0)
        ->count();

        $completed_groups=Group::whereHas('animal',function($q)use($request){
            return $q->where('owner_id',$request->user()->id);
        })->where('done',1)
        ->count();

        return Response::response(200,'success',[
            'groups'=>$groups,
            'pending_groups'=>$pending_groups,
            'completed_groups'=>$completed_groups
        ]);

    }

    public function update_profile(Request $request)
    {        
        $validation=Response::validation($request,[
            'name'=>'required',
            'gender'=>[
                'required',
                Rule::in(['male','female']),
            ],
            'phone'=>'required',
            'email'=>'required|email',
            'address'=>'nullable'
        ]);

        if(!empty($validation))
        {
            return $validation;
        }

        $owner=Owner::where('id',$request->user()->id)->first();

        Owner::where('id',$request->user()->id)->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'gender'=>$request->gender,
            'address'=>($request->has('address'))?$request->address:$owner['address'],
        ]);

        $owner=Owner::where('id',$request->user()->id)->first();

        return Response::response(200,'success',['owner'=>$owner]);
    }


    public function animals(Request $request)
    {
        $animals=Animal::where('owner_id',$request->user()->id)->get();

        return Response::response(200,'success',['animals'=>$animals]);
    }
   



}
