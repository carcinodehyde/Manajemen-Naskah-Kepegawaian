@extends('_layouts/default')

@section('content')

<form class="form_box" method="post" action="" autocomplete="off">
<div id="loginbox">
	@if($gagal != null)
	<div id="notification" class="information">
		<p>
			{{ $gagal }}
		</p>
	</div>
	@endif
<div class="control-group">
        <label class="control-label" for="nip">Cari data pegawai Berdasarkan NIP</label>
        <div class="controls">
                <input class="inputbox" type="text" name="nip" id="nip" value="" />
                <button type="submit" class="btn btn-success">Cari</button>
                </div>
                <br/><br/>
    <div id="notification" class="information">
		<p>
			<a href="{{ route('signin') }}">login admin</a>
		</p>
	</div>
</div>

</form>
</div>
@stop