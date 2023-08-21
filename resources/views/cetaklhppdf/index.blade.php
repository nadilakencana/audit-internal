<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Teaser</title>

  <style>
    @page {
      size: A4;
      margin: 0;
    }

    body {
      margin: 20px;
    }

    .heading_container {
      text-align: center;
      margin-bottom: 20px;
    }

    .property {
      display: flex;
      flex-direction: column;
      border: 1px solid #000000;
      padding: 10px;
      margin-bottom: 20px;
    }

    .property-row {
      display: flex;
      justify-content: space-between;
      margin-top: 5px;
    }

    .property-label {
      font-weight: bold;
      width: 150px;
    }

    a {
      color: #0000FF;
      text-decoration: underline;
    }

    @media print,
    (max-width: 768px) {
      .property-label {
        width: 100%;
      }
    }
  </style>

</head>

<body class="sub_page">

  <section class="sale_section layout_padding">
    <div class="container-fluid">
      <div class="heading_container">
        <h2>Laporan Hasil Pemeriksaan</h2>
        <h1>PT. Perusahaan Perdagangan Indonesia</h1>
      </div>
      <div class="container">
        <br />
        <div class="property">
          <div class="property-row">
            <span class="property-label">Kategori:</span>
            <span>{{ $cetak->kategori }}</span>
          </div>
          <div class="property-row">
            <span class="property-label">Kode LHP:</span>
            <span>{{ $cetak->kode_lhp }}</span>
          </div>
          <div class="property-row">
            <span class="property-label">Tanggal:</span>
            <span>{{ $cetak->tanggal }}</span>
          </div>
          <div class="property-row">
            <span class="property-label">Uraian:</span>
            <span>{{ $cetak->uraian }}</span>
          </div>
          <div class="property-row">
            <span class="property-label">Unit:</span>
            <span>{{ $cetak->unit }}</span>
          </div>
          <div class="property-row">
            <span class="property-label">File:</span>
            <span><a href="{{ asset('storage/' . $cetak->file) }}" class="btn btn-success" target="_blank">{{ basename($cetak->file) }}</a></span>
          </div>
        </div>
      </div>
    </div>
  </section>

</body>

</html>
