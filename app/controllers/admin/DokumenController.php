<?php namespace Controllers\Admin;

use AdminController;
use BaseController;
use View;
use DB;
use JenisDokumen;
use Dokumen;
use Input;
use Redirect;
use Validator;
use paginate;
use Pegawai;
use Image;

class DokumenController extends AdminController {

	/**
	 * Show the administration dashboard page.
	 *
	 * @return View
	 */
	public function get($idpegawai = null)
	{
		$peg = Pegawai::find($idpegawai);
		// $data = Dokumen::with(array('idpegawai', 'idjenisdokumen'))->where('idpegawai', '=', $idpegawai)->get();

		$data = DB::select('select d.*, j.jenisdokumen from dokumen d
							join jenisdokumen j on d.idjenisdokumen = j.idjenisdokumen
							where d.idpegawai = ?', array($idpegawai));
		// Show the page
		return View::make('admin/Proses/Dokumen/index', compact('data', 'peg', 'idpegawai'));
	}

	public function getCreate($idpegawai = null)
	{
		$jenis = JenisDokumen::all();


		return View::make('admin/Proses/Dokumen/create', compact('jenis', 'idpegawai'));
	}

	public function postCreate($idpegawai = null)
	{
		$rules = array(
			'idjenisdokumen'   => 'required',
		);

		$validator = Validator::make(Input::all(), $rules);
		// if ($validator->fails())
		// {
		// 	// Ooops.. something went wrong
		// 	return Redirect::back()->withInput()->withErrors($validator);
		// }

		$idjenisdokumen = e(Input::get('idjenisdokumen'));
		$exist = Dokumen::where('idpegawai', '=', $idpegawai)->where('idjenisdokumen', '=', $idjenisdokumen)->get();

		// dd($exist);
		
		if(!$exist->isEmpty() )
		{
			return Redirect::back()->with('error', 'Data Dokumen Sudah Ada');
		}

		$destinationPath = public_path().'/assets/dms/'.$idpegawai;
		$fileName = $idjenisdokumen.'.png';

		$path = $destinationPath.'/'.$fileName;

		if (!file_exists($destinationPath)) 
		{
    		mkdir($destinationPath, 0777, true);
		}


		Image::make(Input::file('image'))->save($path);

		$Jenis = new Dokumen;

		$Jenis->idjenisdokumen = $idjenisdokumen;
		$Jenis->idpegawai = $idpegawai;
		$Jenis->lokasi = $fileName;

		if($Jenis->save())
		{
		
			return Redirect::to("admin/proses/Dokumen/$idpegawai")->with('success', 'Data Jenis Dokumen Berhasil di Simpan');
		}

		return Redirect::back()->with('error', 'Data Dokumen Gagal di Simpan');
	}

	public function getEdit($id = null)
	{
		$doc = Dokumen::find($id);
		$jenis = JenisDokumen::all();

		return View::make('admin/proses/Dokumen/edit', compact('jenis', 'doc'));
	}

	public function postEdit($id = null)
	{
		$Jenis = Dokumen::find($id);
		$idpegawai = $Jenis->idpegawai;

		$rules = array(
			'idjenisdokumen'   => 'required',
		);

		$validator = Validator::make(Input::all(), $rules);
		// if ($validator->fails())
		// {
		// 	// Ooops.. something went wrong
		// 	return Redirect::back()->withInput()->withErrors($validator);
		// }

		$idjenisdokumen = e(Input::get('idjenisdokumen'));
		// $exist = Dokumen::where('idpegawai', '=', $idpegawai)->where('idjenisdokumen', '=', $idjenisdokumen)->get();

		// // dd($exist);
		
		// if(!$exist->isEmpty() )
		// {
		// 	return Redirect::back()->with('error', 'Data Dokumen Sudah Ada');
		// }

		$destinationPath = public_path().'/assets/dms/'.$idpegawai;
		$fileName = $idjenisdokumen.'.png';

		$path = $destinationPath.'/'.$fileName;

		if (!file_exists($destinationPath)) 
		{
    		mkdir($destinationPath, 0777, true);
		}


		Image::make(Input::file('image'))->save($path);

		$Jenis->idjenisdokumen = $idjenisdokumen;
		$Jenis->idpegawai = $idpegawai;
		$Jenis->lokasi = $fileName;

		if($Jenis->save())
		{
		
			return Redirect::to("admin/proses/Dokumen/$idpegawai")->with('success', 'Data Jenis Dokumen Berhasil di Simpan');
		}

		return Redirect::back()->with('error', 'Data Dokumen Gagal di Simpan');
	}

	public function getDelete($id = null)
	{
		$doc = Dokumen::find($id);
		$idpegawai = $doc->idpegawai;

		//masuk ke halaman konfirmasi
		return view::make('admin/proses/Dokumen/delete', compact('idpegawai'));
	}

	public function postDelete($id = null)
	{
		$jenis = Dokumen::find($id);
		$idpegawai = $jenis->idpegawai;
		$jenis->delete();
		return Redirect::to("admin/proses/Dokumen/$idpegawai")->with('success', 'Data Jenis Dokumen Berhasil di Hapus');
	}
}
