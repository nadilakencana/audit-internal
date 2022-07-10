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
            <h2>DAFTAR ANGGOTA</h2>
        </div>

        <div class="container-fluid ">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 tblbarang">
                    <div class="card ">
                        <div class="header">
                            <div class="">
                              <button data-toggle="modal" data-target="#tambah" class="btn btn-success xs btn-flat"><i class="fa fa-plus-circle"></i> Tambah</button>                         
                            </div>
                            <div class="row mb-3">
                              <div class="col-sm-12 col-md-6">
                            <ul class="header-dropdown m-r--5">
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <div class="row g-3 align-items-center pull-right">
                                    <div class="col-auto">
                                      <form action="/dataanggota" method="GET">
                                        <input type="search" id="inputPassword6" name="search" class="form-control " aria-describedby="passwordHelpInline" placeholder="Search..." >       
                                      </form>
                                    </div>
                                  </div>    
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                          <th scope="col">No</th>
                                          <th scope="col">Nama</th>
                                          <th scope="col">Nim</th>
                                          <th scope="col">No Telpon</th>
                                          <th scope="col">Email</th>
                                          <th scope="col">Angkatan</th>
                                          <th scope="col">Created</th>
                                          <th scope="col">Updated</th>
                                          <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php $i = 1; ?>
                                        @foreach ($data as $index => $row)
                                        <tr>
                                          <th scope="row">{{ $index + $data->firstItem() }}</th>
                                          <td>{{ $row->nama }}</td>
                                          <td>{{ $row->nim }}</td>
                                          <td>{{ $row->no_tlp }}</td>
                                          <td>{{ $row->email }}</td>
                                          <td>{{ $row->angkatan->angkatan }}</td>
                                          <td>{{ tanggal_indonesia($row->created_at) }}</td>
                                          <td>{{ $row->updated_at->diffForHumans() }}</td>
                                          <td>
                                              <a href="/tampilanggota/{{ $row->id }}" class="btn btn-info">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                              </a>
                                              <a href="#" class="btn btn-danger deleteanggota" data-id="{{ $row->id }}" data-nama="{{ $row->nama }}">
                                                <i class="fa-solid fa-trash-can"></i>
                                              </a>
                                          </td>
                                        </tr>   
                                        <?php $i++;?>        
                                        @endforeach                     
                                    </tbody>
                                </table>
                                <div class="pull-right">
                                    {{ $data->links() }}
                                </div>
                                <div id="tambah" class="modal fade" role="dialog">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title text-center text-dark barang">Tambah data anggota</h4>
                                        </div>
                                        <form method="post" action="tambah" class="formbarang">
                                          @csrf
                                            <div class="modal-body">
                                              <div class="form-group">
                                                <label for="" class="control-label">Nama Anggota</label>
                                                <input type="text" name="nama" class="form-control" id="nama" required>
                                              </div>
                                              <div class="form-group">
                                                <label for="" class="control-label">NIM</label>
                                                <input type="number" name="nim" class="form-control" id="nim" required>
                                              </div>
                                              <div class="form-group">
                                                <label for="" class="control-label">No Telpon</label>
                                                <input type="number" name="no_tlp" class="form-control" id="no_tlp" required>
                                              </div>
                                              <div class="form-group">
                                                <label for="" class="control-label">Email</label> 
                                                <input type="text" name="email" class="form-control" id="email" required>
                                              </div>
                                              <div class="form-group">
                                                
                                                {{-- <select class="form-control" name="angkatan_id" id="angkatan_id">
                                                  <option value="">pilih angkatan</option>
                                                  @foreach ($data as $row)
                                                  <option value="{{ $row->angkatan }}">{{ $row->angkatan->angkatan }}</option>
                                                  @endforeach
                                                </select> --}}
                                                <label for="" class="control-label">Angkatan</label>
                                                <input type="number" name="angkatan_id" class="form-control" id="angkatan_id" required>
                                              </div>
                                              <div class="modal-footer">
                                                <button type="reset" class="btn btn-danger">Reset</button>
                                                <button type="submit" class="btn btn-success tambah">Tambah</button>
                                              </div>
                                            </div>
                                        </form>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section>
@endsection