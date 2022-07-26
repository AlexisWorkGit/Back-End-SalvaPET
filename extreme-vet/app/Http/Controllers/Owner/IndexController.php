<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\GroupAnalysis;

class IndexController extends Controller
{

    /**
    * patinet dashboard view
    *
    * @access public
    */
    public function index()
    {
        $group_tests_count=Group::whereHas('animal',function($q){
                                    return $q->where('owner_id',auth()->guard('owner')->user()['id']);
                                })->count();

        $pending_tests_count=Group::whereHas('animal',function($q){
                                    return $q->where('owner_id',auth()->guard('owner')->user()['id']);
                                })
                                ->where('done',false)
                                ->count();

        $done_tests_count=Group::whereHas('animal',function($q){
                                    return $q->where('owner_id',auth()->guard('owner')->user()['id']);
                                })->where('done',true)
                                ->count();

        return view('owner.index',compact('group_tests_count','pending_tests_count','done_tests_count'));
    }
}
