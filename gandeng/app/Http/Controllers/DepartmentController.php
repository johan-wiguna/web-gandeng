<?php

namespace App\Http\Controllers;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\PseudoTypes\False_;

class DepartmentController extends Controller
{
    public function index() {
        $people = DB::table('positions')
                            ->join('persons', 'positions.person_id', '=', 'persons.person_id')
                            ->join('departments', 'positions.department_id', '=', 'departments.department_id')
                            ->select(
                                'persons.name as name', 
                                'departments.name as department', 
                                'positions.position_name as position'
                            )
                            ->get();

        /*
            departments structure :
            [
                department1 => [
                    position1 => [
                        name1,
                        ...
                    ],
                    ...
                ],
                ...
            ]
        */
        $departments = array();

        foreach ($people as $person) {
            $name = $person->name;
            $department = $person->department;
            $position = $person->position;

            // create array for department value if not already
            if(array_key_exists($department, $departments) === False) {
                $departments[$department] = array();
            }
            
            // create array for position value if not already
            if(array_key_exists($position, $departments[$department]) === False) {
                $departments[$department][$position] = array();
            }
            
            array_push($departments[$department][$position], $name);
        }

        return view('departments', [
            "title" => "Departments",
            "departments" => $departments
        ]);
    }
}