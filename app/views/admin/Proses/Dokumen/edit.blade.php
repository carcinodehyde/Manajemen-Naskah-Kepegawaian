@extends('admin._layout.default')

@section('content')

<div class="page-header">
        <h3>
                Edit Data Dokumen

                <div class="pull-right">
                        <a href="{{ URL::previous() }}" class="btn btn-small btn-inverse"><i class="icon-circle-arrow-left icon-white"></i> Kembali</a>
                </div>
        </h3>
</div>
<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-table fa-fw"></i> Edit Data Dokumen
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        <div class="col-lg-6">
                                <form class="form-horizontal" method="post" action="" autocomplete="off" files="true" enctype="multipart/form-data">
                                <div class="form-group">
                                            <label>Jenis Dokumen</label>
                                            <select name="idjenisdokumen" class="form-control">
                                            @foreach($jenis as $j)
                                                    <option value="{{ $j->idjenisdokumen }}" @if($j->idjenisdokumen==$doc->idjenisdokumen) selected @endif>{{ $j->jenisdokumen }}</option>
                                            @endforeach
                                            </select>
                                        </div>
                                <div class="control-group">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                      <div class="fileinput-new thumbnail" style="width: 480px; height: 360px;">
                                      </div>
                                      <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 480px; max-height: 360px;"></div>
                                      <div>
                                        <span class="btn btn-default btn-file"><span class="fileinput-new">Pilih Gambar</span><span class="fileinput-exists">Ganti</span><input type="file" name="image"></span>
                                        <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Hapus</a>
                                      </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                                <div class="controls">
                                                        <a class="btn btn-link" href="{{ URL::previous() }}">&laquo; Batal</a>
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

@section('script')
<script type="text/javascript">
$('.fileinput').fileinput()
</script>
@stop