@extends('template')

@section('user')
<li class="nav-item active">
    <a class="nav-link" href="{{ route('divisi.index') }}">
        <i class="fas fa-fw fa-chart-area"></i>
        <span> Data Divisi</span>
    </a>
</li>
@endsection

@section('content')

<section class="content">
    <div class="sale_container">
        <div class="block-header">
            <h2>Edit Data Divisi</h2>
        </div>
    </div>

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="body">
                    <form method="post" action="{{ route('divisi.update', $divisi->id ) }}" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="" class="control-label">Nama Divisi</label>
                                <input type="text" name="nama_divisi" class="form-control" id="name" value="{{ $divisi->nama_divisi }}" required>
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
