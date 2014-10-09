<?php namespace Controllers\Admin;

use AdminController;
use BaseController;
use View;
use DB;
use Pendidikan;
use Input;
use Redirect;
use Validator;
use paginate;

class PendidikanController extends AdminController {

	public function getIndex()
	{
		$data = Pendidikan::paginate(10);

		return View::make('admin/master/Pendidikan/index', compact('data'));
	}

	public function getCreate()
	{

		return View::make('admin/master/Pendidikan/create');
	}

	public function postCreate()
	{
		$rules = array(
			'pendidikan'   => 'required|min:1',
		);

		$validator = Validator::make(Input::all(), $rules);
		if ($validator->fails())
		{
			// Ooops.. something went wrong
			return Redirect::back()->withInput()->withErrors($validator);
		}

		$Jenis = new Pendidikan;

		$Jenis->pendidikan = e(Input::get('pendidikan'));

		if($Jenis->save())
		{
		
			return Redirect::to("admin/master/Pendidikan")->with('success', 'Data Pendidikan Berhasil di Simpan');
		}

		return Redirect::to('admin/master/Pendidikan/create')->with('error', 'Data Pendidikan Simpan');
	}

	public function getEdit($id = null)
	{
		$jenis = Pendidikan::find($id);

		return View::make('admin/master/Pendidikan/edit', compact('jenis'));
	}

	public function postEdit($id = null)
	{
		$jenis = Pendidikan::find($id);

		$rules = array(
			'pendidikan'   => 'required|min:1',
		);

		$validator = Validator::make(Input::all(), $rules);
		if ($validator->fails())
		{
			// Ooops.. something went wrong
			return Redirect::back()->withInput()->withErrors($validator);
		}

		$jenis->pendidikan = e(Input::get('pendidikan'));

		if($jenis->save())
		{
		
			return Redirect::to("admin/master/Pendidikan")->with('success', 'Data Pendidikan Berhasil di Simpan');
		}

		return Redirect::to('admin/master/Pendidikan')->with('error', 'Data Pendidikan Gagal di Simpan');
	}

	public function getDelete($id = null)
	{
		
		//masuk ke halaman konfirmasi
		return view::make('admin/master/Pendidikan/delete');
	}

	public function postDelete($id = null)
	{
		$jenis = Pendidikan::find($id);
		$jenis->delete();
		return Redirect::to("admin/master/Pendidikan")->with('success', 'Data Pendidikan Berhasil di Hapus');
	}

}