<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Regions;
use Illuminate\Support\Facades\Validator;
use DataTables;
class RegionsController extends Controller
{
    public function index(Request $request){
        // if(\request()->ajax()){
        //     $region = Regions::latest()->get();
        //     return DataTables::of($data)
        //         ->addIndexColumn()
        //         ->addColumn('action', function($row){
        //             $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
        //             return $actionBtn;
        //         })
        //         ->rawColumns(['action'])
        //         ->make(true);
        // }
        // return view('products.index');
        $region = Regions::latest()->get();

        return view('regions.index',compact('region'));
    }

     public function create()
    {
        return view('regions.create');
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'code' => 'required'
        ]);
        
        Regions::create($request->post());

        return redirect()->route('regions.index')->with('success','Student has been created successfully.');
    }

    public function destroy(Regions $region)
    {
        $region->delete();
        return redirect()->route('regions.index')->with('success','Student has been deleted successfully');
    }

    public function edit(Regions $region)
    {
        return view('regions.edit',compact('region'));
    }

    public function update(Request $request, Regions $region)
    {
        $request->validate([
            'name' => 'required',
            'code' => 'required',
        ]);
        
        $region->fill($request->put())->save();

        return redirect()->route('students.index')->with('success','Region Has Been updated successfully');
    }
}
