<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;


Route::get('/', [PagesController::class, 'index'])->name('index');
Route::get('/index', [PagesController::class, 'index'])->name('index');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/our-vision', [PagesController::class, 'ourVision'])->name('our-vision');
Route::get('/massege', [PagesController::class, 'massege'])->name('massege');
Route::get('/goals-and-values', [PagesController::class, 'goalsAndValues'])->name('goals-and-values');
Route::get('/our-services', [PagesController::class, 'ourServices'])->name('our-services');
Route::get('/transportation-supply', [PagesController::class, 'transportServices'])->name('transportation-supply');
Route::get('/oil-services', [PagesController::class, 'oilServices'])->name('oil-services');
Route::get('/shipping-customs-clearance', [PagesController::class, 'customsClearance'])->name('shipping-customs-clearance');
Route::get('/contracting-and-construction', [PagesController::class, 'contractingAndConstruction'])->name('contracting-and-construction');
Route::get('/storage-distribution', [PagesController::class, 'storageDistribution'])->name('storage-distribution');
Route::get('/water-env', [PagesController::class, 'waterEnv'])->name('water-env');
Route::get('/projects', [PagesController::class, 'projects'])->name('projects');
Route::get('/emergency-unit-projects', [PagesController::class, 'emergencyUnitProjects'])->name('emergency-unit-projects');
Route::get('/clearance-project', [PagesController::class, 'clearanceProject'])->name('clearance-project');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
