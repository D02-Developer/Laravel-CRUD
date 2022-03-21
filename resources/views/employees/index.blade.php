@extends('employees.layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">-----Employee CRUD-----</h2>
                </div>
                <div class="card-body">
                    <a class="btn btn-success btn-sm" href="{{ url('/employee/create') }}">
                        <!--href="{{ route('employee.create') }}"-->
                        <i class="fa fa-plus"></i>Add Employee
                    </a>
                    <br><br>

                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Name</th>
                                    <th>Mobile</th>
                                    <th>Address</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $i = 0;
                                @endphp
                                @foreach ($employees as $item)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->mobile }}</td>
                                    <td>{{ $item->address }}</td>
                                    <td>
                                        <form action="{{ route('employee.destroy',$item->id) }}" method="POST">
                                            <a class="btn btn-info" href="{{ url('/employee/' . $item->id) }}">Show</a> 
                                            <!--href="{{ route('employee.show',$item->id) }}"-->

                                            <a class="btn btn-primary" href="{{ url('/employee/' . $item->id) . '/edit'}}">Edit</a> 
                                            <!--href="{{ route('employee.edit',$item->id) }}"-->

                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection