<?php

function format_uang($angka){
    return number_format($angka, 0, ',', '.');
}

function terbilang ($angka) {
    $angka = abs($angka);
    $baca = array('', 'satu', 'dua','tiga','empat', 'lima', 'enam', 'tujuh', 'delapan', 'sembilan', 'sepuluh', 'sebelas');
    $terbilang = '';

    if ($angka < 12){ //12 - 19
        $terbilang = '' . $baca[$angka];
    }elseif ($angka < 20) { //20 - 99
        $terbilang = terbilang($angka -10). ' belas';
    }elseif ($angka < 100) { //100 - 199
        $terbilang = terbilang($angka / 10). ' puluh ' . terbilang($angka % 10);
    }elseif ($angka < 200) { //200 - 999
        $terbilang = ' seratus ' . terbilang($angka -100);
    }elseif ($angka < 1000) { //1000 - 1999
        $terbilang = terbilang($angka / 100). ' ratus ' . terbilang($angka % 100);
    }elseif ($angka < 1000000) { //1000 - 1999
        $terbilang = terbilang($angka / 1000). ' ribu ' . terbilang($angka % 1000);
    }elseif ($angka < 1000000000) { //1000 - 1999
        $terbilang = terbilang($angka / 1000000). ' juta ' . terbilang($angka % 1000000);
    }
    return $terbilang;
}

function tanggal_indonesia($tgl, $tampil_hari = true){
    $nama_hari = array(
        'minggu', 'senin', 'selasa', 'rabu', 'kamis', 'jumat', 'sabtu');
    $nama_bulan = array(1 => 
        'januari', 'febuari', 'maret', 'april', 'mei','juni', 'juli', 'agustus', 'september', 'oktober', 'november', 'desember');

    $tahun = substr($tgl, 0, 4);
    $bulan = $nama_bulan[(int) substr($tgl, 5, 2)];
    $tanggal = substr($tgl, 8, 2);
    $text = '';

    if($tampil_hari) {
        $urutan_hari = date('w', mktime(0,0,0, substr($tgl, 5, 2), $tanggal, $tahun));
        $hari = $nama_hari[$urutan_hari];
        $text .= "$hari, $tanggal  $bulan  $tahun";

    }else{

        $text .= "$tanggal $bulan $tahun";
    }

    return $text;
}

