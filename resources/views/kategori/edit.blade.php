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
            <h2>Edit category</h2>
        </div>
    </div>

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Edit category
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
                    <form method="post" action="/updatekategori/{{ $data->id }}">
                      @csrf
                        <div class="row clearfix">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                <div class="form-group">
                                    <div class="form-line">
                                      <input type="text" name="kategori" class="form-control" id="kategori" value="{{ $data->kategori }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <a href="/kategori" type="reset" class="btn btn-danger">
                                    <i class="fa-solid fa-rotate-left"></i>
                                </a>
                              <button type="submit" class="btn btn-success edit">
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