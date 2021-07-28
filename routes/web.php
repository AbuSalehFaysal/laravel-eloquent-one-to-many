<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DropzoneController;
use App\Http\Controllers\EditorController;
use App\Http\Controllers\EmpController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/add-post', [PostController::class, 'addPost']);

Route::get('/add-comment/{id}', [PostController::class, 'addComment']);

Route::get('/get-comments/{id}', [PostController::class, 'getCommentByPost']);

Route::get('/add-employee', [EmployeeController::class, 'addEmployee']);

Route::get('/export-excel', [EmployeeController::class, 'exportIntoExcel']);

Route::get('/export-csv', [EmployeeController::class, 'exportIntoCSV']);

Route::get('/get-all-employee', [EmpController::class, 'getAllEmployees']);

Route::get('/download-pdf', [EmpController::class, 'downloadPDF']);

Route::get('/import-form', [EmpController::class, 'importForm']);

Route::post('/import', [EmpController::class, 'import'])->name('employee.import');

Route::get('/resize-image', [ImageController::class, 'resizeImage']);

Route::post('/resize-image', [ImageController::class, 'resizeImageSubmit'])->name('image.resize');

Route::get('/dropzone', [DropzoneController::class, 'dropzone']);

Route::post('/dropzone-store', [DropzoneController::class, 'dropzoneStore'])->name('dropzone.store');

Route::get('/gallery', [GalleryController::class, 'gallery']);

Route::get('/editor', [EditorController::class, 'editor']);

Route::get('/add-student', [StudentController::class, 'addStudent']);

Route::post('/add-student', [StudentController::class, 'storeStudent'])->name('student.store');

Route::get('/all-students', [StudentController::class, 'allstudents']);

Route::get('/edit-student/{id}', [StudentController::class, 'editStudent']);

Route::post('/update-student', [StudentController::class, 'updateStudent'])->name('student.update');

Route::get('/delete-student/{id}', [StudentController::class, 'deleteStudent']);

Route::get('/contact-us', [ContactController::class, 'contact']);

Route::post('/send-message', [ContactController::class, 'sendEmail'])->name('contact.send');

Route::get('/get-name', [TestController::class, 'getFirstLastName']);
