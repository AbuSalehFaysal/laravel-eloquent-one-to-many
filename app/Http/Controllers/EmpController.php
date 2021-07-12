<?php

namespace App\Http\Controllers;

use App\Imports\EmployeeImport;
use App\Models\Employee;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

class EmpController extends Controller
{
    public function getAllEmployees()
    {
        $employess = Employee::all();
        return view('employee', compact('employess'));
    }

    public function downloadPDF() 
    {
        $employess = Employee::all();
        $pdf = PDF::loadView('employee', compact('employess'));
        return $pdf->download('employees.pdf');
    }

    public function importForm() 
    {
        return view('import-form');
    }

    public function import (Request $request) 
    {
        Excel::import (new EmployeeImport, $request->file);
        return "Records are imported successfully!";
    }
}
