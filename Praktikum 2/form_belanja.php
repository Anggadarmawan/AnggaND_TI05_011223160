<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai dari form pemesanan
    $customer = isset($_POST["nama"]) ? $_POST["nama"] : "";
    $product = isset($_POST["produk"]) ? $_POST["produk"] : "";
    $quantity = isset($_POST["jumlah"]) ? $_POST["jumlah"] : 0;

    // Menghitung total belanja produk
    switch ($product) {
        case "TV":
            $price = 4200000;
            break;
        case "Kulkas":
            $price = 3100000;
            break;
        case "Mesin Cuci":
            $price = 3800000;
            break;
        default:
            $price = 0;
    }

    $total = $price * $quantity;

    // Menampilkan hasil belanja
    echo "<h5>Hasil Belanja</h5>";
    echo "<p>Nama Customer: $customer</p>";
    echo "<p>Produk Pilihan: $product</p>";
    echo "<p>Jumlah Beli: $quantity</p>";
    echo "<p>Total Belanja: Rp " . number_format($total, 0, ',', '.') . "</p>";
}
?>
