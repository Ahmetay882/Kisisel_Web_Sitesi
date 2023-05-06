<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css" />
    <title>AHMET AY Kişisel Websitesi</title>
</head>

<body>
    <div class="header">
        <div class="logo">
            <a href="#">Enes Ay</a>
        </div>
        <ul id="menufull">
            <li><a href="#tohome">ANASAYFA</a> </li>
            <li><a href="#tohakkimda">HAKKIMDA</a> </li>
            <li><a href="#toözgeçmiş">ÖZGEÇMİŞ</a> </li>
            <li><a href="#tomessage_form">BANA ULAŞ</a> </li>
            <li><a href="#toiletişim">İLETİŞİM</a> </li>
        </ul>
    </div>

    <section id="tohome" class="home">
        <div class="content">
            <h2>
                AHMET AY KİŞİSEL WEBSİTESİ
            </h2>
        </div>
    </section>

    <section id="tohakkımda" class="hakkımda">
        <p>
            2003 İstanbul doğumluyum. Bandırma Onyedi Eylül Üniversitesi'nde
            Bilgisayar Mühendisliği 2.sınıf öğrencisiyim.Backend ve Yapay Zeka gibi konularla
            ilgileniyorum.
        </p>
    </section>

    <section id="toözgeçmiş" class="özgeçmiş">
        <p>
            <b>Kişisel Bilgiler</b><br>
            2003, Mardin<br>
            ayahmet882@gmail.com
            <b>Eğitim Bilgileri</b><br>
            Bandırma Onyedi Eylül Üniversitesi<br>
            Bilgisayar Mühendisliği 2020-2024<br>
            <b>İlgi Alanları</b><br>
            Veri Analizi, Backend (JAVA), Yapay Zeka<br>
            <b>Dijital Beceriler</b><br>
            Java, Python, C/C++, PowerBI
        </p>
    </section>

    <section id="toiletişim" class="iletişim">
        <p>
            ayahmet882@gmail.com<br>
            Güngören/İstanbul
        </p>

    </section>
    <section id="tomessage_form">
        <form action="index.php" method="post">
            <div class="contact">
                <input class="inputs" type="text" name="isim" placeholder="Ad Soyad" required><br>
                <input class="inputs" type="text" name="email" placeholder="E-mail" required><br>
                <input class="inputs" type="text" name="tel" placeholder="Telefon "><br>
                <textarea id="message_area" name=mesaj placeholder="Mesajınız" required></textarea>
                <input type="submit" value="Gönder">
            </div>
        </form>
    </section>

</body>

</html>
<?php

include("connect.php");

if (isset($_POST["isim"], $_POST["tel"], $_POST["email"], $_POST["mesaj"])) {

    $ad = $_POST["isim"];
    $email = $_POST["email"];
    $tel = $_POST["tel"];
    $mesaj = $_POST["mesaj"];

    $ekle = "INSERT INTO iletisim (ad, email, telefon,mesaj) 
    VALUES('" . $ad . "','" . $email . "','" . $tel . "','" . $mesaj . "')";
}

if ($connect->query($ekle) === true) {
    echo "<script>alert('mesajınız alındı')</script>";
} else {
    echo "<script>alert('mesajınız alınamadı')</script>";
}
?>