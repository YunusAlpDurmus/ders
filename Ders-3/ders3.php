<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ders3</title>
</head>
<body>
    <?php
    $not = rand(10 , 100);
    if($not >= 50) {
        echo "Geçtiniz-Notunuz:$not";
    } else {
        echo "Kaldınız-Notunuz:$not";
    }


    echo"<h3>Sık kullanılan string fonksiyonlar.</h3>";

    $yazi = "Aydın Adnan Menderes Üniversitesi";

    echo gettype($yazi);
    echo "<br> Değişken İçeriği: $yazi " . "(" . gettype($yazi) . ")";


    echo "<br> \$yazi İçeriğinin Büyük Harfle Yazılması: " . $buyuk_yazi = strtoupper($yazi);
    echo "<br> \$yazi İçeriğinin Büyük Harfle Yazılması: " . $buyuk_yazi = mb_strtoupper($yazi);

    echo "<br> \$yazi İçeriğinin Küçük Harfle Yazılması: " . $kucuk_yazi = strtolower($buyuk_yazi);
    echo "<br> \$yazi İçeriğinin Küçük Harfle Yazılması: " . $kucuk_yazi = mb_strtolower($buyuk_yazi);


    echo "<br> \$yazi İlk Harfinin , Büçük Harfle Yazılması: " . $ilk_yazi = ucfirst($kucuk_yazi);

    echo "<br> \$yazi Tüm Kelimelerinin İlk Harfinin , Büyük Harfle Yazılması: " . $kelime = ucwords($kucuk_yazi);

    echo "<br> \$yazi İçerisindeki Harf Sayısı: " . strlen($yazi);

    echo "<br>Karakter Karşılığı: " . chr(109);
    echo "<br>Karakter Karşılığı: " . chr(640);
    for ($i = 32; $i <= 127; $i++) { 
        echo   chr($i) . "-";
    }

    $dizi=explode(" ",$yazi);
    echo "<br>";
    print_r($dizi);


    $metin= "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, magnam et unde animi expedita, vero commodi
    aspernatur qui, pariatur explicabo blanditiis nemo possimus eligendi excepturi nisi impedit earum ea neque!";


    $kelimelerDizisi=explode(" ", $metin);
    $cumlelerDizisi=explode(".", $metin);

    echo "<br>Kelime Sayısı: " . count($kelimelerDizisi);
    echo "<br>Cümle Sayısı: " . count($cumlelerDizisi);


    echo "<br>";
    $tarih="2021-12-25";
    $yenitarih = explode("-", $tarih);
    echo $yenitarih[2] . "-" . $yenitarih[1] . "-" . $yenitarih[0];
    
    echo "<br>";
    $aylar = ["Ocak", "Şubat", "Mart", "Nisan", "Mayıs"];
    $aylarString = implode(" ", $aylar);
    print_r($aylar);
    $aylarString = implode(" ", $aylar);
    echo "<br>String: $aylarString";

    echo "<br>";
    $iban="TR0010002000300040005000";
    $ibanYeni=str_split($iban,4);
    print_r($ibanYeni);

    foreach($ibanYeni as $parca) {
        echo "$parca";
    }
    

    
   




     ?>
</body>
</html>