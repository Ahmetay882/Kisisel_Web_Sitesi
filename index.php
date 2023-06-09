<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Ahmet Ay | Ana Sayfa</title>
</head>

<body>
    <section id="menu">
        <div id="logo">Ahmet Ay</div>
        <nav>
            <a href="#anasayfa">ANA SAYFA</a>
            <a href="#hakkımda">HAKKIMDA</a>
            <a href="#ozgecmis">ÖZGEÇMİŞ</a>
            <a href="#iletisim">İLETİŞİM</a>
        </nav>
    </section>

    <section id="anasayfa">
        <div id="black"></div>
        <div id="icerik">
            <h3>Ahmet Ay</h3>
            <hr width="300" align=left>
            <p>
                Bandırma Onyedi Eylül Üniversitesinde Bilgisayar Mühendisliği bölümü 2.sınıf öğrencisi.
            </p>
        </div>
    </section>

    <section id="hakkimizda">
        <h3>Hakkımda</h3>
        <div id="container">
            <div id="sol">
                <h5 id="h5sol">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                </h5>
            </div>

            <div id="sag">
                <span>L</span>
                <p id="psag">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, quae. Veniam facere repellat,
                    esse, perferendis similique placeat corporis nihil assumenda aliquid illo harum minima. Minus minima
                    ad laborum optio explicabo.
                </p>
            </div>

            <img src="css/image/hakkimda.jpg" alt="" class="img-fluid mt100">

            <p id="pson">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo facilis saepe cupiditate fuga iste
                voluptates delectus reiciendis repellat, est reprehenderit esse adipisci dolorum labore similique nemo
                rerum laudantium quasi et.
            </p>
        </div>
    </section>

    <section id="iletisim">
        <div class="container">
            <h3 id="h3iletisim">İletişim</h3>
            <form action="index.php" method="post">
                <div id="iletisimopak">
                    <div id="formgroup">
                        <div id="solform">
                            <input type="text" class="form-control" name="isim" placeholder="Ad Soyad" required>
                            <input type="text" class="form-control" name="tel" placeholder="Telefon Numarası" required>
                        </div>

                        <div id="sagform">
                            <input type="email" class="form-control" name="email" placeholder="Email Adresiniz" required>
                            <input type="text" class="form-control" name="konu" placeholder="Konu Başlığı" required>
                        </div>

                        <textarea class="form-control" name="mesaj" id="" cols="30" rows="10" placeholder="Mesajınızı Giriniz" required></textarea>

                        <input type="submit" value="Gönder">
                    </div>

                    <div id="adres">
                        <h4 id="adresbaslik">Adres:</h4>
                        <p class="adresp">Gençosman Mahallesi</p>
                        <p class="adresp">Doğanbey Caddesi</p>
                        <p class="adresp">Aktaran Sokak</p>
                        <p class="adresp">(538) 034 72 24</p>
                        <p class="adresp">Email: ayahmet882@gmail.com</p>
                    </div>
                </div>
            </form>

            <footer>
                <div id="copyright">2023 | Tüm Hakları Saklıdır</div>
                <div id="socialfooter">
                    <!--Linkedln-->
                    <a href="https://www.linkedin.com/in/ayahmet/" target="_blank">
                        <img src="css/image/linkedln.jpg" height="55px">
                    </a>

                    <!--Githup-->
                    <a href="https://github.com/Ahmetay882" target="_blank">
                        <img src="css/image/githup.jpg" height="55px">
                    </a>

                    <!--Twitter-->
                    <a href="https://twitter.com/ay_ahmet__" target="_blank">
                        <img src="css/image/twitter.jpg" height="55px">
                    </a>
                </div>
                <a href="#menu"><img src="css/image/yukarı.jpg" height="85px" id="up"></a>
            </footer>

        </div>
    </section>

</body>

</html>

<!-- veri tabanı bağlatımızı sayfamıza bağlıyoruz -->
<?php
include("baglanti.php");

if (isset($_POST["isim"], $_POST["tel"], $_POST["email"], $_POST["konu"], $_POST["mesaj"])) { //isset veri olup olmadığını kontrol eder
    $adsoyad = $_POST["isim"];
    $telefon = $_POST["tel"];
    $email = $_POST["email"];
    $konu = $_POST["konu"];
    $mesaj = $_POST["mesaj"];

    $ekle = "INSERT INTO iletisim(adsoyad, telefon, email, konu, mesaj_icerigi) VALUES ('" . $adsoyad . "','" . $telefon . "','" . $email . "','" . $konu . "', '" . $mesaj . "')";

    if ($baglan->query($ekle) === TRUE) {
        echo "<script>alert('Mesajınız Başarı ile Gönderilmiştir.')</script>";
    } else {
        echo "<script>alert('Mesajınız Gönderilirken Bir Hata Oluştu !')</script>";
    }
}
?>