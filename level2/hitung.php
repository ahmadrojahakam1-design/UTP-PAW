<?php
// Jangan ubah ini!
$nama = $_POST["nama"];
$menu = $_POST["menu"];
$jumlah = (int) $_POST["jumlah"];
$kategori = $_POST["kategori"];

// Kerjakan mulai darisini

$daftarHarga = [
	"Pizza Segitiga Polus" => 25000,
	"Susu Elektrik Electrical" => 18000,
	"Space Donut Oxygen" => 15000,
	"Jus Berry MedBay" => 20000,
	"Emergency Steak Navigation" => 45000,
];
$kategoriValid = ["Crew", "Impostor"];
$nama = is_string($nama) ? trim($nama) : "";
$menu = is_string($menu) ? $menu : "";
$kategori = is_string($kategori) ? $kategori : "";
$harga = $daftarHarga[$menu] ?? 0;
$subtotal = $harga * $jumlah;

$diskon = 0;
if ($kategori === "Crew" && $jumlah >= 4) {
	$diskon = (int) ($subtotal * 15 / 100);
}

// total harga
$total = $subtotal - $diskon;

// cek valid
$valid = true;
$pesan = "";
if ($nama === "") {
	$valid = false;
	$pesan = "Nama wajib diisi.";
} elseif ($jumlah < 1) {
	$valid = false;
	$pesan = "Jumlah pesanan minimal 1.";
} elseif ($harga === 0) {
	$valid = false;
	$pesan = "Ransum yang dipilih tidak tersedia.";
} elseif (!in_array($kategori, $kategoriValid, true)) {
	$valid = false;
	$pesan = "Kategori pelanggan tidak valid.";
}
