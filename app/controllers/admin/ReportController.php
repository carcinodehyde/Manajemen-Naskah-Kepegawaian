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
use Pegawai;
use PDF;

class ReportController extends AdminController {

	public function getBiodata()
	{
		// $data = UnitKerja::paginate(10);

		$pegawai = Pegawai::all();

		return View::make('admin/Laporan/ViewBiodata', compact('pegawai'));
	}

	public function postBiodata()
	{
		$idpegawai = e(Input::get('idpegawai'));

		$peg1 = DB::select('SELECT p.no_lemari_arsip, p.no_rak_arsip, l.lemari, la.lantai, p.idpegawai, p.nip, p.nama, p.alamat, p.tgllahir, if(p.jeniskelamin = 0,"Laki - Laki","Perempuan") as jeniskelamin, a.agama, if(p.statuskawin = 0,"Belum Kawin", "Kawin") as statuskawin, pn.pendidikan, j.jurusan, p.jabatan, g.golongan, u.skpd as unitkerja FROM pegawai p
		JOIN agama a on p.agama = a.id
		JOIN golongan g on p.golongan = g.id
		JOIN jurusan j on p.jurusan = j.id
		JOIN pendidikan pn on p.pendidikan_terakhir = pn.id
		JOIN unitkerja u on p.unitkerja = u.id
		JOIN lemari l on p.lemari = l.id
		JOIN lantai la on p.lantai = la.id
		WHERE idpegawai = ?', array($idpegawai));

		// dd(count($peg));
		$peg = $peg1[0];

		$idpegawai = $peg->idpegawai;
		$nama = $peg->nama;

		$dok = DB::select('SELECT IFNULL(d.id,0) as idjenisdokumen, j.jenisdokumen as namajenisdokumen
        FROM jenisdokumen j
        LEFT OUTER JOIN dokumen d on j.idjenisdokumen = d.idjenisdokumen and d.idpegawai = ?', array($idpegawai));

		// return View::make('admin/Laporan/rptBiodata', compact('peg', 'dok', 'idpegawai'));

		$pdf = PDF::loadView('admin/Laporan/rptBiodata', compact('peg', 'dok', 'idpegawai'));
		
		return $pdf->stream('Biodata.pdf');
	}

	public function getKelengkapan()
	{
		return View::make('admin/Laporan/ViewKelengkapan');
	}

	public function postKelengkapan()
	{
		// $jumlah = 
	}

	// public function getCreate()
	// {

	// 	return View::make('admin/master/UnitKerja/create');
	// }

	// public function postCreate()
	// {
	// 	$rules = array(
	// 		'unitkerja'   => 'required|min:1',
	// 	);

	// 	$validator = Validator::make(Input::all(), $rules);
	// 	if ($validator->fails())
	// 	{
	// 		// Ooops.. something went wrong
	// 		return Redirect::back()->withInput()->withErrors($validator);
	// 	}

	// 	$Jenis = new UnitKerja;

	// 	$Jenis->skpd = e(Input::get('unitkerja'));

	// 	if($Jenis->save())
	// 	{
		
	// 		return Redirect::to("admin/master/UnitKerja")->with('success', 'Data Unit Kerja Berhasil di Simpan');
	// 	}

	// 	return Redirect::to('admin/master/UnitKerja/create')->with('error', 'Data Unit Kerja Gagal di Simpan');
	// }

	// public function getEdit($id = null)
	// {
	// 	$jenis = UnitKerja::find($id);

	// 	return View::make('admin/master/UnitKerja/edit', compact('jenis'));
	// }

	// public function postEdit($id = null)
	// {
	// 	$jenis = UnitKerja::find($id);

	// 	$rules = array(
	// 		'unitkerja'   => 'required|min:1',
	// 	);

	// 	$validator = Validator::make(Input::all(), $rules);
	// 	if ($validator->fails())
	// 	{
	// 		// Ooops.. something went wrong
	// 		return Redirect::back()->withInput()->withErrors($validator);
	// 	}

	// 	$jenis->skpd = e(Input::get('unitkerja'));

	// 	if($jenis->save())
	// 	{
		
	// 		return Redirect::to("admin/master/UnitKerja")->with('success', 'Data Unit Kerja Berhasil di Simpan');
	// 	}

	// 	return Redirect::to('admin/master/UnitKerja')->with('error', 'Data Unit Kerja Gagal di Simpan');
	// }

	// public function getDelete($id = null)
	// {
		
	// 	//masuk ke halaman konfirmasi
	// 	return view::make('admin/master/UnitKerja/delete');
	// }

	// public function postDelete($id = null)
	// {
	// 	$jenis = UnitKerja::find($id);
	// 	$jenis->delete();
	// 	return Redirect::to("admin/master/UnitKerja")->with('success', 'Data Unit Kerja Berhasil di Hapus');
	// }

}