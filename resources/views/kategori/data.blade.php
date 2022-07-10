@extends('template')

@section('kategori')                        
     <li class="active">
        <a href="#" class="menu-toggle">
            <i class="fa fa-arrows-alt icon"></i>
            <span>Category</span>
        </a>
        <ul class="ml-menu">
            <li class="active">
                <a href="/kategori">
                    <span>Data Category</span>
                </a> 
            </li>
        </ul>
    </li>               
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>DAFTAR CATEGORY</h2>
        </div>

        @if ($message = Session::get('success'))           
        <div class="alert alert-success" role="alert">
          {{ $message }}
        </div>
        @endif

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
                                      <form action="/kategori" method="GET">
                                        <input type="search" id="inputPassword6" name="search" class="form-control " aria-describedby="passwordHelpInline" placeholder="Search..." >       
                                      </form>
                                    </div>
                                  </div>    
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                          <th scope="col">No</th>
                                          <th scope="col">Category</th>
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
                                          <td>{{ $row->kategori }}</td>
                                          <td>{{ tanggal_indonesia($row->created_at) }}</td>
                                          <td>{{ $row->updated_at->diffForHumans() }}</td>
                                          <td>
                                              <a href="/tampilkategori/{{ $row->id }}" class="btn btn-info">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                              </a>
                                              <a href="#" class="btn btn-danger delete" data-id="{{ $row->id }}" data-kategori="{{ $row->kategori }}">
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
                                          <h4 class="modal-title text-center text-dark barang">Tambah Category</h4>
                                        </div>
                                        <form method="post" action="tambahdata" class="formbarang">
                                          @csrf
                                            <div class="modal-body">
                                              <div class="form-group">
                                                <label for="" class="control-label">Category</label>
                                                <input type="text" name="kategori" class="form-control" id="kategori" required>
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