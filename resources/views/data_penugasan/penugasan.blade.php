@extends('template')

@section('penugasan')
<li class="nav-item active">
    <a class="nav-link" href="{{ route('penugasan.index') }}">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Penugasan Audit</span>
    </a>
</li>
@endsection

@section('content')
<h3 class="m-2 font-weight-bold">Data Penugasan Audit</h3>
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="justify-content-right" style="">
                <a href="{{ route('penugasan.create') }}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Tambah</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Ketua</th>
                            <th>Tempat Tugas</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama Ketua</th>
                            <th>Tempat Tugas</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @php
                            $no=1;
                        @endphp
                        @foreach ($penugasan as $dt)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $dt->user->name }}</td>
                            <td>{{ $dt->cabang->nama }}</td>
                            <td>
                                <a href="{{ route('EditPenugasan', $dt->id) }}" class="btn btn-info">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <a href="#" class="btn btn-danger penugasan" data-id="{{ $dt->id }}" data-name="{{ $dt->nama }}">
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
