@extends('admin._layout.default')

@section('content')
    <div class="col-lg-12">
                    <h1 class="page-header">Data Pegawai</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="pull-left">
                                <a href="{{ route('PegawaiCreate') }}" class="btn btn-small btn-info"><i class="icon-plus-sign icon-white"></i> Tambah data</a>
                            </div>
                            <br/><br/>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-table fa-fw"></i> Data Pegawai
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
                                        <th class="span2">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $key => $val)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $val->nip }}</td>
                                        <td>{{ $val->nama }}</td>
                                        <td>{{ $val->jabatan }}</td>
                                        <td>
                                            <a href="{{ route('PegawaiEdit', $val->idpegawai) }}" class="btn btn-mini btn-info">
                                            <span class="glyphicon glyphicon-edit"></span></a>
                                            
                                            <a href="{{ route('PegawaiDelete', $val->idpegawai) }}" class="btn btn-mini btn-danger"> 
                                            <span class="glyphicon glyphicon-trash"></span></a>
                                            

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