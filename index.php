<?php
session_start();
require 'db.php';

$error = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $password = sha1(trim($_POST['password'])); // Sesuai data di database

    $stmt = $conn->prepare("SELECT * FROM user WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        $_SESSION['user'] = $user;
        header('Location: dashboard.php');
        exit;
    } else {
        $error = "Username atau password salah.";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login Operator</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <div class="login-box">
        <h3>Login Operator</h3>
        <?php if ($error): ?>
            <div class="error"><?= htmlspecialchars($error) ?></div>
        <?php endif; ?>
        <form method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>
    <footer class="footer">
  © <span>SMK PHP Jaya Kota Bekasi</span>
</footer>

</body>
</html>
