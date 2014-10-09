@extends('admin._layout.default')

@section('content')

<div class="page-header">
        <h3>
                Input Data Pegawai

                <div class="pull-right">
                        <a href="{{  URL::to('admin/master/Pegawai') }}" class="btn btn-small btn-inverse"><i class="icon-circle-arrow-left icon-white"></i> Kembali</a>
                </div>
        </h3>
</div>
<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-table fa-fw"></i> Input Data Pegawai
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        <div class="col-lg-6">
                                <form class="form-horizontal" method="post" action="" autocomplete="off">
                                <div class="form-group">
                                            <label>NIP</label>
                                            <input class="form-control" type="text" name="nip" id="nip" value="{{ Input::old('nip') }}" placeholder="Nomor Induk Pegawai">
                                        </div>
                                <div class="form-group">
                                            <label>Nama Pegawai</label>
                                            <input class="form-control" type="text" name="nama" id="nama" value="{{ Input::old('nama') }}" placeholder="Nama Pegawai">
                                        </div>
                                <div class="form-group">
                                <div class="controls">
                                            <label>Tgl Lahir</label>
                                            <input class="form-control datepicker" data-date-format="yyyy-mm-dd" type="text" name="tgllahir" id="tgllahir" value="{{ Input::old('tgllahir') }}" placeholder="Tanggal Lahir">
                                        </div>
                                        </div>
                                <div class="form-group">
                                            <label>Alamat</label>
                                            <input class="form-control" type="text" name="alamat" id="alamat" value="{{ Input::old('alamat') }}" placeholder="Alamat">
                                        </div>
                                <div class="form-group">
                                            <label>Jabatan</label>
                                            <input class="form-control" type="text" name="jabatan" id="jabatan" value="{{ Input::old('jabatan') }}" placeholder="Jabatan">
                                </div>
                                <div class="form-group">
                                            <label>Agama</label>
                                            <select name="agama" class="form-control">
                                            @foreach($agama as $val)
                                                    <option value="{{ $val->id }}">{{ $val->agama }}</option>
                                            @endforeach
                                            </select>
                                </div>
                                <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <select name="jeniskelamin" class="form-control">
                                                    <option value="0"> Laki-Laki</option>
                                                    <option value="1"> Perempuan</option>
                                            </select>
                                </div>
                                <div class="form-group">
                                            <label>Status Perkawinan</label>
                                            <select name="statuskawin" class="form-control">
                                                    <option value="0"> Belum Menikah</option>
                                                    <option value="1"> Sudah Menikah</option>
                                            </select>
                                </div>
                                <div class="form-group">
                                            <label>Golongan</label>
                                            <select name="golongan" class="form-control">
                                            @foreach($golongan as $gol)
                                                    <option value="{{ $gol->id }}">{{ $gol->golongan }}</option>
                                            @endforeach
                                            </select>
                                </div>
                                <div class="form-group">
                                            <label>Pendidikan Terakhir</label>
                                            <select name="pendidikan_terakhir" class="form-control">
                                            @foreach($pend as $pen)
                                                    <option value="{{ $pen->id }}">{{ $pen->pendidikan }}</option>
                                            @endforeach
                                            </select>
                                </div>
                                <div class="form-group">
                                            <label>Jurusan</label>
                                            <select name="jurusan" class="form-control">
                                            @foreach($jurus as $jur)
                                                    <option value="{{ $jur->id }}">{{ $jur->jurusan }}</option>
                                            @endforeach
                                            </select>
                                </div>
                                <div class="form-group">
                                            <label>Unit Kerja</label>
                                            <select name="unitkerja" class="form-control">
                                            @foreach($unit as $un)
                                                    <option value="{{ $un->id }}">{{ $un->skpd }}</option>
                                            @endforeach
                                            </select>
                                </div>
                                <div class="control-group">
                                                <div class="controls">
                                                        <a class="btn btn-link" href="{{ URL::to('admin/master/Pegawai') }}">&laquo; Batal</a>
                                                        <button type="submit" class="btn btn-default">Simpan</button>
                                                </div>
                                        </div>

                                </form>
                        </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-8 -->
            </div>
            <!-- /.row -->
@stop