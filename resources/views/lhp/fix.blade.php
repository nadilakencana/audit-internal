@extends('template')

@section('lhpfix')
<li class="nav-item active">
    <a class="nav-link" href="/LHP_FIX">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>LHP</span>
    </a>
</li>
@endsection

@section('content')
<h3 class="m-2 font-weight-bold">Daftar LHP</h3>
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
                        @foreach ($lhp as $row)
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
                                <button class="btn btn-primary" data-toggle="modal" data-target="#detailModal{{ $row->id }}">
                                    Detail
                                </button>
                            </td>
                        </tr>

                        <div class="modal fade" id="detailModal{{ $row->id }}" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel{{ $row->id }}" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="detailModalLabel{{ $row->id }}">Detail LHP - {{ $row->kategori }}</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Display LHP details here -->
                                        <p><b>Kategori: </b>{{ $row->kategori }}</p>
                                        <p><b>Kode LHP: </b>{{ $row->kode_lhp }}</p>
                                        <p><b>Tanggal: </b>{{ $row->tanggal }}</p>
                                        <p><b>Uraian: </b>{{ $row->uraian }}</p>
                                        <p><b>Unit: </b>{{ $row->unit }}</p>
                                        @if ($row->file)
                                            <p><b>File: </b>{{ $row->file }}</p>
                                            <a href="{{ Storage::url($row->file) }}" target="_blank" class="btn btn-info">Lihat File</a>
                                            <a href="{{ Storage::url($row->file) }}" download class="btn btn-primary">Unduh File</a>
                                        @endif
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach 
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>   
    
@endsection