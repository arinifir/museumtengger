<?php

function convertTimestampToBulan($timestamp)
{
    $list_bulan = [
        'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    ];
    $bulanangka = date('m', $timestamp);
    $bulan = $list_bulan[$bulanangka-1];
    return $bulan;
}

?>