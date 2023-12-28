<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\BlogController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\CourseController;
use App\Http\Controllers\frontend\EventController;
use App\Http\Controllers\frontend\TeamController;


use App\Http\Controllers\dashboard\AdminController;
use App\Http\Controllers\frontend\LoginController;
use App\Http\Controllers\frontend\RegisterController;
// use App\Http\Controllers\dashboard\BlogController;

// Route::get('/', function () {
//     return view('Frontend.index');
// });

Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('/about',[AboutController::class,'index'])->name('about');
Route::get('/blog',[BlogController::class,'index'])->name('blog');
Route::get('/blog_detail',[BlogController::class,'BlogDetail'])->name('blog.detail');
Route::get('/contact',[ContactController::class,'index'])->name('contact');

Route::get('/courses',[CourseController::class,'index'])->name('courses');
Route::get('/courses_details/{slug}',[CourseController::class,'courses_details'])->name('courses.details');

Route::get('/events',[EventController::class,'index'])->name('events');
Route::get('/event_details',[EventController::class,'EventDetail'])->name('event.details');
Route::get('/teams',[TeamController::class,'index'])->name('teams');
Route::get('/team_details',[TeamController::class,'TeamDetails'])->name('team.details');

Route::get('/login',[LoginController::class,'index'])->name('login'); // this displays the login form
Route::post('/login',[LoginController::class,'login'])->name('login.post'); 
Route::get('/register',[RegisterController::class,'index'])->name('register'); // this displays the register form
Route::post('/register',[RegisterController::class,'register'])->name('register.post');

Route::get ('/logout',[LoginController::class,'logout'])->name('logout'); 


// <!--=================================
// Dashboard Routes
// ==================================-->
Route::get('/admin',[AdminController::class,'admin'])->name('admin');
Route::controller(CourseController::class)->group(function(){

    // Route::get('/Course_Details/{slug}','courses_details')->name('courseDetails');
    // Route::get('/OurCourse','AllCourse')->name('ourCourse');
    Route::get('/AllCourses','displayCourse')->name('ourCourse');
    Route::get('/Course/View/{id}','singleCourse')->name('view.course');
    Route::get('/Course/Add','AddCourse')->name('Add');
    Route::post('/Course/Add','InsertCourse')->name('course.add');
    Route::get('/Course/Update/{id}','update')->name('course.update');
    Route::post('/Course/Update/{id}','updateCourse')->name('update');
    Route::get('/Course/Delete/{id}','deleteCourse')->name('course.delete');  
});

Route::controller(BlogController::class)->group(function(){
    Route::get('/Blog','blog')->name('ourBlog');
    Route::post('/Blog/Add','storeBlog')->name('blog.add');
    Route::get('/GetBlog','fetchBlogs')->name('allBlog');
    // Route::get('/Blog','fetchBlogs')->name('allBlog');
});
