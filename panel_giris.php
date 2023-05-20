<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        * {
            box-sizing: border-box;
        }

        .input-container {
            display: -ms-flexbox;
            /* IE10 */
            display: flex;
            width: 100%;
            margin-bottom: 15px;
        }

        .icon {
            padding: 10px;
            background: dodgerblue;
            color: white;
            min-width: 50px;
            text-align: center;
        }

        .input-field {
            width: 100%;
            padding: 10px;
            outline: none;
        }

        .input-field:focus {
            border: 2px solid dodgerblue;
        }

        .btn {
            background-color: dodgerblue;
            color: white;
            padding: 15px 20px;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        .btn:hover {
            opacity: 1;
        }
    </style>
</head>

<body>

    <form action="panel_giris.php" method="post" style="max-width:500px;margin:auto">
        <h2>Yönetici Girişi</h2>

        <!--Email-->
        <div class="input-container">
            <i class="fa fa-envelope icon"></i>
            <input class="input-field" type="text" placeholder="Email" name="email">
        </div>

        <!--Şifre-->
        <div class="input-container">
            <i class="fa fa-key icon"></i>
            <input class="input-field" type="password" placeholder="Parola" name="psw">
        </div>

        <button type="submit" class="btn">Giriş Yap</button>
    </form>

</body>

</html>

<?php
session_start(); //oturum başlatma

if (isset($_POST["email"], $_POST["psw"])) {

    if ($_POST["email"] !== "ayahmet882@gmail.com" && $_POST["psw"] !== "123456789") {
        echo "<script>alert('Kullanıcı adınız ve şifreniz hatalı !')</script>";
    } elseif ($_POST["email"] !== "ayahmet882@gmail.com") {
        echo "<script>alert('Kullanıcı adınız hatalı !')</script>";
    } elseif ($_POST["psw"] !== "123456789") {
        echo "<script>alert('Şifreniz hatalı !')</script>";
    } elseif ($_POST["email"] == "ayahmet882@gmail.com" && $_POST["psw"] == "123456789") {
        $_SESSION["user"] = $_POST["email"];
        header("location:panel.php");
    }
}
?>