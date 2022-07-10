@extends('template')

@section('anggota')   
    <li class="active">       
        <a href="#" class="menu-toggle">
            <i class="fa fa-users icon"></i>
            <span>Anggota</span>
        </a>
        <ul class="ml-menu">
            <li class="active">
                <a href="/dataanggota">
                    <span>Data Anggota</span>
                </a> 
            </li>
            <li>
                <a href="/angkatan">
                    <span>Angkatan</span>
                </a> 
            </li>
        </ul>
    </li>                  
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Edit Data Anggota</h2>
        </div>
    </div>

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Edit Data Anggota
                    </h2>
                    <ul class="header-dropdown m-r--5">
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">more_vert</i>
                            </a>
                             <ul class="dropdown-menu pull-right">
                                <li><a href="javascript:void(0);">Action</a></li>
                                <li><a href="javascript:void(0);">Another action</a></li>
                                <li><a href="javascript:void(0);">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <form method="post" action="/updateanggota/{{ $data->id }}">
                      @csrf
                        <div class="row clearfix">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        <label for="">Nama</label>
                                        <input type="text" name="nama" class="form-control" id="nama" value="{{ $data->nama }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        <label for="">Nim</label>
                                        <input type="number" name="nim" class="form-control" id="nim" value="{{ $data->nim }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        <label for="">No Telpon</label>
                                        <input type="number" name="no_tlp" class="form-control" id="no_tlp" value="{{ $data->no_tlp }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        <label for="">Email</label>
                                        <input type="text" name="email" class="form-control" id="email" value="{{ $data->email }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        <label for="">Angkatan</label>
                                        <input type="number" name="angkatan_id" class="form-control" id="angkatan_id" value="{{ $data->angkatan_id }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <a href="/dataanggota" type="reset" class="btn btn-danger">
                                <i class="fa-solid fa-rotate-left"></i>
                            </a>
                              <button type="submit" class="btn btn-info edit">
                                <i class="fa-solid fa-pen-to-square"></i>
                              </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
      </div>

</section>

    @endsection