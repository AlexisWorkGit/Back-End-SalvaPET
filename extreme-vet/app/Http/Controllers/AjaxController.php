<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Admin\AnimalRequest;
use App\Http\Requests\Admin\OwnerRequest;
use App\Http\Requests\Admin\DoctorRequest;
use App\Models\Owner;
use App\Models\Animal;
use App\Models\Doctor;
use App\Models\Group;
use App\Models\Option;
use App\Models\Role;
use App\Models\User;
use App\Models\Test;
use App\Models\Culture;
use App\Models\Antibiotic;
use App\Models\Chat;
use App\Models\Visit;
use App\Models\Branch;
use App\Models\Contract;
use App\Models\Expense;
use App\Models\Language;
use App\Models\TestOption;
use App\Models\ExpenseCategory;
use Yajra\DataTables\Html\Button;
use App\Mail\PatientCode;
use DataTables;
use Mail;
use Str;
use Illuminate\Validation\Rule;

class AjaxController extends Controller
{
    /**
    * get animal by code select2
    *
    * @access public
    * @var  @Request $request
    */
    public function get_animal_by_code(Request $request)
    {
        if(isset($request->term))
        {
            $animals=Animal::where('code','like','%'.$request->term.'%')->take(20)->get();
        }
        else{
            $animals=Animal::take(20)->get();
        }

        return response()->json($animals);
    }
    
    /**
    * get animal by name select2
    *
    * @access public
    * @var  @Request $request
    */
    public function get_animal_by_name(Request $request)
    {
        if(isset($request->term))
        {
            $animals=Animal::where('name','like','%'.$request->term.'%')->take(20)->get();
        }
        else{
            $animals=Animal::take(20)->get();
        }

        return response()->json($animals);
    }

    /**
    * get animal by code for owner select2
    *
    * @access public
    * @var  @Request $request
    */
    public function get_animal_by_code_owner(Request $request)
    {
        if(isset($request->term))
        {
            $animals=Animal::where('code','like','%'.$request->term.'%')
                            ->take(20)
                            ->where('owner_id',auth()->guard('owner')->user()->id)
                            ->get();
        }
        else{
            $animals=Animal::take(20)
                            ->where('owner_id',auth()->guard('owner')->user()->id)
                            ->get();
        }

        return response()->json($animals);
    }
    
    /**
    * get animal by name select2
    *
    * @access public
    * @var  @Request $request
    */
    public function get_animal_by_name_owner(Request $request)
    {
        if(isset($request->term))
        {
            $animals=Animal::where('name','like','%'.$request->term.'%')
                            ->take(20)
                            ->where('owner_id',auth()->guard('owner')->user()->id)
                            ->get();
        }
        else{
            $animals=Animal::take(20)
                            ->where('owner_id',auth()->guard('owner')->user()->id)
                            ->get();
        }

        return response()->json($animals);
    }

     /**
    * get owners select2
    *
    * @access public
    * @var  @Request $request
    */
    public function get_owners(Request $request)
    {
        if(isset($request->term))
        {
            $owners=Owner::where('name','like','%'.$request->term.'%')->take(20)->get();
        }
        else{
            $owners=Owner::take(20)->get();
        }

        return response()->json($owners);
    }
    
    /**
    * create animal
    *
    * @access public
    * @var  @Request $request
    */
    public function create_animal(AnimalRequest $request)
    {
        $request['code']=animal_code();

        $animal=Animal::create($request->except('_token'));

        return response()->json($animal);
    }

    /**
    * create owner
    *
    * @access public
    * @var  @Request $request
    */
    public function create_owner(OwnerRequest $request)
    {
        $request['code']=owner_code();

        $owner=Owner::create($request->except('_token'));

        return response()->json($owner);
    }

    /**
    * get doctors select2
    *
    * @access public
    * @var  @Request $request
    */
    public function get_doctors(Request $request)
    {
        if(isset($request->term))
        {
            $doctors=Doctor::where('name','like','%'.$request->term.'%')->take(20)->get();
        }
        else{
            $doctors=Doctor::take(20)->get();
        }

        return response()->json($doctors);
    }

    /**
    * get tests select2
    *
    * @access public
    * @var  @Request $request
    */
    public function get_tests(Request $request)
    {
        if(isset($request->term))
        {
            $tests=Test::where(function($q){
              return $q->where('parent_id',0)->orWhere('separated',true);
            })->where('name','like','%'.$request->term.'%')->take(20)->get();
        }
        else{
            $tests=Test::where(function($q){
                return $q->where('parent_id',0)->orWhere('separated',true);
              })->take(20)->get();
        }

        return response()->json($tests);
    }

    /**
    * get cultures select2
    *
    * @access public
    * @var  @Request $request
    */
    public function get_cultures(Request $request)
    {
        if(isset($request->term))
        {
            $cultures=Culture::where('name','like','%'.$request->term.'%')->take(20)->get();
        }
        else{
            $cultures=Culture::take(20)->get();
        }

        return response()->json($cultures);
    }

    

    /**
    * create doctor
    *
    * @access public
    * @var  @Request $request
    */

    public function create_doctor(Request $request)
    {
        $request->validate([
            'name'=>[
                'required',
                Rule::unique('doctors')->whereNull('deleted_at')
            ],
        ]);

        $request['code']=doctor_code();
        
        $doctor=Doctor::create($request->except('_token'));

        return response()->json($doctor);
    }

    /**
    * get online users
    *
    * @access public
    * @var  @Request $request
    */
    public function online()
    {
        $online_users=[];

        $users=\App\Models\User::all();

        foreach($users as $user)
        {
            $online=\Cache::get('user-'.$user['id']);
            if(!empty($online))
            {
                array_push($online_users,$user['id']);
            }
        }

        $online_users=\App\Models\User::whereIn('id',$online_users)
                                    ->where('id','!=',auth()->guard('admin')->user()['id'])
                                    ->get();

        return response()->json($online_users);
    }

    /**
    * get chat messages
    *
    * @access public
    * @var  @Request $request
    */
    public function get_chat($id)
    {
        $chats=Chat::with('from_user')->where([
            ['from',$id],['to',auth()->guard('admin')->user()['id']]
        ])->orWhere([
            ['to',$id],['from',auth()->guard('admin')->user()['id']]
        ])->orderBy('id','desc')->take(20)->get();

        $to_chats=Chat::where([['from',$id],['to',auth()->guard('admin')->user()['id']]])->get();

        foreach($to_chats as $chat)
        {
            $chat->update(['read'=>1]);
        }

        return response()->json($chats);
    }

    /**
    * get chat unread messages
    *
    * @access public
    * @var  @Request $request
    */
    public function chat_unread($id)
    {
        $chats=Chat::with('from_user')->where([
            ['from',$id],['to',auth()->guard('admin')->user()['id']]
        ])->where('read',0)
        ->get();

        foreach($chats as $chat)
        {
            $chat->update(['read'=>1]);
        }

        return response()->json($chats);
    }

    /**
    * send message
    *
    * @access public
    * @var  @Request $request
    */
    public function send_message(Request $request,$id)
    {
        $chat=Chat::create([
            'from'=>auth()->guard('admin')->user()['id'],
            'to'=>$id,
            'message'=>$request->message
        ]);

        return $chat;
    }


    /**
    * Change visit status
    *
    * @access public
    * @var  @Request $request
    */
    public function change_visit_status($id)
    {
        $visit=Visit::find($id);
        
        $visit->update([
            'read'=>true,
            'status'=>($visit['status'])?false:true,
        ]);

        return response()->json(__('Visit status updated successfully'));
    }

    /**
    * Change lang status
    *
    * @access public
    * @var  @Request $request
    */
    public function change_lang_status($id)
    {
        $lang=Language::find($id);
        
        $lang->update([
            'active'=>($lang['active'])?false:true,
        ]);

        return response()->json(__('Language status updated successfully'));
    }


    /**
    * create expenses category
    * 
    * @access public
    * @var  @Request $request
    */
    public function add_expense_category(Request $request)
    {
        $category=ExpenseCategory::create([
            'name'=>$request['name']
        ]);

        return response()->json($category);
    }


    /**
    * get unread mesasges
    * 
    * @access public
    * @var  @Request $request
    */
    public function get_unread_messages(Request $request)
    {
        $messages=Chat::with('from_user')->where('to',auth()->guard('admin')->user()['id'])->where('read',false)->get();
      
        return response()->json($messages);
    }

    /**
    * get unread mesasges count
    * 
    * @access public
    * @var  @Request $request
    */
    public function get_unread_messages_count($user_id)
    {
        $count=Chat::with('from_user')->where([['to',auth()->guard('admin')->user()['id']],['from',$user_id]])->where('read',false)->count();

        return $count;
    }

    /**
    * load more messages
    * 
    * @access public
    * @var  @Request $request
    */
    public function load_more($user_id,$message_id)
    {
        $chats=Chat::with(['from_user','to_user'])->where(function($q)use($user_id){
            return $q->where([
                ['to',$user_id],['from',auth()->guard('admin')->user()['id']]
            ])->orWhere([
                ['from',$user_id],['to',auth()->guard('admin')->user()['id']]
            ]);
        })->where('id','<',$message_id)->orderBy('id','desc')->take(10)->get();

        return response()->json($chats);

    }

    /**
    * get my messages to user 
    * 
    * @access public
    * @var  @Request $request
    */
    public function get_my_messages($id)
    {
        $chats=Chat::where([['from',auth()->guard('admin')->user()['id']],['to',$id]])->orderBy('id','desc')->take(20)->get();

        return response()->json($chats);
    }

    /**
    * get new visits
    * 
    * @access public
    * @var  @Request $request
    */
    public function get_new_visits()
    {
        $visits=Visit::where('read',false)->orderBy('id','desc')->with('animal.owner')->get();

        return response()->json($visits);

    }

 
    /**
    * get animal
    *
    * @access public
    * @var  @Request $request
    */
    public function get_animal(Request $request)
    {
        $animal=Animal::with('owner')->find($request->id);

        return response()->json($animal);
    }

    /**
    * delete test
    *
    * @access public
    * @var  @Request $request
    */
    public function delete_test($test_id)
    {
        $test=Test::find($test_id);

        if(isset($test))
        {
            $test->options()->delete();

            $test->delete();
        }

        return response()->json('success');
    }

    public function delete_option($option_id)
    {
        TestOption::where('id',$option_id)->delete();

        return response()->json('success');
    }


}



