<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function create()
    {

        return view('employee.create');
    }

    public function store(Request $request)
    {
        $obj = new Employee();
        $obj->name = $request->emp_name;
        $obj->email = $request->email;
        $obj->birth_date = $request->joiningdate;
        $obj->designation = $request->designation;
        $obj->salary = $request->salary;
        $obj->gender = $request->gender;
        $obj->is_active = $request->active;
        $obj->department = $request->department;

        if($obj->save()) {
            echo 'Successfully Inserted';
        }
    }

    public function all(){
        // select * from employees
        $employees = Employee::all();
        return view('employee.all', compact('employees'));
    }
    

}