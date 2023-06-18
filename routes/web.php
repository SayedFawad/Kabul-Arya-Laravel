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

Route::get('/', 'EmployeeController@home');



Route::get('/coverage', function(){
	return view('kabularyaFolder.coverage');
});


Route::post('/infoPage','EmployeeController@index');
Route::get('/infoPage','EmployeeController@check');
Route::get('/logout','EmployeeController@sessionOut');
Route::get('/newPage','EmployeeController@newEmployee');
Route::post('/save','EmployeeController@save');
Route::get('/editPage&{id}','EmployeeController@edit');
Route::post('/update&{id}','EmployeeController@update');
Route::get('/delete&{id}','EmployeeController@delete');





Route::post('/managePage','EmployeeController@manageC');

//main admin section
Route::get('/main_admin','EmployeeController@check_admin');
Route::get('/edit_main&{id}','EmployeeController@edit_main');
Route::post('/update_main&{id}','EmployeeController@update_main');
Route::get('/delete_main&{id}','EmployeeController@delete_main');
Route::get('/insert_main','EmployeeController@insert_main');
Route::post('/save_main','EmployeeController@save_main');

//accounting database
//Account Creation:
Route::get('/account','EmployeeController@check_account');
Route::get('/insert_account','EmployeeController@insert_account');
Route::post('/save_account','EmployeeController@save_account');
Route::get('/edit_account&{ID}','EmployeeController@edit_account');
Route::post('/update_account&{ID}','EmployeeController@update_account');
Route::get('/delete_account&{ID}','EmployeeController@delete_account');

//Pomade Received Money:
Route::get('/money_received','EmployeeController@check_money_received');
Route::post('/money_received','EmployeeController@check_filter_money_received');
Route::get('/insert_money_received','EmployeeController@insert_money_received');
Route::post('/save_money_received','EmployeeController@save_money_received');
Route::get('/edit_money_received&{ID}','EmployeeController@edit_money_received');
Route::post('/update_money_received&{ID}','EmployeeController@update_money_received');
Route::get('/delete_money_received&{ID}','EmployeeController@delete_money_received');
Route::post('/completed&{ID}','EmployeeController@completedAccount');


//Sayed Moh Shah Pomade Account
Route::get('/sayed_moh_shah','EmployeeController@sayed_moh_shah');
Route::post('/completed_moh&{ID}','EmployeeController@completedMoh');
Route::post('/completed_moh_expenses&{ID}','EmployeeController@completedmoh_expenses');
Route::post('/save_said_moh_pomade','EmployeeController@save_said_moh_pomade');
Route::get('/all_pomade_sayed_moh_shah','EmployeeController@all_pomade_sayed_moh_shah');




//Customer Pomade Account
Route::post('/pomade_customer','EmployeeController@pomade_customer');
Route::get('/pomade_customer','EmployeeController@pomade_customer');
Route::post('/save_customer_pomade','EmployeeController@save_customer_pomade');
Route::get('/all_pomade_cs&{CID}','EmployeeController@all_pomade_cs');



//Pomade Expenses
Route::get('/expenses','EmployeeController@check_expenses');
Route::get('/insert_expenses','EmployeeController@insert_expenses');
Route::post('/save_expenses','EmployeeController@save_expenses');
Route::get('/edit_expenses&{ID}','EmployeeController@edit_expenses');
Route::post('/update_expenses&{ID}','EmployeeController@update_expenses');
Route::get('/delete_expenses&{ID}','EmployeeController@delete_expenses');

//Pomade Bill
Route::get('/bill','EmployeeController@check_bill');
Route::get('/insert_bill','EmployeeController@insert_bill');
Route::post('/save_bill','EmployeeController@save_bill');
Route::get('/edit_bill&{ID}','EmployeeController@edit_bill');
Route::post('/update_bill&{ID}','EmployeeController@update_bill');
Route::get('/delete_bill&{ID}','EmployeeController@delete_bill');
Route::post('/filter_bill','EmployeeController@filter_bill');
Route::get('/pomade_all_balance','EmployeeController@pomade_all_balance');




//Syrup Received Money:
Route::get('/money_received_syrup','EmployeeController@check_money_received_syrup');
Route::get('/insert_money_received_syrup','EmployeeController@insert_money_received_syrup');
Route::post('/save_money_received_syrup','EmployeeController@save_money_received_syrup');
Route::get('/edit_money_received_syrup&{ID}','EmployeeController@edit_money_received_syrup');
Route::post('/update_money_received_syrup&{ID}','EmployeeController@update_money_received_syrup');
Route::get('/delete_money_received_syrup&{ID}','EmployeeController@delete_money_received_syrup');


//Syrup Expenses
Route::get('/expenses_syrup','EmployeeController@check_expenses_syrup');
Route::get('/insert_expenses_syrup','EmployeeController@insert_expenses_syrup');
Route::post('/save_expenses_syrup','EmployeeController@save_expenses_syrup');
Route::get('/edit_expenses_syrup&{ID}','EmployeeController@edit_expenses_syrup');
Route::post('/update_expenses_syrup&{ID}','EmployeeController@update_expenses_syrup');
Route::get('/delete_expenses_syrup&{ID}','EmployeeController@delete_expenses_syrup');


//Syrup Bill
Route::get('/bill_syrup','EmployeeController@check_bill_syrup');
Route::get('/insert_bill_syrup','EmployeeController@insert_bill_syrup');
Route::post('/save_bill_syrup','EmployeeController@save_bill_syrup');
Route::get('/edit_bill_syrup&{ID}','EmployeeController@edit_bill_syrup');
Route::post('/update_bill_syrup&{ID}','EmployeeController@update_bill_syrup');
Route::get('/delete_bill_syrup&{ID}','EmployeeController@delete_bill_syrup');















//product admin section
Route::get('/product_admin','EmployeeController@check_product_admin');
Route::get('/edit_product&{id}','EmployeeController@edit_product');
Route::post('/update_product&{id}','EmployeeController@update_product');
Route::get('/delete_product&{id}','EmployeeController@delete_product');
Route::get('/insert_product','EmployeeController@insert_product');
Route::post('/save_product','EmployeeController@save_product');



//about admin section
Route::get('/about_admin','EmployeeController@check_about_admin');
Route::get('/edit_about&{id}','EmployeeController@edit_about');
Route::post('/update_about&{id}','EmployeeController@update_about');
Route::get('/delete_about&{id}','EmployeeController@delete_about');
Route::get('/insert_about','EmployeeController@insert_about');
Route::post('/save_about','EmployeeController@save_about');



Route::get('/managePage','EmployeeController@checkC');
Route::get('/product', 'EmployeeController@productC');
Route::get('/item&{id}','EmployeeController@itemC');
Route::get('/about', 'EmployeeController@aboutC');
Route::get('/contact','EmployeeController@contactC');
Route::post('/saved','EmployeeController@saveC');







Route::get('/login', function () {  
    return view('login');
});

Route::get('/insertForm', function () {
    return view('insertForm');
});



Route::post('insert', 'displayController@insert');


