@extends('template')

@section('jenisPemeriksaan')
<li class="nav-item active">
    <a class="nav-link" href="akun">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Jenis Pemeriksaan</span>
    </a>
</li>
@endsection

@section('content')
<h3 class="m-2 font-weight-bold">Jenis Pemeriksaan</h3>
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="justify-content-right" style="">
                <a href="{{ route('jenis.create') }}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Tambah</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Jenis Pemeriksaan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Jenis Pemeriksaan</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @php
                            $no=1;
                        @endphp
                        @foreach ($jenis as $row)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $row->nama_jenis }}</td>
                            <td>
                                <a href="{{ route('jenis.edit', $row->id) }}" class="btn btn-info">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <a href="#" class="btn btn-danger jenis" data-id="{{ $row->id }}" data-name="{{ $row->nama_jenis }}">
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
