<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rahman A.S.</title>
    <link rel="stylesheet" href="css/gaya.css" />
</head>

<body>
    <header class="kepala">
        <figure>
        </figure>
        <div class="navbar">
            <a class="logo" href="#">
                <img class="mainlogo" src="img/main-logo-light.png" alt="Home">
            </a>
            <ul class="menu ">
                <li>
                    <a href="https://www.linkedin.com/in/rahman-amarullah-siregar-8b47a8179/">
                        <div class="label  text-light ">LinkedIn</div>
                    </a>
                </li>
                <li>
                    <a href="http://rahman.epizy.com">
                        <div class="label  text-light ">About Me</div>
                    </a>
                </li>
            </ul>
        </div><br><br><br><br>
        <div id="siteTitle" class="sitetitle text-light text-center">
            <h1 class="siteTitle "><a href="/"></a>Rahman Amarullah Siregar</h1>
            <h5 class="subTitle"><a href="/"></a>Institut Teknologi Sumatera</h5>
        </div>
    </header>
    <div class="artikel">
        <h1 class="text-center about">About Rahman</h1>
        <p class="text-center isi">
            Rahman Amarullah Siregar adalah seorang Mahasiswa Informatika<br>
            di Institut Teknologi Sumatera, Rahman merupakan seorang Batak<br>
            tulen yang berasal dari tanah Tapanuli.
        </p>
    </div>
    <section>
        <form class="feedback card rounded" method="POST" action="postfeedback.php">
            <h1 class="card-title text-center">Feedback Form</h1>
            <label for="nama">Nama Anda : </label><br>
            <input type="text" id="nama" name="nama" placeholder="Tuliskan Nama Anda"><br>
            <label for="email">e-Mail : </label><br>
            <input type="text" id="email" name="email" placeholder="Masukkan e-Mail Anda"><br>
            <label for="fbcontent">Feedback anda tentang saya : </label><br>
            <input type="text" id="fbcontent" name="fbcontent" placeholder="masukkan tanggapan anda"><br>
            <input type="submit" value="Kirim" name="kirim" class="button">
        </form>
    </section>
    <footer>
        <p>Copyright &copy; 2021 <b>Rahman Amarullah</b></p>
    </footer>
</body>

</html>