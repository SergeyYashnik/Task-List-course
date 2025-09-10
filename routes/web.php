<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('tasks.index');
});

Route::get('/tasks', function () {
    return view('index', [
        'tasks' => App\Models\Task::query()->latest()->get()
    ]);
})->name('tasks.index');

Route::get('/tasks/{id}', function ($id) {
    return view('show', ['task' => \App\Models\Task::query()->findOrFail($id)]);
})->name('tasks.show');


