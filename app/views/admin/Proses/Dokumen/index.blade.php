@extends('admin._layout.default')

@section('content')
    <div class="col-lg-12">
                    <h1 class="page-header">Upload Dokumen</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="col-lg-12">
            <div class="panel panel-default"> 
                    <div class="panel-heading"> Data Pegawai</div>
                    <div class="panel-body" align="center">
                        <table class="table table-noborber">
                            <tr>
                                <th style="width:20% ">NIP </th>
                                <th style="width:5% ">:</th>
                                <th>{{ $peg->nip }}</th>
                            </tr>
                            <tr>
                                <th>Nama Pegawai </th>
                                <th style="width:5% ">:</th>
                                <th>{{ $peg->nama }}</th>
                            </tr>
                            <tr>
                                <th>Jabatan</th>
                                <th style="width:5% ">:</th>
                                <th>{{ $peg->jabatan }}</th>
                            </tr>
                        </table>

                    </div>
                </div>
            </div>

            <hr>
            <div class="pull-right">
                                <a href="{{ route('proses') }}" class="btn btn-small btn-default"><i class="icon-plus-sign icon-default"></i> Kembali</a>
                                <a href="{{ route('upload', $idpegawai) }}" class="btn btn-small btn-info"><i class="icon-plus-sign icon-white"></i> Tambah data</a>
                            <br/><br/>
                            </div>
            
                            
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-table fa-fw"></i> Daftar Dokumen
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body" align="center">
                            <table class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th style="width:5%">No</th>
                                        <th style="width:50%">Nama Dokumen</th>
                                        <th class="span6">Preview</th>
                                        <th style="width:10%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $key => $val)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $val->jenisdokumen }}</td>
                                        <td><a href="{{ URL::asset('assets/dms/'.$idpegawai.'/'.$val->lokasi.'') }}" target="_blank"> Preview</a></td>                                        
                                        <td>
                                            <a href="{{ route('EditDokumen', $val->id) }}" class="btn btn-mini btn-info">
                                            <span class="glyphicon glyphicon-edit"></span></a>
                                            
                                            <a href="{{ route('DeleteDokumen', $val->id) }}" class="btn btn-mini btn-danger"> 
                                            <span class="glyphicon glyphicon-trash"></span></a>
                                            

                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                                
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-8 -->
            </div>
            <!-- /.row -->

@stop