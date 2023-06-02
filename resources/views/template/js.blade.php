      <script src="{{ asset('assets/dashboard-admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard-admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('assets/dashboard-admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('assets/dashboard-admin/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('assets/dashboard-admin/vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('assets/dashboard-admin/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('assets/dashboard-admin/js/demo/chart-pie-demo.js') }}"></script>

        <!-- Page level plugins -->
    <script src="{{ asset('assets/dashboard-admin/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard-admin/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('assets/dashboard-admin/js/demo/datatables-demo.js') }}"></script>

      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

      {{-- cdn toastr --}}
      <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.1/toastr.min.js"></script>


      {{-- <!-- DataTables -->
      <script src="{{ asset("template1/bower_components/datatables.net/js/jquery.dataTables.min.js") }}"></script>
      <script src="{{ asset("template1/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js") }}"></script> 

      @stack('tbluser') --}}
      
      {{-- preview img --}}
      <script>

            function previewImage(){
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new fileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent){
            imgPreview.src = oFREvent.target.result;
            }
            }
      </script>

      {{-- alert --}}
            <script>
                  $('.logout').click(function(){
                        swal("Success", "Anda berhasil logout", "success");
                  });
            </script>
            <script>
                  $('.out').click(function(){
                        swal("Success", "Anda berhasil logout", "success");
                  });
            </script>
            <script>
                  $('.keluar').click(function(){
                        swal("Success", "Anda berhasil logout", "success");
                  });
            </script>


      <script>
            $('.hapusjakpus').click(function(){
                  var acara_id = $(this).attr('data-id');
                  var jenis_property = $(this).attr('data-jenis_property');
                  swal({
                  title: "Apa kamu yakin?",
                  text: "kamu akan menghapus property dengan nama "+jenis_property+" ",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
                  })
                  .then((willDelete) => {
                  if (willDelete) {
                        window.location = "/hapusjakpus/"+acara_id+""
                        swal("property "+jenis_property+" berhasil di hapus", {
                        icon: "success",
                        });
                  } else {
                        // swal("property "+jenis_property+" gagal di hapus");
                        swal(
                              'Oooops!!!',
                              'property '+jenis_property+' gagal di hapus :)',
                              'error'
                        )
                  }
                  });
            });
      </script>
      <script>
            $('.hapusjaktim').click(function(){
                  var acara_id = $(this).attr('data-id');
                  var jenis_property = $(this).attr('data-jenis_property');
                  swal({
                  title: "Apa kamu yakin?",
                  text: "kamu akan menghapus property dengan nama "+jenis_property+" ",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
                  })
                  .then((willDelete) => {
                  if (willDelete) {
                        window.location = "/hapusjaktim/"+acara_id+""
                        swal("property "+jenis_property+" berhasil di hapus", {
                        icon: "success",
                        });
                  } else {
                        // swal("property "+jenis_property+" gagal di hapus");
                        swal(
                              'Oooops!!!',
                              'property '+jenis_property+' gagal di hapus :)',
                              'error'
                        )
                  }
                  });
            });
      </script>
      <script>
            $('.hapusjakut').click(function(){
                  var acara_id = $(this).attr('data-id');
                  var jenis_property = $(this).attr('data-jenis_property');
                  swal({
                  title: "Apa kamu yakin?",
                  text: "kamu akan menghapus property dengan nama "+jenis_property+" ",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
                  })
                  .then((willDelete) => {
                  if (willDelete) {
                        window.location = "/hapusjakut/"+acara_id+""
                        swal("property "+jenis_property+" berhasil di hapus", {
                        icon: "success",
                        });
                  } else {
                        // swal("property "+jenis_property+" gagal di hapus");
                        swal(
                              'Oooops!!!',
                              'property '+jenis_property+' gagal di hapus :)',
                              'error'
                        )
                  }
                  });
            });
      </script>
      <script>
            $('.hapusjaksel').click(function(){
                  var acara_id = $(this).attr('data-id');
                  var jenis_property = $(this).attr('data-jenis_property');
                  swal({
                  title: "Apa kamu yakin?",
                  text: "kamu akan menghapus property dengan nama "+jenis_property+" ",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
                  })
                  .then((willDelete) => {
                  if (willDelete) {
                        window.location = "/hapusjaksel/"+acara_id+""
                        swal("property "+jenis_property+" berhasil di hapus", {
                        icon: "success",
                        });
                  } else {
                        // swal("property "+jenis_property+" gagal di hapus");
                        swal(
                              'Oooops!!!',
                              'property '+jenis_property+' gagal di hapus :)',
                              'error'
                        )
                  }
                  });
            });
      </script>
      <script>
            $('.hapusdepok').click(function(){
                  var acara_id = $(this).attr('data-id');
                  var jenis_property = $(this).attr('data-jenis_property');
                  swal({
                  title: "Apa kamu yakin?",
                  text: "kamu akan menghapus property dengan nama "+jenis_property+" ",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
                  })
                  .then((willDelete) => {
                  if (willDelete) {
                        window.location = "/hapusdepok/"+acara_id+""
                        swal("property "+jenis_property+" berhasil di hapus", {
                        icon: "success",
                        });
                  } else {
                        // swal("property "+jenis_property+" gagal di hapus");
                        swal(
                              'Oooops!!!',
                              'property '+jenis_property+' gagal di hapus :)',
                              'error'
                        )
                  }
                  });
            });
      </script>
      <script>
            $('.hapusserang').click(function(){
                  var acara_id = $(this).attr('data-id');
                  var jenis_property = $(this).attr('data-jenis_property');
                  swal({
                  title: "Apa kamu yakin?",
                  text: "kamu akan menghapus property dengan nama "+jenis_property+" ",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
                  })
                  .then((willDelete) => {
                  if (willDelete) {
                        window.location = "/hapusserang/"+acara_id+""
                        swal("property "+jenis_property+" berhasil di hapus", {
                        icon: "success",
                        });
                  } else {
                        // swal("property "+jenis_property+" gagal di hapus");
                        swal(
                              'Oooops!!!',
                              'property '+jenis_property+' gagal di hapus :)',
                              'error'
                        )
                  }
                  });
            });
      </script>
      <script>
            $('.hapussidoarjo').click(function(){
                  var acara_id = $(this).attr('data-id');
                  var jenis_property = $(this).attr('data-jenis_property');
                  swal({
                  title: "Apa kamu yakin?",
                  text: "kamu akan menghapus property dengan nama "+jenis_property+" ",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
                  })
                  .then((willDelete) => {
                  if (willDelete) {
                        window.location = "/hapussidoarjo/"+acara_id+""
                        swal("property "+jenis_property+" berhasil di hapus", {
                        icon: "success",
                        });
                  } else {
                        // swal("property "+jenis_property+" gagal di hapus");
                        swal(
                              'Oooops!!!',
                              'property '+jenis_property+' gagal di hapus :)',
                              'error'
                        )
                  }
                  });
            });
      </script>
      <script>
            $('.hapussurabaya').click(function(){
                  var acara_id = $(this).attr('data-id');
                  var jenis_property = $(this).attr('data-jenis_property');
                  swal({
                  title: "Apa kamu yakin?",
                  text: "kamu akan menghapus property dengan nama "+jenis_property+" ",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
                  })
                  .then((willDelete) => {
                  if (willDelete) {
                        window.location = "/hapussurabaya/"+acara_id+""
                        swal("property "+jenis_property+" berhasil di hapus", {
                        icon: "success",
                        });
                  } else {
                        // swal("property "+jenis_property+" gagal di hapus");
                        swal(
                              'Oooops!!!',
                              'property '+jenis_property+' gagal di hapus :)',
                              'error'
                        )
                  }
                  });
            });
      </script>
      <script>
            $('.hapuspesawaran').click(function(){
                  var acara_id = $(this).attr('data-id');
                  var jenis_property = $(this).attr('data-jenis_property');
                  swal({
                  title: "Apa kamu yakin?",
                  text: "kamu akan menghapus property dengan nama "+jenis_property+" ",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
                  })
                  .then((willDelete) => {
                  if (willDelete) {
                        window.location = "/hapuspesawaran/"+acara_id+""
                        swal("property "+jenis_property+" berhasil di hapus", {
                        icon: "success",
                        });
                  } else {
                        // swal("property "+jenis_property+" gagal di hapus");
                        swal(
                              'Oooops!!!',
                              'property '+jenis_property+' gagal di hapus :)',
                              'error'
                        )
                  }
                  });
            });
      </script>
      <script>
            $('.hapuscirebon').click(function(){
                  var acara_id = $(this).attr('data-id');
                  var jenis_property = $(this).attr('data-jenis_property');
                  swal({
                  title: "Apa kamu yakin?",
                  text: "kamu akan menghapus property dengan nama "+jenis_property+" ",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
                  })
                  .then((willDelete) => {
                  if (willDelete) {
                        window.location = "/hapuscirebon/"+acara_id+""
                        swal("property "+jenis_property+" berhasil di hapus", {
                        icon: "success",
                        });
                  } else {
                        // swal("property "+jenis_property+" gagal di hapus");
                        swal(
                              'Oooops!!!',
                              'property '+jenis_property+' gagal di hapus :)',
                              'error'
                        )
                  }
                  });
            });
      </script>
      <script>
            $('.hapussukabumi').click(function(){
                  var acara_id = $(this).attr('data-id');
                  var jenis_property = $(this).attr('data-jenis_property');
                  swal({
                  title: "Apa kamu yakin?",
                  text: "kamu akan menghapus property dengan nama "+jenis_property+" ",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
                  })
                  .then((willDelete) => {
                  if (willDelete) {
                        window.location = "/hapussukabumi/"+acara_id+""
                        swal("property "+jenis_property+" berhasil di hapus", {
                        icon: "success",
                        });
                  } else {
                        // swal("property "+jenis_property+" gagal di hapus");
                        swal(
                              'Oooops!!!',
                              'property '+jenis_property+' gagal di hapus :)',
                              'error'
                        )
                  }
                  });
            });
      </script>
      <script>
            $('.hapuskarawang').click(function(){
                  var acara_id = $(this).attr('data-id');
                  var jenis_property = $(this).attr('data-jenis_property');
                  swal({
                  title: "Apa kamu yakin?",
                  text: "kamu akan menghapus property dengan nama "+jenis_property+" ",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
                  })
                  .then((willDelete) => {
                  if (willDelete) {
                        window.location = "/hapuskarawang/"+acara_id+""
                        swal("property "+jenis_property+" berhasil di hapus", {
                        icon: "success",
                        });
                  } else {
                        // swal("property "+jenis_property+" gagal di hapus");
                        swal(
                              'Oooops!!!',
                              'property '+jenis_property+' gagal di hapus :)',
                              'error'
                        )
                  }
                  });
            });
      </script>
      <script>
            $('.hapusbandung').click(function(){
                  var acara_id = $(this).attr('data-id');
                  var jenis_property = $(this).attr('data-jenis_property');
                  swal({
                  title: "Apa kamu yakin?",
                  text: "kamu akan menghapus property dengan nama "+jenis_property+" ",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
                  })
                  .then((willDelete) => {
                  if (willDelete) {
                        window.location = "/hapusbandung/"+acara_id+""
                        swal("property "+jenis_property+" berhasil di hapus", {
                        icon: "success",
                        });
                  } else {
                        // swal("property "+jenis_property+" gagal di hapus");
                        swal(
                              'Oooops!!!',
                              'property '+jenis_property+' gagal di hapus :)',
                              'error'
                        )
                  }
                  });
            });
      </script>
      <script>
            $('.hapusponorogo').click(function(){
                  var acara_id = $(this).attr('data-id');
                  var jenis_property = $(this).attr('data-jenis_property');
                  swal({
                  title: "Apa kamu yakin?",
                  text: "kamu akan menghapus property dengan nama "+jenis_property+" ",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
                  })
                  .then((willDelete) => {
                  if (willDelete) {
                        window.location = "/hapusponorogo/"+acara_id+""
                        swal("property "+jenis_property+" berhasil di hapus", {
                        icon: "success",
                        });
                  } else {
                        // swal("property "+jenis_property+" gagal di hapus");
                        swal(
                              'Oooops!!!',
                              'property '+jenis_property+' gagal di hapus :)',
                              'error'
                        )
                  }
                  });
            });
      </script>

      <script>
            $('.tambah').click(function(){
                  alert('Data berhasil ditambahkan')
            });
      </script>

      <script>
            $('.edit').click(function(){
                  alert('Data berhasil edit')
            });
      </script>

{{-- toastr --}}
<script>
      @if (Session::has('success'))
      toastr.success("{{ Session::get('success') }}")
      @endif
</script>