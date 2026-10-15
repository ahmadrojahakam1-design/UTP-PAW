<?php
// JANGAN DIUBAH IF INI
if (!isset($_SESSION["nama"])) {
    echo "<p>Belum ada pesanan.</p>";
} else {
    // Kerjakan ELSE ini
    $namaAman = htmlspecialchars($_SESSION["nama"], ENT_QUOTES, "UTF-8");
    $menuAman = htmlspecialchars($_SESSION["menu"], ENT_QUOTES, "UTF-8");
    $kategoriAman = htmlspecialchars($_SESSION["kategori"], ENT_QUOTES, "UTF-8");

    echo "<p>Nama: {$namaAman}</p>";
    echo "<p>Kategori pelanggan: {$kategoriAman}</p>";
    echo "<p>Ransum: {$menuAman}</p>";
    echo "<p>Jumlah: " . (int) $_SESSION["jumlah"] . "</p>";
    echo "<p>Harga satuan: Rp" . number_format((int) $_SESSION["harga"], 0, ",", ".") . "</p>";
    echo "<p>Subtotal: Rp" . number_format((int) $_SESSION["subtotal"], 0, ",", ".") . "</p>";
    echo "<p>Diskon: Rp" . number_format((int) $_SESSION["diskon"], 0, ",", ".") . "</p>";
    echo "<p><strong>Total: Rp" . number_format((int) $_SESSION["total"], 0, ",", ".") . "</strong></p>";

    echo "<h2>Status Pengambilan Ransum</h2>";
    echo "<ol>";
    for ($nomorPorsi = 1; $nomorPorsi <= (int) $_SESSION["jumlah"]; $nomorPorsi++) {
        echo "<li>Porsi {$nomorPorsi}: Menunggu pengambilan</li>";
    }
    echo "</ol>";
}
