<?php

class Pegawai extends Eloquent 
{
	protected $table = 'pegawai';
	public $timestamps = false;
	protected $primaryKey = "idpegawai";
	public function delete()
	{
		return parent::delete();
	}
}