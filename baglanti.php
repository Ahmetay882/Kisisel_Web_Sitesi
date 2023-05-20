<!-- veritabanı bağlantısı yapacağımız dosya -->
<?php
$db_sunucu = "localhost";
$db_kullanici = "root";
$db_sifre = "12345678";
$db_name = "Kisisel_Web_Sitesi";

$baglan = mysqli_connect($db_sunucu, $db_kullanici, $db_sifre, $db_name);
if (!$baglan) {
    die("Veri tabanı bağlantı işlemi başarısız !" . mysqli_connect_errno());
}
?>