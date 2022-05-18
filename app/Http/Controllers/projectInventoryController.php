<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\project;
use App\Models\projectInventory;
use Illuminate\Http\Request;

class projectInventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $products = product::all();
        $projects = project::find($id);
        return view('pinventory.add',compact('products','projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pinventory.show');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        $request->validate([
            'product_id'=>'required',
            'quantity'=>'required',
        ]);
        $projects = project::find($id);
        $inventories = new projectInventory();
        $inventories->product_id = $request->input('product_id');
        $inventories->quantity = $request->input('quantity');
        $inventories->date = $request->input('date');
        $inventories->project_id = $request->input('project_id');
        $projects->projectInventory()->save($inventories);
        return redirect()->route('pinventory.add',$id)->with('success','new inventory item addded');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $inventory = projectInventory::find($id);
        $inventory->delete();
        return redirect()->back()->with('error','Item is removed ');
    }
}
