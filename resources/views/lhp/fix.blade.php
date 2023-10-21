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
                            <th>Ketua Tugas</th>
                            <th>tanggal</th>
                            <th>Cabang Audite</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Ketua Tugas</th>
                            <th>tanggal</th>
                            <th>Cabang Audite</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($lhp as $row)

                        <tr>
                            <td>{{ $row->penugasan->user->name }}</td>
                            <td>{{ $row->tanggal }}</td>
                            <td>{{ $row->cabang->nama }}</td>
                            <td>
                                {{ $row->status_verifikasi }}
                            </td>
                            <td>
                                <button class="btn btn-primary" data-toggle="modal" data-target="#detailModal{{ $row->id }}">
                                    Detail
                                </button>
                                <a href="/cetakLHP/{{ $row->id }}" class="btn btn-outline-danger btn-sm">
                                    <i class="fa-sharp fa-solid fa-file-pdf"></i> Cetak LHP
                                </a>
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
                                        <p><b>Ketua Penugasan : </b>{{ $row->penugasan->user->name }}</p>
                                        <p><b>Tanggal Audit: </b>{{ $row->tanggal}}</p>
                                        <p><b>Cabang Audite: </b>{{ $row->cabang->nama }}</p>
                                        <p><b>Temuan Audit: </b></p>
                                        @foreach ($row->temuanAudit as $temuan)
                                            <p>- {{ $temuan->deskripsi_temuan }}</p>
                                        @endforeach
                                        <p><b>Bukti Temuan: </b></p>
                                        @php
                                            $temuan = 1;
                                        @endphp
                                        @foreach ($row->fileTemuan as $file)
                                            <a href="{{asset('buktitemuan/'.$row->id.'/'.$file->bukti_temuan)}}" target="_blank" class="btn btn-info mb-2">Lihat File Temuan {{ $temuan++ }}</a>
                                        @endforeach
                                        <div class="perbaikan mt-3 mb-3">
                                            @if($row-> status_perbaikan == 'Telah di perbaiki')
                                                <p><b>Satus: </b>{{ $row->status_perbaikan}}</p>
                                                <p><b>Tanggal Perbaikan: </b>{{ $row->tanggal_perbaikan}}</p>
                                                <p><b>Keterangan: </b>{{ $row->keterangan_perbaikan}}</p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>

@endsection
