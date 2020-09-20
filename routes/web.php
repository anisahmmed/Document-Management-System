<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\JudgeCategoryController;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


//ADMIN UTILITIES
//Category insert form view
Route::get('/add/category-form',[CategoryController::class, 'category_form'])->name('category_form');
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

//Create Judge
Route::post('/create-judge',[AdminController::class, 'create_judge'])->name('create_judge');
//Register Judge Category
Route::get('/register-judge',[JudgeCategoryController::class, 'register_judge_info'])->name('register_judge_info');



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
