<?php 
// (1) Mulai session
session_start();

// (2) Hapus semua session yang berlangsung
session_unset();
session_destroy();

// Hapus cookie "remember" (jika ada)
setcookie('remember_email', '', time() - 3600, '/', '', false, true);
setcookie('remember_password', '', time() - 3600, '/', '', false, true);
setcookie('saved_email', '', time() - 3600, '/', '', false, true);
setcookie('saved_password', '', time() - 3600, '/', '', false, true);

// (3) Lakukan redirect ke halaman login awal
header('Location: ../views/login.php');
// (4) Pastikan tidak ada output atau echo sebelum header
exit();
?>