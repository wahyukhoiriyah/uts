<?php
// Data barang dalam bentuk array multidimensi
$barang = array(
    array(1, "Nama Produk" => "Baju Bayi", "Stok" => 20, "Harga" => 35500),
    array(2, "Nama Produk" => "Diapers", "Stok" => 15, "Harga" => 51000),
    array(3, "Nama Produk" => "Bedak", "Stok" => 15, "Harga" => 15000),
    array(4, "Nama Produk" => "Minyak Telon", "Stok" => 20, "Harga" => 30000),
    array(5, "Nama Produk" => "Baby Oil", "Stok"=> 15,"Harga" => 16000)
);

// Fungsi untuk menghitung total jumlah
function hitungTotalJumlah($barang) {
    $totalJumlah = 0;
    foreach ($barang as $item) {
        $totalJumlah += $item['Stok'] * $item['Harga'];
    }
    return $totalJumlah;
}

// Hitung total jumlah
$totalJumlah = hitungTotalJumlah($barang);

// Cek apakah ada diskon
$diskon = 0;
if ($totalJumlah >= 200000) {
    $diskon = 0.2; // 20%
} elseif ($totalJumlah >= 150000) {
    $diskon = 0.1; // 10%
}

// Hitung total yang harus dibayar setelah diskon
$totalBayar = $totalJumlah - ($totalJumlah * $diskon);

// Tampilkan data dalam tabel terurut
echo "Tanggal Transaksi: 08 November 2023<br>";
echo "<table border='1'>";
echo "<tr><th>Nama Produk</th><th>Stok</th><th>Harga</th></tr>";

// Urutkan array berdasarkan nama produk
usort($barang, function($a, $b) {
    return strcmp($a['Nama Produk'], $b['Nama Produk']);
});

foreach ($barang as $item) {
    echo "<tr>";
    echo "<td>" . $item['Nama Produk'] . "</td>";
    echo "<td>" . $item['Stok'] . "</td>";
    echo "<td>" . $item['Harga'] . "</td>";
    echo "</tr>";
}
echo "</table>";

echo "a. Total Jumlah: " . $totalJumlah . " Rupiah<br>";
echo "b. Diskon: " . ($diskon * 100) . "%<br>";
echo "c. Total Pembayaran: " . $totalBayar . " Rupiah";
?>