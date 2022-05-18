@extends('layouts.main')

@section('content')
<div class="row justify-content-center mt-4">
    <div class="col-md-7">
        <div class="card card-body">
            @if(session('success'))
            <div class="alert alert-success">{{session('success')}}</div>
            @endif
            <form action="{{route('employee.store')}}" method="POST">
                @csrf
                <div class="row">
                    <h5 class="text-italic text-center">Add Employees Here</h5>
                    <hr>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6">
                        <label for="name">Employee Name</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror">
                    </div>
                    <div class="col-md-6">
                        <label for="designation">Designation</label>
                        <input type="text" class="form-control @error('designation') is-invalid @enderror" name="designation">
                    </div>
                </div>
                <div class="row">
                   <div class="col mt-2 mb-4">
                       <label for="notes">Notes</label>
                   <textarea class="form-control @error('notes') is-invalid @enderror" name="notes" rows="4"></textarea>
                   </div>
                </div>
                <div class="row">
                   <div class="col">
                   <button type="submit" class="btn btn-success text-white">Add employee</button>
                   </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection