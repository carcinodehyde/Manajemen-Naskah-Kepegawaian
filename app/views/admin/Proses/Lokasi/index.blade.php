@extends('admin._layout.default')

@section('content')

<div class="page-header">
        <h3>
                Input Data Lokasi

                <div class="pull-right">
                        <a href="{{  URL::to('admin/proses') }}" class="btn btn-small btn-inverse"><i class="icon-circle-arrow-left icon-white"></i> Kembali</a>
                </div>
        </h3>
</div>
<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-table fa-fw"></i> Input Data Lokasi
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        <div class="col-lg-6">
                                <form class="form-horizontal" method="post" action="" autocomplete="off">
                                
                                <div class="form-group">
                                            <label>Lantai</label>
                                            <select name="lantai" class="form-control">
                                            @foreach($lantai as $val)
                                                    <option value="{{ $val->id }}" @if($val->id==$data->lantai) selected @endif>{{ $val->lantai }}</option>
                                            @endforeach
                                            </select>
                                </div>

                                <div class="form-group">
                                            <label>Lemari</label>
                                            <select name="lemari" class="form-control">
                                            @foreach($lemari as $val)
                                                    <option value="{{ $val->id }}" @if($val->id==$data->lemari) selected @endif>{{ $val->lemari }}</option>
                                            @endforeach
                                            </select>
                                </div>

                                <div class="form-group">
                                            <label>No Lemari Arsip</label>
                                            <input class="form-control" type="text" name="no_lemari_arsip" id="no_lemari_arsip" value="{{ Input::old('no_lemari_arsip', $data->no_lemari_arsip) }}" placeholder="Nomor Lemari Arsip">
                                </div>

                                <div class="form-group">
                                            <label>No Rak Arsip</label>
                                            <input class="form-control" type="text" name="no_rak_arsip" id="no_rak_arsip" value="{{ Input::old('no_rak_arsip', $data->no_rak_arsip) }}" placeholder="Nomor Rak Arsip">
                                </div>
                                
                                <div class="control-group">
                                                <div class="controls">
                                                        <a class="btn btn-link" href="{{ URL::to('admin/proses') }}">&laquo; Batal</a>
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

