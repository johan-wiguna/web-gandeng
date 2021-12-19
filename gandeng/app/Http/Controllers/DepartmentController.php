<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class DepartmentController extends Controller
{
    public function index() {
        $departments = DB::select('select * from departments');
        return view('departments', [
            "title" => "Departments",
            "departments" => $departments
        ]);
    }
}