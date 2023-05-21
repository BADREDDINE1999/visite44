    Route::get('step1',[App\Http\Controllers\Admin\RapportController::class, 'create1']);
    Route::post('step1',[App\Http\Controllers\Admin\RapportController::class, 'store1']);
    Route::get('step2',[App\Http\Controllers\Admin\RapportController::class, 'edit2']);
    Route::put('step2',[App\Http\Controllers\Admin\RapportController::class, 'update2']);
    Route::get('step3/{visite_id}',[App\Http\Controllers\Admin\RapportController::class, 'create3']);
    Route::post('step3',[App\Http\Controllers\Admin\RapportController::class, 'store3']);
    Route::get('step4/{visite_id}',[App\Http\Controllers\Admin\RapportController::class, 'create4']);
