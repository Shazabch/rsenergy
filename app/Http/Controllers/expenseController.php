<?php

namespace App\Http\Controllers;

use App\Models\employee;
use App\Models\expense;
use App\Models\expense_category;
use App\Models\owner;
use App\Models\project;
use Illuminate\Http\Request;

class expenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = employee::all();
        $category = expense_category::all();
        $projects = project::all();
        $owners = owner::all();
        return view('expense.add',compact('category','employees','projects','owners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('expense.show');
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
            'category_id'=>'required | integer',
            'notes'=>'required',
            'amount'=>'required',
        ]);
        $expense = new expense();
        $expense->category_id = $request->input('category_id');
        $expense->employee_id = $request->input('employee_id');
        $expense->project_id = $request->input('project_id');
        $expense->owner_id = $request->input('owner_id');
        $expense->notes = $request->input('notes');
        $expense->amount = $request->input('amount');
        $expense->save();
        return redirect()->route('expense.add')->with("success","Expense Added Successfully");
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
