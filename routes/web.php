<?php

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



Route::get('/payment', function () {
    return view('payment-form');
});

//Payments Routes ----------------------------------------------------------
Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay');

Route::get('/payment/callback', 'PaymentController@handleGatewayCallback');




//Pages Routes --------------------------------------------

Route::get('/donate', function () {
    //return 3;
    return view('pages.donate');
});
//Unit tests
Route::get('/units', 'QuestionsController@index');
Route::get('/units/start_activity', 'QuestionsController@start');
Route::get('/units/{section}/section', 'QuestionsController@activity');

Route::get('/units/{link}/{no}/answer', 'QuestionsController@show_single');
Route::post('/units/verify_pwd', 'QuestionsController@verify_pwd')->name('activity.start');
Route::post('/store_answers',[App\Http\Controllers\QuestionsController::class, 'store'])->name('mcq.store');
Route::get('/time_left/{time}',[App\Http\Controllers\QuestionsController::class, 'time_left']);


//Unit tests
Route::get('/{page}/pause-and-pray', 'PagesController@show');
Route::get('/{page}/pastors-appreciation', 'PagesController@show');
Route::get('/{page}/memorial-gifts', 'PagesController@show');
Route::get('/{page}/mission-medalist', 'PagesController@show');
Route::get('/{page}/membership', 'PagesController@show');
Route::get('/{page}/donate', 'PagesController@show');
Route::get('/{page}/statements', 'PagesController@show');
Route::get('/{page}/missions', 'PagesController@show');
Route::get('/{page}/programs', 'PagesController@show');
Route::get('/{page}/board-members', 'PagesController@show');
Route::get('/', 'PagesController@show');

Route::get('/example', function () {
    //return 3;
    return view('home2');
});





Route::get('/programs', function () {
    //return 3;
    return view('pages.programs');
});

Route::get('/pastors-appreciation', function () {
    //return 3;
    return view('pages.pastors-appreciation');
});

Route::get('/mission', function () {
    //return 3;
    return view('pages.mission');
});

Route::get('/statements', function () {
    //return 3;
    return view('pages.statements');
});

Route::get('/board-members', function () {
    //return 3;
    return view('pages.members');
});

Route::get('/membership', function () {
    //return 3;
    return view('pages.membership');
});

Route::get('/contact-us', function () {
    //return 3;
    return view('pages.contact');
});
// Messages Controller
Route::post('/write-message',[App\Http\Controllers\MessagesController::class, 'store']);
Route::get('/messages',[App\Http\Controllers\MessagesController::class, 'index']);
Route::get('/{message}/show',[App\Http\Controllers\MessagesController::class, 'show']);//correct show to member l8r

// Members Controller
Route::get('/becomeamember',[App\Http\Controllers\MembersController::class, 'create']);
Route::get('/{member}/edit',[App\Http\Controllers\MembersController::class, 'edit']);
Route::post('/store-member',[App\Http\Controllers\MembersController::class, 'store']);
Route::put('/{member}/update-member',[App\Http\Controllers\MembersController::class, 'update']);
Route::get('/{member}/member',[App\Http\Controllers\MembersController::class, 'show']);
Route::get('/members',[App\Http\Controllers\MembersController::class, 'index']);
Route::post('/member/verification',[App\Http\Controllers\MembersController::class, 'verification']);

//Form Controller for donations - that redirect to paystack ready made pages
Route::get('/donate/pause-and-pray',[App\Http\Controllers\FormsController::class, 'pp']);
Route::get('/donate/memorial-gifts',[App\Http\Controllers\FormsController::class, 'mg']);
Route::get('/donate/pastors-appreciation',[App\Http\Controllers\FormsController::class, 'pa']);
Route::get('/donate/{package}/mission-medalist',[App\Http\Controllers\FormsController::class, 'mm']);


//Donations Controller this will handle keeping records of all the donations
Route::post('/store',[App\Http\Controllers\DonationsController::class, 'store']);

//PPVolunteersControllers
Route::get('/be-a-prayer-warrior',[App\Http\Controllers\PPVolunteersController::class, 'create']);
Route::post('/store-a-prayer-warrior',[App\Http\Controllers\PPVolunteersController::class, 'store']);
Route::get('/{id}/ppvolunteer',[App\Http\Controllers\PPVolunteersController::class, 'show']);
Route::get('/{id}/edit-ppvolunteer',[App\Http\Controllers\PPVolunteersController::class, 'edit']);
Route::get('/ppvolunteers',[App\Http\Controllers\PPVolunteersController::class, 'index']);
Route::post('/verification/ppvolunteer',[App\Http\Controllers\PPVolunteersController::class, 'verification']);

//Mails Controller
Route::get('/send-email',[App\Http\Controllers\MailsController::class, 'sendMessage']);

//Team Members Controller
Route::resource('team-members',TeamMembersController::class);

//Pages Edit Controllers
//Pause-and-pray
Route::get('/{id}/page',[App\Http\Controllers\PagesController::class, 'edit']);
Route::put('/{page}/page_update',[App\Http\Controllers\PagesController::class, 'update'])->name('page.update');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
