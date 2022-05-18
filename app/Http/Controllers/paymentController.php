<?php

namespace App\Http\Controllers;

use App\Models\owner;
use App\Models\payment;
use App\Models\project;
use Illuminate\Http\Request;

class paymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $owners = owner::all();
        $projects = project::all();
        return view('payment.add',compact('owners','projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('payment.show');
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
            'notes' => 'required',
            'payment_type' => 'required',
            'amount' => 'required'
        ]);

        $payments = new payment();
        $payments->project_id   = $request->input('project_id');
        $payments->owner_id     = $request->input('owner_id');
        $payments->notes        = $request->input('notes');
        $payments->payment_type = $request->input('payment_type');
        $payments->amount       = $request->input('amount');
        $payments->save();
        return redirect()->route('payment.add')->with('success','Payment Added SuccessFully');
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
