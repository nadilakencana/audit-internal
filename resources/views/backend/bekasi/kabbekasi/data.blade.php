@extends('template')

 @section('bekasi')
<li class="nav-item active">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#bekasi"
        aria-expanded="true" aria-controls="bekasi">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Bekasi</span>
    </a>
    <div id="bekasi" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item " href="/bekasi-admin">Kota Bekasi </a>
            <a class="collapse-item active" href="/kabbekasi-admin">Kab Bekasi </a>
        </div>
    </div>
</li>
@endsection

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
                        @foreach ($kabbekasi as $row)
                    <tbody>
                            <td>{{ $row->ket }}</td>
                            <td>{{ $row->jenis_property }}</td>
                            <td>{{ $row->alamat }}</td>
                            <td>{{ $row->luas_tanah }}</td>
                            <td>{{ $row->luas_bangunan }}</td>
                            <td>{{ $row->sertifikat }}</td>
                            <td>{{ $row->harga }}</td>
                            <td>{{ $row->link_foto }}</td>
                            <td>{{ $row->link_maps }}</td>
                            <td>{{ $row->catatan }}</td>
                            <td>
                                <a href="/tampilkabbekasi/{{ $row->id }}" class="btn btn-info">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <a href="#" class="btn btn-danger hapuskabbekasi" data-id="{{ $row->id }}" data-jenis_property="{{ $row->jenis_property }}">
                                    <i class="fa-solid fa-trash-can"></i>
                                </a>
                            </td>
                        @endforeach 
                    </tbody>
                </table>
                <div id="tambah" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title text-center text-dark">Tambah data</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <form method="post" action="tambahkabbekasi" class="formbarang" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="" class="control-label">ket</label>
                                    <input type="text" name="ket" class="form-control" id="ket" required>
                                </div>
                                <div class="form-group">
                                    <label for="" class="control-label">jenis_property</label>
                                    <textarea class="form-control" name="jenis_property" id="jenis_property" style="height: 100px" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="" class="control-label">alamat</label>
                                    <input type="text" name="alamat" class="form-control" id="alamat" required>
                                </div>
                                <div class="form-group">
                                    <label for="" class="control-label">luas_tanah</label>
                                    <input type="text" name="luas_tanah" class="form-control" id="luas_tanah" required>
                                </div>
                                <div class="form-group">
                                    <label for="" class="control-label">luas_bangunan</label>
                                    <input type="text" name="luas_bangunan" class="form-control" id="luas_bangunan" required>
                                </div>
                                <div class="form-group">
                                    <label for="" class="control-label">sertifikat</label>
                                    <input type="text" name="sertifikat" class="form-control" id="sertifikat" required>
                                </div>
                                <div class="form-group">
                                    <label for="" class="control-label">harga</label>
                                    <input type="number" name="harga" class="form-control" id="harga" required>
                                </div>
                                <div class="form-group">
                                    <label for="" class="control-label">link_foto</label>
                                    <input type="text" name="link_foto" class="form-control" id="link_foto" required>
                                </div>
                                <div class="form-group">
                                    <label for="" class="control-label">link_maps</label>
                                    <input type="text" name="link_maps" class="form-control" id="link_maps" required>
                                </div>
                                <div class="form-group">
                                    <label for="" class="control-label">catatan</label>
                                    <input type="text" name="catatan" class="form-control" id="catatan" required>
                                </div>
                                <div class="modal-footer">
                                    <button type="reset" class="btn btn-danger">Reset</button>
                                    <button type="submit" class="btn btn-success tambah">Tambah</button>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection