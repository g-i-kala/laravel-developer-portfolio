<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TagController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\SkillCategoryController;
use App\Http\Controllers\RegisteredUserController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/skills', [SkillController::class, 'index']);
Route::get('/skills/create', [SkillController::class, 'create'])->middleware('auth');
Route::post('/skills/create', [SkillController::class, 'store'])->middleware('auth');
Route::delete('/skills/{skill}', [SkillController::class, 'destroy'])->middleware('auth');

Route::post('/skill-categories', [SkillCategoryController::class, 'store'])->middleware('auth');
Route::patch('/skill-categories/{skillCategory}', [SkillCategoryController::class, 'edit'])->middleware('auth');
Route::delete('/skill-categories/{skillCategory}', [SkillCategoryController::class, 'destroy'])->middleware('auth');


Route::get('/projects/index', [ProjectController::class, 'index']);
Route::get('/projects/create', [ProjectController::class, 'create'])->middleware('auth');
Route::post('/projects', [ProjectController::class, 'store'])->middleware('auth');
Route::get('/projects/show', [ProjectController::class, 'show'])->middleware('auth');
Route::delete('/projects/{project}', [ProjectController::class, 'destroy'])->middleware('auth');
Route::post('/projects/edit/{project}', [ProjectController::class, 'edit'])->middleware('auth');
Route::patch('/projects/update/{project}', [ProjectController::class, 'update'])->middleware('auth');

Route::get('/search', SearchController::class);
Route::get('/tags/{tag:name}', TagController::class);


Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisteredUserController::class, 'create']); //this group ->middleware('guest') for each route
    Route::post('/register', [RegisteredUserController::class, 'store']);

    Route::get('/login', [SessionController::class, 'create'])->name('login');
    Route::post('/login', [SessionController::class, 'store']);
});

Route::delete('/logout', [SessionController::class, 'destroy'])->middleware('auth');
