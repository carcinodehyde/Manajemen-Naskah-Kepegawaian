<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>SISTEM INFORMASI TATA NASKAH KEPEGAWAIAN ELEKTRONIK</title>

@include('_partials.assets')
@yield('style')
<style>
  body {
    color: #000;
  }
</style>
<!--[if lte IE 6]>
<style type="text/css">
img, div,span,a,button { behavior: url(js/iepngfix.htc) }
</style> 
<![endif]-->
</head>
<body>
<div class="wrapper1">&nbsp;</div>
		<div class="instansi"></div>

		<div class="interface">
		@yield('content')  
</div>
<div id="kaki">
  <p>
    TATA NASKAH KEPEGAWAIAN ELEKTRONIK<br>BADAN KEPEGAWAIAN DAERAH SEMARANG<br>
    by Deddy Setiawan</a>
  </p>
</div>

</body>
</html>
