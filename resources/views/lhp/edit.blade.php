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
            <h2>Edit Data LHPS</h2>
        </div>
    </div>

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="body">
                    <form method="post" action="{{ route('lhp.update', ['id' => $lhp->id]) }}" enctype="multipart/form-data">
                        @csrf
                    
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="kategori" class="control-label">kategori</label>
                                <input type="text" name="kategori" class="form-control" id="kategori" value="{{ $lhp->kategori }}" required>
                            </div>
                            <div class="form-group">
                                <label for="kode_lhp" class="control-label">kode_lhp</label>
                                @if(session('error'))
                                    <div class="alert alert-danger">
                                        {{ session('error') }}
                                    </div>
                                @endif
                                <input class="form-control" name="kode_lhp" id="kode_lhp" value="{{ $lhp->kode_lhp }}" required>
                            </div>
                            <div class="form-group">
                                <label for="tanggal" class="control-label">tanggal</label>
                                <input type="date" name="tanggal" class="form-control" id="tanggal" value="{{ $lhp->tanggal }}" required>
                            </div>
                            <div class="form-group">
                                <label for="uraian" class="control-label">uraian</label>
                                <textarea name="uraian" class="form-control" id="uraian" required>{{ $lhp->uraian }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="unit" class="control-label">unit</label>
                                <input type="text" name="unit" class="form-control" id="unit" value="{{ $lhp->unit }}" required>
                            </div>
                            <div class="form-group">
                                <label for="file" class="control-label">File</label>
                                <input type="file" name="file" class="form-control mb-3" id="file">
                                @if ($lhp->file)
                                    <h6>File saat ini: <a href="{{ asset('storage/' . $lhp->file) }}" class="btn btn-success" target="_blank">{{ basename($lhp->file) }}</a></h6>
                                @endif
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