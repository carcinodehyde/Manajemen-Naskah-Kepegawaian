@extends('admin._layout.default')

@section('content')
    <div class="col-lg-12">
                    <h1 class="page-header">Daftar Pegawai</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-table fa-fw"></i> Daftar Pegawai
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body" align="center">
                            <table class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th style="width:5%">No</th>
                                        <th style="width:15%">NIP</th>
                                        <th class="span6">Nama Pegawai</th>
                                        <th class="span6">jabatan</th>
                                        <th class="span2" style="text-align: right; width: 20%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $key => $val)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $val->nip }}</td>
                                        <td>{{ $val->nama }}</td>
                                        <td>{{ $val->jabatan }}</td>
                                        <td style="text-align: right">
                                            <a href="{{ route('Lokasi', $val->idpegawai) }}" class="btn btn-mini btn-info">
                                            <span class="glyphicon glyphicon-list"></span> Lokasi</a> | 
                                            
                                            <a href="{{ route('Dokumen', $val->idpegawai) }}" class="btn btn-mini btn-info"> 
                                            <span class="glyphicon glyphicon-list"></span> Dokumen</a>
                                            

                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                                {{ $data->links() }}
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-8 -->
            </div>
            <!-- /.row -->

@stop