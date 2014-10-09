<?php namespace Controllers\Admin;

use AdminController;
use BaseController;
use View;
use DB;
use Lantai;
use UnitKerja;
use Input;
use Redirect;
use Validator;
use paginate;

class UnitKerjaController extends AdminController {

	public function getIndex()
	{
		$data = UnitKerja::paginate(10);

		return View::make('admin/master/UnitKerja/index', compact('data'));
	}

	public function getCreate()
	{

		return View::make('admin/master/UnitKerja/create');
	}

	public function postCreate()
	{
		$rules = array(
			'unitkerja'   => 'required|min:1',
		);

		$validator = Validator::make(Input::all(), $rules);
		if ($validator->fails())
		{
			// Ooops.. something went wrong
			return Redirect::back()->withInput()->withErrors($validator);
		}

		$Jenis = new UnitKerja;

		$Jenis->skpd = e(Input::get('unitkerja'));

		if($Jenis->save())
		{
		
			return Redirect::to("admin/master/UnitKerja")->with('success', 'Data Unit Kerja Berhasil di Simpan');
		}

		return Redirect::to('admin/master/UnitKerja/create')->with('error', 'Data Unit Kerja Gagal di Simpan');
	}

	public function getEdit($id = null)
	{
		$jenis = UnitKerja::find($id);

		return View::make('admin/master/UnitKerja/edit', compact('jenis'));
	}

	public function postEdit($id = null)
	{
		$jenis = UnitKerja::find($id);

		$rules = array(
			'unitkerja'   => 'required|min:1',
		);

		$validator = Validator::make(Input::all(), $rules);
		if ($validator->fails())
		{
			// Ooops.. something went wrong
			return Redirect::back()->withInput()->withErrors($validator);
		}

		$jenis->skpd = e(Input::get('unitkerja'));

		if($jenis->save())
		{
		
			return Redirect::to("admin/master/UnitKerja")->with('success', 'Data Unit Kerja Berhasil di Simpan');
		}

		return Redirect::to('admin/master/UnitKerja')->with('error', 'Data Unit Kerja Gagal di Simpan');
	}

	public function getDelete($id = null)
	{
		
		//masuk ke halaman konfirmasi
		return view::make('admin/master/UnitKerja/delete');
	}

	public function postDelete($id = null)
	{
		$jenis = UnitKerja::find($id);
		$jenis->delete();
		return Redirect::to("admin/master/UnitKerja")->with('success', 'Data Unit Kerja Berhasil di Hapus');
	}

}