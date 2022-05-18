@extends('layouts.main')
@section('content')
<div class="row ">
    <div class="col-md-8">
        <div class="card card-body mt-4">
        <livewire:pinventory-table type="{{$projects->id}}"/>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card card-body mt-4">
            <div class="row">
                <h4 class="text-center text-italic">Add Inventory Used</h4>
                <hr>
            </div>
            <form action="{{route('pinventory.store',$projects->id)}}" method="POST">
                @csrf
                <div class="row mt-3 mb-3">
                    <div class="col-md-12">
                        <label for="product_id">Select Product</label>
                        <select name="product_id" class="form-control" >
                            @foreach($products as $product)
                                <option value="{{$product->id}}">{{$product->product_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-12">
                        <label for="quantity" class="mt-2">Quantity</label>
                        <input type="text" class="form-control" name="quantity">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <button class="btn btn-success text-white mt-2" type="submit">Add Item</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection