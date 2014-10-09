<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>
			@section('title')
			Laporan
			@show
		</title>
	
		@yield('css')
		<style>
		@section('styles')
		
		body {
			
		}
		.tabel {
		text-align: left;
		font-size: 12px;

		}
		.tabelMid{
			text-align:center;
			font-size:13px;
		}
		.tabelBorder, .tableBorder th, .tableBorder td{
			border:1px;
			border-spacing:0;
		}
		.kartu {
			width:5.8cm;
			height:8.5cm;
			border:solid;
			text-align:center;
			font-size:5;
		}
		@show
		</style>
	</head>

	<body>
	@yield('content')
		
	</body>
</html>
