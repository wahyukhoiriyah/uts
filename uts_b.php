<?php
echo "<table border='1'>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Nama Produk</th>";
echo "<th>Jumlah Produk</th>";
echo "<th>Harga</th>";
echo "<th>Jumlah</th>";
echo "</tr>";

$data = array(
    
    array(1, "Baju Bayi", 2, 35000),
    array(2, "Diapers", 3, 51000),
    array(3, "Bedak", 1, 15000),
    array(4, "Minyak Telon", 2, 30000),
    array(5, "Baby Oil", 3, 16000),
    
);
// Tampilkan data dalam tabel terurut
echo "Tanggal Transaksi: 08 November 2023<br>";

$totalJumlah = 0; // Variabel untuk menyimpan total jumlah produk

foreach($data as $row) {
    echo "<tr>";
    $jumlah = $row[2] * $row[3]; // Hitung jumlah produk
    $totalJumlah += $jumlah; // Tambahkan jumlah produk ke total
    $row[] = $jumlah; // Tambahkan jumlah produk ke array produk
    foreach($row as $column) {
        echo "<td>$column</td>";
    }
    echo "</tr>";
}

echo "</table>";

echo "Total Jumlah: " . $totalJumlah; // Tampilkan total jumlah produk

$diskon = 0; // Variabel untuk menyimpan jumlah diskon

// Cek total pembelian untuk menentukan diskon
if ($totalJumlah >= 200000) {
    $diskon = 0.1; // Diskon 10%
}
 if ($totalJumlah >= 300000) {
    $diskon = 0.2; // Diskon 20%
}

if ($diskon > 0) {
    $totalDiskon = $totalJumlah * $diskon; // Hitung jumlah diskon
    $totalBayar = $totalJumlah - $totalDiskon; // Hitung total yang harus dibayar setelah diskon
    echo "<br>Discount: " . ($diskon * 100) . "%"; // Tampilkan persentase diskon
    echo "<br>Total Pembayaran: " . $totalBayar; // Tampilkan total yang harus dibayar setelah diskon
}
?>