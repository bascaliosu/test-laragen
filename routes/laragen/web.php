<?php


Route::name('laragen')
    ->prefix('laragen')
    ->group(function (){

                                    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');
                            Route::get('users/create', [\App\Http\Controllers\UserController::class, 'create'])->name('users/create.create');
                            Route::get('users/{user}', [\App\Http\Controllers\UserController::class, 'show'])->name('users/{user}.show');
                            Route::get('users/{user}/edit', [\App\Http\Controllers\UserController::class, 'edit'])->name('users/{user}/edit.edit');
                                                Route::get('cars', [\App\Http\Controllers\CarController::class, 'index'])->name('cars.index');
                            Route::get('cars/create', [\App\Http\Controllers\CarController::class, 'create'])->name('cars/create.create');
                            Route::get('cars/{car}', [\App\Http\Controllers\CarController::class, 'show'])->name('cars/{car}.show');
                            Route::get('cars/{car}/edit', [\App\Http\Controllers\CarController::class, 'edit'])->name('cars/{car}/edit.edit');
                                                Route::get('car_owners', [\App\Http\Controllers\CarOwnerController::class, 'index'])->name('car_owners.index');
                            Route::get('car_owners/create', [\App\Http\Controllers\CarOwnerController::class, 'create'])->name('car_owners/create.create');
                            Route::get('car_owners/{carowner}', [\App\Http\Controllers\CarOwnerController::class, 'show'])->name('car_owners/{carowner}.show');
                            Route::get('car_owners/{carowner}/edit', [\App\Http\Controllers\CarOwnerController::class, 'edit'])->name('car_owners/{carowner}/edit.edit');
                    
    });
