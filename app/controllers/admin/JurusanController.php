<?php namespace Controllers\Admin;

use AdminController;
use BaseController;
use View;
use DB;
use Jurusan;
use Input;
use Redirect;
use Validator;
use paginate;

class JurusanController extends AdminController {

	public function getIndex()
	{
		$data = Jurusan::paginate(10);

		return View::make('admin/master/Jurusan/index', compact('data'));
	}

	public function getCreate()
	{

		return View::make('admin/master/Jurusan/create');
	}

	public function postCreate()
	{
		$rules = array(
			'jurusan'   => 'required|min:1',
		);

		$validator = Validator::make(Input::all(), $rules);
		if ($validator->fails())
		{
			// Ooops.. something went wrong
			return Redirect::back()->withInput()->withErrors($validator);
		}

		$Jenis = new Jurusan;

		$Jenis->jurusan = e(Input::get('jurusan'));

		if($Jenis->save())
		{
		
			return Redirect::to("admin/master/Jurusan")->with('success', 'Data Jurusan Berhasil di Simpan');
		}

		return Redirect::to('admin/master/Jurusan/create')->with('error', 'Data Jurusan Simpan');
	}

	public function getEdit($id = null)
	{
		$jenis = Jurusan::find($id);

		return View::make('admin/master/Jurusan/edit', compact('jenis'));
	}

	public function postEdit($id = null)
	{
		$jenis = Jurusan::find($id);

		$rules = array(
			'jurusan'   => 'required|min:1',
		);

		$validator = Validator::make(Input::all(), $rules);
		if ($validator->fails())
		{
			// Ooops.. something went wrong
			return Redirect::back()->withInput()->withErrors($validator);
		}

		$jenis->jurusan = e(Input::get('jurusan'));

		if($jenis->save())
		{
		
			return Redirect::to("admin/master/Jurusan")->with('success', 'Data Jurusan Berhasil di Simpan');
		}

		return Redirect::to('admin/master/Jurusan')->with('error', 'Data Jurusan Gagal di Simpan');
	}

	public function getDelete($id = null)
	{
		
		//masuk ke halaman konfirmasi
		return view::make('admin/master/Jurusan/delete');
	}

	public function postDelete($id = null)
	{
		$jenis = Jurusan::find($id);
		$jenis->delete();
		return Redirect::to("admin/master/Jurusan")->with('success', 'Data Jurusan Berhasil di Hapus');
	}

}