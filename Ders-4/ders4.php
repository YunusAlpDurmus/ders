<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ders-4</title>
</head>
<body>


<h3>Php'de Diziler<h3>
<ol>
    <li>dizi oluşturmak için array() fonksiyonu veya [] kullanabiliriz..</li>
    <li>Dizi içerisinde farklı türden birçok değer bulunabilir. (int, string, double)</li>
    <li>"echo $diziAdi" ile dizi içeriği ekrana yazdırılamaz. Array yo string
        Conversion hatası verir. Fakat dizinin öreneğin 3 indisine sahip elemanı 
        "echo $diziAdi[3]" şeklinde yazdırılabilir.
    </li>
    <li>Dizinin içerisindeki string ifadeler çift tırnak içerisinde yazılır.</li>
    <li>Dizinin içerisindeki int ifadeler direk yazdırılabilir</li>
</ol>

<?php

$dizi1 = array(1, 2, 3, "Alican", "Ocak", "Şubat");
$dizi2 = [1, 2, 3, "Alican"];

echo "<pre>";
print_r($dizi1);
echo "</pre>";

echo "Dizini 1. elemanı: " . $dizi1[1] . "<br>";
echo "Dizini 1. elemanın Türü: " . gettype($dizi1[1]) . "<br>";


echo "Dizini 5. elemanı: " . $dizi1[4] . "<br>";
echo "Dizini 5. elemanın Türü: " . gettype($dizi1[4]) . "<br>";


echo "Dizinin 0. İndisi: <b> $dizi1[0]</b><br>";
echo "Dizinin 0. İndisi: <b> $dizi1[1]</b><br>";
echo "Dizinin 0. İndisi: <b> $dizi1[2]</b><br>";
echo "Dizinin 0. İndisi: <b> $dizi1[3]</b><br>";
echo "Dizinin 0. İndisi: <b> $dizi1[4]</b><br>";
echo "Dizinin 0. İndisi: <b> $dizi1[5]</b><br>";

echo "<h4>Dizinin İçeriğini foreach döngüsüyle yazıdırılması-1 </h4>";
foreach ($dizi1 as $eleman) {
    echo "$eleman <br>";
}

echo "<h4>Dizinin İçeriğini foreach döngüsüyle yazıdırılması-2 </h4>";
foreach ($dizi1 as $anahtar => $değer) {
    echo "$anahtar - $değer <br>";
}

echo "<h4>Dizinin İçeriğini for döngüsüyle yazıdırılması-3 </h4>";
for ($i = 0; $i <count($dizi1); $i++){
    echo "$i: $dizi1[$i] <br>";
}

$sayilar = array(1, 2, 3, 4, 5);

$sayilar = array(
    array(1, 2, 3, 4, 5),
    array(10.5, 3.2, 1.7)
    );

echo "<pre>";
print_r($sayilar);
echo "</pre>";


$sayilar = array(
    "Integer"  => array(1, 2, 3, 4, 5),
    "Double"   => array(10.5, 3.2, 1.7)
    );

echo "<pre>";
print_r($sayilar);
echo "</pre>";

$bilgiler = array(
    "id"        => 1,
    "adi"       => "Ahmet",
    "soyadi"    => "Erimez",
    "gsm"       => "5233922184",
    "cinsiyet"  => "Erkek",
    "yas"       => 30
);

echo "$bilgiler[adi] $bilgiler[soyadi] Hoşgeldiniz.<br>";
echo  $bilgiler["adi"] . " " . $bilgiler["soyadi"] . " Hoşgeldiniz.";

echo "<pre>";
print_r($bilgiler);
echo "</pre>";

foreach ($bilgiler as $bilgi){
    echo $bilgi . " - ";
}






?>



 
    
    
</body>
</html>