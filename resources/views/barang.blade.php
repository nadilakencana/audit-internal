@extends('template')

@section('barang')
    <li class="active">
      <a href="#" class="menu-toggle">
        <i class="fa fa-cubes icon"></i>
        <span>Barang</span>
    </a>
    <ul class="ml-menu">
        <li class="active">
            <a href="/barang">
                <span>Data barang</span>
            </a>
        </li>
    </ul>
    </li>
@endsection

@section('content')

<section class="content">
  <div class="container-fluid">
      <div class="block-header">
          <h2>DAFTAR BARANG</h2>
      </div>
      <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 tblbarang">
                <div class="card ">
                    <div class="header">
                        <div class="">
                          <button data-toggle="modal" data-target="#tambah" class="btn btn-success xs btn-flat"><i class="fa fa-plus-circle"></i> Tambah</button>                         
                        </div>
                        <div class="row mb-3 table">
                          <div class="col-sm-12 col-md-6">
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                          <div class="row g-3 align-items-center pull-right ">
                            <div class="col-auto">
                              <form action="/barang" method="GET">
                                <input type="search" id="inputPassword6" name="search" class="form-control " aria-describedby="passwordHelpInline" placeholder="Search...">
                              </form>
                            </div>
                          </div>
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                      <th scope="col">No</th>
                                      <th scope="col">Nama barang</th>
                                      <th scope="col">Stok barang</th>
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
                                      <td>{{ $row->nama_barang }}</td>
                                      <td>{{ $row->stok_barang }}</td>
                                      <td>{{ tanggal_indonesia($row->created_at) }}</td>
                                      <td>{{ $row->updated_at->diffForHumans() }}</td>
                                      <td>
                                          <a href="/tampildata/{{ $row->id }}" class="btn btn-info">
                                            <i class="fa-solid fa-pen-to-square"></i> 
                                          </a>
                                          <a href="#" class="btn btn-danger deletebarang" data-id="{{ $row->id }}" data-nama_barang="{{ $row->nama_barang }}">
                                            <i class="fa-solid fa-trash-can"></i>
                                          </a>
                                      </td>
                                    </tr>   
                                    <?php $i++;?>        
                                    @endforeach              
                                </tbody>
                            </table>
                          </div>
                          <div class="pull-right">
                            {{ $data->links() }}
                        </div>
                        <div id="tambah" class="modal fade" role="dialog">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title text-center text-dark barang">Tambah data barang</h4>
                              </div>
                              <form method="post" action="add" class="formbarang">
                                @csrf
                                  <div class="modal-body">
                                    <div class="form-group">
                                      <label for="" class="control-label">Nama Barang</label>
                                      <input type="text" name="nama_barang" class="form-control" id="nama_barang" required>
                                    </div>
                                    <div class="form-group">
                                      <label for="" class="control-label">Stok Barang</label>
                                      <input type="number" name="stok_barang" class="form-control" id="stok_barang" required>
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
</section>

@endsection


