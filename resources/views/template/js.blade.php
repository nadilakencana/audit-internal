      <script src="{{ asset ("template1/plugins/jquery/jquery.min.js") }}"></script>

      <!-- Bootstrap Core Js -->
      <script src="{{ asset ("template1/plugins/bootstrap/js/bootstrap.js") }}"></script>

      <!-- Select Plugin Js -->
      <script src="{{ asset ("template1/plugins/bootstrap-select/js/bootstrap-select.js") }}"></script>

      <!-- Slimscroll Plugin Js -->
      <script src="{{ asset ("template1/plugins/jquery-slimscroll/jquery.slimscroll.js") }}"></script>

      <!-- Waves Effect Plugin Js -->
      <script src="{{ asset ("template1/plugins/node-waves/waves.js") }}"></script>

      <!-- Jquery CountTo Plugin Js -->
      <script src="{{ asset ("template1/plugins/jquery-countto/jquery.countTo.js") }}"></script>

      <!-- Morris Plugin Js -->
      <script src="{{ asset ("template1/plugins/raphael/raphael.min.js") }}"></script>
      <script src="{{ asset ("template1/plugins/morrisjs/morris.js") }}"></script>

      <!-- ChartJs -->
      <script src="{{ asset ("template1/plugins/chartjs/Chart.bundle.js") }}"></script>

      <!-- Flot Charts Plugin Js -->
      <script src="{{ asset ("template1/plugins/flot-charts/jquery.flot.resize.js") }}"></script>
      <script src="{{ asset ("template1/plugins/flot-charts/jquery.flot.js") }}"></script>
      <script src="{{ asset ("template1/plugins/flot-charts/jquery.flot.pie.js") }}"></script>
      <script src="{{ asset ("template1/plugins/flot-charts/jquery.flot.categories.js") }}"></script>
      <script src="{{ asset ("template1/plugins/flot-charts/jquery.flot.time.js") }}"></script>

      <!-- Sparkline Chart Plugin Js -->
      <script src="{{ asset ("template1/plugins/jquery-sparkline/jquery.sparkline.js") }}"></script>

      <!-- Custom Js -->
      <script src="{{ asset ("template1/js/admin.js") }}"></script>
      <script src="{{ asset ("template1/js/pages/index.js") }}"></script>

      <!-- Demo Js -->
      <script src="{{ asset ("template1/js/demo.js") }}"></script>

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
                  $('.deletebarang').click(function(){
            var barang_id = $(this).attr('data-id');
            var barang = $(this).attr('data-nama_barang');
                  swal({
                  title: "Apa kamu yakin?",
                  text: "kamu akan menghapus barang dengan nama "+barang+" ",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
                  })
                  .then((willDelete) => {
                  if (willDelete) {
                        window.location = "/delete/"+barang_id+""
                        swal("Barang "+barang+" berhasil di hapus", {
                        icon: "success",
                        });
                  } else {
                        // swal("Barang "+barang+" gagal di hapus");
                        swal(
                              'Oooops!!!',
                              'Barang '+barang+' gagal di hapus :)',
                              'error'
                        )
                  }
                  });
                        });
            </script>

      <script>
            $('.deleteanggota').click(function(){
            var anggota_id = $(this).attr('data-id');
            var nama = $(this).attr('data-nama');
                  swal({
                  title: "Apa kamu yakin?",
                  text: "kamu akan menghapus anggota dengan nama "+nama+" ",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
                  })
                  .then((willDelete) => {
                  if (willDelete) {
                        window.location = "/hapus/"+anggota_id+""
                        swal("Anggota dengan nama "+nama+" berhasil di hapus", {
                        icon: "success",
                        });
                  } else {
                        // swal("Anggota dengan nama "+nama+" gagal di hapus");
                        swal(
                              'Oooops!!!',
                              'Anggota dengan nama '+nama+' gagal di hapus :)',
                              'error'
                        )
                  }
                  });
                        });
            </script>
      <script>
            $('.deleteuser').click(function(){
            var user_id = $(this).attr('data-id');
            var username = $(this).attr('data-name');
                  swal({
                  title: "Apa kamu yakin?",
                  text: "kamu akan menghapus user dengan nama "+username+" ",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
                  })
                  .then((willDelete) => {
                  if (willDelete) {
                        window.location = "/hapususer/"+user_id+""
                        swal("user "+username+" berhasil di hapus", {
                        icon: "success",
                        });
                  } else {
                        // swal("user "+username+" gagal di hapus");
                        swal(
                              'Oooops!!!',
                              'user '+username+' gagal di hapus :)',
                              'error'
                        )
                  }
                  });
                        });
            </script>

      <script>
                  $('.deleteangkatan').click(function(){
            var angkatan_id = $(this).attr('data-id');
            var angkatan = $(this).attr('data-angkatan');
                  swal({
                  title: "Apa kamu yakin?",
                  text: "kamu akan menghapus angkatan  "+angkatan+" ",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
                  })
                  .then((willDelete) => {
                  if (willDelete) {
                        window.location = "/hapusangkatan/"+angkatan_id+""
                        swal("Angkatan "+angkatan+" berhasil di hapus", {
                        icon: "success",
                        });
                  } else {
                        // swal("Angkatan "+angkatan+" gagal di hapus");
                        swal(
                              'Oooops!!!',
                              'Angkatan '+angkatan+' gagal di hapus :)',
                              'error'
                        )
                  }
                  });
                        });
            </script>

      <script>
                  $('.deleteacara').click(function(){
            var acara_id = $(this).attr('data-id');
            var tittle = $(this).attr('data-tittle');
                  swal({
                  title: "Apa kamu yakin?",
                  text: "kamu akan menghapus acara dengan nama "+tittle+" ",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
                  })
                  .then((willDelete) => {
                  if (willDelete) {
                        window.location = "/hapusacara/"+acara_id+""
                        swal("Acara "+tittle+" berhasil di hapus", {
                        icon: "success",
                        });
                  } else {
                        // swal("Acara "+tittle+" gagal di hapus");
                        swal(
                              'Oooops!!!',
                              'Acara '+tittle+' gagal di hapus :)',
                              'error'
                        )
                  }
                  });
                        });
            </script>

      <script>
                  $('.deleteartikel').click(function(){
            var artikel_id = $(this).attr('data-id');
            var artikel = $(this).attr('data-title');
                  swal({
                  title: "Apa kamu yakin?",
                  text: "kamu akan menghapus artikel dengan nama "+artikel+" ",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
                  })
                  .then((willDelete) => {
                  if (willDelete) {
                        window.location = "/hapusartikel/"+artikel_id+""
                        swal("artikel "+artikel+" berhasil di hapus", {
                        icon: "success",
                        });
                  } else {
                        // swal("artikel "+artikel+" gagal di hapus");
                        swal(
                              'Oooops!!!',
                              'artikel '+artikel+' gagal di hapus :)',
                              'error'
                        )
                  }
                  });
                        });
            </script>

      <script>
                  $('.delete').click(function(){
            var kategori_id = $(this).attr('data-id');
            var kategori = $(this).attr('data-kategori');
                  swal({
                  title: "Apa kamu yakin?",
                  text: "kamu akan menghapus kategori dengan nama "+kategori+" ",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
                  })
                  .then((willDelete) => {
                  if (willDelete) {
                        window.location = "/hapuskategori/"+kategori_id+""
                        swal("kategori "+kategori+" berhasil di hapus", {
                        icon: "success",
                        });
                  } else {
                        // swal("kategori "+kategori+" gagal di hapus");
                        swal(
                              'Oooops!!!',
                              'kategori '+kategori+' gagal di hapus :)',
                              'error'
                        )
                  }
                  });
                        });
            </script>

      <script>
                  $('.deletejadwal').click(function(){
            var jadwal_id = $(this).attr('data-id');
            var sharingname = $(this).attr('data-title');
                  swal({
                  title: "Apa kamu yakin?",
                  text: "kamu akan menghapus jadwal dengan nama "+sharingname+" ",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
                  })
                  .then((willDelete) => {
                  if (willDelete) {
                        window.location = "/hapusjadwal/"+jadwal_id+""
                        swal("jadwal sharing dengan nama "+sharingname+" berhasil di hapus", {
                        icon: "success",
                        });
                  } else {
                        // swal("jadwal sharing dengan nama "+sharingname+" gagal di hapus");
                        swal(
                              'Oooops!!!',
                              'jadwal sharing dengan nama '+sharingname+' gagal di hapus :)',
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