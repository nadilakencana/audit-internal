@extends('template')

@section('dtuser')
    <li class="active">
        <a href="#" class="menu-toggle">
            <i class="fa fa-user-plus icon"></i>
            <span>Data User </span>
        </a>
        <ul class="ml-menu">
            <li class="active">
                <a href="/datauser">
                    <span>Data User</span>
                </a>
            </li>
        </ul>
    </li>
@endsection

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>DAFTAR USER</h2>
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
                                      <form action="/datauser" method="GET">
                                        <input type="search" id="inputPassword6" name="search" class="form-control " aria-describedby="passwordHelpInline" placeholder="Search..." >       
                                      </form>
                                    </div>
                                  </div>    
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                          <th scope="col">No</th>
                                          <th scope="col">Image</th>
                                          <th scope="col">Nama</th>
                                          <th scope="col">Email</th>
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
                                            <td>
                                                <img src="{{ asset ('fotokategori/'.$row->image)}}" alt=""style="width: 40px;">
                                            </td>
                                            <td>{{ $row->name }}</td>
                                            <td>{{ $row->email }}</td>
                                            <td>{{ tanggal_indonesia($row->created_at) }}</td>
                                            <td>{{ $row->updated_at->diffForHumans() }}</td>
                                            <td>
                                                <a href="/tampiluser/{{ $row->id }}" class="btn btn-info">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                                <a href="#" class="btn btn-danger deleteuser" data-id="{{ $row->id }}" data-name="{{ $row->name }}">
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
                                          <h4 class="modal-title text-center text-dark barang">Tambah data User</h4>
                                        </div>
                                        <form method="post" action="tambahdtuser" class="formbarang" enctype="multipart/form-data">
                                          @csrf
                                            <div class="modal-body">
                                              <div class="form-group">
                                                <label for="" class="control-label">Post Image</label>
                                                <input type="file" name="image" class="form-control" id="image" required autofocus>
                                              </div>
                                              <div class="form-group">
                                                <label for="" class="control-label">Nama</label>
                                                <input type="text" name="name" class="form-control" id="name" required>
                                              </div>
                                              <div class="form-group">
                                                <label for="" class="control-label">Email</label>
                                                <input type="email" name="email" class="form-control" id="email" required>
                                              </div>
                                              <div class="form-group">
                                                <label for="" class="control-label">Password</label>
                                                <input type="password" name="password" class="form-control" id="password" required>
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