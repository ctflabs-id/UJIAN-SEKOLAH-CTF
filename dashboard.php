<?php
require 'auth.php';
$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <div class="dashboard">
        <h2>LATIHAN CTF (Capture The Flags) CTFLabs ID</h2>
        <p>Selamat CTFERS<br>
        selamat atas berhasil di tes OSINT dan cryptographic<br>
        Berikut kode CTF-nya: <strong>CTFL{CTF_CODE}</strong></p>

        <div>
            <p>Login sebagai: <strong><?= htmlspecialchars($user['nama']) ?></strong></p>
            <a href="logout.php">Logout</a>
        </div>
    </div>
</body>
</html>
