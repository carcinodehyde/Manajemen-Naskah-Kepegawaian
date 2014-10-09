<?php namespace Controllers\Admin;

use AdminController;
use BaseController;
use View;
use DB;
use Lemari;
use Input;
use Redirect;
use Validator;
use paginate;

class LemariController extends AdminController {

	public function getIndex()
	{
		$data = Lemari::paginate(10);

		return View::make('admin/master/Lemari/index', compact('data'));
	}
  
	public function getCreate()
	{

		return View::make('admin/master/Lemari/create');
	}

	public function postCreate()
	{
		$rules = array(
			'lemari'   => 'required|min:1',
		);

		$validator = Validator::make(Input::all(), $rules);
		if ($validator->fails())
		{
			// Ooops.. something went wrong
			return Redirect::back()->withInput()->withErrors($validator);
		}

		$Jenis = new Lemari;

		$Jenis->lemari = e(Input::get('lemari'));

		if($Jenis->save())
		{

			return Redirect::to("admin/master/Lemari")->with('success', 'Data Lemari Berhasil di Simpan');
		}

		return Redirect::to('admin/master/Lemari/create')->with('error', 'Data Lemari Gagal di Simpan');
	}

	public function getEdit($id = null)
	{
		$jenis = Lemari::find($id);

		return View::make('admin/master/Lemari/edit', compact('jenis'));
	}

	public function postEdit($id = null)
	{
		$jenis = Lemari::find($id);

		$rules = array(
			'lemari'   => 'required|min:1',
		);

		$validator = Validator::make(Input::all(), $rules);
		if ($validator->fails())
		{
			// Ooops.. something went wrong
			return Redirect::back()->withInput()->withErrors($validator);
		}

		$jenis->lemari = e(Input::get('lemari'));

		if($jenis->save())
		{

			return Redirect::to("admin/master/Lemari")->with('success', 'Data Lemari Berhasil di Simpan');
		}

		return Redirect::to('admin/master/Lemari')->with('error', 'Data Lemari Gagal di Simpan');
	}

	public function getDelete($id = null)
	{

		//masuk ke halaman konfirmasi
		return view::make('admin/master/Lemari/delete');
	}

	public function postDelete($id = null)
	{
		$jenis = Lemari::find($id);
		$jenis->delete();
		return Redirect::to("admin/master/Lemari")->with('success', 'Data Lemari Berhasil di Hapus');
	}

}
