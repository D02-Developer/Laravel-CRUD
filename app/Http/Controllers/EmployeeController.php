<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', compact('employees','employees'));
    }

    public function create()
    {
        return view('employees.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Employee::create($input);
        return redirect('/employee')->with('flash_message', 'Employee Added Successfully.');
 
        // $employee->save();
        // return redirect('/employee')->with('flash_message', 'Employee has been added');
    }

    public function show($id)
    {
        $employee = Employee::find($id);
        return view('employees.show')->with('employees', $employee);

        // return view('employeess.show',compact('id'));
    }

    public function edit($id)
    {
        $employee = Employee::find($id);
        return view('employees.edit')->with('employees', $employee);

        // return view('employees.edit',compact('id'));
    }

    public function update(Request $request, $id)
    {
        // $request->validate([
        //     'txtName'=>'required',
        //     'txtMobile'=> 'required',
        //     'txtAddress' => 'required'
        // ]);

        $employee = Employee::find($id);
        $input = $request->all();
        $employee->update($input);
        return redirect('employee')->with('flash_message', 'Employee Updated Successfully.');
    }

    public function destroy($id)
    {
        Employee::destroy($id);
        return redirect('employee')->with('flash_message', 'Employee Deleted Successfully.');
    }
}
