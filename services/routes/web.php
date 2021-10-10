<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\UsersComponent;
use App\Http\Livewire\ServicesCategoriesComponent;
use App\Http\Livewire\Admin\AdminJobsComponent;
use App\Http\Livewire\Admin\AdminServiceCategoryComponent;
use App\Http\Livewire\Customer\CustomerComponent;
use App\Http\Livewire\Admin\AdminComponent;
use App\Http\Livewire\Sprovider\SproviderComponent;
use App\Http\Livewire\Customer\CustomerDashboardComponent;
use App\Http\Livewire\Sprovider\SproviderDashboardComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;


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



Route::get('/',HomeComponent::class)->name('home');
Route::get('/services-categories',ServicesCategoriesComponent::class)->name('home.service');
//for Cust
Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/customer/dashboard', CustomerDashboardComponent::class)->name('customer.dashboard');
});
//for ADM
Route::middleware(['auth:sanctum', 'verified' , 'authadmin'])->group(function(){
    Route::get('/admin/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('/admin/service-categories', AdminServiceCategoryComponent::class)->name('admin.service-categories');
    Route::get('/admin/job/add', AdminJobsComponent::class)->name('admin.Jobs');
});

//for PRV
Route::middleware(['auth:sanctum', 'verified' , 'authsprovider'])->group(function(){
    Route::get('/sprovider/dashboard', SproviderDashboardComponent::class)->name('sprovider.dashboard');
});

