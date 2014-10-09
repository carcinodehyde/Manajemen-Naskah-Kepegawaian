<?php

class Dokumen extends Eloquent 
{
	protected $table = 'dokumen';
	public $timestamps = false;
	
	
	public function idjenisdokumen()
	{
		return $this->belongsTo('Jenisdokumen', 'idjenisdokumen');
	}

	public function idpegawai()
	{
		return $this->belongsTo('Pegawai', 'idpegawai');
	}
}