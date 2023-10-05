@extends('template')

@section('user')
<li class="nav-item active">
    <a class="nav-link" href="/akun">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Data akun</span>
    </a>
</li>
@endsection

@section('content')

<section class="content">
    <div class="sale_container">
        <div class="block-header">
            <h2>Tambah Data User</h2>
        </div>
    </div>

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="body">
                    <form method="post" action="{{ route('akun.store') }}" enctype="multipart/form-data">
                      @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="" class="control-label">Nama</label>
                                <input type="text" name="name" class="form-control" id="name" required>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Email</label>
                                <input class="form-control" name="email" id="email" required>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">No Telphone</label>
                                <input type="number" name="notel" class="form-control" id="notel" required>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Level</label>
                                <select name="id_level" class="form-control" id="">
                                    <option value="">--Pilih Level--</option>
                                    @foreach ($level as $level )
                                        <option value="{{ $level->id }}">{{ $level->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Cabang</label>
                                <select class="custom-select rounded-0" aria-label="Default select example" name="id_cabang" id="exampleSelectRounded0" >
                                    <option value="">--Pilih Cabang--</option>
                                    @foreach ( $cabang as $cb )
                                        <option value="{{ $cb ->id }}">
                                            {{ $cb  -> nama}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="" class="control-label">Password</label>
                                <input type="password" name="password" class="form-control" id="password" required>
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
