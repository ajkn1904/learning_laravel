<!-- To create project -->
<!-- 
    composer create-project laravel/laravel Project_Name
 -->

<!-- To run project -->
<!-- 
    php artisan serve
-->

<!-- To create controller -->
<!-- 
    php artisan make:controller ControllerName(Capital)
-->

<!-- To create model -->
<!-- 
    php artisan make:model ModelName(Singular & Capital)
-->

<!-- To create model with migration table -->
<!-- 
    php artisan make:model ModelName(Singular & Capital) -m
-->

<!-- To create db table -->
<!-- 
    php artisan migration
    php artisan migration:refresh (for refreshing or updating)
-->



<?php

use Illuminate\Support\Facades\Route;

//importing controller
use App\Http\Controllers\AboutController;
use App\Http\Controllers\EmployeeController;

//without controller
Route::get('/', function () {
        return view('welcome');
    });

//without controller
/* Route::get('/news/{newsId}', function ($newsId) {
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
}); */


//without controller
/* Route::get('/about', function () {
    return view('about');
}); */






//with controller
Route::get('/about', [AboutController::class, 'about']);

Route::get('/news/{newsId}', [NewsController::class, 'news']);


//getting data from the UI
Route::get('/department/create', [DepartmentController::class, 'create']);

//post request tor store data to the database
Route::post('/department/store', [DepartmentController::class, 'store']);

Route::get('/employee/create', [EmployeeController::class, 'create']);
Route::post('/employee/store', [EmployeeController::class, 'store']);