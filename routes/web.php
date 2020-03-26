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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('welcome');
});
//

Route::get('pds/{param?}/{id?}','EmployeesController@pds');
Route::get('view/sheet1/{id?}','EmployeesController@show');
Route::get('edit/sheet1/{id?}','EmployeesController@edit');


Route::get('view/sheet2/{id?}','EligibilitiesController@show');
Route::get('edit/sheet2/{id?}','EligibilitiesController@edit');

Route::get('view/sheet3/{id?}','VoluntariesController@show');
Route::get('edit/sheet3/{id?}','VoluntariesController@edit');

Route::get('view/sheet4/{id?}','QuestionsController@show');
Route::get('edit/sheet4/{id?}','QuestionsController@edit');

Route::get('sheet2/workExp2/{id?}', 'BworkController@edit');
Route::post('/addemployeeworkexp2', 'BworkController@store');

Route::get('sheet3/training2/{id?}', 'BtrainingsController@edit');
Route::get('sheet3/training3/{id?}', 'CtrainingsController@edit');
Route::get('sheet3/trainingpage2/{id?}', 'BtrainingsController@show');
Route::get('sheet3/trainingpage3/{id?}', 'CtrainingsController@show');

/*Route::get('pds/edit/{id?}','EmployeesController@pdsEdit');
Route::get('pds/edit/{id?}','EmployeesController@pdsEdit');*/

Route::get('/signup', 'FimsDashboardController@signup');
Route::get('/accountcategories', 'AccountcategoriesController@index');
Route::post('/addaccountcategory', 'AccountcategoriesController@store');
Route::any('/updateaccountcategory', 'AccountcategoriesController@update');
Route::get('/accountnames', 'AccountnamesController@index');
Route::post('/addaccountname', 'AccountnamesController@store');
Route::any('/updateaccountname', 'AccountnamesController@update');
Route::get('/dashboard', 'FimsDashboardController@dashboard');
Route::get('/members', 'MembersController@index');
Route::post('/addmember', 'MembersController@store');
Route::any('/updatemember', 'MembersController@update');
Route::get('/getMemberDetails', 'MembersController@show');
Route::get('/getLoanDetails', 'LoansController@showloandetails');
Route::get('/getAmortizationAmount', 'LoansController@getamortizationamount');
Route::get('/getRBC', 'LoansController@getRBCamount');
Route::post('/addpayment', 'PaymentsController@store');
Route::get('/show-paymentreceived/{period}', 'PaymentsController@showpaymentreceived');
Route::get('/compareMemberId', 'MembersController@compareID');
Route::get('/employees', 'EmployeesController@index');
Route::get('/compareEmployeeID', 'EmployeesController@compareID');

Route::post('/addemployee', 'EmployeesController@store');
Route::post('/updateEmployee', 'EmployeesController@update');

Route::post('/savePDS2', 'EligibilitiesController@store');
Route::post('/updatePDS2', 'EligibilitiesController@update');

Route::post('/addemployeeworkexp', 'WorksController@store');
Route::post('/updateEmpWorkExp', 'WorksController@update');

Route::post('/addemployeevolwork', 'VoluntariesController@store');
Route::post('/updateEmpVolWork', 'VoluntariesController@update');

Route::post('/addemployeetraining', 'TrainingsController@store');
Route::post('/updateEmpTraining', 'TrainingsController@update');

Route::post('/addemployeeBtraining', 'BtrainingsController@store');
Route::post('/updateEmpBTraining', 'BtrainingsController@update');

Route::post('/addemployeeCtraining', 'CtrainingsController@store');
Route::post('/updateEmpCTraining', 'CtrainingsController@update');

Route::post('/addemployeeothers', 'OthersController@store');
Route::post('/updateEmpOthers', 'OthersController@update');

Route::post('/savesheet4', 'QuestionsController@store');
Route::post('/updateSheet4', 'QuestionsController@update');

Route::any('/updateEmployee', 'EmployeesController@update');
Route::get('/loans', 'LoansController@index');
Route::post('/addloan', 'LoansController@store');
Route::any('/updateloan', 'LoansController@update');
Route::any('/updateLoanApprovalStatus', 'LoansController@updateApprovalStatus');
Route::get('/show-loanreleases/{period}', 'LoansController@showloanreleases');
Route::post('/searchloan', 'LoansController@showloanledger');
Route::get('/getStartSchedule', 'LoansController@getstartsched');
Route::get('/bills', 'BillsController@index');
Route::get('/inactivebills', 'BillsController@inactivebills');
Route::post('/addbill', 'BillsController@store');
Route::get('/show-bill/{id}', 'BillsController@show');
Route::get('/show-payment/{id}', 'PaymentsController@show');
Route::get('/exportBillDetails/{id?}', 'BillsController@exportBillDetails');
Route::get('/users', 'UsersController@index');
Route::any('/updateuser', 'UsersController@update');
Route::get('/positions', 'PositionsController@index');
Route::post('/addposition', 'PositionsController@store');
Route::any('/updateposition', 'PositionsController@update');
Route::get('/divisions', 'DivisionsController@index');
Route::post('/adddivision', 'DivisionsController@store');
Route::any('/updatedivision', 'DivisionsController@update');
Route::get('/particulars', 'ParticularsController@index');
Route::post('/addparticular', 'ParticularsController@store');
Route::any('/updateparticular', 'ParticularsController@update');
Route::get('/show-amortization/{id}', 'LoansController@show');
Route::post('/addamortization', 'LoansController@addschedule');
Route::post('/addamortbusinessloan', 'LoansController@addschedBloan');
Route::get('/export', 'UsersController@export');
Route::get('/exportLoanDetails/{id?}', 'LoansController@exportLoanDetails');
Route::get('/payments', 'PaymentsController@index');
Route::get('/productservices', 'ProductservicesController@index');
Route::post('/addproductservice', 'ProductservicesController@store');
Route::any('/updateproductservice', 'ProductservicesController@update');
Route::any('/updatestatus', 'VouchersController@updatestatus');
Route::get('/vouchers', 'VouchersController@index');
Route::post('/addjournalvoucher', 'VouchersController@store');
Route::any('/updatejournalvoucher', 'VouchersController@update');
Route::get('/show-summary/{id}', 'VouchersController@show');
Route::get('/payees', 'PayeesController@index');
Route::post('/addpayee', 'PayeesController@store');
Route::any('/updatepayee', 'PayeesController@update');
Route::get('/getpayee', 'PayeesController@getpayee');


Auth::routes();
Route::get('/index', 'FimsDashboardController@index');
/*Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});*/
