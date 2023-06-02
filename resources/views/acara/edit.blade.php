@extends('template')

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Edit Kategori</h2>
        </div>
    </div>

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Edit Acara
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
                    <form method="post" action="/updateacara/{{ $data->id }}" enctype="multipart/form-data">
                      @csrf
                        <div class="row clearfix">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        <label for="">Title</label>
                                        <input type="text" name="title" class="form-control" id="title" value="{{ $data->title }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        <label for="">Deskripsi</label>
                                        <input type="text" name="deskripsi" class="form-control" id="deskripsi" value="{{ $data->deskripsi }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        <label for="">Category</label>
                                        <input type="text" name="kategori_id" class="form-control" id="kategori_id" value="{{ $data->kategori_id }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        @if ($data->image)
                                        <img src="{{ asset('storage/'.$data->image) }}" class="img-preview img-fluid mb-3">
                                        @else
                                        <img class="img-preview img-fluid mb-3">
                                        @endif
                                        <label for="">Post Image</label>
                                        <input type="file" name="image" class="form-control" id="image" value="{{ $data->image }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <a href="/acara" type="reset" class="btn btn-danger">
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