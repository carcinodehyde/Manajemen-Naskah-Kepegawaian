<?php namespace Controllers\Admin;

use AdminController;
use BaseController;
use View;
use DB;
use Golongan;
use Input;
use Redirect;
use Validator;
use paginate;

class GolonganController extends AdminController {

	public function getIndex()
	{
		$data = Golongan::paginate(10);

		return View::make('admin/master/Golongan/index', compact('data'));
	}

	public function getCreate()
	{

		return View::make('admin/master/Golongan/create');
	}

	public function postCreate()
	{
		$rules = array(
			'golongan'   => 'required|min:1',
		);

		$validator = Validator::make(Input::all(), $rules);
		if ($validator->fails())
		{
			// Ooops.. something went wrong
			return Redirect::back()->withInput()->withErrors($validator);
		}

		$Jenis = new Golongan;

		$Jenis->golongan = e(Input::get('golongan'));

		if($Jenis->save())
		{
		
			return Redirect::to("admin/master/Golongan")->with('success', 'Data Golongan PNS Berhasil di Simpan');
		}

		return Redirect::to('admin/master/Golongan/create')->with('error', 'Data Golongan PNS di Simpan');
	}

	public function getEdit($id = null)
	{
		$jenis = Golongan::find($id);

		return View::make('admin/master/Golongan/edit', compact('jenis'));
	}

	public function postEdit($id = null)
	{
		$jenis = Golongan::find($id);

		$rules = array(
			'golongan'   => 'required|min:1',
		);

		$validator = Validator::make(Input::all(), $rules);
		if ($validator->fails())
		{
			// Ooops.. something went wrong
			return Redirect::back()->withInput()->withErrors($validator);
		}

		$jenis->golongan = e(Input::get('golongan'));

		if($jenis->save())
		{
		
			return Redirect::to("admin/master/Golongan")->with('success', 'Data Golongan PNS Berhasil di Simpan');
		}

		return Redirect::to('admin/master/Golongan')->with('error', 'Data Golongan PNS Gagal di Simpan');
	}

	public function getDelete($id = null)
	{
		
		//masuk ke halaman konfirmasi
		return view::make('admin/master/Golongan/delete');
	}

	public function postDelete($id = null)
	{
		$jenis = Golongan::find($id);
		$jenis->delete();
		return Redirect::to("admin/master/Golongan")->with('success', 'Data Golongan PNS Berhasil di Hapus');
	}

}