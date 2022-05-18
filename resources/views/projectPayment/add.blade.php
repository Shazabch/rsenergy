@extends('layouts.main')
@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="card card-body mt-4">
        <livewire:project-payment-table type="{{$projects->id}}"/>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card card-body mt-4">
            <div class="row">
                <h4 class="text-italic text-center">Add New Payment</h4>
                <hr>
            </div>
            <form action="{{route('projectpayment.store',$projects->id)}}" method="POST">
                @csrf
            <div class="row">
                <div class="col">
                    <label for="amount">Add Amount</label>
                    <input type="text" class="form-control" name="amount">
                </div>
                
            </div>
            <div class="row">
            <div class="col mt-3">
                    <button class="btn btn-success text-white" type="submit">Add Payment</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection
