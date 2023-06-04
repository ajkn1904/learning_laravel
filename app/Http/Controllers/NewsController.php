<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news($newsId)
    {
        $name = 'Anika';
        $email = 'anika@gmail.com';
        $departments = ['CSE', 'EEE', 'Math'];


        //array of array
        $departmentWithArray = [
            ['name' => 'CSE', 'code' => '001'],
            ['name' => 'EEE', 'code' => '002'],
            ['name' => 'Math', 'code' => '003']
        ];


        return view(
            'news',
            [
                'my_news' => $newsId, //passing the data from here
                'name' => $name,
                'email' => $email,
                'departments' => $departments,
                'departmentWithArray'=>$departmentWithArray]
        );
    }
}