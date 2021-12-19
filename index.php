<?php
include('bootstrap.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rahman A.S.</title>
    <link rel="stylesheet" href="css/nilai.css" />
    <link rel="stylesheet" href="css/gaya.css" />
</head>

<body>
    <header class="kepala">
        <div class="navbar" id="myNavbar">
            <a class="logo whitelogo " id="mainlogo" href="#">
                <!-- <img id="mainlogo" class="whitelogo" alt="Home"> -->
            </a>
            <ul class="menu">
                <li>
                    <a class="button" id="linkedin" href="https://www.linkedin.com/in/rahman-amarullah-siregar-8b47a8179/">
                        LinkedIn
                    </a>
                </li>
                <li>
                    <a class="button" id="myworks" href="<?php echo BASE_URL; ?>#about">
                        My Works
                    </a>
                </li>
                <li>
                    <a class="button" id="aboutme" href="<?php echo BASE_URL; ?>#about">
                        About Me
                    </a>
                </li>
            </ul>
        </div><br><br><br><br>
        <div id="siteTitle" class="sitetitle text-light text-center">
            <h1 class="siteTitle ">Hello,</h1>
            <h1 class="siteTitle ">I'm Amarullah Siregar</h1>
            <h5 class="subTitle"><a href="/"></a>Teknik informatika | Institut Teknologi Sumatera</h5>
        </div>
    </header>
    <?php include('about_me/about_me.php'); ?>
    <?php include_once('my_project/my_project.php') ?>
    <section id="feedback">
        <form class="feedback card rounded" method="POST" action="postfeedback.php">
            <h1 class="card-title text-center">Feedback Form</h1>
            <label for="nama">Nama Anda : </label><br>
            <input type="text" id="nama" name="nama" placeholder="Tuliskan Nama Anda"><br>
            <label for="email">e-Mail : </label><br>
            <input type="text" id="email" name="email" placeholder="Masukkan e-Mail Anda"><br>
            <label for="fbcontent">Feedback anda tentang saya : </label><br>
            <textarea class="fbcontent" type="text" id="fbcontent" name="fbcontent" placeholder="masukkan tanggapan anda"></textarea> <br>
            <input type="submit" value="Kirim" name="kirim" class="button">
        </form>
    </section>
    <?php include('footer.php'); ?>
    <script src="script/jsku.js"></script>
</body>

</html>