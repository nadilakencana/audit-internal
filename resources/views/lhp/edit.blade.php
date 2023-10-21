@extends('template')

@section('lhp')
<li class="nav-item active">
    <a class="nav-link" href="/datalhp">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>LHPS</span>
    </a>
</li>
@endsection

@section('content')

<section class="content">
    <div class="sale_container">
        <div class="block-header">
            <h2>Edit Data LHPS</h2>
        </div>
    </div>

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="body">
                    <form method="post" action="{{ route('lhp.update', ['id' => $lhp->id]) }}" enctype="multipart/form-data">
                        @csrf

                        <div class="modal-body">
                            <div class="form-group">
                                <label for="" class="control-label">Ketua Tugas</label>
                                <select name="id_penugasan" class="form-control" id="" required>
                                    <option value="{{ $lhp->id_penugasan }}">{{ $lhp->Penugasan->user->name }} - {{ $lhp->Penugasan->cabang->nama }}</option>
                                    <option value="">--Pilih Ketua Tugas--</option>
                                    @foreach ($penugasan as $tugas )
                                    <option value="{{ $tugas->id }}">{{ $tugas->user->name }} - {{ $tugas->cabang->nama}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="" class="control-label">Tanggal</label>
                                <input type="date" name="tanggal" class="form-control" id="tanggal" required value="{{ $lhp->tanggal }}">
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Tempat Audit</label>
                                <select name="id_cabang" class="form-control" id="" required>
                                    <option value="{{ $lhp->id_cabang }}">{{ $lhp->cabang->nama }}</option>
                                    <option value="">Pilih Tempat Audit</option>
                                    @foreach ($cabang as $cb )
                                    <option value="{{ $cb->id }}">{{ $cb->nama }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="" class="control-label">Temuan Audit</label>
                                <div type="button" class="btn btn-success btn-add-temuan ml-3 mb-3">+ Add Temuan</div>
                                <div class="anggota-penugasan row">
                                    @foreach ($ketTemuan as $j => $audit)
                                    <div class="form-objek-mulipel mb-2 d-flex w-100 pl-3" idx="{{ $j }}">
                                        <div class="btn btn-danger hapus-temuan mr-1" idx="{{ $j }}" style="height: 25%">
                                            Hapus
                                        </div>
                                        <input type="hidden" name="audit[{{ $j }}][id]" idx="{{ $j }}" value="{{ $audit->id }}">
                                        <textarea class="form-control deskription" rows="5" name="audit[{{ $j }}][deskripsi_audit]" style="width: 40%" placeholder="Keterangan Audit" >{{ $audit->deskripsi_temuan }}</textarea>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Bukti Temuan Audit</label>
                                <div type="button" class="btn btn-primary add-file-audit mr-2 mt-2"
                                    style="height: 40px">+Add File Audit</div>
                                <div class="bukti-temuan row">
                                    <div class="form-objek-mulipel mb-2 d-flex w-100 pl-3">
                                        <div class="content-btn-audit ml-4 row " style="width: 100%;height: 100%;overflow: auto;">
                                            @foreach ($buktiTemuan  as $k => $fileTemuan)
                                            <div  class="btn btn-success file-audit mr-3 mt-2" xid="{{ $k }}" data-id="{{ $k }}" style="height: 40px; cursor:pointer">File Bukti Audit</div>
                                            <p class="text-file m-0 p-0 mb-0 mt-3 mr-1" xid="{{ $k }}" data-id="{{ $k }}">{{ $fileTemuan->bukti_temuan }}</p>
                                            <div style="display:none">
                                                    <input type="file" name="buktiTemuan[{{ $k }}][file]" xid="{{ $k }}" data-id="{{ $k }}" class="file-bukti" value="{{ $fileTemuan->bukti_temuan }}">
                                                    <input type="text" name="buktiTemuan[{{ $k }}][id]" xid="{{ $k }}" data-id="{{ $k }}" class="file-bukti" value="{{ $fileTemuan->id }}">
                                            </div>
                                            <div  class="btn btn-danger hapus-file-temuan mr-1 mt-2" data-id="{{ $k }}" idx="{{ $k }}" style="height: 35px">
                                                Hapus
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="reset" class="btn btn-danger">Reset</button>
                                <button type="submit" class="btn btn-success">Simpan</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

</section>

@endsection
@section('script')
<script>
    $(()=>{
        var lastTag = [];
		var tagIdx = 0;
		var fileIdx = 0;

        @if(count($ketTemuan))
        var tagIdx = {{ $j }};
         $('.btn-add-temuan').on('click', function(){
            tagIdx++;
            addTemuan(tagIdx);
        })
        @else
         $('.btn-add-temuan').on('click', function(){
            tagIdx++;
            addTemuan(tagIdx);
        })
        @endif

        @if(count($buktiTemuan))
        var fileIdx = {{ $k }};
         $('body').on('click','.add-file-audit', function(){

            fileIdx++;
            console.log(fileIdx);
            addFileAudit(fileIdx);
        });
        @else
         $('body').on('click','.add-file-audit', function(){

            fileIdx++;
            console.log(fileIdx);
            addFileAudit(fileIdx);
        });
        @endif


        $('body').on('click','.hapus-temuan', function(){
            var $elm = $(this);
            console.log($elm, 'tes hapus')
            var id = $elm.attr('idx');
            if($elm.length > 0){
                 RemoveTemuan(id);
            }else{
                'elmen tidak di temukan';
            }

        });

        $('body').on('click','.hapus-file-temuan', function(){
            var id = $(this).attr('idx');
            var data = $(this).attr('data-id');
            removeFileTemuan(id);
        });

        $('body').on('click', '.file-audit',function(){
            var data = $(this).attr('data-id');
            var xid = $(this).attr('xid')
            var $form = $(`input[name="buktiTemuan[${data}][file]"][xid="${xid}"][data-id="${data}"]`).trigger('click');

            console.log($form, data, xid);
        });

        $('body').on('change', '.file-bukti',function(e){
            var data = $(this).attr('data-id');
            var xid = $(this).attr('xid')
            var fileInfo = this.files[0];
            $(`.text-file[xid="${xid}"][data-id="${data}"]`).text(fileInfo.name);
            //console.log($input);
        });

        function RemoveTemuan(idx){
			var $form = $('.submit-form-create form .anggota-penugasan');
			//var idx = $elm.attr('idx');
			$form.find(`.form-objek-mulipel[idx="${idx}"]`).remove();

		}
        function removeFileTemuan(idx){
			var $form = $('.submit-form-create form .bukti-temuan .content-btn-audit');
			//var idx = $elm.attr('idx');
			$form.find(`.file-audit[data-id="${idx}"][xid="${idx}"]`).remove();
			$form.find(`.text-file[data-id="${idx}"][xid="${idx}"]`).remove();
			$form.find(`input[name="buktiTemuan[${idx}][file]"][data-id="${idx}"][xid="${idx}"]`).remove();
            $form.find(`.hapus-file-temuan[data-id="${idx}"][idx="${idx}"]`).remove();

		}

		function addTemuan(idx){
			var $form = $('.submit-form-create form');
            var $section = $('.anggota-penugasan')
			//var idx = $elm.attr('idx');
            $section.append(

            `<div class="form-objek-mulipel mb-2 d-flex w-100 pl-3" idx="${idx}">`+
                `<div class="btn btn-danger hapus-temuan mr-1" idx="${idx}" style="height: 25%">`+
                    `Hapus`+
                `</div>`+
                `<textarea class="form-control deskription" rows="5" name="audit[${idx}][deskripsi_audit]" style="width: 40%" placeholder="Keterangan Audit"></textarea>`+
            `</div>`

             );



		}



		function addFileAudit(idx){
			var $form = $('.submit-form-create form');
            var $section = $('.bukti-temuan .content-btn-audit');
            $section.append(
                `<div  class="btn btn-success file-audit mr-3 mt-2" xid="${idx}" data-id="${idx}" style="height: 40px; cursor:pointer">File Bukti Audit</div>`+
                `<p class="text-file m-0 p-0 mt-3 mr-1" xid="${idx}" data-id="${idx}"></p>`+
                '<div style="display:none">'+
                        `<input type="file" name="buktiTemuan[${idx}][file]" xid="${idx}" data-id="${idx}" class="file-bukti">`+
                    '</div>'+
                `<div  class="btn btn-danger hapus-file-temuan mr-1 mt-2" data-id="${idx}" idx="${idx}" style="height: 35px">`+
                    `Hapus`+
                `</div>`
             );

		}


    });
</script>

@stop
