@extends('admin._layout.default')

@section('content')

<div class="page-header">
        <h3>
                Input Data Jenis Dokumen

                <div class="pull-right">
                        <a href="{{  URL::to('admin/master/JenisDokumen') }}" class="btn btn-small btn-inverse"><i class="icon-circle-arrow-left icon-white"></i> Kembali</a>
                </div>
        </h3>
</div>
<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-table fa-fw"></i> Input Data Jenis Dokumen
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        <div class="col-lg-6">
                                <form class="form-horizontal" method="post" action="" autocomplete="off">
                                <div class="form-group">
                                            <label>Nama jenis Dokumen</label>
                                            <input class="form-control" type="text" name="jenisdokumen" id="jenisdokumen" value="{{ Input::old('jenisdokumen') }}" placeholder="Nama jenis Dokumen">
                                        </div>
                                <div class="control-group">
                                                <div class="controls">
                                                        <a class="btn btn-link" href="{{ URL::to('admin/master/JenisDokumen') }}">&laquo; Batal</a>
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

