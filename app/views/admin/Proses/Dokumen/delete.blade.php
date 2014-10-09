@extends('admin._layout.default')

@section('content')

<div class="page-header">
        <h3>
                Konfirmasi Hapus Data

                <div class="pull-right">
                        <a href="{{  URL::to('admin/proses/Dokumen/'.$idpegawai) }}" class="btn btn-small btn-inverse"><i class="icon-circle-arrow-left icon-white"></i> Kembali</a>
                </div>
        </h3>
</div>
<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-table fa-fw"></i> Konfirmasi Hapus Data
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        <div class="col-lg-6">
                                <form class="form-horizontal" method="post" action="" autocomplete="off">
                                <div class="control-group">
								        <label class="" for="namaKoperasi"><h2>Lanjutkan proses penghapusan data?</h2></label>

								</div>
                                <div class="control-group">
                                                <div class="controls">
                                                        <a class="btn btn-link" href="{{ URL::to('admin/proses/Dokumen/'.$idpegawai) }}">&laquo; Batal</a>
                                                        <button type="submit" class="btn btn-danger">Hapus</button>
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

