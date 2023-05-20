<!DOCTYPE html>
<html>

<head>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }
    </style>
</head>

<body>
    <table id="customers">
        <tr>
            <th>Ad Soyad</th>
            <th>Email Adresi</th>
            <th>Telefon Numarası</th>
            <th>Konu Başlığı</th>
            <th>Mesaj İçeriği</th>
        </tr>

        <?php
        session_start();

        //kullanıcı eğer direkt link üzerinden (izinsiz) giriş yapmaya çalışırsa otomatik çıkış yaptıracak kod.
        if ($_SESSION["user"] == "") {
            echo "<script>window.location.href='cikis.php'</script>";
        } else {
            echo "Kullanıcı adınız:" . $_SESSION['user'] . "<br>";
            echo "<a href= 'cikis.php'>Çıkış Yap</a>";

            include("baglanti.php");

            $sec = "SELECT * FROM iletisim";
            $sonuc = $baglan->query($sec);

            if ($sonuc->num_rows > 0) {
                //fetch_assoc() tablodaki tüm verileri alır diziye çevirir.
                while ($cek = $sonuc->fetch_assoc()) {
                    echo "
                        <tr>
                            <td>" . $cek['adsoyad'] . "</td>
                            <td>" . $cek['email'] . "</td>
                            <td>" . $cek['telefon'] . "</td>
                            <td>" . $cek['konu'] . "</td>
                            <td>" . $cek['mesaj'] . "</td>
                        </tr>
                        ";
                }
            } else {
                echo "<script>alert('Veri tabanında hiçbir kayıt bulunamadı !')</script>";
            }
        }

        ?>
    </table>
</body>

</html>