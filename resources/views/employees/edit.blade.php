@extends('employees.layout')
@section('content')

<div class="card">
    <h3>Update Employee</h3>
    <div class="card-body">

        <form action="{{ route('employee.update',$employees->id) }}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{$employees->id}}" id="id" />

            <label>Name</label></br>
            <input type="text" placeholder="Enter Name" name="name" id="name" value="{{$employees->name}}" class="form-control"></br>

            <label>Address</label></br>
            <input type="text" placeholder="Enter Address" name="address" id="address" value="{{$employees->address}}" class="form-control"></br>

            <label>Mobile</label></br>
            <input type="text" placeholder="Enter Mobile" name="mobile" id="mobile" value="{{$employees->mobile}}" class="form-control"></br>

            <input type="submit" value="Update" class="btn btn-success"></br>
        </form>

    </div>
</div>

@stop