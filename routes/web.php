<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/welcome', function () { return view('welcome'); });

Route::get('/', function () { return view('auth.login'); });




//['verify' => true]
Auth::routes(['verify' => true]);



Route::group(['prefix' => '/' , 'namespace' => 'Auth'], function () {

    Route::get('/register_partner', function () { return view('auth.register_partner'); });

    Route::post('/add_partner', 'RegisterController@createFake')->name('user.add_partner');

    Route::group(['prefix' => 'passwords'], function () {

        Route::get('/forgot', 'ForgotPasswordController@index')->name('password.forgot');

    });

});

//'middleware' => 'verified'
Route::group(['prefix' => '/'  , 'middleware' => 'verified'  ], function () {

    Route::get('/', 'HomeController@index')->name('dashboard');

    Route::post('/intro-mail', 'HomeController@intro_mail')->name('send.intro.mail');

    Route::get('/register/{token}', 'Auth\RegisterController@register_client')->name('client.register');


    Route::group(['prefix' => 'users'  ], function () {

        Route::post('/add', 'UserController@create')->name('user.add');

        Route::get('/', 'UserController@index')->name('users');

        Route::get('/{id}', 'UserController@show')->name('user.show');

        Route::post('/update', 'UserController@live_update')->name('user.live.update');

        Route::post('/AgreeToTerms', 'UserController@agreeToTerms')->name('user.terms.agree');

        Route::post('/AgreeToFirstLoginTerms', 'UserController@agreeToFirstLoginTerms')->name('user.first_login_terms.agree');

        Route::post('/updateFirstLogin', 'UserController@updateFirstLogin')->name('user.update_first_login');

        Route::get('/delete/{id}', 'UserController@delete')->name('user.delete');

    });

    Route::group(['prefix' => 'usersfiles'], function () {

        Route::post('/attach', 'UserFileTypesController@create')->name('file.user.attach');

    });

    Route::group(['prefix' => 'payment'], function () {

        Route::post('/', 'PaymentController@store')->name('payment.store');

        Route::get('/doc_download/{path}', 'PaymentController@doc_download')->name('payment.doc_download');

        Route::get('/doc_delete/{id}', 'PaymentController@doc_delete')->name('payment.doc_delete');

    });

    Route::group(['prefix' => 'profile'], function () {

        Route::get('/', 'UserController@profile')->name('profile');

        Route::post('/', 'UserController@update')->name('update.user.info');

        Route::post('/update_password', 'UserController@update_password')->name('update.user.password');

    });

    Route::group(['prefix' => 'knowledge_base'], function () {

        Route::get('/', 'KnowledgeBaseController@index')->name('knowledge_base');

        Route::post('/add', 'KnowledgeBaseController@store')->name('knowledge_base.add');

    });

    Route::group(['prefix' => 'messages'], function () {

        Route::get('/', 'MessagesController@index')->name('messages');

        Route::post('/send', 'MessagesController@store')->name('message.send');

        Route::get('/sent', 'MessagesController@sent')->name('messages.sent');

        Route::post('/mark_as_read', 'MessagesController@mark_as_read')->name('mark_as_read');

    });

    Route::group(['prefix' => 'file'], function () {

        Route::get('/{id}', 'FilesController@show')->name('file.show');

        Route::post('/update', 'FilesController@update')->name('file.update');

        Route::post('/updateFirm', 'FilesController@updateFirm')->name('file.update.deal_firm');

        Route::post('/sectionSubmitted', 'FilesController@sectionSubmitted')->name('file.submit_section');

        Route::post('/updateName/{id}', 'FilesController@updateName')->name('file.update.name');

        Route::post('/update_progress', 'FilesController@update_progress')->name('file.progress.update'); // unused

        Route::get('download/{path}', 'FilesController@download')->name('file.download');

        Route::post('/create', 'FilesController@create')->name('file.create');

        Route::get('/generate_file_audit/{id}', 'FilesController@generateFileAudit')->name('file.generate.audit');

        Route::get('/showClosing/{id}', 'FilesController@showClosing')->name('closing.show');

        Route::get('/showSigning/{id}', 'FilesController@showSigning')->name('signing.show');

        Route::get('delete/{id}', 'FilesController@delete')->name('file.delete');

    });

    Route::group(['prefix' => 'seller'], function () {

        Route::post('/store', 'SellersController@store')->name('seller.store');

        Route::get('/delete/{id}', 'SellersController@delete')->name('seller.delete');

    });

    Route::group(['prefix' => 'co_owner'], function () {

        Route::post('/store', 'CoOwnersController@store')->name('cowner.store');

        Route::post('/delete', 'CoOwnersController@delete')->name('cowner.delete');

    });

    Route::group(['prefix' => 'lawyer'], function () {

        Route::post('/store', 'LawyersController@store')->name('lawyer.store');

        Route::get('/delete/{id}', 'LawyersController@delete')->name('lawyer.delete');

    });

    Route::group(['prefix' => 'buyer'], function () {

        Route::post('/store', 'BuyersController@store')->name('buyer.store');

        Route::get('/delete/{id}', 'BuyersController@delete')->name('buyer.delete');

    });

    Route::group(['prefix' => 'property'], function () {

        Route::post('/store', 'PropsController@store')->name('property.store');

    });

    Route::group(['prefix' => 'purchase_file'], function () {

        Route::post('/store', 'PurchaseFileDetailsController@store')->name('purchase.store');


        Route::get('/delete/{id}', 'PurchaseFileDetailsController@delete')->name('purchase.doc_delete');

        Route::get('/download/{path}', 'PurchaseFileDetailsController@download')->name('purchase.doc_download');

    });

    Route::group(['prefix' => 'file_information'], function () {

        Route::post('/store', 'FileInformationController@store')->name('file.information.store');

        Route::post('/create', 'FileInformationController@create')->name('file.information.create');

    });

    Route::group(['prefix' => 'AddressService'], function () {

        Route::post('/store', 'ServiceAddressController@store')->name('service.address.store');

    });

    Route::group(['prefix' => 'realtor'], function () {

        Route::post('/store', 'RealtorsController@store')->name('realtor.store');

        Route::get('/delete/{id}', 'RealtorsController@delete')->name('realtor.delete');

    });

    Route::group(['prefix' => 'taxes'], function () {

        Route::post('/store', 'PropTaxController@store')->name('taxes.store');

        Route::get('/bill_download/{path}', 'PropTaxController@bill_download')->name('taxes.bill_download');

        Route::get('/bill_delete/{id}', 'PropTaxController@bill_delete')->name('taxes.bill_delete');

    });

    Route::group(['prefix' => 'id_information'], function () {

        Route::post('/store', 'GovIDController@store')->name('id.store');

        Route::get('/download/{path}', 'GovIDController@download')->name('id.download');

        Route::get('/delete/{id}', 'GovIDController@delete')->name('id.delete');

        Route::get('/delete_one/{id}', 'GovIDController@deleteone')->name('id.deleteone');

        Route::get('/delete_two/{id}', 'GovIDController@deletetwo')->name('id.deletetwo');

        Route::get('/delete_three/{id}', 'GovIDController@deletethree')->name('id.deletethree');

        Route::get('/delete_four/{id}', 'GovIDController@deletefour')->name('id.deletefour');

    });

    Route::group(['prefix' => 'deliver_keys'], function () {

        Route::post('/store', 'DeliveryKeyController@store')->name('key.store');

    });

    Route::group(['prefix' => 'appointment_info'], function () {

        Route::post('/store', 'AppointmentsController@store')->name('app.store');

    });

    Route::group(['prefix' => 'finance_info'], function () {

        Route::post('/store', 'FinancesController@store')->name('finance.store');

    });

    Route::group(['prefix' => 'payment_info'], function () {

        Route::post('/store', 'PaymentController@store')->name('payment.store');

        Route::get('/delete/{id}', 'PaymentController@delete')->name('payment.delete');

    });

    Route::group(['prefix' => 'depoites_info'], function () {

        Route::post('/store', 'DepositeSaleController@store')->name('deposit.store');

        Route::get('/check_download/{path}', 'DepositeSaleController@check_download')->name('deposit.check_download');

        Route::get('/check_delete/{id}', 'DepositeSaleController@check_delete')->name('deposit.check_delete');

    });

    Route::group(['prefix' => 'discharge_info'], function () {

        Route::post('/store', 'DischargesController@store')->name('discharge.store');

        Route::get('/delete', 'DischargesController@delete')->name('discharge.delete');

    });

    Route::group(['prefix' => 'mortgage_info'], function () {

        Route::post('/store', 'MortgagesController@store')->name('mortgage.store');

        Route::get('/delete/{id}', 'MortgagesController@delete_mort')->name('mortgage.delete');

        Route::get('/delete_agreement/{id}', 'MortgagesController@delete')->name('mortgage.agreement_delete');

        Route::get('/download/{path}', 'MortgagesController@download')->name('mortgage.agreement_download');

    });

    Route::group(['prefix' => 'bridge_loan_info'], function () {

        Route::post('/store', 'BridgeLoanController@store')->name('brloan.store');

        Route::get('/delete/{id}', 'BridgeLoanController@delete_mort')->name('brloan.delete');

        Route::get('/delete_agreement/{id}', 'BridgeLoanController@delete')->name('brloan.agreement_delete');

        Route::get('/download/{path}', 'BridgeLoanController@download')->name('brloan.agreement_download');

    });

    Route::group(['prefix' => 'fire_insurance'], function () {

        Route::post('/store', 'FireInsuranceController@store')->name('insurance.store');

    });

    Route::group(['prefix' => 'fireinsurance_information'], function () {

        Route::post('/store', 'LendersController@store')->name('lender.store');

    });

    Route::group(['prefix' => 'payout_information'], function () {

        Route::post('/store', 'PayoutsController@store')->name('payout.store');

    });

    Route::group(['prefix' => 'payment_in_information'], function () {

        Route::post('/store', 'PaymentINController@store')->name('payment_in.store');

    });

    Route::group(['prefix' => 'mortgages_information'], function () {

        Route::post('/store', 'MortgageInformationController@store')->name('mort.info.store');

    });

    Route::group(['prefix' => 'Posts'], function () {

        Route::post('/create', 'PostsController@create')->name('post.create');

        Route::get('/delete{id}', 'PostsController@delete')->name('post.delete');

    });

    Route::group(['prefix' => 'Comments'], function () {

        Route::post('/create', 'CommentsController@create')->name('comment.create');

        Route::get('/delete{id}', 'CommentsController@delete')->name('comment.delete');

    });

    Route::group(['prefix' => 'Tasks'], function () {

        Route::post('/create', 'TasksController@create')->name('task.create');

        Route::post('/check', 'TasksController@check')->name('task.check');

        Route::post('/uncheck', 'TasksController@uncheck')->name('task.uncheck');

    });

    Route::group(['prefix' => 'FileDocuments'], function () {

        Route::post('/create', 'FileDocumentsController@create')->name('filedoc.create');

        Route::post('/update/{id}', 'FileDocumentsController@update')->name('filedoc.update');

        Route::post('/updateWithFile/{id}', 'FileDocumentsController@updateWithFile')->name('filedoc.updatefile');

        Route::post('/updateWithFileTwo/{id}', 'FileDocumentsController@updateWithFileTwo')->name('filedoc.updatefileTwo');

        Route::get('/delete/{id}', 'FileDocumentsController@delete')->name('filedoc.delete');

        Route::get('/delete_two/{id}', 'FileDocumentsController@delete_two')->name('filedoc.delete_two');

        Route::get('/download/{path}', 'FileDocumentsController@download')->name('filedoc.download');


    });


});