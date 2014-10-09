<?php namespace Controllers\Admin;

use AdminController;
use BaseController;
use View;
use DB;
use Agama;
use Golongan;
use Pendidikan;
use Jurusan;
use UnitKerja;
use Pegawai;
use Input;
use Redirect;
use Validator;
use paginate;

class PegawaiController extends AdminController {

	public function getIndex()
	{
		$data = Pegawai::paginate(10);

		return View::make('admin/master/Pegawai/index', compact('data'));
	}

	public function getCreate()
	{
		$agama = Agama::all();
		$golongan = Golongan::all();
		$pend = Pendidikan::all();
		$jurus = Jurusan::all();
		$unit = UnitKerja::all();

		return View::make('admin/master/Pegawai/create', compact('agama', 'golongan', 'pend', 'jurus', 'unit'));
	}

	public function postCreate()
	{
		$rules = array(
			'nip'   => 'required|min:1',
			'nama'   => 'required|min:1',
			'tgllahir'   => 'required'
		);

		$validator = Validator::make(Input::all(), $rules);
		if ($validator->fails())
		{
			// Ooops.. something went wrong
			return Redirect::back()->withInput()->withErrors($validator);
		}

		$Jenis = new Pegawai;

		$Jenis->nip = e(Input::get('nip'));
		$Jenis->nama = e(Input::get('nama'));
		$Jenis->tgllahir = e(Input::get('tgllahir'));
		$Jenis->alamat = e(Input::get('alamat'));
		$Jenis->jabatan = e(Input::get('jabatan'));
		$Jenis->agama = e(Input::get('agama'));
		$Jenis->jeniskelamin = e(Input::get('jeniskelamin'));
		$Jenis->statuskawin = e(Input::get('statuskawin'));
		$Jenis->golongan = e(Input::get('golongan'));
		$Jenis->pendidikan_terakhir = e(Input::get('pendidikan_terakhir'));
		$Jenis->jurusan = e(Input::get('jurusan'));
		$Jenis->unitkerja = e(Input::get('unitkerja'));

		$Jenis->statuspegawai = 1;
		$Jenis->lantai = 0;
		$Jenis->lemari = 0;


		if($Jenis->save())
		{
		
			return Redirect::to("admin/master/Pegawai")->with('success', 'Data Pegawai Berhasil di Simpan');
		}

		return Redirect::to('admin/master/Pegawai/create')->with('error', 'Data Pegawai gagal di Simpan');
	}

	public function getEdit($idpegawai = null)
	{
		$jenis = Pegawai::find($idpegawai);

		$agama = Agama::all();
		$golongan = Golongan::all();
		$pend = Pendidikan::all();
		$jurus = Jurusan::all();
		$unit = UnitKerja::all();

		return View::make('admin/master/Pegawai/edit', compact('jenis', 'agama', 'golongan', 'pend', 'jurus', 'unit'));
	}

	public function postEdit($idpegawai = null)
	{
		$Jenis = Pegawai::find($idpegawai);

		$rules = array(
			'nip'   => 'required|min:1',
			'nama'   => 'required|min:1',
			'tgllahir'   => 'required'
		);

		$validator = Validator::make(Input::all(), $rules);
		if ($validator->fails())
		{
			// Ooops.. something went wrong
			return Redirect::back()->withInput()->withErrors($validator);
		}
		// print($Jenis->nip);

		$Jenis->nip = e(Input::get('nip'));
		$Jenis->nama = e(Input::get('nama'));
		$Jenis->tgllahir = e(Input::get('tgllahir'));
		$Jenis->alamat = e(Input::get('alamat'));
		$Jenis->jabatan = e(Input::get('jabatan'));
		$Jenis->agama = e(Input::get('agama'));
		$Jenis->jeniskelamin = e(Input::get('jeniskelamin'));
		$Jenis->statuskawin = e(Input::get('statuskawin'));
		$Jenis->golongan = e(Input::get('golongan'));
		$Jenis->pendidikan_terakhir = e(Input::get('pendidikan_terakhir'));
		$Jenis->jurusan = e(Input::get('jurusan'));
		$Jenis->unitkerja = e(Input::get('unitkerja'));

		if($Jenis->save())
		{
		
			return Redirect::to("admin/master/Pegawai")->with('success', 'Data Pegawai Berhasil di Simpan');
		}

		return Redirect::to('admin/master/Pegawai')->with('error', 'Data Pegawai Gagal di Simpan');
	}

	public function getDelete($idpegawai = null)
	{
		
		//masuk ke halaman konfirmasi
		return view::make('admin/master/Pegawai/delete');
	}

	public function postDelete($idpegawai = null)
	{
		$jenis = Pegawai::find($idpegawai);
		$jenis->delete();
		return Redirect::to("admin/master/Pegawai")->with('success', 'Data Pegawai Berhasil di Hapus');
	}

}