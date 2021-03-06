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


Route::get('/', function () {
    return view('admin.franchisee.franchiseeOwn-login');
});
*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


                                                      //admin profile
Route::get('profile', 'HomeController@profile')->name('profile');
                                                      //Staff Area

Route::get('stuff/Stuff-form',[
    'uses' => 'StuffController@stuffForm',
    'as'  => 'stuff-form',
    'middleware' => 'AuthMiddleware'
]);


Route::post('stuff/Stuff-added',[
    'uses' => 'StuffController@stuffAdd',
    'as'  => 'add-stuff'


]);

Route::get('stuff/Stuff-manage',[
    'uses' => 'StuffController@ManageStuff',
    'as'  => 'manage-stuff',
    'middleware' => 'AuthMiddleware'

]);

Route::get('/stuff/edit/{id}', [
    'uses'  =>  'StuffController@editStuffinfo',
    'as'    =>  'edit-stuff'
]);

Route::post('/stuff/update', [
    'uses'  =>  'StuffController@updateStuffinfo',
    'as'    =>  'update-stuff'
]);
Route::get('/stuff/delete/{id}', [
    'uses'  =>  'StuffController@deleteStuffinfo',
    'as'    =>  'delete-stuff'
]);



                                               //Franchisee Area



Route::get('franchisee/franchisee-form',[
    'uses' => 'FranchiseeController@FranchiseeForm',
    'as'  => 'franchisee-form'
]);


Route::post('stuff/franchisee-added',[
    'uses' => 'FranchiseeController@franchiseeAdd',
    'as'  => 'add-franchisee'
]);


Route::get('stuff/franchisee-loginInfo',[
    'uses' => 'FranchiseeController@franchiseeAddLogininfo',
    'as'  => 'add-franchiseeLogininfo'
]);

Route::post('stuff/franchisee-loginInfoAdd',[
    'uses' => 'FranchiseeController@franchiseeloginInfoadd',
    'as'  => 'add-franchiseeLoginInfo'
]);



Route::get('stuff/slot-assign',[
    'uses' => 'FranchiseeController@AssignSlot',
    'as'  => 'slot-assign'
]);




Route::get('stuff/franchisee-manage',[
    'uses' => 'FranchiseeController@ManageFranchisee',
    'as'  => 'manage-franchisee'
]);

Route::get('/franchisee/edit/{id}', [
    'uses'  =>  'FranchiseeController@editFranchiseeinfo',
    'as'    =>  'edit-franchisee'
]);


Route::post('/franchisee/update', [
    'uses'  =>  'FranchiseeController@updateFranchiseeinfo',
    'as'    =>  'update-franchisee'
]);

Route::get('/franchisee/delete/{id}', [
    'uses'  =>  'FranchiseeController@deleteFranchiseeinfo',
    'as'    =>  'delete-franchisee'
]);

Route::get('franchisee/slot',[
    'uses' => 'FranchiseeController@SlotView',
    'as'  => 'slot-view'
]);

Route::post('franchisee/slot/save',[
    'uses' => 'FranchiseeController@SlotSave',
    'as'  => 'slot-save'
]);

Route::get('franchisee/slot/manage',[
    'uses' => 'FranchiseeController@SlotManage',
    'as'  => 'slot-manage'
]);

Route::get('/franchisee/delete/slot/{id}', [
    'uses'  =>  'FranchiseeController@deleteSlotinfo',
    'as'    =>  'delete-slot'
]);

                                                         //Franchisee Login Area


Route::get('/',[
    'uses' => 'FranchiseeController@FranchiseeLoginform',
    'as'  => 'franchisee-loginform'
]);


Route::post('franchisee/franchisee-LogIn',[
    'uses' => 'FranchiseeController@franchiseeLogInAdd',
    'as'  => 'franchisee-LogInOwn'
]);


Route::get('franchisee/info',[
    'uses' => 'FranchiseeController@FranchiseeOwnLoginInfo',
    'as'  => 'franchisee-ownloginInfo'
]);




Route::get('franchisee/user-profile',[
    'uses' => 'FranchiseeController@FranchiseeUserDetailInfo',
    'as'  => 'user-profile'
]);

Route::post('franchisee/franchisee-Logout',[
    'uses' => 'FranchiseeController@franchiseeLogout',
    'as'  => 'fra-logout'
]);



Route::get('franchisee/LoginManage',[
    'uses' => 'FranchiseeController@FranchiseeLoginManage',
    'as'  => 'manage-franchiseeLogin'
]);

Route::get('franchisee/LoginEdit/{id}',[
    'uses' => 'FranchiseeController@FranchiseeLoginEdit',
    'as'  => 'edit-franchiseeLoginInfo'
]);

Route::post('/franchisee-logIn/update', [
    'uses'  =>  'FranchiseeController@updateFranchiseeLogininfo',
    'as'    =>  'update-franchiseeLoginInfo'
]);


Route::get('franchisee/LoginDelete/{id}',[
    'uses' => 'FranchiseeController@FranchiseeLoginDelete',
    'as'  => 'delete-franchiseeLoginInfo'
]);

                                                      //Franchisee Work Area

Route::get('franchisee/Work',[
    'uses' => 'FranchiseeController@FranchiseeWork',
    'as'  => 'franchisee-work'
]);

Route::post('franchisee/Work-save',[
    'uses' => 'FranchiseeController@FranchiseeWorkSave',
    'as'  => 'franchisee-workSave'
]);

Route::get('franchisee/Work-manage',[
    'uses' => 'FranchiseeController@FranchiseeWorkShow',
    'as'  => 'show-franchiseeWork'
]);

Route::get('franchisee/Work-Done',[
    'uses' => 'FranchiseeController@FranchiseeWorkDoneList',
    'as'  => 'franchisee-workedDoneList'
]);



                                                       //Guest Area




Route::get('guest/form',[
    'uses' => 'GuestController@GuestForm',
    'as'  => 'guest-form'
]);


Route::post('guest/save',[
    'uses' => 'GuestController@GuestSave',
    'as'  => 'save-guest'
]);


Route::get('guest/manage',[
    'uses' => 'GuestController@GuestManage',
    'as'  => 'manage-guest'
]);

Route::get('guest/edit/{id}',[
    'uses' => 'GuestController@GuestEdit',
    'as'  => 'edit-guest'
]);


Route::post('/guest/update', [
    'uses'  =>  'GuestController@updateGuestinfo',
    'as'    =>  'update-guest'
]);


Route::get('/guest/delete/{id}', [
    'uses'  =>  'GuestController@deleteGuestinfo',
    'as'    =>  'delete-guest'
]);





                                                             //Order Area




Route::get('order/form',[
    'uses' => 'OrderController@OrderForm',
    'as'  => 'add-order'
]);

Route::post('order/save',[
    'uses' => 'OrderController@OrderSave',
    'as'  => 'save-order'
]);

Route::get('order/manage',[
    'uses' => 'OrderController@OrderManage',
    'as'  => 'manage-order'
]);

Route::get('order/edit/{id}',[
    'uses' => 'OrderController@OrderEdit',
    'as'  => 'edit-order'
]);


Route::post('order/update',[
    'uses' => 'OrderController@OrderUpdate',
    'as'  => 'update-order'
]);


Route::get('order/delete/{id}',[
    'uses' => 'OrderController@OrderDelete',
    'as'  => 'delete-order'
]);

Route::get('download/Order-Pdf',[
    'uses' => 'OrderController@OrderDownload',
    'as'  => 'download-order'
]);


                                                   // Receptionist Area

Route::get('receptionist/login-form',[
    'uses' => 'ReceptionController@RecptionistLoginForm',
    'as'  => 'receptionistLogin-form'

]);


Route::post('receptionist/receptionist-LogIn',[
    'uses' => 'ReceptionController@receptionistLogInAdd',
    'as'  => 'receptionist-logincheck'
]);

Route::get('receptionist/home',[
    'uses' => 'ReceptionController@RecptionistHomePage',
    'as'  => 'receptionistHome-page',
    'middleware' => 'ReceptionistMiddleware'
]);

Route::post('receptionist/receptionist-add',[
    'uses' => 'ReceptionController@addguestReception',
    'as'  => 'save-guestByReceptionist'
]);



Route::get('receptionist/login-form',[
    'uses' => 'ReceptionController@RecptionistLoginForm',
    'as'  => 'receptionistLogin-form'
]);

Route::post('receptionist/receptionist-LogIn',[
    'uses' => 'ReceptionController@receptionistLogInAdd',
    'as'  => 'receptionist-logincheck'
]);

Route::get('receptionist/home',[
    'uses' => 'ReceptionController@RecptionistHomePage',
    'as'  => 'receptionistHome-page'
]);

Route::post('receptionist/receptionist-add',[
    'uses' => 'ReceptionController@addguestReception',
    'as'  => 'save-guestByReceptionist'
]);

Route::get('receptionist/visitor-list',[
    'uses' => 'ReceptionController@RecptionistVisitorList',
    'as'  => 'show-visitor'
]);


                                                    // Staff who added only Franchisee

Route::get('staff/franchisee-HomePage',[
    'uses' => 'OnlyFranchisee@OnlyFranchiseeadd',
    'as'  => 'franchisee-addbyStuff'
]);


Route::get('staff/franchisee-LoginArea',[
    'uses' => 'OnlyFranchisee@OnlyFranchiseeaddLogin',
    'as'  => 'franchisee-addbyStuffLogin'
]);

Route::post('staff/staffWhoaddedfranchisee-LogIn',[
    'uses' => 'OnlyFranchisee@staffLogInAddcheck',
    'as'  => 'staffFranchisee-logincheck'
]);


Route::post('staff/staffWhoaddedfranchisee-save',[
    'uses' => 'OnlyFranchisee@staffOnlyFranchiseesdd',
    'as'  => 'add-franchiseeByStaff'
]);


Route::get('staff/franchisee-ShowList',[
    'uses' => 'OnlyFranchisee@OnlyFranchiseeShow',
    'as'  => 'franchisee-listShow'
]);
