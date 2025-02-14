<?php

use App\Http\Controllers\Company\GetCompaniesController;
use App\Http\Controllers\Company\GetCreateCompanyController;
use App\Http\Controllers\Company\GetEditCompanyController;
use App\Http\Controllers\Company\GetExistsCompanyController;
use App\Http\Controllers\Company\PostCompanyController;
use App\Http\Controllers\Dashboard\GetDashboardController;
use App\Http\Controllers\DesiredSeeker\DeleteDesiredSeekerController;
use App\Http\Controllers\DesiredSeeker\GetCreateDesiredSeekersController;
use App\Http\Controllers\DesiredSeeker\GetDesiredSeekersController;
use App\Http\Controllers\DesiredSeeker\GetEditDesiredSeekerController;
use App\Http\Controllers\DesiredSeeker\PostDesiredSeekerController;
use App\Http\Controllers\DesiredSeeker\PutDesiredSeekerController;
use App\Http\Controllers\Enneagram\GetEditEnneagramQuestionController;
use App\Http\Controllers\Enneagram\PutEnneagramQuestionController;
use App\Http\Controllers\Exam\GetExamController;
use App\Http\Controllers\Exam\PostExamController;
use App\Http\Controllers\MBTI\GetEditMBTIQuestionController;
use App\Http\Controllers\MBTI\PutMBTIQuestionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Ranking\GetSeekerRankingController;
use App\Http\Controllers\Seeker\GetEditSeekerController;
use App\Http\Controllers\Seeker\GetSeekersController;
use App\Http\Controllers\Seeker\PutSeekerController;
use App\Http\Controllers\User\UserDeleteController;
use App\Http\Controllers\User\GetEditUserController;
use App\Http\Controllers\User\UserGetListController;
use App\Http\Controllers\User\PutUserController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});
Route::get('/token',function(){
    return csrf_token();
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
