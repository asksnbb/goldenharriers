<?php

use Illuminate\Support\Facades\Route;

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('faculty', 'FacultyCrudController');
    Route::crud('announcement', 'AnnouncementCrudController');
    Route::crud('download', 'DownloadCrudController');
    Route::crud('academiceventgallery', 'AcademiceventgalleryCrudController');
    Route::crud('culturaleventgallery', 'CulturaleventgalleryCrudController');
    Route::crud('sportseventgallery', 'SportseventgalleryCrudController');
    Route::crud('educationaleventgallery', 'EducationaleventgalleryCrudController');
    Route::crud('circular', 'CircularCrudController');
    Route::crud('datesheet', 'DatesheetCrudController');
    Route::crud('teacher', 'TeacherCrudController');
    Route::crud('banner', 'BannerCrudController');
    Route::crud('topper', 'TopperCrudController');
}); // this should be the absolute last line of this file