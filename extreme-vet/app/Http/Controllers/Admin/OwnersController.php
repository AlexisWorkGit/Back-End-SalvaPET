<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Owner;
use App\Http\Requests\Admin\OwnerRequest;
use App\Http\Requests\Admin\ExcelImportRequest;
use App\Exports\OwnerExport;
use App\Imports\OwnerImport;
use Str;
use DataTables;
use Excel;
class OwnersController extends Controller
{
    /**
     * assign roles
     */
    public function __construct()
    {
        $this->middleware('can:view_owner',     ['only' => ['index', 'show', 'ajax']]);
        $this->middleware('can:create_owner',   ['only' => ['create', 'store']]);
        $this->middleware('can:edit_owner',     ['only' => ['edit', 'update']]);
        $this->middleware('can:delete_owner',   ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax())
        {
            $model=Owner::query();

            return DataTables::eloquent($model)
            ->editColumn('total',function($owner){
                return formated_price($owner['total']);
            })
            ->editColumn('paid',function($owner){
                return formated_price($owner['paid']);
            })
            ->editColumn('due',function($owner){
                return view('admin.owners._due',compact('owner'));
            })
            ->addColumn('action',function($owner){
                return view('admin.owners._action',compact('owner'));
            })
            ->toJson();
        }

        return view('admin.owners.index');
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.owners.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ownerRequest $request)
    {
        $owner=Owner::create([
            'code'=>owner_code(),
            'name'=>$request->name,
            'gender'=>$request->gender,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'address'=>$request->address,
        ]);

        //send owner code notification
        send_notification('owner_code',$owner);

        session()->flash('success','Owner created successfully');

        return redirect()->route('admin.owners.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $owner=Owner::findOrFail($id);
        return view('admin.owners.edit',compact('owner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ownerRequest $request, $id)
    {
        $owner=Owner::findOrFail($id);
        $owner->update([
            'name'=>$request->name,
            'gender'=>$request->gender,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'address'=>$request->address,
        ]);

        session()->flash('success','Owner updated successfully');

        return redirect()->route('admin.owners.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $owner=Owner::findOrFail($id);//get owner
        $owner->delete();//delete owner
        session()->flash('success',__('Owner deleted successfully'));
        return redirect()->route('admin.owners.index');
    }

    /**
    * Export owners
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function export()
    {
        ob_end_clean(); // this
        ob_start(); // and this
        return Excel::download(new OwnerExport, 'owners.xlsx');
    }

    /**
    * Import owners
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function import(ExcelImportRequest $request)
    {
        if($request->hasFile('import'))
        {
            ob_end_clean(); // this
            ob_start(); // and this
            Excel::import(new OwnerImport, $request->file('import'));
        }

        session()->flash('success',__('owners imported successfully'));

        return redirect()->back();
    }

    /**
    * Download owners template
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function download_template()
    {
        ob_end_clean(); // this
        ob_start(); // and this
        return response()->download(storage_path('app/public/owners_template.xlsx'),'owners_template.xlsx');
    }
}
