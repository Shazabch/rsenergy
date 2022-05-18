@extends('layouts.main')

@section('content')
    <div class="row ">
        <div class="col-md-9">
                <div class="card card-body mt-4">
                    <livewire:owner-table/>
                </div>
        </div>
        <div class="col-md-3">
            <div class="card mt-4">
                <div class="card-body">
                    <form action="{{route('owner.store')}}" method="POST">
                        @csrf
                        <div class="row">
                            <h4 class="text-italic text-center">Add New Owner</h4>
                            <hr>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="name">Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <button class="btn btn-success text-white mt-2" type="submit">Add Owner</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection