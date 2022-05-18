@extends('layouts.main')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-7">
        <div class="card card-body mt-4">
            <div class="row">
                <h4 class="text-center text-italic">Add Products Here</h4>
                <hr>
                @if(session('success'))
                    <div class="alert alert-success">{{session('success')}}</div>
                @endif
            </div>
            <form action="{{route('product.store')}}" method="POST">
                @csrf
                <div class="row mt-3 mb-3">
                    <div class="col-md-6 ">
                        <label for="product_name">Product Name</label>
                        <input type="text" class="form-control @error('product_name') is-invalid @enderror" name="product_name">
                    </div>
                    <div class="col-md-6">
                        <label for="brand_name">Brand Name</label>
                        <input type="text" class="form-control @error('brand_name') is-invalid @enderror" name="brand_name">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="unit_type">Unit Type</label>
                        <input type="text" class="form-control @error('unit_type') is-invalid @enderror" name="unit_type">
                    </div>
                    <div class="col-md-6">
                        <label for="category_id">Product Category</label>
                        <select name="category_id" class="form-control">
                            @foreach($categories as $cat)
                            <option value="{{$cat->id}}">{{$cat->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-success text-white">Add Product</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection