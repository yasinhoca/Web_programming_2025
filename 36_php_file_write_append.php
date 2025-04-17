<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>File write append</title>
</head>
<body>
<?php
/*
 * r = read
 * w = write  eğer dosya yoksa oluşturur, dosya varsa içini siler yeniden yazar
 * a = append var olan dosyanın üzerine ekler
 */
/*
$dosya = fopen("soyadlar.txt","w") or die("Dosya bulunamadı!");
$soyadlar= "alkan\n";
fwrite($dosya,$soyadlar);
$soyadlar= "bilir\n";
fwrite($dosya,$soyadlar);
fclose($dosya);*/

/*
$dosya = fopen("soyadlar.xml","w") or die("Dosya bulunamadı!");
$soyadlar= "<turkiye> 
                <sehir> 
                    <isim>
                        KONYA
                    </isim>
                    <sicaklik>
                        19
                    </sicaklik>
                </sehir>
            </turkiye>";
fwrite($dosya,$soyadlar);
fclose($dosya);*/

/*
$dosya = fopen("soyadlar.json","w") or die("Dosya bulunamadı!");
$soyadlar= '
{
  "ogrenciler": [
    {
      "isim": "Sercan",
      "derskodu": 5061,
      "dersadi": "oyun programcılığı"
    },
    {
      "isim": "Onur",
      "derskodu": 5062,
      "dersadi": "mobil programlama"
    },
    {
      "isim": "Oğuzhan",
      "derskodu": 5063,
      "dersadi": "xml ve web servisleri"
    }
  ]
}
'
;
fwrite($dosya,$soyadlar);
fclose($dosya); */

/*
$dosya = fopen("soyadlar.txt","w") or die("Dosya bulunamadı!");
$soyadlar= "cihan";
fwrite($dosya,$soyadlar);
fclose($dosya); */

$dosya = fopen("soyadlar.txt","a") or die("Dosya bulunamadı!");
$soyadlar= "denge\n";
fwrite($dosya,$soyadlar);
$soyadlar= "erken\n";
fwrite($dosya,$soyadlar);
fclose($dosya);


?>

</body>
</html>