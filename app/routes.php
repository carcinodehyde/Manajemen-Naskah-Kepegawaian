<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/', array('as' => 'home', 'uses' => 'HomeController@getIndex'));
Route::post('/', 'HomeController@postCari');

/* auth route



*/

Route::group(array('prefix' => 'auth'), function()
{

	# Login
	Route::get('signin', array('as' => 'signin', 'uses' => 'AuthController@getSignin'));
	Route::post('signin', 'AuthController@postSignin');

	// # Register
	// Route::get('signup', array('as' => 'signup', 'uses' => 'AuthController@getSignup'));
	// Route::post('signup', 'AuthController@postSignup');

	// # Account Activation
	// Route::get('activate/{activationCode}', array('as' => 'activate', 'uses' => 'AuthController@getActivate'));

	# Forgot Password
	Route::get('forgot-password', array('as' => 'forgot-password', 'uses' => 'AuthController@getForgotPassword'));
	Route::post('forgot-password', 'AuthController@postForgotPassword');

	// # Forgot Password Confirmation
	// Route::get('forgot-password/{passwordResetCode}', array('as' => 'forgot-password-confirm', 'uses' => 'AuthController@getForgotPasswordConfirm'));
	// Route::post('forgot-password/{passwordResetCode}', 'AuthController@postForgotPasswordConfirm');

	// # Logout
	Route::get('logout', array('as' => 'logout', 'uses' => 'AuthController@getLogout'));

});


Route::group(array('prefix' => 'admin'), function()
{
		Route::get('/', array('as' => 'admin', 'uses' => 'Controllers\Admin\DashboardController@getIndex'));

		Route::group(array('prefix' => 'master'), function()
		{
			Route::group(array('prefix' => 'JenisDokumen'), function()
			{
				Route::get('/', array('as' => 'JenisDokumen', 'uses' => 'Controllers\Admin\JenisDokumenController@getIndex'));
				
				Route::get('Create', array('as' => 'JenisDokumenCreate', 'uses' => 'Controllers\Admin\JenisDokumenController@getCreate'));
				Route::post('Create', 'Controllers\Admin\JenisDokumenController@postCreate');

				Route::get('{idjenisdokumen}/Edit', array('as' => 'JenisDokumenEdit', 'uses' => 'Controllers\Admin\JenisDokumenController@getEdit'));
				Route::post('{idjenisdokumen}/Edit', 'Controllers\Admin\JenisDokumenController@postEdit');

				Route::get('{idjenisdokumen}/Delete', array('as' => 'JenisDokumenDelete', 'uses' => 'Controllers\Admin\JenisDokumenController@getDelete'));
				Route::post('{idjenisdokumen}/Delete', 'Controllers\Admin\JenisDokumenController@postDelete');
			});

			Route::group(array('prefix' => 'Lantai'), function()
			{
				Route::get('/', array('as' => 'Lantai', 'uses' => 'Controllers\Admin\LantaiController@getIndex'));
				
				Route::get('Create', array('as' => 'LantaiCreate', 'uses' => 'Controllers\Admin\LantaiController@getCreate'));
				Route::post('Create', 'Controllers\Admin\LantaiController@postCreate');

				Route::get('{id}/Edit', array('as' => 'LantaiEdit', 'uses' => 'Controllers\Admin\LantaiController@getEdit'));
				Route::post('{id}/Edit', 'Controllers\Admin\LantaiController@postEdit');

				Route::get('{id}/Delete', array('as' => 'LantaiDelete', 'uses' => 'Controllers\Admin\LantaiController@getDelete'));
				Route::post('{id}/Delete', 'Controllers\Admin\LantaiController@postDelete');
			});

			Route::group(array('prefix' => 'Lemari'), function()
			{
				Route::get('/', array('as' => 'Lemari', 'uses' => 'Controllers\Admin\LemariController@getIndex'));
				
				Route::get('Create', array('as' => 'LemariCreate', 'uses' => 'Controllers\Admin\LemariController@getCreate'));
				Route::post('Create', 'Controllers\Admin\LemariController@postCreate');

				Route::get('{id}/Edit', array('as' => 'LemariEdit', 'uses' => 'Controllers\Admin\LemariController@getEdit'));
				Route::post('{id}/Edit', 'Controllers\Admin\LemariController@postEdit');

				Route::get('{id}/Delete', array('as' => 'LemariDelete', 'uses' => 'Controllers\Admin\LemariController@getDelete'));
				Route::post('{id}/Delete', 'Controllers\Admin\LemariController@postDelete');
			});

			Route::group(array('prefix' => 'Golongan'), function()
			{
				Route::get('/', array('as' => 'Golongan', 'uses' => 'Controllers\Admin\GolonganController@getIndex'));
				
				Route::get('Create', array('as' => 'GolonganCreate', 'uses' => 'Controllers\Admin\GolonganController@getCreate'));
				Route::post('Create', 'Controllers\Admin\GolonganController@postCreate');

				Route::get('{id}/Edit', array('as' => 'GolonganEdit', 'uses' => 'Controllers\Admin\GolonganController@getEdit'));
				Route::post('{id}/Edit', 'Controllers\Admin\GolonganController@postEdit');

				Route::get('{id}/Delete', array('as' => 'GolonganDelete', 'uses' => 'Controllers\Admin\GolonganController@getDelete'));
				Route::post('{id}/Delete', 'Controllers\Admin\GolonganController@postDelete');
			});

			Route::group(array('prefix' => 'Pendidikan'), function()
			{
				Route::get('/', array('as' => 'Pendidikan', 'uses' => 'Controllers\Admin\PendidikanController@getIndex'));
				
				Route::get('Create', array('as' => 'PendidikanCreate', 'uses' => 'Controllers\Admin\PendidikanController@getCreate'));
				Route::post('Create', 'Controllers\Admin\PendidikanController@postCreate');

				Route::get('{id}/Edit', array('as' => 'PendidikanEdit', 'uses' => 'Controllers\Admin\PendidikanController@getEdit'));
				Route::post('{id}/Edit', 'Controllers\Admin\PendidikanController@postEdit');

				Route::get('{id}/Delete', array('as' => 'PendidikanDelete', 'uses' => 'Controllers\Admin\PendidikanController@getDelete'));
				Route::post('{id}/Delete', 'Controllers\Admin\PendidikanController@postDelete');
			});

			Route::group(array('prefix' => 'Jurusan'), function()
			{
				Route::get('/', array('as' => 'Jurusan', 'uses' => 'Controllers\Admin\JurusanController@getIndex'));
				
				Route::get('Create', array('as' => 'JurusanCreate', 'uses' => 'Controllers\Admin\JurusanController@getCreate'));
				Route::post('Create', 'Controllers\Admin\JurusanController@postCreate');

				Route::get('{id}/Edit', array('as' => 'JurusanEdit', 'uses' => 'Controllers\Admin\JurusanController@getEdit'));
				Route::post('{id}/Edit', 'Controllers\Admin\JurusanController@postEdit');

				Route::get('{id}/Delete', array('as' => 'JurusanDelete', 'uses' => 'Controllers\Admin\JurusanController@getDelete'));
				Route::post('{id}/Delete', 'Controllers\Admin\JurusanController@postDelete');
			});

			Route::group(array('prefix' => 'UnitKerja'), function()
			{
				Route::get('/', array('as' => 'UnitKerja', 'uses' => 'Controllers\Admin\UnitKerjaController@getIndex'));
				
				Route::get('Create', array('as' => 'UnitKerjaCreate', 'uses' => 'Controllers\Admin\UnitKerjaController@getCreate'));
				Route::post('Create', 'Controllers\Admin\UnitKerjaController@postCreate');

				Route::get('{id}/Edit', array('as' => 'UnitKerjaEdit', 'uses' => 'Controllers\Admin\UnitKerjaController@getEdit'));
				Route::post('{id}/Edit', 'Controllers\Admin\UnitKerjaController@postEdit');

				Route::get('{id}/Delete', array('as' => 'UnitKerjaDelete', 'uses' => 'Controllers\Admin\UnitKerjaController@getDelete'));
				Route::post('{id}/Delete', 'Controllers\Admin\UnitKerjaController@postDelete');
			});

			Route::group(array('prefix' => 'Agama'), function()
			{
				Route::get('/', array('as' => 'Agama', 'uses' => 'Controllers\Admin\AgamaController@getIndex'));
				
				Route::get('Create', array('as' => 'AgamaCreate', 'uses' => 'Controllers\Admin\AgamaController@getCreate'));
				Route::post('Create', 'Controllers\Admin\AgamaController@postCreate');

				Route::get('{id}/Edit', array('as' => 'AgamaEdit', 'uses' => 'Controllers\Admin\AgamaController@getEdit'));
				Route::post('{id}/Edit', 'Controllers\Admin\AgamaController@postEdit');

				Route::get('{id}/Delete', array('as' => 'AgamaDelete', 'uses' => 'Controllers\Admin\AgamaController@getDelete'));
				Route::post('{id}/Delete', 'Controllers\Admin\AgamaController@postDelete');
			});

			Route::group(array('prefix' => 'Pegawai'), function()
			{
				Route::get('/', array('as' => 'Pegawai', 'uses' => 'Controllers\Admin\PegawaiController@getIndex'));
				
				Route::get('Create', array('as' => 'PegawaiCreate', 'uses' => 'Controllers\Admin\PegawaiController@getCreate'));
				Route::post('Create', 'Controllers\Admin\PegawaiController@postCreate');

				Route::get('{idpegawai}/Edit', array('as' => 'PegawaiEdit', 'uses' => 'Controllers\Admin\PegawaiController@getEdit'));
				Route::post('{idpegawai}/Edit', 'Controllers\Admin\PegawaiController@postEdit');

				Route::get('{idpegawai}/Delete', array('as' => 'PegawaiDelete', 'uses' => 'Controllers\Admin\PegawaiController@getDelete'));
				Route::post('{idpegawai}/Delete', 'Controllers\Admin\PegawaiController@postDelete');
			});
		});

		

		// PROSES

		Route::group(array('prefix' => 'proses'), function()
		{

			Route::get('/', array('as' => 'proses', 'uses' => 'Controllers\Admin\DashboardController@getProses'));

			Route::group(array('prefix' => 'Dokumen'), function()
			{
				Route::get('{idpegawai}', array('as' => 'Dokumen', 'uses' => 'Controllers\Admin\DokumenController@get'));

				Route::get('{idpegawai}/Create', array('as' => 'upload', 'uses' => 'Controllers\Admin\DokumenController@getCreate'));
				Route::post('{idpegawai}/Create', 'Controllers\Admin\DokumenController@postCreate');

				Route::get('{id}/Edit', array('as' => 'EditDokumen', 'uses' => 'Controllers\Admin\DokumenController@getEdit'));
				Route::post('{id}/Edit', 'Controllers\Admin\DokumenController@postEdit');

				Route::get('{id}/Delete', array('as' => 'DeleteDokumen', 'uses' => 'Controllers\Admin\DokumenController@getDelete'));
				Route::post('{id}/Delete', 'Controllers\Admin\DokumenController@postDelete');
			});

			Route::group(array('prefix' => 'Lokasi'), function()
			{
				Route::get('{idpegawai}', array('as' => 'Lokasi', 'uses' => 'Controllers\Admin\LokasiController@getIndex'));
				Route::post('{idpegawai}', 'Controllers\Admin\LokasiController@postLokasi');

			});
		});

		Route::group(array('prefix' => 'laporan'), function()
		{
			Route::get('biodata', array('as' => 'biodata', 'uses' => 'Controllers\Admin\ReportController@getBiodata'));
			Route::post('biodata', 'Controllers\Admin\ReportController@postBiodata');

			Route::get('kelengkapan', array('as' => 'kelengkapan', 'uses' => 'Controllers\Admin\ReportController@getKelengkapan'));
			Route::post('kelengkapan', 'Controllers\Admin\ReportController@postKelengkapan');

		});
});