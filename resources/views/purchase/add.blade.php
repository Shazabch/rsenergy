@extends('layouts.main')
@section('content')
<div class="row justify-content-center mt-4">
    <div class="col-md-7">
        <div class="card card-body">
            <div class="row">
                <h4 class="text-center text-italic">Add New Purchase</h4>
                <hr>
            </div>
            <form action="{{route('purchase.store')}}" method="POST">
                @csrf
                <div class="row mt-3 mb-3">
                <div class="col-md-6">
                    <label for="product_id">Product ID</label>
                    <select class="form-control" name="product_id" >
                        @foreach($products as $product)
                        <option value="{{$product->id}}">{{$product->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="unit_price">Unit Price</label>
                    <input type="text" class="form-control @error('unit_price') is-invalid @enderror" name="unit_price">
                </div>
            </div>
            <div class="row mt-3 mb-3">
                <div class="col-md-6">
                    <label for="quantity">Quantity</label>
                    <input type="text" class="form-control @error('quantity') is-invalid @enderror" name="qunatity">
                </div>
                <div class="col-md-6">
                    <label for="date">Add Date</label>
                    <input type="date" class="form-control" name="date">
                </div>
            </div>
            <div class="row">
                 <div class="col-md-6">
                    <label for="vendor_id">Vendor ID</label>
                    <select class="form-control" name="vendor_id" >
                        @foreach($vendors as $vendor)
                           <option value="{{$vendor->id}}">{{$vendor->name}}</option>     
                        @endforeach
                    </select>
                 </div>
                 <div class="col-md-6">
                     <button class="btn btn-success mt-4 text-white" type="submit">Add Purchase</button>
                 </div>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection