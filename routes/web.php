<?php

use Illuminate\Support\Facades\Route;

Route::get('/',             ['as' => 'frontend.index',          'uses' => 'Frontend\IndexController@index']);
Route::post('/register',    ['as' => 'frontend.register',       'uses' => 'Frontend\IndexController@register']);
Route::post('/contact',     ['as' => 'frontend.contact',        'uses' => 'Frontend\IndexController@contact']);


Route::group(['prefix' => 'admin'], function() {

    Route::get('/login',                            ['as' => 'show_login_form',       'uses' => 'Auth\LoginController@showLoginForm']);
    Route::post('login',                            ['as' => 'login',                 'uses' => 'Auth\LoginController@login']);
    Route::get('logout',                            ['as' => 'logout',                'uses' => 'Auth\LoginController@logout']);

    Route::group(['middleware' => 'auth' ], function (){

    Route::get('/',                 ['as' => 'admin.index',          'uses' => 'Admin\AdminContoller@index']);

    // Admins Routes
    Route::get('admins' ,                ['as' => 'admin.admins',       'uses' => 'Admin\AdminsController@index']);
    Route::get('admins/create' ,         ['as' => 'admins.create'  ,    'uses' => 'Admin\AdminsController@create']);
    Route::post('admins/create' ,        ['as' => 'admins.store'  ,     'uses' => 'Admin\AdminsController@store']);
    Route::get('/admins/{id}/edit',      ['as'=>  'admins.edit',        'uses' => 'Admin\AdminsController@edit']);
    Route::put('/admins/{id}',           ['as'=>  'admins.update',      'uses' => 'Admin\AdminsController@update']);
    Route::delete('admins/{id}' ,        ['as' => 'admins.destroy',     'uses' => 'Admin\AdminsController@destroy']);

    // Accounts Routes
    Route::get('accounts' ,                ['as' => 'admin.accounts',       'uses' => 'Admin\AccountsController@index']);
    Route::get('accounts/create' ,         ['as' => 'accounts.create'  ,    'uses' => 'Admin\AccountsController@create']);
    Route::post('accounts/create' ,        ['as' => 'accounts.store'  ,     'uses' => 'Admin\AccountsController@store']);
    Route::get('/accounts/{Username}/edit',['as'=>  'accounts.edit',        'uses' => 'Admin\AccountsController@edit']);
    Route::put('/accounts/{Username}',     ['as'=>  'accounts.update',      'uses' => 'Admin\AccountsController@update']);
    Route::delete('accounts/{Username}' ,  ['as' => 'accounts.destroy',     'uses' => 'Admin\AccountsController@destroy']);

    // Player Routes
    Route::get('players' ,           ['as' => 'admin.players',       'uses' => 'Admin\PlayersController@index']);
    Route::get('/players/{UID}/edit',['as'=>  'players.edit',        'uses' => 'Admin\PlayersController@edit']);
    Route::put('/players/{UID}',     ['as'=>  'players.update',      'uses' => 'Admin\PlayersController@update']);
    Route::delete('players/{UID}' ,  ['as' => 'players.destroy',     'uses' => 'Admin\PlayersController@destroy']);

    // Nobility Routes
    Route::get('nobility' ,                 ['as' => 'admin.nobility',       'uses' => 'Admin\NobilityController@index']);
    Route::get('/nobility/{EntityUID}/edit',['as'=>  'nobility.edit',        'uses' => 'Admin\NobilityController@edit']);
    Route::put('/nobility/{EntityUID}',     ['as'=>  'nobility.update',      'uses' => 'Admin\NobilityController@update']);
    Route::delete('nobility/{EntityUID}' ,  ['as' => 'nobility.destroy',     'uses' => 'Admin\NobilityController@destroy']);

    // Guilds Routes
    Route::get('guilds' ,             ['as' => 'admin.guilds'  ,     'uses' => 'Admin\GuildsController@index']);
    Route::get('/guilds/{ID}/edit',   ['as'=>  'guilds.edit',        'uses' => 'Admin\GuildsController@edit']);
    Route::put('/guilds/{ID}',        ['as'=>  'guilds.update',      'uses' => 'Admin\GuildsController@update']);
    Route::delete('guilds/{ID}' ,     ['as' => 'guilds.destroy',     'uses' => 'Admin\GuildsController@destroy']);

    // NPCs Routes
    Route::get('npcs' ,                ['as' => 'admin.npcs'    ,   'uses' => 'Admin\NpcsController@index']);
    Route::get('npcs/create' ,         ['as' => 'npcs.create'  ,    'uses' => 'Admin\NpcsController@create']);
    Route::post('npcs/create' ,        ['as' => 'npcs.store'  ,     'uses' => 'Admin\NpcsController@store']);
    Route::get('/npcs/{id}/edit',      ['as'=>  'npcs.edit',        'uses' => 'Admin\NpcsController@edit']);
    Route::put('/npcs/{id}',           ['as'=>  'npcs.update',      'uses' => 'Admin\NpcsController@update']);
    Route::delete('npcs/{id}' ,        ['as' => 'npcs.destroy',     'uses' => 'Admin\NpcsController@destroy']);

    // Settings Routes
    Route::get('settings',       'Admin\SettingsController@settings');
    Route::post('settings',      'Admin\SettingsController@setting_save');

    // Messages Routes
    Route::get('messages',       'Admin\MessagesController@index');
    Route::get('messages/{id}',  'Admin\MessagesController@show');
    Route::delete('messages/{id}' , ['as' => 'messages.destroy',     'uses' => 'Admin\MessagesController@destroy']);

    });
});
