<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\studentController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', [HomeController::class, 'index'])->name('dashboard');


Route::prefix('/Student')->group(function () {



    Route::get('/students', [StudentController::class, 'index'])->name('Student.index');
    Route::post('/students/store', [StudentController::class, 'store'])->name('Student.store');
    Route::get('/list', [StudentController::class, 'list'])->name('Student.list');
    Route::post('/students/delete/{id}', [StudentController::class, 'delete'])->name('student.delete');

    Route::get('/{task_id}/done', [studentController::class, 'done'])->name('student.done');
    Route::get('/edit', [studentController::class, 'edit'])->name('todo.edit');
    Route::post('/{task_id}/update', [studentController::class, 'update'])->name('student.update');
});

require __DIR__.'/auth.php';
