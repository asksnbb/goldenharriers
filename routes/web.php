<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Page;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',[Page::class,'index']);
Route::get('/about-school',[Page::class,'aboutschool']);
Route::get('/chairman-message',[Page::class,'chairmanmessage']);
Route::get('/md-message',[Page::class,'mdmessage']);
Route::get('/principal-message',[Page::class,'principalmessage']);
Route::get('/faculty',[Page::class,'faculty']);
Route::get('/school-rules',[Page::class,'schoolrules']);
Route::get('/school-information',[Page::class,'schoolinfo']);
Route::get('/student-details',[Page::class,'studentdetails']);
Route::get('/annual-report',[Page::class,'annualreport']);

Route::get('/mdisclosure',[Page::class,'mdisclosure']);
Route::get('/downloads',[Page::class,'downloadlist']);
Route::get('/reach-us',[Page::class,'reachus']);

Route::get('/careers',[Page::class,'careers']);


// Gallery

Route::get('/academic-gallery',[Page::class,'academicgallery']);
Route::get('/cultural-gallery',[Page::class,'culturalgallery']);
Route::get('/sports-gallery',[Page::class,'sportsgallery']);
Route::get('/educational-gallery',[Page::class,'educationalgallery']);


// Admission

Route::get('/admission-process',[Page::class,'admissionprocess']);
Route::get('/fee-schedule',[Page::class,'feeschedule']);
// Route::get('/school-uniform',[Page::class,'schooluniform']);
Route::get('/school-timings',[Page::class,'schooltimings']);
Route::get('/apply-now',[Page::class,'applynow']);

Route::get('/circulars',[Page::class,'circular']);
Route::get('/datesheets',[Page::class,'datesheets']);


Route::get('/laboratories',[Page::class,'laboratories']);
Route::get('/computer-lab',[Page::class,'computerlab']);
Route::get('/library',[Page::class,'library']);
Route::get('/smart-class',[Page::class,'smartclass']);
Route::get('/artcraft',[Page::class,'artcraft']);
Route::get('/danceroom',[Page::class,'danceroom']);
Route::get('/playground',[Page::class,'playground']);
Route::get('/clubs',[Page::class,'clubs']);
Route::get('/transports',[Page::class,'transports']);



Route::get('/affiliationletter',[Page::class,'affiliationletter']);
Route::get('/trustcertificate',[Page::class,'trustcertificate']);
Route::get('/noc',[Page::class,'noc']);
Route::get('/recognitioncertificate',[Page::class,'recognitioncertificate']);
Route::get('/buildingsafetycertificate',[Page::class,'buildingsafetycertificate']);
Route::get('/firesafetycertificate',[Page::class,'firesafetycertificate']);
Route::get('/deonoc',[Page::class,'deonoc']);
Route::get('/hygienecertificate',[Page::class,'hygienecertificate']);
Route::get('/annualacademiccalender',[Page::class,'annualacademiccalender']);

 