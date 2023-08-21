@extends('template')

@section('cetak')
<li class="nav-item mb-5">
    <a class="nav-link" href="/cetak-LHP">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Cettak LHP</span>
    </a>
</li>
@endsection

@section('content')
<h3 class="m-2 font-weight-bold">Cetak LHP</h3>
@if(Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
@endif
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>kode_lhp</th>
                        <th>tanggal</th>
                        <th>kategori</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>kode_lhp</th>
                        <th>tanggal</th>
                        <th>kategori</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($cetak as $row)
                    @if ($row->status_verifikasi === 'sudah oke')
                    <tr>
                        <td>{{ $row->kode_lhp }}</td>
                        <td>{{ $row->tanggal }}</td>
                        <td>{{ $row->kategori }}</td>
                        <td>
                            @if ($row->status_verifikasi === 'sudah oke')
                                <span class="badge badge-success">Sudah Oke</span>
                            @else
                                <span class="badge badge-warning">Sedang Dicek</span>
                            @endif
                        </td>
                        <td>
                            <a href="/cetakLHP/{{ $row->id }}" class="btn btn-outline-danger btn-sm">
                                <i class="fa-sharp fa-solid fa-file-pdf"></i> Cetak LHP
                            </a>
                        </td>                                                
                    </tr>
                    @endif
                    @endforeach 
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>   
    
@endsection