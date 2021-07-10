<?php

namespace App\Http\Controllers;

use App\Exports\EmployeeExport;
use App\Models\Employee;
use Illuminate\Http\Request;
use Excel;

class EmployeeController extends Controller
{
    public function addEmployee() {
        $employees = [
            ["name"=>"Abu Saleh Faysal", "email"=>"xyz@gmail.com", "phone"=>"015000000", "salary"=>"100000", "department"=>"IT"],
            ["name"=>"Shahriar Kabir", "email"=>"xyz@gmail.com", "phone"=>"015000000", "salary"=>"100000", "department"=>"IT"],
            ["name"=>"Zannatun Nayeem", "email"=>"xyz@gmail.com", "phone"=>"015000000", "salary"=>"100000", "department"=>"IT"],
            ["name"=>"Mohammad Shuvo", "email"=>"xyz@gmail.com", "phone"=>"015000000", "salary"=>"100000", "department"=>"IT"],
            ["name"=>"Afrin Rumu", "email"=>"xyz@gmail.com", "phone"=>"015000000", "salary"=>"100000", "department"=>"Marketing"],
        ];
        Employee::insert($employees);
        return "records are inserted";
    }

    public function exportIntoExcel(){
        return Excel::download(new EmployeeExport, 'employeelist.xlsx');
    }

    public function exportIntoCSV() {
        return Excel::download(new EmployeeExport, 'employeelist.csv');
    }
}

