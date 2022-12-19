<?php

$baglan = mysqli_connect("localhosst", "root", "", "surucu_kurs");

$sorgu = $baglan->query("SELECT isim_soyisim, dogum_tarihi FROM sinavi_kazan");
$cikti = $sorgu->fetch_array();






?>