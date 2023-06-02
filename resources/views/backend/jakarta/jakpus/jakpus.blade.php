@extends('template')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            <div class="justify-content-right" style="">
                <button data-toggle="modal" data-target="#tambah" class="btn btn-success xs btn-flat"><i class="fa fa-plus-circle"></i> Tambah</button>                         
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ket</th>
                            <th>jenis_property</th>
                            <th>alamat</th>
                            <th>luas_tanah</th>
                            <th>luas_bangunan</th>
                            <th>sertifikat</th>
                            <th>harga</th>
                            <th>link_foto</th>
                            <th>link_maps</th>
                            <th>catatan</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ket</th>
                            <th>jenis_property</th>
                            <th>alamat</th>
                            <th>luas_tanah</th>
                            <th>luas_bangunan</th>
                            <th>sertifikat</th>
                            <th>harga</th>
                            <th>link_foto</th>
                            <th>link_maps</th>
                            <th>catatan</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection