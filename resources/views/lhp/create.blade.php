@extends('template')

@section('lhp')
<li class="nav-item active">
    <a class="nav-link" href="/datalhp">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>LHPS</span>
    </a>
</li>
@endsection

@section('content')

<section class="content">
    <div class="sale_container">
        <div class="block-header">
            <h2>Tambah Data LHPS</h2>
        </div>
    </div>

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="body">
                    <form method="post" action="{{ route('lhp.store') }}" enctype="multipart/form-data">
                      @csrf
                        <div class="modal-body">
                                <div class="form-group">
                                    <label for="" class="control-label">kategori</label>
                                    <select name="kategori" class="form-control" id="" required>
                                        <option value="">Pilih Kategori</option>
                                        <option value="keuangan">Divisi Keuangan</option>
                                        <option value="SDM">Divisi SDM</option>
                                        <option value="tatakelola">Dividi Tata Kelola</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="" class="control-label">kode_lhp</label>
                                    @if(session('error'))
                                        <div class="alert alert-danger">
                                            {{ session('error') }}
                                        </div>
                                    @endif
                                    <input class="form-control" name="kode_lhp" id="kode_lhp" required>
                                </div>
                                <div class="form-group">
                                    <label for="" class="control-label">tanggal</label>
                                    <input type="date" name="tanggal" class="form-control" id="tanggal" required>
                                </div>
                                <div class="form-group">
                                    <label for="" class="control-label">uraian</label>
                                    <textarea type="text" name="uraian" class="form-control" id="uraian" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="" class="control-label">unit</label>
                                    <select name="unit" class="form-control" id="" required>
                                        <option value="">Pilih Unit Penanggung Jawab</option>
                                        <option value="keuangan">Divisi Keuangan</option>
                                        <option value="SDM">Divisi SDM</option>
                                        <option value="tatakelola">Dividi Tata Kelola</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="" class="control-label">file</label>
                                    <input type="file" name="file" class="form-control" id="file" required>
                                </div>
                                <div class="modal-footer">
                                    <button type="reset" class="btn btn-danger">Reset</button>
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
      </div>

</section>

    @endsection