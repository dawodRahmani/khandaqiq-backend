<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Auto-generated API resource routes for models
Route::middleware('api')->group(function () {
    Route::apiResource('gallery-pages', App\Http\Controllers\Api\GalleryPagesController::class);
    Route::apiResource('home-pages', App\Http\Controllers\Api\HomePagesController::class);
    Route::apiResource('contact-ways', App\Http\Controllers\Api\ContactWaysController::class);
    Route::apiResource('hr-pages', App\Http\Controllers\Api\HrPagesController::class);
    Route::apiResource('contact-us-pages', App\Http\Controllers\Api\ContactUsPagesController::class);
    Route::apiResource('contact-ways', App\Http\Controllers\Api\ContactWaysController::class);
    Route::apiResource('collaborators', App\Http\Controllers\Api\CollaboratorsController::class);
    Route::apiResource('agriculture-pages', App\Http\Controllers\Api\AgriculturePagesController::class);
    Route::apiResource('agriculture-operations', App\Http\Controllers\Api\AgricultureOperationsController::class);
    Route::apiResource('logistic-operations', App\Http\Controllers\Api\LogisticOperationsController::class);
    Route::apiResource('logistic-pages', App\Http\Controllers\Api\LogisticPagesController::class);
    Route::apiResource('location-maps', App\Http\Controllers\Api\LocationMapsController::class);
    Route::apiResource('investment-pages', App\Http\Controllers\Api\InvestmentPagesController::class);
    Route::apiResource('investment-operations', App\Http\Controllers\Api\InvestmentOperationsController::class);
    Route::apiResource('agricultures', App\Http\Controllers\Api\AgriculturesController::class);
    Route::apiResource('mining-operations', App\Http\Controllers\Api\MiningOperationsController::class);
    Route::apiResource('mining-pages', App\Http\Controllers\Api\MiningPagesController::class);
    Route::apiResource('mining-projects', App\Http\Controllers\Api\MiningProjectsController::class);
    Route::apiResource('snapshots', App\Http\Controllers\Api\SnapshotsController::class);
    Route::apiResource('services', App\Http\Controllers\Api\ServicesController::class);
    Route::apiResource('service-pages', App\Http\Controllers\Api\ServicePagesController::class);
    Route::apiResource('products', App\Http\Controllers\Api\ProductsController::class);
    Route::apiResource('product-pages', App\Http\Controllers\Api\ProductPagesController::class);
    Route::apiResource('petroleum-pages', App\Http\Controllers\Api\PetroleumPagesController::class);
    Route::apiResource('petroleum-operations', App\Http\Controllers\Api\PetroleumOperationsController::class);
    Route::apiResource('news-pages', App\Http\Controllers\Api\NewsPagesController::class);
    Route::apiResource('news', App\Http\Controllers\Api\NewsController::class);
    Route::apiResource('product-pages', App\Http\Controllers\Api\ProductPagesController::class);
    Route::apiResource('quick-access', App\Http\Controllers\Api\QuickAccessController::class);
    Route::apiResource('follow-us', App\Http\Controllers\Api\FollowUsController::class);
    Route::apiResource('languages', App\Http\Controllers\Api\LanguagesController::class);
    Route::apiResource('partnerships', App\Http\Controllers\Api\PartnershipsController::class);
    Route::get('settings', [App\Http\Controllers\Api\SettingController::class, 'index']);
    // Add more controllers as needed
});
