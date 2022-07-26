<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Owner;
use App\Models\Setting;
use App\Mail\OwnerCode;
use Auth;
use Mail;
use App\Http\Requests\Owner\RegisterRequest;
use App\Http\Requests\Owner\LoginRequest;
use App\Http\Requests\Owner\ForgetCodeRequest;
use Str;
class OwnerController extends Controller
{
    /**
    * show owner registration form
    *
    * @access public
    */
    public function showRegistrationForm()
    {
        $info=setting('info');

        return view('auth.owner.register',compact('info'));
    }

    /**
    * register owner
    * @param Request $request
    * @access public
    */
    public function register_submit(RegisterRequest $request)
    {
        //logout from admin
        auth()->guard('admin')->logout();
        
        $owner=Owner::create([
            'code'=>owner_code(),
            'name'=>$request['name'],
            'phone'=>$request['phone'],
            'email'=>$request['email'],
            'gender'=>$request['gender'],
            'address'=>$request['address'],
        ]);

        // send_notification('owner_code',$owner);

        session()->flash('success',__('Owner registered successfully'));
        
        Auth::guard('owner')->login($owner);

        return redirect()->route('owner.index');
    }

    /**
    * show owner login form
    *
    * @access public
    */
    public function showLoginForm()
    {
        $info=setting('info');

        return view('auth.owner.login',compact('info'));
    }

    /**
    * login owner
    * @param Request $request
    * @access public
    */
    public function login_submit(LoginRequest $request)
    {
        $owner=Owner::where('code',$request['code'])->first();

        if(isset($owner))
        {
            //logout from admin
            auth()->guard('admin')->logout();

            $remember=($request->has('remeber'))?true:false;

            Auth::guard('owner')->login($owner,$remember);

            session()->flash('success',__('Login success'));
            
            return redirect()->route('owner.index');
        }
        else{

            session()->flash('failed',__('Wrong owner code'));
            return redirect()->back();
        }

    }

    /**
    * send owner code form
    *
    * @access public
    */
    public function showMailForm()
    {
        $info=setting('info');

        return view('auth.owner.mail',compact('info'));
    }


    /**
    * send owner code mail
    * @param Request $request
    * @access public
    */
    public function mail_submit(ForgetCodeRequest $request)
    {

       $owner=Owner::where('email',$request['email'])
                        ->orWhere('phone',$request['email'])
                        ->first();

       if(isset($owner))
       {
           //send mail
           send_notification('owner_code',$owner);

           session()->flash('success',__('we sent you the owner code,Please check your mail or phone for the owner code message'));
           return redirect()->route('owner.auth.login');
       }
       else{
        session()->flash('failed',__('Wrong owner email or phone'));
        return redirect()->back();
       }
    }

    /**
    * logout owner
    * @request $request
    * @access public
    */
    public function logout(Request $request)
    {
        Auth::guard('owner')->logout();

        return redirect()->route('owner.auth.login');
    }

    /**
    * QRCode owner login
    * $code
    * @access public
    */
    public function login_owner($code)
    {
        //logout from admin
        auth()->guard('admin')->logout();

        $owner=Owner::where('code',$code)->first();
        
        if(isset($owner))
        {
            session()->flash('success',__('Login success'));
            
            Auth::guard('owner')->login($owner);
            
            return redirect()->route('owner.index');
        }
        else{
            session()->flash('failed',__('Wrong owner code'));
            return redirect()->back();
        }
    }

}
