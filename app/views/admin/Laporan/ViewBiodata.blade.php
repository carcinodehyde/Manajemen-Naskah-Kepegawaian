@extends('admin._layout.default')

@section('content')

<div class="page-header">
        <h3>
                Laporan Biodata Pegawai

                <div class="pull-right">
                        <!-- <a href="{{  URL::to('admin/master/Lemari') }}" class="btn btn-small btn-inverse"><i class="icon-circle-arrow-left icon-white"></i> Kembali</a> -->
                </div>
        </h3>
</div>
<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-table fa-fw"></i> Laporan Biodata Pegawai
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        <div class="col-lg-6">
                                <form class="form-horizontal" method="post" action="" autocomplete="off" target="_blank">
                                
                                <div class="form-group">
                                            <label>Pegawai</label>
                                            <select name="idpegawai" class="form-control">
                                            @foreach($pegawai as $val)
                                                    <option value="{{ $val->idpegawai }}">{{ $val->nama }}</option>
                                            @endforeach
                                            </select>
                                </div>

                                <div class="control-group">
                                                <div class="controls">
                                                        <!-- <a class="btn btn-link" href="{{ URL::to('admin/master/Lemari') }}">&laquo; Batal</a> -->
                                                        <input type="submit" class="btn btn-default" value="Tampilkan"></input>
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

