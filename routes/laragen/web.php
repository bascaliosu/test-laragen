<?php


Route::name('laragen')
    ->prefix('laragen')
    ->group(function (){

                                    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');
                            Route::get('users/create', [\App\Http\Controllers\UserController::class, 'create'])->name('users/create.create');
                            Route::get('users/{user}', [\App\Http\Controllers\UserController::class, 'show'])->name('users/{user}.show');
                            Route::get('users/{user}/edit', [\App\Http\Controllers\UserController::class, 'edit'])->name('users/{user}/edit.edit');
                    
    });
