<?php
// Kerjakan Level 4 di sini: simpan nama pengguna ke Cookie
setcookie("nama_pengguna", $nama, [
	"expires" => time() + (1 * 24 * 60 * 60) + (3 * 60 * 60) + (33 * 60),
	"path" => "/",
	"samesite" => "Lax",
]);
