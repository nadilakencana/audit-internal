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
            <h2>Tambah Data LHPS</h2>
        </div>
    </div>

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="body submit-form-create">
                    <form method="post" action="{{ route('lhp.store') }}" enctype="multipart/form-data">
                      @csrf
                        <div class="modal-body">
                                <div class="form-group">
                                    <label for="" class="control-label">Ketua Tugas</label>
                                    <select name="id_penugasan" class="form-control" id="" required>
                                        <option value="">Pilih Ketua Tugas</option>
                                        @foreach ($penugasan as $tugas )
                                            <option value="{{ $tugas->id }}">{{ $tugas->user->name }} - {{ $tugas->cabang->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="" class="control-label">Tanggal</label>
                                    <input type="date" name="tanggal" class="form-control" id="tanggal" required>
                                </div>
                                <div class="form-group">
                                    <label for="" class="control-label">Tempat Audit</label>
                                    <select name="id_cabang" class="form-control" id="" required>
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


        $('.btn-add-temuan').on('click', function(){
            tagIdx++;
            fileIdx++;
            addTemuan(tagIdx, fileIdx);
        })
        $('body').on('click','.add-file-audit', function(){
            var id = $(this).attr('xid');
            fileIdx++;
            console.log(fileIdx);
            addFileAudit(fileIdx, id);
        });

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
            removeFileTemuan(data, id);
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
        function removeFileTemuan(data, idx){
			var $form = $('.submit-form-create form .anggota-penugasan .content-btn-audit');
			//var idx = $elm.attr('idx');
			$form.find(`.file-audit[data-id="${data}"][xid="${idx}"]`).remove();
			$form.find(`.text-file[data-id="${data}"][xid="${idx}"]`).remove();
			$form.find(`input[name="buktiTemuan[${data}][file]"][data-id="${data}"][xid="${idx}"]`).remove();
            $form.find(`.hapus-file-temuan[data-id="${data}"][idx="${idx}"]`).remove();

		}

		function addTemuan(idx, data){
			var $form = $('.submit-form-create form');
            var $section = $('.anggota-penugasan')
			//var idx = $elm.attr('idx');
            $section.append(

            `<div class="form-objek-mulipel mb-2 d-flex w-100 pl-3" idx="${idx}">`+
                `<div class="btn btn-danger hapus-temuan mr-1" idx="${idx}" style="height: 25%">`+
                    `Hapus`+
                `</div>`+

                `<textarea class="form-control deskription" rows="5" name="audit[${idx}][deskripsi_audit]" style="width: 40%" placeholder="Keterangan Audit"></textarea>`+
                `<div class="content-btn-audit ml-4 row " xid="${idx}" style="width: 60%;height: 75%;overflow: auto;">`+
                    `<div type="button" class="btn btn-primary add-file-audit mr-2 mt-2" style="height: 40px" xid="${idx}">+Add File Audit</div>`+
                    `<div  class="btn btn-success file-audit mr-3 mt-2" xid="${idx}" data-id="${data}" style="height: 40px; cursor:pointer">File Bukti Audit</div>`+
                    `<p class="text-file text-file m-0 p-0 mt-3 mr-1" xid="${idx}" data-id="${data}"></p>`+
                    '<div style="display:none">'+
                        `<input type="file" name="buktiTemuan[${data}][file]" xid="${idx}" data-id="${data}" class="file-bukti">`+
                    '</div>'+
                    `<div  class="btn btn-danger hapus-file-temuan mr-1 mt-2" data-id="${data}" idx="${idx}" style="height: 35px">`+
                        `Hapus`+
                    `</div>`+
                `</div>`+

            `</div>`

             );



		}

		function addFileAudit(data, idx){
			var $form = $('.submit-form-create form');
            var $section = $(`.content-btn-audit[xid="${idx}"]`);
            $section.append(
                `<div  class="btn btn-success file-audit mr-3 mt-2" xid="${idx}" data-id="${data}" style="height: 40px; cursor:pointer">File Bukti Audit</div>`+
                `<p class="text-file m-0 p-0 mt-3 mr-1" xid="${idx}" data-id="${data}"></p>`+
                '<div style="display:none">'+
                        `<input type="file" name="buktiTemuan[${data}][file]" xid="${idx}" data-id="${data}" class="file-bukti">`+
                    '</div>'+
                `<div  class="btn btn-danger hapus-file-temuan mr-1 mt-2" data-id="${data}" idx="${idx}" style="height: 35px">`+
                    `Hapus`+
                `</div>`

             );



		}
    });
</script>

@stop
