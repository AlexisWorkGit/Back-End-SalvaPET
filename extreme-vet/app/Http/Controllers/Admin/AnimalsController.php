<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\AnimalRequest;
use App\Http\Requests\Admin\ExcelImportRequest;
use App\Exports\AnimalExport;
use App\Imports\AnimalImport;
use App\Models\Animal;

use DataTables;
use Excel;

class AnimalsController extends Controller
{
    /**
     * assign roles
     */
    public function __construct()
    {
        $this->middleware('can:view_animal',     ['only' => ['index', 'show','ajax']]);
        $this->middleware('can:create_animal',   ['only' => ['create', 'store']]);
        $this->middleware('can:edit_animal',     ['only' => ['edit', 'update']]);
        $this->middleware('can:delete_animal',   ['only' => ['destroy']]);
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
            $model=Animal::with('owner');

            return DataTables::eloquent($model)
                            ->addColumn('action',function($animal){
                                return view('admin.animals._action',compact('animal'));
                            })
                            ->toJson();
        }

        return view('admin.animals.index');
    }

    /**
    * get animals datatable
    *
    * @access public
    * @var  @Request $request
    */
    public function ajax(Request $request)
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.animals.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(animalRequest $request)
    {
        $animal=Animal::create($request->except('_token'));
        $animal->update([
            'code'=>animal_code()
        ]);

        session()->flash('success','animal saved successfully');
        return redirect()->route('admin.animals.index');
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
        $animal=Animal::findOrFail($id);
        return view('admin.animals.edit',compact('animal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(animalRequest $request, $id)
    {
        $animal=Animal::findOrFail($id);
        $animal->update($request->except('_token','_method'));

        session()->flash('success','animal updated successfully');
        return redirect()->route('admin.animals.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $animal=Animal::findOrFail($id);
        $animal->delete();

        session()->flash('success','animal deleted successfully');
        return redirect()->route('admin.animals.index');
    }

    /**
    * Export animals
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function export()
    {
        ob_end_clean(); // this
        ob_start(); // and this
        return Excel::download(new AnimalExport, 'animals.xlsx');
    }

    /**
    * Import animals
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
            Excel::import(new AnimalImport, $request->file('import'));
        }

        session()->flash('success',__('animals imported successfully'));

        return redirect()->back();
    }

    /**
    * Download animals template
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function download_template()
    {
        ob_end_clean(); // this
        ob_start(); // and this
        return response()->download(storage_path('app/public/animals_template.xlsx'),'animals_template.xlsx');
    }
}
