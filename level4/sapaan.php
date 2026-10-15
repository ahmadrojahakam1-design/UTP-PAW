<?php
// Level 4: Kerjakan mulai darisini
if (isset($_COOKIE["nama_pengguna"]) && is_string($_COOKIE["nama_pengguna"]) && $_COOKIE["nama_pengguna"] !== "") {
	$namaAman = htmlspecialchars($_COOKIE["nama_pengguna"], ENT_QUOTES, "UTF-8");
	echo "<p>Selamat datang kembali di Cafeteria, {$namaAman}! Tetap waspada terhadap Impostor!</p>";
} else {
	echo "<p>Selamat datang di Cafeteria!</p>";
}
