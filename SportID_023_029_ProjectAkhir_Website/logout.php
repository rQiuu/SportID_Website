<?php
session_start();

if (empty($_SESSION['username'])) {
?>
    <script>
        alert('Anda belum Log In, Silahkan Log In Terlebih Dahulu');
        document.location.href = 'login.php';
    </script>
<?php
} else {
    session_destroy();
?>
    <script>
        alert('Anda Berhasil Log Out');
        document.location.href = 'home.php';
    </script>
<?php
}
?>
?>