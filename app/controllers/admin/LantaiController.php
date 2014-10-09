<?php namespace Controllers\Admin;

use AdminController;
use BaseController;
use View;
use DB;
use Lantai;
use Input;
use Redirect;
use Validator;
use paginate;

class LantaiController extends AdminController {

	public function getIndex()
	{
		$data = Lantai::paginate(10);

		return View::make('admin/master/Lantai/index', compact('data'));
	}

	public function getCreate()
	{

		return View::make('admin/master/Lantai/create');
	}

	public function postCreate()
	{
		$rules = array(
			'lantai'   => 'required|min:1',
		);

		$validator = Validator::make(Input::all(), $rules);
		if ($validator->fails())
		{
			// Ooops.. something went wrong
			return Redirect::back()->withInput()->withErrors($validator);
		}

		$Jenis = new Lantai;

		$Jenis->lantai = e(Input::get('lantai'));

		if($Jenis->save())
		{
		
			return Redirect::to("admin/master/Lantai")->with('success', 'Data Lantai Berhasil di Simpan');
		}

		return Redirect::to('admin/master/Lantai/create')->with('error', 'Data Lantai Gagal di Simpan');
	}

	public function getEdit($id = null)
	{
		$jenis = Lantai::find($id);

		return View::make('admin/master/Lantai/edit', compact('jenis'));
	}

	public function postEdit($id = null)
	{
		$jenis = Lantai::find($id);

		$rules = array(
			'lantai'   => 'required|min:1',
		);

		$validator = Validator::make(Input::all(), $rules);
		if ($validator->fails())
		{
			// Ooops.. something went wrong
			return Redirect::back()->withInput()->withErrors($validator);
		}

		$jenis->lantai = e(Input::get('lantai'));

		if($jenis->save())
		{
		
			return Redirect::to("admin/master/Lantai")->with('success', 'Data Lantai Berhasil di Simpan');
		}

		return Redirect::to('admin/master/Lantai')->with('error', 'Data Lantai Gagal di Simpan');
	}

	public function getDelete($id = null)
	{
		
		//masuk ke halaman konfirmasi
		return view::make('admin/master/Lantai/delete');
	}

	public function postDelete($id = null)
	{
		$jenis = Lantai::find($id);
		$jenis->delete();
		return Redirect::to("admin/master/Lantai")->with('success', 'Data Lantai Berhasil di Hapus');
	}

}