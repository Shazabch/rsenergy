@extends('layouts.main')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-7">
        <div class="card card-body mt-4">
            <div class="row">
                <h4 class="text-center text-italic">Add New Record Here</h4>
                <hr>
                @if(session('success'))
                    <div class="alert alert-success">
                        {{session('success')}}
                    </div>
                @endif
            </div>
            <form action="{{route('payment.store')}}" method="POST">
                @csrf
                <div class="row mb-3 mt-3">
                <div class="col-md-6">
                    <label for="amount">Amount</label>
                    <input type="text" class="form-control" name="amount">
                </div>
                <div class="col-md-6">
                    <label for="payment_type">Payment From</label>
                    <select name="payment_type" class="form-control">
                        <option value="project">Project</option>
                        <option value="owner">Owner</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3 mt-3">
                <div class="col-md-6">
                    <label for="project_id">Select Project <small class="text-danger">(optional)</small></label>
                    <select name="project_id" class="form-control" >
                    <option value=""></option>
                    @foreach($projects as $project)
                        <option value="{{$project->id}}">{{$project->name}}</option>
                    @endforeach
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="owner_id">Select Owner <small class="text-danger">(optional)</small></label>
                    <select name="owner_id" class="form-control" >
                        <option value=""></option>
                    @foreach($owners as $owner)
                        <option value="{{$owner->id}}">{{$owner->name}}</option>
                    @endforeach
                    </select>
                </div>
            </div>
            <div class="row mb-3 mt-3">
                <div class="col-md-12">
                    <label for="notes">Notes</label>
                    <textarea class="form-control" name="notes" rows="4"></textarea>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <button class="btn btn-success form-control text-white" type="submit">Add Payment</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection
