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
                                                Route::get('owners', [\App\Http\Controllers\OwnerController::class, 'index'])->name('admin.owners.index');
                            Route::get('owners/create', [\App\Http\Controllers\OwnerController::class, 'create'])->name('admin.owners.create');
                            Route::get('owners/{owner}', [\App\Http\Controllers\OwnerController::class, 'show'])->name('admin.owners.show');
                            Route::get('owners/{owner}/edit', [\App\Http\Controllers\OwnerController::class, 'edit'])->name('admin.owners.edit');
                                                Route::get('car_types', [\App\Http\Controllers\CarTypeController::class, 'index'])->name('admin.car_types.index');
                            Route::get('car_types/create', [\App\Http\Controllers\CarTypeController::class, 'create'])->name('admin.car_types.create');
                            Route::get('car_types/{carType}', [\App\Http\Controllers\CarTypeController::class, 'show'])->name('admin.car_types.show');
                            Route::get('car_types/{carType}/edit', [\App\Http\Controllers\CarTypeController::class, 'edit'])->name('admin.car_types.edit');
                                                Route::get('dealers', [\App\Http\Controllers\DealerController::class, 'index'])->name('admin.dealers.index');
                            Route::get('dealers/create', [\App\Http\Controllers\DealerController::class, 'create'])->name('admin.dealers.create');
                            Route::get('dealers/{dealer}', [\App\Http\Controllers\DealerController::class, 'show'])->name('admin.dealers.show');
                            Route::get('dealers/{dealer}/edit', [\App\Http\Controllers\DealerController::class, 'edit'])->name('admin.dealers.edit');
                    
    });
