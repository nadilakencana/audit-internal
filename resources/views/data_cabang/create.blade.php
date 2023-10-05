@extends('template')

@section('dataCabang')
<li class="nav-item active">
    <a class="nav-link" href="{{ route('cabang.index') }}">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Data Cabang</span>
    </a>
</li>
@endsection

@section('content')

<section class="content">
    <div class="sale_container">
        <div class="block-header">
            <h2>Tambah Data Cabang</h2>
        </div>
    </div>

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="body">
                    <form method="post" action="{{ route('cabang.store') }}" enctype="multipart/form-data">
                      @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="" class="control-label">Nama Cabang</label>
                                <input type="text" name="nama" class="form-control" id="name" required>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Alamat</label>
                                <textarea type="text" name="alamat" class="form-control" id="name" required></textarea>
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
