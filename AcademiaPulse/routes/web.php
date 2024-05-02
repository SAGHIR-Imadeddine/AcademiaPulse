<?php

use App\Http\Controllers\Admin\ClasseController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ExamController;
use App\Http\Controllers\Admin\ParentController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\SubjectController;
use App\Http\Controllers\Admin\SubjectToClasseController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\TeacherToClasseController;
use App\Http\Controllers\Admin\TimeTableController;
use App\Http\Controllers\Auth\AuthentificationController;
use App\Http\Controllers\Parent\ParentsController;
use App\Http\Controllers\Student\StudentsController;
use App\Http\Controllers\Teacher\TeachersController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/unauthorized', function () {
    return response()->view('errors', [], 403);
})->name('unauthorized');



Route::get('/', function () {
    return view('home');
});
/*************************************************** AUTHENTIFICATION ***********************************************************************/

Route::controller(AuthentificationController::class)->group(function(){

    Route::get('login', 'index')->name('login.page');
    Route::post('login', 'store')->name('login');
    
    Route::get('/forgot-password', 'forgotPassword')->name('forgotPassword');
    Route::post('/forgot-password','forgotPasswordPost')->name('forgot');
    Route::get('/reset-password/{token}', 'resetPassword')->name('resetPassword');
    Route::post('/reset-password', 'resetPasswordPost')->name('reset');
    
    Route::get('/check-your-email', 'waitPage')->name('waitPage');
    Route::post('logout', 'destroy')->name('logout');
    
    Route::post('/send-message', 'sendMessage')->name('send-message');
});


Route::group(['middleware' => ['auth', 'role:admin']], function () {
    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');


/*************************************************** TEACHERS ***********************************************************************/

Route::resource('teachers', TeacherController::class);
Route::get('/search-teachers', [TeacherController::class, 'search'])->name('search.teachers');




/*************************************************** STUDENTS ***********************************************************************/

Route::resource('students', StudentController::class);
Route::get('/search-students', [StudentController::class, 'search'])->name('search.students');
Route::get('/student-parent/{id}', [StudentController::class, 'myParent'])->name('myParent');



/*************************************************** PARENTS ***********************************************************************/

Route::resource('parents', ParentController::class);
Route::get('/search-parents', [ParentController::class, 'search'])->name('search.parents');
Route::get('/parent-student/{id}', [ParentController::class, 'myStudent'])->name('myStudent');



/*************************************************** ADMIN CLASSES ***********************************************************************/

Route::resource('classes', ClasseController::class);
Route::get('/search-classes', [ClasseController::class, 'search'])->name('search.class');

Route::get('/admin/classes-Absences', [ClasseController::class, 'classesAbsence'])->name('classesAbsence');



/*************************************************** ADMIN SUBJECTS ***********************************************************************/


Route::resource('subjects', SubjectController::class);
Route::get('/search-subjects', [SubjectController::class, 'search'])->name('search.subject');
/*************************************************** ADMIN EXAMS ***********************************************************************/

Route::resource('exams', ExamController::class);
Route::post('storeExam/store', [ExamController::class , 'storeExam'])->name('exams.store');
Route::get('/search-exams', [ExamController::class, 'search'])->name('search.exams');

/*************************************************** ADMIN SUBJECT TO CLASSE ***********************************************************************/

Route::resource('subject-to-class', SubjectToClasseController::class);
Route::get('/search-subject-to-class', [SubjectToClasseController::class, 'search'])->name('searchSubjectToClasse');



/*************************************************** ADMIN TEACHER TO CLASSE ***********************************************************************/


Route::resource('teacher-to-class', TeacherToClasseController::class);

Route::get('/search-teacher-to-class', [TeacherToClasseController::class, 'search'])->name('searchTeacherToClasse');

/*************************************************** ADMIN TIME TABLE ***********************************************************************/

Route::resource('timeTable', TimeTableController::class);
});
/*************************************************** PARENTS ***********************************************************************/

Route::controller(ParentsController::class)->group(['middleware' => ['auth', 'role:parent']], function () {
    Route::get('/parent/dashboard', 'index')->name('parentDashboard');
    Route::get('/myChildren', 'myChildren')->name('myChildren');
    Route::get('/myChildren/classe-subjects/{id}', 'myChildrenSubjects')->name('myChildrenSubjects');
    Route::get('/administration', 'administration')->name('administrationParent');
});

/*************************************************** STUDENTS ***********************************************************************/

Route::controller(StudentsController::class)->group(['middleware' => ['auth', 'role:student']], function () {
    Route::get('/student/dashboard', 'index')->name('studentDashboard');
    Route::get('/student/mySubjects', 'mySubject')->name('mySubject');
    Route::get('/student/timeTable', 'myTimeTable')->name('StudentTimeTable');
    Route::get('/student/certificate', 'downloadCertificate')->name('Studentcertificate');
    Route::get('/student/administration', 'administration')->name('administration');
});


/*************************************************** TEACHERS ***********************************************************************/



Route::controller(TeachersController::class)->group(['middleware' => ['auth', 'role:teacher']], function () {
    Route::get('/teacher/dashboard', 'index')->name('teacherDashboard');
    Route::get('/myClasse', 'myClasse')->name('myClasse');
    Route::get('/myTimeTable', 'myTimeTable')->name('myTimeTable');
    Route::get('/teacher/certificate', 'downloadCertificate')->name('certificate');
    Route::get('/teacher/administration', 'administration')->name('administrationTeacher');
    Route::post('/addAbsence', 'addAbsence')->name('addAbsence');
    
});
 


   

    
 