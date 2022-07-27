<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Owner;
use App\Http\Controllers\Api\Response;
use Illuminate\Validation\Rule;
use Mail;
use Validator;
use Str;

class ApiController extends Controller
{
    public $code='';
    public $message='';
    public $body='';

    public function login(Request $request)
    {
        
        $validation=Response::validation($request,['code'=>'required']);//validations

        if(!empty($validation))
        {
            return $validation;
        }
        
        $owner=Owner::where('code',$request['code'])->first();

        if(isset($owner))
        {
            $this->code=200;
            $this->message='success';
            $this->body=$owner;

            //create owner token
            $token = $owner->createToken('Laravel Password Grant Client')->accessToken;
            $owner['api_token']=$token;
            
            return Response::response($this->code,$this->message,$this->body);

        }
        else{

            $this->code=400;
            $this->message='owner not found';

            return Response::response($this->code,$this->message,$this->body);

        }
       
    }


    public function forget_code(Request $request)
    {
        $validation=Response::validation($request,['email'=>'required|email']);

        if(!empty($validation))
        {
            return $validation;
        }

        $owner=Owner::where('email',$request['email'])->first();

        if(!empty($owner))
        {
            //send mail owner code
            send_notification('owner_code',$owner);

            $this->code=200;
            $this->message='mail sent successfully';

            return Response::response($this->code,$this->message,$this->body);
        }
        else{
            $this->code=400;
            $this->message='owner email not found';
            
            return Response::response($this->code,$this->message,$this->body);
        }


    }

    public function register(Request $request)
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
        
        //register owner
        $owner=Owner::create([
            'code'=>owner_code(),
            'name'=>$request['name'],
            'phone'=>$request['phone'],
            'email'=>$request['email'],
            'gender'=>$request['gender'],
            'address'=>$request['address'],
        ]);

        //create token
        $token = $owner->createToken('Laravel Password Grant Client')->accessToken;
        $owner['api_token']=$token;

        //response
        $this->code=200;
        $this->message='success';
        $this->body=['owner'=>$owner];

        return Response::response($this->code,$this->message,$this->body);
    }

   
}
