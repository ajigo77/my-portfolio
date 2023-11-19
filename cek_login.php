<?php

    session_start(); // Mulai sesi jika belum dimulai

    if(isset($_POST["username"]) && isset($_POST["password"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        if ($username == "aji" && $password == "123456") {
            $_SESSION["username"] = $username;
            // header("location: https://digital-talenand.vercel.app/"); // akan pindah halaman jika login
            header("location: website.php");
        } else {
            header("location: login.php?login_error"); // akan kembali ke halaman login dengan pesan kesalahan jika login gagal
        }
    } else {
        // akan memunculkan pesan error jika data username dan password salah
        header("location: login.php?login_error");
    }
?>