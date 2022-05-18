<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\purchase;
use App\Models\vendor;
use Illuminate\Http\Request;

class purchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = product::all();
        $vendors = vendor::all();
        return view('purchase.add',compact('products','vendors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('purchase.show');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_id'=>'required | integer',
            'unit_price'=>'required',
            'quantity'=>'required',
            'date'=>'required',
            'vendor_id'=>'required'
        ]);
        $purchase = purchase::all();
        $purchase->product_id=$request->product_id;
        $purchase->unit_price=$request->unit_price;
        $purchase->quantity=$request->quantity;
        $purchase->date=$request->date;
        $purchase->vendor_id=$request->vendor_id;
        $purchase->save();
        return redirect()->route('purchase.add')->with('success','The New Purchase Added');
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
        //
    }
}
