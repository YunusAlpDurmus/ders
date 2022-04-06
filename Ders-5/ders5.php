<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ders-5</title>
</head>
<body>


<h3>Php'de Dzilier Devamı</h3>
<?php

$isimler = array();
$isimler[0] = "Yunus";
$isimler[0] = "Can";
$isimler[0] = "Özüm";
$isimler[0] = "Ramazan";

echo "<pre>";
print_r($isimler);
echo "<pre>";

$isimler2 = array();
$isimler2["isim1"] = "Yunus";
$isimler2["isim2"] = "Can";
$isimler2["isim3"] = "Özüm";
$isimler2["isim4"] = "Ramazan";

echo "<pre>";
print_r($isimler2);
echo "<pre> <hr>";


$ögrenciDetay = array(
    "id"         => 1,
    "adi"        => "Havva",
    "soyadi"     => "Yıldız",
    "yas"        => 20,
    "dersler"    => array(
        "ders1"  => "Web Programlama",
        "ders2"  => "Veri Tabanı",
        "ders3"  => "Mobil Programlama",
    ),
    "sınıf"      => 2,
    "memleket"   => "İzmir",    
);

echo "$ögrenciDetay[adi] $ögrenciDetay[soyadi] isimli öğrencinin" .
$ögrenciDetay["dersler"]["ders1"] .
$ögrenciDetay["dersler"]["ders2"] . 
$ögrenciDetay["dersler"]["ders3"] . " dersleri vardır. ";

echo "<pre>";
print_r($ögrenciDetay);
echo "<pre> <hr>";











?>
    
</body>
</html>