<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\GroupAnalysis;
use App\Models\GroupCulture;
use App\Models\GroupAnalysisResult;
use App\Models\Analysis;
use App\Models\Culture;
use App\Models\GroupCultureResult;

use App\Http\Controllers\Api\Response;

class GroupTestsController extends Controller
{

    public function group_tests(Request $request)
    {
        $groups=Group::whereHas('animal',function($q)use($request){
            return $q->where('owner_id',$request->user()->id);
        })->select('id','animal_id','total','discount','paid','due','created_at','done','report_pdf','receipt_pdf')
        ->with('animal');

        if($request->has('animal_id')&&!empty($request['animal_id']))
        {
            $groups->where('animal_id',$request['animal_id']);
        }

        $groups=$groups->get();

        return Response::response(200,'success',['groups'=>$groups]);
    }
}
