@extends('template')

@section('user')
<li class="nav-item active">
    <a class="nav-link" href="akun">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Data akun</span>
    </a>
</li>
@endsection

@section('content')

<section class="content">
    <div class="sale_container">
        <div class="block-header">
            <h2>Edit Data akun</h2>
        </div>
    </div>

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="body">
                    <form method="post" action="{{ route('akun.update', ['id' => $akun->id]) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="" class="control-label">Nama</label>
                                <input type="text" name="name" class="form-control" id="name"  value="{{ $akun->name }}" required>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">email</label>
                                <input class="form-control" name="email" id="email" value="{{ $akun->email }}" required>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">notel</label>
                                <input type="number" name="notel" class="form-control" id="notel"  value="{{ $akun->notel }}" required>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Level</label>
                                <select name="id_level" class="form-control" id="">
                                    <option value="{{ $akun->id_level }}">{{ $akun->level->nama }}</option>
                                    @foreach ($level as $lv )
                                        <option value="{{ $lv->id }}">{{ $lv->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Divisi</label>
                                <select class="custom-select rounded-0" aria-label="Default select example" name="id_cabang" value="{{ $akun->id_cabang }}" id="exampleSelectRounded0" >
                                    @if($akun->id_cabang == null)
                                    <option value="">--Pilih Cabang--</option>
                                    @else
                                    <option value="{{ $akun ->id_cabang }}">
                                            {{ $akun ->cabang->nama}}
                                    </option>
                                    <option value="">--Pilih Cabang--</option>
                                    @endif
                                    @foreach ( $cabang as $cb )
                                        <option value="{{ $cb ->id }}">
                                            {{ $cb  -> nama}}
                                        </option>
                                    @endforeach
                                </select>
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
