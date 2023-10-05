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

<section class="content">
    <div class="sale_container">
        <div class="block-header">
            <h2>Buat Penugasan Audit</h2>
        </div>
    </div>

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="body submit-form-create">
                    <form method="post" action="{{ route('createPenugasan') }}" enctype="multipart/form-data">
                      @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="" class="control-label">Tanggal Tugas</label>
                                <input type="date" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror" id="name" required/>
                                @error('tanggal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Ketua Penugasan</label>
                                <select class="custom-select rounded-0  @error('id_user_ketua') is-invalid @enderror" aria-label="Default select example" name="id_user_ketua" id="exampleSelectRounded0" >
                                    <option value="">--Pilih Ketua--</option>
                                    @foreach ( $user as $ketua )
                                        <option value="{{ $ketua ->id }}">
                                            {{ $ketua  -> name}}
                                        </option>
                                    @endforeach
                                </select>
                                @error('id_user_ketua')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Anggota Penugasan</label>
                                <div type="button" class="btn btn-dark btn-add-anggota ml-3 mb-3">+ Tambah anggota</div>
                                <div class="anggota-penugasan d-flex">

                                </div>
                            </div>
                            <div class="form-group">
                                <label>Penempatan Audit</label>
                                <select class="custom-select rounded-0  @error('id_cabang') is-invalid @enderror" aria-label="Default select example" name="id_cabang" id="exampleSelectRounded0" >
                                    <option value="">--Pilih Penempatan--</option>
                                    @foreach ( $cabang as $cb )
                                        <option value="{{ $cb ->id }}">
                                            {{ $cb  -> nama}}
                                        </option>
                                    @endforeach
                                </select>
                                 @error('id_cabang')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="" class="control-label">Objek Audit</label>
                                <textarea type="text" name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" id="name" required></textarea>
                                @error('deskripsi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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
      

        $('.btn-add-anggota').on('click', function(){
            tagIdx++;
            addAnggota(tagIdx);
        })
        $('body').on('click','.hapus-anggota', function(){
            var id = $(this).attr('xid');
            removeAggota(id);
        })

        $('body').on('input','.anggota-select', function(){
            var id = $(this).attr('idx');
            var valueOption = $(this).val();
            var $form = $('.submit-form-create form');
           var input= $form.find(`.input-anggota[name="anggota[${id}][id_anggota_user]"]`);
            console.log(id);
            if (input.length > 0) {
                input.val(valueOption); // Setel nilai input
                console.log(valueOption, input.val()); // Tampilkan nilai yang diatur
            } else {
                console.log('Elemen input tidak ditemukan.');
            }
        })

        function removeAggota(idx){
			var $form = $('.submit-form-create form');
			//var idx = $elm.attr('idx');

			$form.find(`input[name="anggota[${idx}][id_anggota_user]"]`).remove();
			$form.find(`.row-option-anggota[xid="${idx}"]`).remove();

		}

		function addAnggota(idx){
			var $form = $('.submit-form-create form');
            var $section = $('.anggota-penugasan')
			//var idx = $elm.attr('idx');
            $section.append(
                `<div class="row-option-anggota ml-2" xid="${idx}">`+
                    `<select idx="${idx}" class="custom-select anggota-select rounded-0  @error('id_anggota_user') is-invalid @enderror" aria-label="Default select example" name="id_anggota_user" id="exampleSelectRounded0" >`+
                        `<option value="">--Pilih Anggota--</option>`+
                        '@foreach ( $user as $anggota )'+
                           '<option class="option-anggota" value="{{ $anggota ->id }}">'+
                               '{{ $anggota -> name}}'+
                            '</option>'+
                        '@endforeach'+
                    '</select>'+
                    '<div class="col-sm-2 mr-4">'+
                        `<div type="button" class="btn btn-danger hapus-anggota" xid="${idx}">` +'<i class="fa-solid fa-trash-can"></i>'+'</div>'+
                    `</div>`+

                '</div>'

             );
			$form.append(`<input class="input-anggota" name="anggota[${idx}][id_anggota_user]" type="hidden" value=""/>`);


		}
    });

</script>

@stop
