@extends('layouts.main')
@section('content')
<div class="row">
<div class="col-md-9">
            <div class="card card-body mt-4">
                <livewire:customer-table/>
            </div>
        </div>
        
        <div class="col-md-3">
            <div class="card card-body mt-4">
                <div class="row">
                    <h4 class="text-center text-italic">Add New Customer</h4>
                    <hr>
                </div>
                <form action="{{route('customer.store')}}" method="POST">
                    @csrf
                <div class="row mt-3 mb-3">
                    <div class="col-md-12">
                        <label for="name">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name">
                    </div>
                    <div class="col-md-12">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile">
                    </div>
                </div>
                <div class="row mt-3 mb-3">
                    <div class="col-md-12">
                        <label for="address">Address</label>
                        <input type="text" class="form-control @error('address') is-invalid @enderror" name="address">
                    </div>
                    <div class="col-md-12">
                        <label for="cnic">CNIC <small class="text-danger">(optional)</small></label>
                        <input type="text" class="form-control" name="cnic">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <button type="submit" class="btn btn-success text-white">Add Customer</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection