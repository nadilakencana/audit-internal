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
                        <span class="property-label">Ketua Penugasan :</span>
                        <span>{{ $lhp->penugasan->user->name }}</span>
                    </div>
                    <div class="property-row">
                        <span class="property-label">Tanggal Audit:</span>
                        <span>{{ $lhp->tanggal}}</span>
                    </div>
                    <div class="property-row">
                        <span class="property-label">Cabang Audite:</span>
                        <span>{{ $lhp->cabang->nama }}</span>
                    </div>
                    <div class="property-row uraian">
                        <span class="property-label">Uraian:</span>
                        <ul>
                            @foreach ($lhp->temuanAudit as $temuan)
                            <li><span>- {{ $temuan->deskripsi_temuan }}</span></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="property-row">
                        @php
                             $temuan = 1;
                        @endphp
                        <span class="property-label">File:</span>
                        @foreach ($lhp->fileTemuan as $file)
                            <a href="{{asset('buktitemuan/'.$lhp->id.'/'.$file->bukti_temuan)}}" target="_blank" class="btn btn-info mb-2">Lihat File Temuan {{ $temuan++ }}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>
