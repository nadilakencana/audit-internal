@extends('template')

@section('user')
<li class="nav-item active">
    <a class="nav-link" href="/akun">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Data akun</span>
    </a>
</li>
@endsection

@section('content')
<h3 class="m-2 font-weight-bold">Daftar akun</h3>
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="justify-content-right" style="">
                <a href="/akun/create" class="btn btn-success"><i class="fa fa-plus-circle"></i> Tambah</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>name</th>
                            <th>email</th>
                            <th>notel</th>
                            <th>level</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>name</th>
                            <th>email</th>
                            <th>notel</th>
                            <th>level</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($akun as $row)
                        <tr>
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->email }}</td>
                            <td>{{ $row->notel }}</td>
                            <td>
                                @if ($row->level === 'admin')
                                    <span class="badge badge-success">Admin</span>
                                @elseif ($row->level === 'audithor')
                                    <span class="badge badge-warning">Auditor</span>
                                @elseif ($row->level === 'spi')
                                    <span class="badge badge-primary">Kepala SPI</span>
                                @elseif ($row->level === 'direc')
                                    <span class="badge badge-danger">Directur Utama</span>
                                @endif
                            </td>
                            <td>
                                <a href="/akun/edit/{{ $row->id }}" class="btn btn-info">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <a href="#" class="btn btn-danger hapusakun" data-id="{{ $row->id }}" data-name="{{ $row->name }}">
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
