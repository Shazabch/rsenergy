@extends('layouts.main')
@section('content')
<div class="row  mt-4">
    <div class="col-md-9">
        <div class="card card-body">
        <livewire:pcategory-table/>
        </div>
    </div>
    <div class="col-md-3 mt-3 mt-md-0">
        <div class="card card-body">
            <div class="row">
                <h4 class="text-center text-italic">New Product Category</h4>
                <hr>
            </div>
            <form action="{{route('pcategory.store')}}" method="POST">
                @csrf
            <div class="row mt-3 mb-3" >
                <div class="col-md-12">
                    <label for="name">Category Name</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror">
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <button type="submit" class="btn btn-success text-white">Add Category</button>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection