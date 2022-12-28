<?php

$baglanti = new mysqli("localhost", "root", "", "surucu_kurs");

if ($baglanti->connect_errno > 0) {
    die("<b>Bağlantı Hatası:</b> " . $baglanti->connect_error);
}

$baglanti->set_charset("utf8");

$sorgu = $baglanti->query("SELECT isim FROM hizmetlerimiz");

if ($baglanti->errno > 0) {
    die("<b>Sorgu Hatası:</b> " . $baglanti->error);
}

$cikti = $sorgu->fetch_array();

echo "Adı: " . $cikti["isim"];

$sorgu->close();
$baglanti->close();

?>