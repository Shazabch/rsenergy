@extends('layouts.main')

@section('content')
<div class="row  mt-4">
    <div class="col-md-9">
        <div class="card card-body">
            <livewire:expense-category-table/>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <form action="{{route('category.store')}}" method="POST">
                    @csrf
                    <div class="text-center">
                    <b class="text-italic ">New Expense Category</b>
                    <hr>
                    </div>
                    <div class="row mt-4">
                        <div class="mb-3">
                            <label for="name">Category Name</label>
                            <input class="form-control @error('title') is-invalid @enderror" name="title" type="text">
                        </div>
                    </div>
                        <button class="btn btn-success text-white " type="submit">Save Category</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection