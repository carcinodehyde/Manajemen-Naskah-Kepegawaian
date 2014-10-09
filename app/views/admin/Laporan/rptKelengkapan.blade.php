@extends('admin._layout.report')

@section('css')
<style>
table { 
		width: 100%; 

		border-collapse: collapse; 
		font: 14px, black;

	}
	/* Zebra striping */
	tr:nth-of-type(odd) { 
		background: #eee; 
	}
	th { 
		background: #333; 
		color: white; 
		font-weight: bold; 
	}
	td, th { 
		padding: 6px; 
		border: 1px solid #ccc; 
		text-align: left; 
	}
	td, caption{
		color: black;
	}
	a {
		color: white;
		font: 18px;
	}
	#biggerbox{
	  width:650px;
	  margin:0 auto;
	  -moz-border-radius: 10px;
	  -webkit-border-radius: 10px;
	  -khtml-border-radius: 10px;
	  border-radius: 10px;
	}
  #judul{
    font-size: 24px;
    text-align: center;
    font-style: bold;
  }
</style>
@stop

@section('content')
<div id="biggerbox">
<div id="judul"> Laporan Kelengkapan Pegawai <hr></div>

<br/><br/><br/><br/><br/>
<table>
	<caption>Detail Dokumen:</caption>
<tr>
	<th width='20'>No</th>
	<th>Nama Pegawai</th>
	<th>Kekurangan Dokumen</th>
</tr>
@foreach($dok as $key => $val)
<tr>
	<td>{{ $key+1 }}</td>
	<td>{{ $val->nama }}</td>
	<td>{{ $val->jenisdokumen }}</td>
</tr>
@endforeach
</table>
</div>
@stop