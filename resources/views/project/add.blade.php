@extends('layouts.main')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-body mt-4">
                <div class="row">
                    <h4 class="text-center txet-italic">Add New Project</h4>
                    <hr>
                    @if(session('success'))
                        <div class="alert alert-success">{{session('success')}}</div>
                    @endif
                </div>
                <form action="{{route('project.store')}}" method="POST">
                    @csrf
                    <div class="row mt-3 mb-3">
                        <div class="col-md-6">
                            <label for="name">Project Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name">
                        </div>
                    <div class="col-md-6">
                        <label for="customer_id">Select Customer</label>
                        <select name="customer_id" class="form-control">
                            @foreach($customers as $customer)
                                <option value="{{$customer->id}}">{{$customer->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    
                </div>
                <div class="row mt-3 mb-3">
                <div class="col-md-6">
                        <label for="start_date">Start date</label>
                        <input type="date" class="form-control" name="start_date">
                    </div>
                    <div class="col-md-6">
                        <label for="end_date">End Date</label>
                        <input type="date" class="form-control" name="end_date">
                    </div>
                    
                </div>
                <div class="row mt-3 mb-3">
                <div class="col-md-6">
                        <label for="total_kw">Total KW</label>
                        <input type="text" class="form-control" name="total_kw">
                    </div>
                    <div class="col-md-6">
                        <label for="est_price">Estimated Price</label>
                        <input type="text" class="form-control" name="est_price">
                    </div>
                </div>
                <div class="row mt-3">
                    <button class="btn btn-success text-white" type="submit">Add Project</button>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection
