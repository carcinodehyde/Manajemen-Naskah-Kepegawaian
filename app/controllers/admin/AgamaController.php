<?php namespace Controllers\Admin;

use AdminController;
use BaseController;
use View;
use DB;
use Lantai;
use Agama;
use Input;
use Redirect;
use Validator;
use paginate;

class AgamaController extends AdminController {

	public function getIndex()
	{
		$data = Agama::paginate(10);

		return View::make('admin/master/Agama/index', compact('data'));
	}

	public function getCreate()
	{

		return View::make('admin/master/Agama/create');
	}

	public function postCreate()
	{
		$rules = array(
			'agama'   => 'required|min:1',
		);

		$validator = Validator::make(Input::all(), $rules);
		if ($validator->fails())
		{
			// Ooops.. something went wrong
			return Redirect::back()->withInput()->withErrors($validator);
		}

		$Jenis = new Agama;

		$Jenis->agama = e(Input::get('agama'));

		if($Jenis->save())
		{
		
			return Redirect::to("admin/master/Agama")->with('success', 'Data Agama Berhasil di Simpan');
		}

		return Redirect::to('admin/master/Agama/create')->with('error', 'Data Agama Gagal di Simpan');
	}

	public function getEdit($id = null)
	{
		$jenis = Agama::find($id);

		return View::make('admin/master/Agama/edit', compact('jenis'));
	}

	public function postEdit($id = null)
	{
		$jenis = Agama::find($id);

		$rules = array(
			'agama'   => 'required|min:1',
		);

		$validator = Validator::make(Input::all(), $rules);
		if ($validator->fails())
		{
			// Ooops.. something went wrong
			return Redirect::back()->withInput()->withErrors($validator);
		}

		$jenis->agama = e(Input::get('agama'));

		if($jenis->save())
		{
		
			return Redirect::to("admin/master/Agama")->with('success', 'Data Agama Berhasil di Simpan');
		}

		return Redirect::to('admin/master/Agama')->with('error', 'Data Agama Gagal di Simpan');
	}

	public function getDelete($id = null)
	{
		
		//masuk ke halaman konfirmasi
		return view::make('admin/master/Agama/delete');
	}

	public function postDelete($id = null)
	{
		$jenis = Agama::find($id);
		$jenis->delete();
		return Redirect::to("admin/master/Agama")->with('success', 'Data Agama Berhasil di Hapus');
	}

}