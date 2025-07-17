<?php
// Selalu mulai session di awal
session_start();

// Hapus semua variabel session
session_unset();

// Hancurkan session
session_destroy();

// Arahkan ke index.php yang ada di dalam folder 'views'
header("Location: views/index.php");
exit();
