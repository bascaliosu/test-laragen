<?php

Route::name('laragen.')
    ->prefix('laragen')
    ->middleware('web')
    ->group(function () {

                                    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('admin.users.index');
                            Route::get('users/create', [\App\Http\Controllers\UserController::class, 'create'])->name('admin.users.create');
                            Route::get('users/{user}', [\App\Http\Controllers\UserController::class, 'show'])->name('admin.users.show');
                            Route::get('users/{user}/edit', [\App\Http\Controllers\UserController::class, 'edit'])->name('admin.users.edit');
                                                Route::get('cars', [\App\Http\Controllers\CarController::class, 'index'])->name('admin.cars.index');
                            Route::get('cars/create', [\App\Http\Controllers\CarController::class, 'create'])->name('admin.cars.create');
                            Route::get('cars/{car}', [\App\Http\Controllers\CarController::class, 'show'])->name('admin.cars.show');
                            Route::get('cars/{car}/edit', [\App\Http\Controllers\CarController::class, 'edit'])->name('admin.cars.edit');
                    
    });
