@extends('template')

@section('tangerang')
<li class="nav-item active">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Tangerang</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item active" href="/tangerang-admin">Kota Tangerang</a>
            <a class="collapse-item" href="/tangkab-admin">Kab Tangerang</a>
            <a class="collapse-item" href="/tangsel-admin">Tangerang Selatan</a>
        </div>
    </div>
</li>
@endsection

@section('content')

<section class="content">
    <div class="sale_container">
        <div class="block-header">
            <h2>Edit Kota Tangerang</h2>
        </div>
    </div>

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="body">
                    <form method="post" action="/updatetangerang/{{ $data->id }}" enctype="multipart/form-data">
                      @csrf
                        <div class="modal-body">
                                <div class="form-group">
                                    <label for="" class="control-label">ket</label>
                                    <input type="text" name="ket" class="form-control" id="ket"value="{{ $data->ket }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="" class="control-label">jenis_property</label>
                                    <input class="form-control" name="jenis_property" id="jenis_property"value="{{ $data->jenis_property }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="" class="control-label">alamat</label>
                                    <input type="text" name="alamat" class="form-control" id="alamat"value="{{ $data->alamat }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="" class="control-label">luas_tanah</label>
                                    <input type="text" name="luas_tanah" class="form-control" id="luas_tanah"value="{{ $data->luas_tanah }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="" class="control-label">luas_bangunan</label>
                                    <input type="text" name="luas_bangunan" class="form-control" id="luas_bangunan"value="{{ $data->luas_bangunan }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="" class="control-label">sertifikat</label>
                                    <input type="text" name="sertifikat" class="form-control" id="sertifikat"value="{{ $data->sertifikat }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="" class="control-label">harga</label>
                                    <input type="number" name="harga" class="form-control" id="harga"value="{{ $data->harga }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="" class="control-label">link_foto</label>
                                    <input type="text" name="link_foto" class="form-control" id="link_foto"value="{{ $data->link_foto }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="" class="control-label">link_maps</label>
                                    <input type="text" name="link_maps" class="form-control" id="link_maps"value="{{ $data->link_maps }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="" class="control-label">catatan</label>
                                    <input type="text" name="catatan" class="form-control" id="catatan"value="{{ $data->catatan }}" required>
                                </div>
                                <div class="modal-footer">
                                    <button type="reset" class="btn btn-danger">Reset</button>
                                    <button type="submit" class="btn btn-success edit">Edit</button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
      </div>

</section>

    @endsection