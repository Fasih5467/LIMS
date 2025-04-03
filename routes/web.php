<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\DoctorController;
use App\Http\Controllers\Admin\LabManagementController;
use App\Http\Controllers\Admin\OpdManageController;
use App\Http\Controllers\Admin\PatientController;
use App\Http\Controllers\Admin\RemarkController;
use App\Http\Controllers\Admin\TestController;
use App\Http\Controllers\Admin\TestCategoryController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Middleware\Admin;
use App\Http\Middleware\WebGuard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/start-server', function () {
//     include base_path('serve-script.php'); // Script ko run kare
//     return "Server command executed!";
// });


Route::get('/login', [LoginController::class, 'create']);
Route::post('/login_user', [LoginController::class, 'authenticate']);
Route::get('/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/login')->with('success', 'Logout Successfuly.');
});

Route::get('/', function () {
    return redirect('patient/');
});

// Route::get('/lead', function () {
//     return view('welcome');
// })->name('lead.list');

// Users Route
Route::middleware([WebGuard::class,Admin::class])->prefix('/user')->group(function () {
    Route::get('/list', [UserController::class, 'index']);
    Route::get('/signup', [UserController::class, 'create']);
    Route::post('/store', [UserController::class, 'store']);
    Route::get('/edit/{id}', [UserController::class, 'edit']);
    Route::post('/update', [UserController::class, 'update']);
    Route::get('/delete/{id}', [UserController::class, 'delete']);
    Route::get('/activate-user/{userId}', [UserController::class, 'activate']);
    Route::get('/deactivate-user/{userId}', [UserController::class, 'deactivate']);
});

// Tests Route
Route::middleware([WebGuard::class])->prefix('/test')->group(function () {
    Route::get('/list', [TestController::class, 'index']);
    Route::get('/create', [TestController::class, 'create']);
    Route::post('/store', [TestController::class, 'store']);
    Route::get('/edit/{id}', [TestController::class, 'edit'])->middleware(Admin::class);
    Route::post('/update', [TestController::class, 'update'])->middleware(Admin::class);
    Route::get('/report-format', [TestController::class, 'show']);
    Route::get('/delete/{id}', [TestController::class, 'delete'])->middleware(Admin::class);
    Route::get('/format/create/{id}', [TestController::class, 'createFormat'])->middleware(Admin::class);
    Route::post('/format/store', [TestController::class, 'storeFormat'])->middleware(Admin::class);
    Route::get('/format/delete/{id}', [TestController::class, 'deleteFormat'])->middleware(Admin::class);

    // Test Category Route
    Route::get('/category/list', [TestCategoryController::class, 'index']);
    Route::get('/category/create', [TestCategoryController::class, 'create']);
    Route::post('/category/store', [TestCategoryController::class, 'store']);
    Route::get('/category/edit/{id}', [TestCategoryController::class, 'edit'])->middleware(Admin::class);
    Route::post('/category/update', [TestCategoryController::class, 'update'])->middleware(Admin::class);
    Route::get('/category/delete/{id}', [TestCategoryController::class, 'delete'])->middleware(Admin::class);
    Route::get('/view/{id}', [TestController::class, 'view_test_format']);
});

// Lab Managements Route
Route::middleware([WebGuard::class,Admin::class])->prefix('/lab')->group(function () {
    Route::get('/management/list', [LabManagementController::class, 'index']);
    Route::get('/management/create', [LabManagementController::class, 'create']);
    Route::post('/management/store', [LabManagementController::class, 'store']);
    Route::get('/management/edit/{id}', [LabManagementController::class, 'edit']);
    Route::post('/management/update', [LabManagementController::class, 'update']);
    Route::get('/management/delete/{id}', [LabManagementController::class, 'delete']);
    Route::get('/signature/activate/{id}', [LabManagementController::class, 'activate']);
    Route::get('/signature/deactivate/{id}', [LabManagementController::class, 'deactivate']);
});

// Remarks Route
Route::middleware([WebGuard::class,Admin::class])->prefix('/remark')->group(function () {

    Route::get('/list', [RemarkController::class, 'index']);
    Route::get('/create', [RemarkController::class, 'create']);
    Route::post('/store', [RemarkController::class, 'store']);
    Route::get('/edit/{id}', [RemarkController::class, 'edit']);
    Route::post('/update', [RemarkController::class, 'update']);
    Route::get('/delete/{id}', [RemarkController::class, 'delete']);
});

// Patients Route
Route::middleware([WebGuard::class])->prefix('/patient')->group(function () {
    Route::get('/', [PatientController::class, 'create']);
    Route::get('/list', [PatientController::class, 'index']);
    Route::post('/store', [PatientController::class, 'store']);
    Route::get('/slip/list', [PatientController::class, 'slip_list']);
    Route::get('/slip/{id}', [PatientController::class, 'slip']);
    Route::get('/edit/{id}', [PatientController::class, 'edit']);
    Route::post('/update', [PatientController::class, 'update']);
    Route::get('/balance/{id}', [PatientController::class, 'collectBalance']);
    Route::get('/delete/{id}', [PatientController::class, 'delete']);
    Route::get('/tests/{id}', [PatientController::class, 'show_patient_test']);
    Route::get('/test/result/{id}', [PatientController::class, 'get_test_format']);
    Route::post('/result/store/', [PatientController::class, 'patient_result_store']);
    Route::get('/test/edit/{id}', [PatientController::class, 'edit_result']);
    Route::post('/result/update', [PatientController::class, 'update_result']);
    Route::get('/generate_pdf/{id}', [PatientController::class, 'generatePDF']);
    Route::get('/all_generate_pdf/{id}', [PatientController::class, 'all_reports_PDF']);

});

// Doctors Route
Route::middleware([WebGuard::class])->prefix('/doctor')->group(function () {
    Route::get('/list', [DoctorController::class, 'index']);
    Route::get('/create', [DoctorController::class, 'create']);
    Route::post('/store', [DoctorController::class, 'store']);
    Route::get('/edit/{id}', [DoctorController::class, 'edit'])->middleware(Admin::class);
    Route::post('/update', [DoctorController::class, 'update'])->middleware(Admin::class);
    Route::get('/delete/{id}', [DoctorController::class, 'delete'])->middleware(Admin::class);
});


// Doctors Route
Route::middleware([WebGuard::class])->prefix('/opd')->group(function () {
    Route::get('/', [OpdManageController::class, 'create']);
    Route::post('/store', [OpdManageController::class, 'store']);
    Route::get('/slip/{id}', [OpdManageController::class, 'slip']);
    Route::get('/token/{id}', [OpdManageController::class, 'token_no']);
    // Route::get('/edit/{id}', [OpdManageController::class, 'edit'])->middleware(Admin::class);
    // Route::post('/update', [OpdManageController::class, 'update'])->middleware(Admin::class);
    // Route::get('/delete/{id}', [OpdManageController::class, 'delete'])->middleware(Admin::class);
});

// Route::get('/opd/',[OpdManageController::class,'create']);

// Route::get('/patient/generate_pdf/{id}', [PatientController::class, 'generatePDF']);
Route::get('/received_test/{id}', [PatientController::class, 'updateStatus']);
// Route::get('/test/list',[TestController::class,'index']);
// Route::get('/test/create',[TestController::class,'create']);
// Route::post('/test/store',[TestController::class,'store']);
// Route::get('/test/edit/{id}',[TestController::class,'edit']);
// Route::post('/test/update',[TestController::class,'update']);
// Route::get('/test/delete/{id}',[TestController::class,'delete']);
