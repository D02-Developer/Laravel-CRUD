@extends('employees.layout')
@section('content')

<div class="card">
    <h3>Create Employee</h3>
    <div class="card-body">

        <form action="{{ url('employee') }}" method="post">
            {!! csrf_field() !!}
            
            <label>Name</label></br>
            <input type="text" placeholder="Enter Name" name="name" id="name" class="form-control"></br>
            
            <label>Address</label></br>
            <input type="text" placeholder="Enter Address" name="address" id="address" class="form-control"></br>
            
            <label>Mobile</label></br>
            <input type="text" placeholder="Enter Mobile" name="mobile" id="mobile" class="form-control"></br>
            
            <input type="submit" value="Save" class="btn btn-success"></br>
        </form>
    </div>
</div>
@stop