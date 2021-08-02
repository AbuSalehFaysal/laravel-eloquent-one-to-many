<?php

namespace App\Http\Controllers;

use App\DataTables\TeacherDataTable;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index(TeacherDataTable $dataTable) 
    {
        return $dataTable->render('teacher');
    }
}
