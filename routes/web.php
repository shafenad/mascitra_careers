<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\DummyAuthController;
use App\Http\Middleware\DummyRole;

Route::get('/login', [DummyAuthController::class, 'showLogin'])->name('login');
Route::post('/login', [DummyAuthController::class, 'login'])->name('login.submit');

Route::get('/superadmin/export-report', [SuperAdminController::class, 'exportReport'])
    ->name('superadmin_export_report');

Route::get('/dashboard_superadmin', fn() => view('superadmin.dashboard_superadmin'))
    ->name('dashboard_superadmin')
    ->middleware(DummyRole::class.':superadmin');

Route::get('/dashboard_admin', fn() => view('admin.dashboard_admin'))
    ->name('dashboard_admin')
    ->middleware(DummyRole::class.':admin');

Route::get('/dashboard_pengguna', fn() => view('pengguna.dashboard_pengguna'))
    ->name('dashboard_pengguna')
    ->middleware(DummyRole::class.':pengguna');




Route::get('/', function () {
    return view('landingpage');
})->name('landingpage');

Route::get('/signup', function () {
    return view('auth.signup');
})->name('signup');

Route::get('/newpass', function () {
    return view('auth.newpass');
})->name('newpass');

Route::post('/otp', function () {
    return view('auth.otp');
})->name('otp');

Route::get('/detailjob', function () {
    return view('detailjob');
})->name('detailjob');

#Route Superadmin

# Profile

Route::get('/superadmin_profile', function () {
    return view('superadmin.profile.superadmin_profile');
})->name('superadmin_profile');

Route::get('/superadmin_editprofile', function () {
    return view('superadmin.profile.superadmin_editprofile');
})->name('superadmin_editprofile');

Route::get('/superadmin_editprofile_success', function () {
    return view('superadmin.profile.superadmin_editprofile_success');
})->name('superadmin_editprofile_success');


# Position

Route::get('/superadmin_position_intern', function () {
    return view('superadmin.position.superadmin_position_intern');
})->name('superadmin_position_intern');

Route::get('/superadmin_position_interndeactive', function () {
    return view('superadmin.position.superadmin_position_interndeactive');
})->name('superadmin_position_interndeactive');

Route::get('/superadmin_position_interndelete', function () {
    return view('superadmin.position.superadmin_position_interndelete');
})->name('superadmin_position_interndelete');

Route::get('/superadmin_newposition_intern', function () {
    return view('superadmin.position.superadmin_newposition_intern');
})->name('superadmin_newposition_intern');

Route::get('/superadmin_editposition_intern', function () {
    return view('superadmin.position.superadmin_editposition_intern');
})->name('superadmin_editposition_intern');

Route::get('/superadmin_position_fulltime', function () {
    return view('superadmin.position.superadmin_position_fulltime');
})->name('superadmin_position_fulltime');

Route::get('/superadmin_position_fulltimedeactive', function () {
    return view('superadmin.position.superadmin_position_fulltimedeactive');
})->name('superadmin_position_fulltimedeactive');

Route::get('/superadmin_position_fulltimedelete', function () {
    return view('superadmin.position.superadmin_position_fulltimedelete');
})->name('superadmin_position_fulltimedelete');

Route::get('/superadmin_newposition_fulltime', function () {
    return view('superadmin.position.superadmin_newposition_fulltime');
})->name('superadmin_newposition_fulltime');

Route::get('/superadmin_editposition_fulltime', function () {
    return view('superadmin.position.superadmin_editposition_fulltime');
})->name('superadmin_editposition_fulltime');

# Internship Application

Route::get('/superadmin_internapplication', function () {
    return view('superadmin.internapplication.superadmin_internapplication');
})->name('superadmin_internapplication');

# Internship Application Detail

Route::get('/superadmin_applicationdetail', function () {
    return view('superadmin.internapplication.superadmin_applicationdetail');
})->name('superadmin_applicationdetail');

Route::get('/superadmin_applicationdetail_interviewsuccess', function () {
    return view('superadmin.internapplication.superadmin_applicationdetail_interviewsuccess');
})->name('superadmin_applicationdetail_interviewsuccess');

Route::get('/superadmin_applicationdetail_offering', function () {
    return view('superadmin.internapplication.superadmin_applicationdetail_offering');
})->name('superadmin_applicationdetail_offering');

#-------------------------------DETAIL ACCEPTED & REJECTED----------------

Route::get('/superadmin_applicationdetail_accepted', function () {
    return view('superadmin.detailaccept_reject.superadmin_applicationdetail_accepted');
})->name('superadmin_applicationdetail_accepted');

Route::get('/superadmin_applicationdetail_rejected', function () {
    return view('superadmin.detailaccept_reject.superadmin_applicationdetail_rejected');
})->name('superadmin_applicationdetail_rejected');


# Application History

Route::get('/superadmin_applicationhistory', function () {
    return view('superadmin.applicationhistory.superadmin_applicationhistory');
})->name('superadmin_applicationhistory');


# Add Admin

Route::get('/superadmin_addadmin', function () {
    return view('superadmin.addadmin.superadmin_addadmin');
})->name('superadmin_addadmin');

Route::get('/superadmin_newadmin', function () {
    return view('superadmin.addadmin.superadmin_newadmin');
})->name('superadmin_newadmin');

Route::get('/superadmin_editadmin', function () {
    return view('superadmin.addadmin.superadmin_editadmin');
})->name('superadmin_editadmin');

Route::get('/superadmin_addadmin_new', function () {
    return view('superadmin.addadmin.superadmin_addadmin_new');
})->name('superadmin_addadmin_new');

Route::get('/superadmin_editadmin_success', function () {
    return view('superadmin.addadmin.superadmin_editadmin_success');
})->name('superadmin_editadmin_success');

Route::get('/superadmin_addadmin_deactive', function () {
    return view('superadmin.addadmin.superadmin_addadmin_deactive');
})->name('superadmin_addadmin_deactive');


#-----------------------------------------------------------------------


# Route Admin


# Profile

Route::get('/admin_profile', function () {
    return view('admin.profile.admin_profile');
})->name('admin_profile');

Route::get('/admin_editprofile', function () {
    return view('admin.profile.admin_editprofile');
})->name('admin_editprofile');

Route::get('/admin_editprofile_success', function () {
    return view('admin.profile.admin_editprofile_success');
})->name('admin_editprofile_success');

# Position

Route::get('/admin_position_intern', function () {
    return view('admin.position.admin_position_intern');
})->name('admin_position_intern');

Route::get('/admin_position_interndeactive', function () {
    return view('admin.position.admin_position_interndeactive');
})->name('admin_position_interndeactive');

Route::get('/admin_position_interndelete', function () {
    return view('admin.position.admin_position_interndelete');
})->name('admin_position_interndelete');

Route::get('/admin_newposition_intern', function () {
    return view('admin.position.admin_newposition_intern');
})->name('admin_newposition_intern');

Route::get('/admin_editposition_intern', function () {
    return view('admin.position.admin_editposition_intern');
})->name('admin_editposition_intern');

Route::get('/admin_position_fulltime', function () {
    return view('admin.position.admin_position_fulltime');
})->name('admin_position_fulltime');

Route::get('/admin_position_fulltimedeactive', function () {
    return view('admin.position.admin_position_fulltimedeactive');
})->name('admin_position_fulltimedeactive');

Route::get('/admin_position_fulltimedelete', function () {
    return view('admin.position.admin_position_fulltimedelete');
})->name('admin_position_fulltimedelete');

Route::get('/admin_newposition_fulltime', function () {
    return view('admin.position.admin_newposition_fulltime');
})->name('admin_newposition_fulltime');

Route::get('/admin_editposition_fulltime', function () {
    return view('admin.position.admin_editposition_fulltime');
})->name('admin_editposition_fulltime');

# Internship Application

Route::get('/admin_internapplication', function () {
    return view('admin.internapplication.admin_internapplication');
})->name('admin_internapplication');

# Internship Application Detail

Route::get('/admin_applicationdetail', function () {
    return view('admin.internapplication.admin_applicationdetail');
})->name('admin_applicationdetail');

Route::get('/admin_applicationdetail_interviewsuccess', function () {
    return view('admin.internapplication.admin_applicationdetail_interviewsuccess');
})->name('admin_applicationdetail_interviewsuccess');

Route::get('/admin_applicationdetail_interviewdisable', function () {
    return view('admin.internapplication.admin_applicationdetail_interviewdisable');
})->name('admin_applicationdetail_interviewdisable');

#-------------------------------DETAIL ACCEPTED & REJECTED----------------

Route::get('/admin_applicationdetail_accepted', function () {
    return view('admin.detailaccept_reject.admin_applicationdetail_accepted');
})->name('admin_applicationdetail_accepted');

Route::get('/admin_applicationdetail_rejected', function () {
    return view('admin.detailaccept_reject.admin_applicationdetail_rejected');
})->name('admin_applicationdetail_rejected');

# Application History

Route::get('/admin_applicationhistory', function () {
    return view('admin.applicationhistory.admin_applicationhistory');
})->name('admin_applicationhistory');


#-----------------------------------------------------------------------


# Route Pengguna (Pelamar)
Route::get('/pengguna_landingpage', function () {
    return view('pengguna.pengguna_landingpage');
})->name('pengguna_landingpage');

Route::get('/pengguna_detailjob', function () {
    return view('pengguna.pengguna_detailjob');
})->name('pengguna_detailjob');

# Profile

Route::get('/pengguna_profile', function () {
    return view('pengguna.profile.pengguna_profile');
})->name('pengguna_profile');

Route::get('/pengguna_editprofile', function () {
    return view('pengguna.profile.pengguna_editprofile');
})->name('pengguna_editprofile');

Route::get('/pengguna_editprofile_success', function () {
    return view('pengguna.profile.pengguna_editprofile_success');
})->name('pengguna_editprofile_success');

# Internship Application Detail

Route::get('/pengguna_applicationdetail', function () {
    return view('pengguna.applicationdetail.pengguna_applicationdetail');
})->name('pengguna_applicationdetail');

Route::get('/pengguna_applicationdetail_screening', function () {
    return view('pengguna.applicationdetail.pengguna_applicationdetail_screening');
})->name('pengguna_applicationdetail_screening');

Route::get('/pengguna_applicationdetail_rejectscreening', function () {
    return view('pengguna.applicationdetail.pengguna_applicationdetail_rejectscreening');
})->name('pengguna_applicationdetail_rejectscreening');

Route::get('/pengguna_applicationdetail_interview', function () {
    return view('pengguna.applicationdetail.pengguna_applicationdetail_interview');
})->name('pengguna_applicationdetail_interview');

Route::get('/pengguna_applicationdetail_interviewfinal', function () {
    return view('pengguna.applicationdetail.pengguna_applicationdetail_interviewfinal');
})->name('pengguna_applicationdetail_interviewfinal');

Route::get('/pengguna_applicationdetail_rejectinterview', function () {
    return view('pengguna.applicationdetail.pengguna_applicationdetail_rejectinterview');
})->name('pengguna_applicationdetail_rejectinterview');

Route::get('/pengguna_applicationdetail_offering', function () {
    return view('pengguna.applicationdetail.pengguna_applicationdetail_offering');
})->name('pengguna_applicationdetail_offering');



#-------------------------------DETAIL ACCEPTED & REJECTED----------------

Route::get('/pengguna_applicationdetail_accepted', function () {
    return view('pengguna.detailaccept_reject.pengguna_applicationdetail_accepted');
})->name('pengguna_applicationdetail_accepted');

Route::get('/pengguna_applicationdetail_rejected', function () {
    return view('pengguna.detailaccept_reject.pengguna_applicationdetail_rejected');
})->name('pengguna_applicationdetail_rejected');

# Application History

Route::get('/pengguna_applicationhistory', function () {
    return view('pengguna.applicationhistory.pengguna_applicationhistory');
})->name('pengguna_applicationhistory');
