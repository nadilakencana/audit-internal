@extends('template')

@section('lhp')
<li class="nav-item active">
    <a class="nav-link" href="datalhp">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>LHPS</span>
    </a>
</li>
@endsection

@section('content')
<h3 class="m-2 font-weight-bold">Daftar LHPS</h3>
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            @if (Auth::user()->level === 'direc')

            @else
                <div class="justify-content-right" style="">
                    <a href="/datalhp/create" class="btn btn-success"><i class="fa fa-plus-circle"></i> Tambah</a>
                </div>
            @endif
        </div>
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
                        @foreach ($lhps as $row)

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
                                @if(Auth::user()->level->nama == 'supervisor' || Auth::user()->level->nama == 'admin')
                                <a href="/lhp/edit/{{ $row->id }}" class="btn btn-info">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>

                                <a href="#" class="btn btn-danger hapuslhp" data-id="{{ $row->id }}" data-kategori="{{ $row->kategori }}">
                                    <i class="fa-solid fa-trash-can"></i>
                                </a>
                                @endif
                            </td>
                        </tr>


                        <div class="modal fade" id="detailModal{{ $row->id }}" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel{{ $row->id }}" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="detailModalLabel{{ $row->id }}">Detail</h5>
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
                                    <div class="modal-footer d-flex justify-content-between">
                                        <div class="btn-act">
                                            @if(Auth::user()->level->nama == 'supervisor' || Auth::user()->level->nama == 'admin')
                                                <div class="btn btn-success confirm" data-id="{{ $row->id }}"  @if($row->status_verifikasi == 'Approved Supervisor') style="display:none" @endif>Approved LHP</div>
                                            @else
                                                <div class="btn btn-primary confirm-perbaikan" data-id="{{ $row->id }}">Confirm Perbaikan Audit</div>
                                            @endif
                                        </div>

                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="pop-up confirmation-audit" style="display:none">
                            <div class="card-confirmation">
                                <div class="card" style="width: 412px;">
                                    <div class="card-header d-flex justify-content-between">
                                        <p>Confirmation Audit</p>
                                        <div class="close" style="font-weight: 800; fon-size:15px; cursor: pointer;">X</div>
                                    </div>
                                    <div class="card-body form-confirmasi">

                                        <div class="form-group">
                                            <label for="" class="control-label">Tanggal Perbaikan Audit</label>
                                            <input type="date" name="tanggal_perbaikan" class="form-control tanggal" id="tanggal" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="control-label">Deskripsi Perbaikan</label>
                                            <textarea type="text"  name="keterangan_perbaikan" class="form-control keterangan"></textarea>
                                        </div>

                                        <div class="btn btn-primary submit-confirm" data-id="{{ $row->id }}">Submit</div>

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

@section('script')
<script>
    $(()=>{
        $('.confirm-perbaikan').on('click', function(){
            $('.pop-up.confirmation-audit').fadeIn();
            $('.modal.fade').fadeOut();
        })

        $('.card-confirmation .close').on('click', function(){
            $('.pop-up.confirmation-audit').fadeOut();
        })

        $('.confirm').on('click', function(){
            var xid = $(this).attr('data-id');
            approval(xid);
        });
        $('.submit-confirm').on('click', function(){
            var xid = $(this).attr('data-id');
            confirm_perbaikan(xid);
        });


        function approval(xid){
            var url = "{{ route('approved', '') }}";
            var baseURL = url + '/' + xid;
            $.ajax({
                url:baseURL,
                method: 'POST',
                type: 'json',
                data:{
                _token : "{{ csrf_token() }}"
                },
                success: function(data){
                    console.log(data);
                    window.location.reload();
                },

            }).fail(function(data){

                console.log(data);

            });
        }

        function confirm_perbaikan(id){
            var obj = {};
            var $formTgt = $('.form-confirmasi');
            var tanggal = $formTgt.find('input.tanggal').val();
            var keterangan = $formTgt.find('textarea.keterangan').val();

            obj['tanggal'] = tanggal;
            obj['keterangan'] = keterangan;
            obj["_token"] = "{{ csrf_token() }}";
            if(id){
                obj['id'] = id;
            }
            $.ajax({
                url: "{{route('perbaikan')}}",
                data: obj,
                method : 'POST',
                success : function(result){
                    console.log(result);
                    window.location.reload();
                }
            }).fail(function(data){
               console.log(data);
            });
        }
    })
</script>
@stop
