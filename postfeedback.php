<?php
include('database.php');

if (isset($_POST['kirim'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $fbcontent = $_POST['fbcontent'];

    $sql = "INSERT INTO feedback (nama, email, fbcontent) VALUES ('$nama','$email','$fbcontent')";
    $query = mysqli_query($connection, $sql);

    if ($query) {
    }
}
