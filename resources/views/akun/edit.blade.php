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
                                <label for="" class="control-label">level</label>
                                <select name="level" class="form-control" id="" value="{{ $akun->level }}">
                                    <option value="">Pilih Level</option>
                                    <option value="admin">Admin</option>
                                    <option value="audithor">Audithor</option>
                                    <option value="spi">Kepala SPI</option>
                                    <option value="direc">Directur Utama</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">password</label>
                                <input type="password" name="password" class="form-control" id="password"  value="{{ $akun->password }}" required>
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