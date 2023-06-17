<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    public function create()
    {
        // we can use / instead of . here
        return view('department.create');
    }

    //taking the request object from the Request class
    public function store(Request $request)
    {

        //creating object
        $obj = new Department();

        //setting the data from the ui to database
        //objectNAme->DatabaseColumnName = $request->NamesFromUIForm;

        $obj->name = $request->name;
        $obj->established_at = $request->established;
        $obj->building = $request->building;

        //posting to database
        if($obj ->save()) {
            echo 'Successfully inserted';
        }

    }
}