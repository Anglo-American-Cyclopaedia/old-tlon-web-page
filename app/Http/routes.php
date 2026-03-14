<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('setLocale/{locale}', 'HomeController@setLocale');

Route::get('/', 'HomeController@index');
Route::get('quienes-somos/mision', 'HomeController@aboutMission');
Route::get('quienes-somos/historia', 'HomeController@aboutHistory');
Route::get('quienes-somos/cuento', 'HomeController@aboutStory');

Route::get('proyecto-tlon/acerca', 'HomeController@tlonProjectAbout');
Route::get('proyecto-tlon/conceptos-generales', 'HomeController@tlonProjectGeneral');
Route::get('proyecto-tlon/modelo-social', 'HomeController@tlonProjectSocial');
Route::get('proyecto-tlon/proyectos', 'HomeController@tlonProjectProjects');

Route::get('actividades/docencia', 'HomeController@actividadesDocencia');
Route::get('actividades/investigacion', 'HomeController@actividadesInvestigacion');
Route::get('actividades/semillero-uqbar', 'HomeController@actividadesSemilleroUqbar');
Route::get('actividades/extension', 'HomeController@actividadesExtension');
Route::get('actividades/otras', 'HomeController@actividadesOtras');

Route::get('produccion-intelectual', 'HomeController@produccionIntelectual');

Route::get('contacto', 'HomeController@getContacto');
Route::post('contacto', 'HomeController@postContacto');
