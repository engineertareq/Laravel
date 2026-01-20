<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\NotificationController;
use App\Http\Controllers\BkashTokenizePaymentController; // Import the class to keep code clean

// Notification Routes
Route::get('notification', [NotificationController::class, 'index']);
Route::get('notification/{type}', [NotificationController::class, 'notification'])->name("notification");

Route::group(['middleware' => ['web']], function () {
    
    // 1. Show the Payment View
    Route::get('/bkash/payment', [BkashTokenizePaymentController::class, 'index']);

    // 2. Create Payment (MUST be POST to match the HTML form)
    Route::post('/bkash/create-payment', [BkashTokenizePaymentController::class, 'createPayment'])->name('bkash-create-payment');

    // 3. Callback (bKash redirects here with GET, so this is correct)
    Route::get('/bkash/callback', [BkashTokenizePaymentController::class, 'callBack'])->name('bkash-callBack');

    // 4. Search Transaction
    Route::get('/bkash/search/{trxID}', [BkashTokenizePaymentController::class, 'searchTnx'])->name('bkash-search');

    // 5. Refund Routes (Ideally these should be POST in production, but GET is okay for testing)
    Route::get('/bkash/refund', [BkashTokenizePaymentController::class, 'refund'])->name('bkash-refund');
    Route::get('/bkash/refund/status', [BkashTokenizePaymentController::class, 'refundStatus'])->name('bkash-refund-status');

});