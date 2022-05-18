@extends('layouts.main')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card card-body mt-4">
                <form action="{{route('vendors.store')}}" method="POST">
                    @csrf
                    <div class="row">
                        <h4 class="text-center text-italic">Add New Vendor Here</h4>
                        <hr>
                        @if(session('success'))
                            <div class="alert alert-success mt-2">
                                {{session('success')}}
                            </div>
                        @endif
                    </div>
                    <div class="row mt-3 mb-3">
                        <div class="col-md-4">
                            <label for="name">Vendor Name</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror">
                        </div>
                        <div class="col-md-4">
                            <label for="address">Address</label>
                            <input type="text" class="form-control @error('address') is-invalid @enderror" name="address">
                        </div>
                        <div class="col-md-4">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone">
                        </div>
                    </div>
                    <div class="row mt-3 mb-3">
                        <div class="col-md-12">
                            <label for="notes">Notes</label>
                            <textarea class="form-control" name="note"  rows="4"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button type="submit" class="btn btn-success mt-3 text-white">Add Vendor</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
