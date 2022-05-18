@extends('layouts.main')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card mt-4">
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">{{session('success')}}</div>
                    @endif
                    <form action="{{route('expense.store')}}" method="POST">
                        @csrf
                        <div class="row bg-success text-white p-1 mb-3" style="border-radius: 10px;">
                        <h4 class="text-center mt-1">Add New Expense Here</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="category_id">Select Category</label>
                                    <select name="category_id" class="form-control">
                                    <option value=""></option>
                                        @foreach($category as $cat)
                                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="amount">Amount</label>
                                    <input class="form-control" type="text" name="amount">
                                </div>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="project_id">Select Project <small class="text-danger">(optional)</small></label>
                                    <select class="form-control" name="project_id" >
                                    <option value=""></option>
                                        @foreach($projects as $project)
                                            <option value="{{$project->id}}">{{$project->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="employee_id">Select Employee <small class="text-danger">(Optional)</small></label>
                                    <select name="employee_id" class="form-control">
                                        @foreach($employees as $employee)
                                        <option value="{{$employee->id}}">{{$employee->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="owner_id">Select Owner <small class="text-danger">(optional)</small></label>
                                    <select name="owner_id" class="form-control">
                                        <option value=""></option>
                                    @foreach($owners as $owner)
                                        <option value="{{$owner->id}}">{{$owner->name}}</option>
                                    </select>                                    
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="notes">Notes</label>
                                <textarea class="form-control" name="notes" rows="4"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mt-4">
                                <button type="submit" class="btn btn-success text-white">Save Expense</button>
                            </div>  
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection