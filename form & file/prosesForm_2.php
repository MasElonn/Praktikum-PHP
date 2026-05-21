<?php
if (isset($_GET['nama'], $_GET['email'], $_GET['komentar'])) {
    $nama = $_GET['nama'];
    $email = $_GET['email'];
    $komentar = $_GET['komentar'];

    $isi_form = "&nama=$nama&email=$email$komentar=$komentar";

    if (empty($nama)) {
        header("Location: form_2.php?error=nama_kosong&$isi_form");
        exit;
    } elseif (empty($email)) {
        header("Location: form_2.php?error=email_kosong&$isi_form");
        exit;
    } else {
        echo "Nama: $nama <br> Email: $email <br> Komentar: $komentar";
    }
} else {
    header("Location: form_2.php?error=variabel_belum_diset");
    exit;
}
