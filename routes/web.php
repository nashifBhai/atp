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

  //Route::get('/login', 'LoginController@index');
	Route::get('/login', ['as'=>'login.index','uses'=>'LoginController@index']);
	Route::post('/login', ['uses'=>'LoginController@verify']);
	Route::get('/registration', 'RegistrationController@index')->name('registration.index');;
	Route::post('/regInsert', 'RegistrationController@insertReg');

	Route::get('/register', 'UserController@create');

Route::post('/register','UserController@store');

Route::get('/live_search', 'LiveSearch@index');
Route::get('/live_search/action', 'LiveSearch@action')->name('live_search.action');
Route::get('/dynamic_pdf', 'DynamicPDFController@index');

Route::get('/dynamic_pdf/pdf', 'DynamicPDFController@pdf');

Route::get('/export_excel', 'ExportExcelController@index');

Route::get('/export_excel/excel', 'ExportExcelController@excel')->name('export_excel.excel');



Route::group(['middleware'=>['sess']], function(){
      
	Route::get('/home', 'HomeController@index')->name('home.index');
	Route::get('/MyProfile', 'HomeController@MyProfile')->name('home.MyProfile');
	Route::get('ajax',function() {
   return view('message');
});
Route::post('/getmsg','AjaxController@index');

Route::get('/print','HomeController@print');
Route::get('/printview','HomeController@printview');
	
	Route::get('/updateUser{sid}', 'HomeController@updateUser')->name('home.updateUser');
	Route::post('/insertEdited{sid}', 'HomeController@insertEdited')->name('home.insertEdited');
	Route::get('/editEmployee{sid}', 'HomeController@editEmployee')->name('home.editEmployee');


	Route::get('/deleteEmployee/{sid}', 'HomeController@deleteEmployee');
    Route::post('/deleteEmployee/{sid}', 'HomeController@destroyEmployee');
	Route::get('/add', 'HomeController@add')->name('home.add');
	Route::post('/addService', 'HomeController@addService')->name('home.addService');
	

	Route::get('/worklist', 'HomeController@getRegistered')->name('home.getRegistered');

	Route::get('/RegWorklist', 'HomeController@RegWorklist')->name('home.RegWorklist');
	Route::get('/RegWorklist', 'HomeController@ShowRegWorklist')->name('home.RegWorklist');
	Route::get('/getReg{sid}', 'HomeController@getReg')->name('home.getReg');

	Route::get('/empWork', 'HomeController@empWork')->name('home.empWork');
	Route::get('/customer_hire', 'HomeController@customerHire')->name('home.customer_hire');
	

	Route::get('/forgettable', 'HomeController@ShowForgetPassword')->name('home.forgettable');
	Route::get('/forgettableupdate{sid}', 'HomeController@UpdateForgetPassword')->name('home.forgettableupdate');
	
	Route::get('/salary_status', 'HomeController@showEmployeeSalary')->name('home.salary_status');
	Route::get('/salary_status_update{sid}', 'HomeController@UpdateEmployeeSalary')->name('home.salary_status_update');

	Route::get('/show_ratings_emp', 'HomeController@showRatingsEmp')->name('home.show_ratings_emp');
	Route::get('/show_ratings_customer', 'HomeController@showRatingsCustomer')->name('home.show_ratings_customer');
//Report Staus Show Employee
	Route::get('/report_status_emp', 'HomeController@showReportEmp')->name('home.report_status_emp');
//Report Staus Show Customer
	Route::get('/report_status_customer', 'HomeController@showReportCustomer')->name('home.report_status_customer');

//Report Staus Employee temp	
	Route::get('/report_status_update_temp_emp{sid}', 'HomeController@UpdateReportTempEmp')->name('home.report_status_update_temp_emp');
//Report Staus Employee Par
	Route::get('/report_status_update_par_emp{sid}', 'HomeController@UpdateReportParEmp')->name('home.report_status_update_par_emp');
//Report Staus Customer Temp
	Route::get('/report_status_update_temp_customer{sid}', 'HomeController@UpdateReportTempCustomer')->name('home.report_status_update_temp_customer');
//Report Staus Customer Par
	Route::get('/report_status_update_par_customer{sid}', 'HomeController@UpdateReportParCustomer')->name('home.report_status_update_par_customer');


	Route::get('/UpdateCompleteOrd{sid}', 'HomeController@UpdateCompleteOrd')->name('home.UpdateCompleteOrd');
	
	Route::get('/cancleOrder', 'HomeController@cancleOrd')->name('home.cancleOrder');
	Route::get('/cancleOrder', 'HomeController@ShowCancleOrd')->name('home.cancleOrder');
	Route::get('/UpdateCancleOrd{sid}', 'HomeController@UpdateCancleOrd')->name('home.UpdateCancleOrd');
	Route::get('/editProfile{sid}', 'HomeController@editProfile')->name('home.editProfile');

	Route::get('/show_emp_list', 'HomeController@showEmp')->name('home.show_emp_list');
	Route::get('/show_customer_list', 'HomeController@showCustomer')->name('home.show_customer_list');

	Route::get('/earning', 'HomeController@showEarn')->name('home.showEarn');
	Route::get('/employeelist', 'HomeController@showEmployee')->name('home.showEmployee');
	Route::post('/btnPress', 'HomeController@withdraw')->name('home.withdraw');
	Route::get('/earning', 'HomeController@earning')->name('home.earning');
	
	Route::get('/logout', 'LogoutController@index');
		
	});