<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\JudgeCategoryController;
use App\Http\Middleware\CheckUser;
use App\Http\Controllers\JudgeController;
use App\Http\Controllers\HomeController;
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
    return view('index');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
  if (Auth::user()->role_id == 1 ) {
    return view('dashboard');
  }
  else {
    return view('user_dashboard');
  }
})->name('dashboard');


//Announcements
Route::get('/announcements',[HomeController::class, 'announcements'])->name('announcements');
//Document Detail for guest
Route::get('/document/detail/{id}',[HomeController::class, 'guest_document_view'])->name('guest_document_view');
//ADMIN UTILITIE

//Category view
Route::get('/all-categories',[CategoryController::class, 'category_info'])->name('category_info');
//Caregory insert
Route::post('/add-category',[CategoryController::class, 'category_insert'])->name('category_insert');
//Edit Category
Route::get('/category/edit/{id}',[CategoryController::class, 'edit_category'])->name('edit_category');
//Category Update
Route::post('/category/update',[CategoryController::class, 'category_update'])->name('category_update');
//Delete Category
Route::get('/category/delete/{id}',[CategoryController::class, 'category_delete'])->name('category_delete');

//User Information view
Route::get('/users',[AdminController::class, 'user_info'])->name('user_info');
//Edit User
Route::get('/user/edit/{id}',[AdminController::class, 'user_edit'])->name('user_edit');
//Update user Info
Route::post('/user/update',[AdminController::class, 'user_update'])->name('user_update');


//All Registered Judge
Route::get('/judges',[JudgeCategoryController::class, 'judge_info'])->name('judge_info');
//Create Judge
Route::post('/create/judge',[JudgeCategoryController::class, 'create_judge'])->name('create_judge');
//Delete Judge
Route::get('/judge/delete/{id}',[JudgeCategoryController::class, 'judge_delete'])->name('judge_delete');

//All documents view
Route::get('/all-documents',[AdminController::class, 'all_documents'])->name('all_admin_documents');
//Document Detail for admin
Route::get('/document/details/{id}',[AdminController::class, 'single_document_detail'])->name('single_document_detail');


//Judges Utilities
Route::get('/document-review',[JudgeController::class, 'judge_review'])->name('judge_review_document');
// Document Approve
Route::post('/document-approve',[JudgeController::class, 'document_approve'])->name('document_approve');
//Document Detail
Route::get('/document-detail/{id}',[JudgeController::class, 'document_detail'])->name('document_detail');
//Judges feedback form view
Route::get('/comment/{id}',[JudgeController::class, 'comment_form'])->name('comment_form');
//Judges Feedback send
Route::post('/comment/send',[JudgeController::class, 'comment_send'])->name('comment_send');


//USER UTILITIES
//Document insert form
Route::get('/document/insert-form',[UserController::class, 'insert_form'])->name('insert_form');
//All Document View
Route::get('/all-document',[UserController::class, 'all_document'])->name('all_document');
//Insert Documents
Route::post('/document/insert',[UserController::class, 'document_insert'])->name('document_insert');
//Single Document view
Route::get('/individual-document/view/{id}',[UserController::class, 'document_view'])->name('document_view');
//Document Download
Route::get('/document/download/{file}',[UserCOntroller::class, 'document_download'])->name('document_download');

//Update Document Details
Route::post('/update/document-details',[UserCOntroller::class, 'update_document_detail'])->name('update_document_detail');
