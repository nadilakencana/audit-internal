@extends('template')

@section('user')
<li class="nav-item active">
    <a class="nav-link" href="{{ route('jenis.index') }}">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Data Jenis Pemeriksaan</span>
    </a>
</li>
@endsection

@section('content')

<section class="content">
    <div class="sale_container">
        <div class="block-header">
            <h2>Tambah Data Jenis Pemeriksaan</h2>
        </div>
    </div>

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="body">
                    <form method="post" action="{{ route('jenis.store') }}" enctype="multipart/form-data">
                      @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="" class="control-label">Nama Jenis Pemeriksaan</label>
                                <input type="text" name="nama_jenis" class="form-control" id="name" required>
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
