<?php namespace Controllers\Admin;

use AdminController;
use BaseController;
use View;
use DB;
use JenisDokumen;
use Input;
use Redirect;
use Validator;
use paginate;

class JenisDokumenController extends AdminController {

	/**
	 * Show the administration dashboard page.
	 *
	 * @return View
	 */
	public function getIndex()
	{
		$jenis = jenisdokumen::paginate(10);
		// Show the page
		return View::make('admin/master/JenisDokumen/index', compact('jenis'));
	}
	
	public function getCreate()
	{

		return View::make('admin/master/JenisDokumen/create');
	}

	public function postCreate()
	{
		$rules = array(
			'jenisdokumen'   => 'required|min:2',
		);

		$validator = Validator::make(Input::all(), $rules);
		if ($validator->fails())
		{
			// Ooops.. something went wrong
			return Redirect::back()->withInput()->withErrors($validator);
		}

		$Jenis = new JenisDokumen;

		$Jenis->jenisdokumen = e(Input::get('jenisdokumen'));

		if($Jenis->save())
		{

			return Redirect::to("admin/master/JenisDokumen")->with('success', 'Data Jenis Dokumen Berhasil di Simpan');
		}

		return Redirect::to('admin/master/JenisDokumen/create')->with('error', 'Data Jenis Dokumen Gagal di Simpan');
	}

	public function getEdit($idjenisdokumen = null)
	{
		$jenis = jenisdokumen::find($idjenisdokumen);

		return View::make('admin/master/JenisDokumen/edit', compact('jenis'));
	}

	public function postEdit($idjenisdokumen = null)
	{
		$jenis = JenisDokumen::find($idjenisdokumen);

		$rules = array(
			'jenisdokumen'   => 'required|min:2',
		);

		$validator = Validator::make(Input::all(), $rules);
		if ($validator->fails())
		{
			// Ooops.. something went wrong
			return Redirect::back()->withInput()->withErrors($validator);
		}

		$jenis->jenisdokumen = e(Input::get('jenisdokumen'));

		if($jenis->save())
		{

			return Redirect::to("admin/master/JenisDokumen")->with('success', 'Data Jenis Dokumen Berhasil di Simpan');
		}

		return Redirect::to('admin/master/JenisDokumen')->with('error', 'Data Jenis Dokumen Gagal di Simpan');
	}

	public function getDelete($idjenisdokumen = null)
	{

		//masuk ke halaman konfirmasi
		return view::make('admin/master/jenisdokumen/delete');
	}

	public function postDelete($idjenisdokumen = null)
	{
		if($idjenisdokumen == 1)
		{
			return Redirect::to('admin/master/JenisDokumen')->with('error', 'Data Foto Tidak Dapat Dihapus!');
		}

		$jenis = jenisdokumen::find($idjenisdokumen);
		$jenis->delete();
		return Redirect::to("admin/master/JenisDokumen")->with('success', 'Data Jenis Dokumen Berhasil di Hapus');
	}
}
