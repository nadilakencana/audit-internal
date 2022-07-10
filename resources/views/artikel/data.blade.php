@extends('template')

@section('artikel')
    <li class="active">
        <a href="#" class="menu-toggle">
            <i class="fa-solid fa-newspaper icon"></i>
            <span>Artikel</span>
        </a>
        <ul class="ml-menu">
            <li class="active">
                <a href="/artikel">
                    <span>Data Artikel</span>
                </a> 
            </li>
        </ul>
    </li>
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>DAFTAR ARTIKEL</h2>
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
                                      <form action="/artikel" method="GET" enctype="multipart/form-data">
                                        <input type="search" id="inputPassword6" name="search" class="form-control " aria-describedby="passwordHelpInline" placeholder="Search..." >       
                                      </form>
                                    </div>
                                  </div>    
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                          <th scope="col">No</th>
                                          <th scope="col">Title</th>
                                          <th scope="col">Deskripsi</th>
                                          <th scope="col">Categoru</th>
                                          <th scope="col">Image</th>
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
                                          <td>{{ $row->title }}</td>
                                          <td>{{ $row->deskripsi }}</td>
                                          <td>{{ $row->kategori->kategori }}</td>
                                          <td>
                                              <img src="{{ asset('fotokategori/'.$row->image)}}" alt=""style="width: 40px;">
                                          </td>
                                          <td>{{ tanggal_indonesia($row->created_at) }}</td>
                                          <td>{{ $row->updated_at->diffForHumans() }}</td>
                                          <td>
                                              <a href="/tampilartikel/{{ $row->id }}" class="btn btn-info">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                              </a>
                                              <a href="#" class="btn btn-danger deleteartikel" data-id="{{ $row->id }}" data-title="{{ $row->title }}">
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
                                          <h4 class="modal-title text-center text-dark barang">Tambah data Artikel</h4>
                                        </div>
                                        <form method="post" action="tambahartikel" class="formbarang" enctype="multipart/form-data">
                                          @csrf
                                            <div class="modal-body">
                                              <div class="form-group">
                                                <label for="" class="control-label">Title</label>
                                                <input type="text" name="title" class="form-control" id="title" required>
                                              </div>
                                              <div class="form-group">
                                                <label for="" class="control-label">Deskripsi</label>
                                                <textarea class="form-control" name="deskripsi" id="deskripsi" style="height: 100px" required></textarea>
                                              </div>
                                              <div class="form-group">
                                                <label for="" class="control-label">Category</label>
                                                <input type="number" name="kategori_id" class="form-control" id="kategori_id" required>
                                              </div>
                                              <div class="form-group">
                                                <label for="" class="control-label">Post Image</label>
                                                <img class="img-preview img-fluid mb-3">
                                                <input type="file" name="image" class="form-control" id="image" onchange="previewImage()" required>
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