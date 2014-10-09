<?php

use app\models;
use \Input;
use \DB;

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function getIndex()
	{
		$gagal = null;
		return View::make('index', compact('gagal'));
	}

	public function postCari()
	{
		$nip = e(input::get('nip'));

		$peg1 = DB::select('SELECT p.no_lemari_arsip, p.no_rak_arsip, l.lemari, la.lantai, p.idpegawai, p.nip, p.nama, p.alamat, p.tgllahir, if(p.jeniskelamin = 0,"Laki - Laki","Perempuan") as jeniskelamin, a.agama, if(p.statuskawin = 0,"Belum Kawin", "Kawin") as statuskawin, pn.pendidikan, j.jurusan, p.jabatan, g.golongan, u.skpd as unitkerja FROM pegawai p
		JOIN agama a on p.agama = a.id
		JOIN golongan g on p.golongan = g.id
		JOIN jurusan j on p.jurusan = j.id
		JOIN pendidikan pn on p.pendidikan_terakhir = pn.id
		JOIN unitkerja u on p.unitkerja = u.id
		JOIN lemari l on p.lemari = l.id
		JOIN lantai la on p.lantai = la.id
		WHERE nip = ?', array($nip));


		if($nip == null)
		{
			$gagal = 'Isi NIP terlebih dahulu';
			return View::make('index', compact('gagal'));
		}

		if($peg1 != null)
		{
			$peg = $peg1[0];

			$idpegawai = $peg->idpegawai;

			$dok = DB::select('SELECT IFNULL(d.id,0) as idjenisdokumen, j.jenisdokumen as namajenisdokumen
            FROM jenisdokumen j
            LEFT OUTER JOIN dokumen d on j.idjenisdokumen = d.idjenisdokumen and d.idpegawai = ?', array($idpegawai));
			

        
		}
		else
		{
			$gagal = 'NIP Tidak Ada Pada Database';
			return View::make('index', compact('gagal'));
		}
		return View::make('result', compact('peg', 'dok', 'idpegawai'));

	}

}
