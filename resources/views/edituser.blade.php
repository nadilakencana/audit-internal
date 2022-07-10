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
        <h2>Edit barang</h2>
    </div>

  <div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Edit Data User
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
                <form method="post" action="/updateuser/{{ $data->id }}" enctype="multipart/form-data">
                  @csrf
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                            <div class="form-group">
                                <div class="form-line">
                                    <label for="">Image</label>
                                    <input type="file" name="image" class="form-control" id="image" value="{{ $data->image }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                            <div class="form-group">
                                <div class="form-line">
                                    <label for="">Nama</label>
                                    <input type="text" name="name" class="form-control" id="name" value="{{ $data->name }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                            <div class="form-group">
                                <div class="form-line">
                                    <label for="">Email</label>
                                    <input type="email" name="email" class="form-control" id="email" value="{{ $data->email }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                            <div class="form-group">
                                <div class="form-line">
                                    <label for="">Password</label>
                                    <input type="text" name="password" class="form-control" id="password" value="{{ $data->password }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <a href="/datauser" type="reset" class="btn btn-danger">
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


