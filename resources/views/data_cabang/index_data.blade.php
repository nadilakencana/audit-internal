@extends('template')

@section('dataCabang')
<li class="nav-item active">
    <a class="nav-link" href="{{ route('cabang.index') }}">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Data Cabang</span>
    </a>
</li>
@endsection

@section('content')
<h3 class="m-2 font-weight-bold">Data Cabang</h3>
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="justify-content-right" style="">
                <a href="{{ route('cabang.create') }}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Tambah</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Cabang</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama Cabang</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @php
                            $no=1;
                        @endphp
                        @foreach ($data as $dt)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $dt->nama }}</td>
                            <td>{{ $dt->alamat }}</td>
                            <td>
                                <a href="{{ route('cabang.edit', $dt->id) }}" class="btn btn-info">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <a href="#" class="btn btn-danger cabang" data-id="{{ $dt->id }}" data-name="{{ $dt->nama }}">
                                    <i class="fa-solid fa-trash-can"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>

@endsection
