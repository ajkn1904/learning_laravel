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


    //creating function to store all data to database
    public function store(Request $request)
    {
        $obj = new Employee();  //creating new object
        $obj->name = $request->emp_name;
        $obj->email = $request->email;
        $obj->joining_date = $request->joiningdate;
        $obj->designation = $request->designation;
        $obj->salary = $request->salary;
        $obj->gender = $request->gender;
        $obj->is_active = $request->active;
        $obj->department = $request->department;

        if($obj->save()) {
            return redirect('employee/all');
        }
    }


    
    //creating function to show all data from database
    public function all()
    {
        // select * from employees  (once we used this query to fetch data from db)

        $employees = Employee::all(); //now we are using model which is communicating with the table to make a query to fetch data from the database
        return view('employee.all', compact('employees'));
        //sharing data by using compact('variable_name')
    }


    //edit function
    public function edit($id){
        $employee = Employee::find($id);  //existing object
        return view('employee.edit', compact('employee'));
    }

    
    //update function
    public function update(Request $request, $id){
        $obj = Employee::find($id);  //existing object
        $obj->name = $request->emp_name;
        $obj->email = $request->email;
        $obj->designation = $request->designation;
        $obj->salary = $request->salary;
        $obj->department = $request->department;
        
        if($obj->save()) {
            return redirect('employee/all');
        }
    }


    //delete function
    public function delete($id){
        if(Employee::find($id) -> delete()){
            return redirect('employee/all');
        } 
    }


}