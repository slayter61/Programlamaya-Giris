<!DOCTYPE html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=uft-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>Deneme Site</title>
</head>
<body>
<form action="" method="post">
  Şuan Hangi Yıldayız? : <input type="text" name="yiliniz"><br />
  Doğum Yılını Giriniz : <input type="text" name="yasiniz"><br />
  <input type="submit" value="Yaşı Hesapla">
</form>

<?php

function yas($yil){
$suanki_yil = @$_POST["yiliniz"];

$uye_yil  = @$_POST["yasiniz"];

$yas  = $suanki_yil - $uye_yil;
return $yas;

}

echo "Yaşınız : " .yas(@$uye_yil);

	?>
</body>
</html>
