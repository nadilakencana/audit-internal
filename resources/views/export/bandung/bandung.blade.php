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

</head>

<body class="sub_page">

  <section class="sale_section layout_padding">
    <div class="container-fluid">
      <div class="heading_container">
        <h2 style="text-align: center;">
          Kabupaten Bandung
        </h2>
        
      </div>
      <div class="sale_container">
      <br/>
        <table cellspacing="0" border="0">
            <colgroup width="48"></colgroup>
            <colgroup width="89"></colgroup>
            <colgroup width="185"></colgroup>
            <colgroup span="4" width="93"></colgroup>
            <colgroup width="192"></colgroup>
            <colgroup width="93"></colgroup>
            
            <tr>
                <td colspan=12 height="21" align="center" valign=bottom bgcolor="#D5A6BD"><b><font face="Caveat" size=3 color="#000000">Kabupaten Bandung</font></b></td>
            </tr>
            
            <tr>
                <td height="21" align="center" valign=middle><font face="Times New Roman" color="#000000"><br></font></td>
                <td align="center" valign=middle><font face="Times New Roman" color="#000000"><br></font></td>
                <td align="center" valign=middle><font face="Times New Roman" color="#000000"><br></font></td>
                <td align="center" valign=middle><font face="Times New Roman" color="#000000"><br></font></td>
                <td align="center" valign=middle><font face="Times New Roman" color="#000000"><br></font></td>
                <td align="center" valign=middle><font face="Times New Roman" color="#000000"><br></font></td>
                <td align="center" valign=middle><font face="Times New Roman" color="#000000"><br></font></td>
                <td align="center" valign=middle><font face="Times New Roman" color="#000000"><br></font></td>
                <td align="center" valign=middle><font face="Times New Roman" color="#000000"><br></font></td>
            </tr>
           
            <tr>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="center" valign=middle bgcolor="#D9D2E9"><b><font face="Times New Roman" size=3 color="#000000">Ket</font></b></td>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#D9D2E9"><b><font face="Times New Roman" size=3 color="#000000">Jenis Property</font></b></td>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#D9D2E9"><b><font face="Times New Roman" size=3 color="#000000">Alamat</font></b></td>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#D9D2E9"><b><font face="Times New Roman" size=3 color="#000000">Luas Tanah</font></b></td>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#D9D2E9"><b><font face="Times New Roman" size=3 color="#000000">Luas Bangunan</font></b></td>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#D9D2E9"><b><font face="Times New Roman" size=3 color="#000000">Sertifikat</font></b></td>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#D9D2E9"><b><font face="Times New Roman" size=3 color="#000000">Harga</font></b></td>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#D9D2E9"><b><font face="Times New Roman" size=3 color="#000000">Link Foto</font></b></td>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#D9D2E9"><b><font face="Times New Roman" size=3 color="#000000">Link maps</font></b></td>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#D9D2E9"><b><font face="Times New Roman" size=3 color="#000000">Catatan</font></b></td>
            </tr>
             @foreach ($bandung as $row)
            <tr>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="center" valign=middle><font face="Times New Roman" color="#000000">{{ $row->ket }}</font></td>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font face="Times New Roman" color="#000000">{{ $row->jenis_property }}</font></td>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font face="Times New Roman" color="#000000">{{ $row->alamat }}</font></td>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font face="Times New Roman" color="#000000">{{ $row->luas_tanah }} </font></td>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font face="Times New Roman" color="#000000">{{ $row->luas_bangunan }} </font></td>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font face="Times New Roman" color="#000000">{{ $row->sertifikat }}</font></td>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font face="Times New Roman" color="#000000">{{ $row->harga }}</font></td>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><u><font face="Times New Roman" color="#0000FF"><a href="https://drive.google.com/file/d/17SIvoQUDE_9JrzbturdTw_QHXBwUp45l/view?usp=share_link">{{ $row->link_foto }}</a></font></u></td>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><u><font face="Times New Roman" color="#0000FF"><a href="https://drive.google.com/file/d/17SIvoQUDE_9JrzbturdTw_QHXBwUp45l/view?usp=share_link">{{ $row->link_maps }}</a></font></u> </td>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font face="Times New Roman" color="#000000">{{ $row->catatan }}</font></td>
            @endforeach
            </tr>
            
        </table>
      </div>
    </div>
  </section>

</body>
</body>

</html>