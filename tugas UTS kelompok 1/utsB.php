<?php
$barang = [
    ["nama" => "Minyak Telon", "stok" => 20, "harga" => 31790, "jumlah" => 635800],
    ["nama" => "Diapers", "stok" => 25, "harga" => 51880, "jumlah" => 1297000],
    ["nama" => "Baby Oil", "stok" => 15, "harga" => 16780, "jumlah" => 251000],
    ["nama" => "Shampo Baby", "stok" => 20, "harga" => 20670, "jumlah" => 413000],
    ["nama" => "Bedak", "stok" => 15, "harga" => 16980, "jumlah" => 297900],
    ["nama" => "Baju Bayi", "stok" => 20, "harga" => 35500, "jumlah" => 710000],
    ["nama" => "Jumper", "stok" => 25, "harga" => 52999, "jumlah" => 1324975]
];

$pembelian = [
    ["nama" => "Minyak Telon", "jumlah" => 10],
    ["nama" => "Diapers", "jumlah" => 8],
    ["nama" => "Shampo Baby", "jumlah" => 5],
    ["nama" => "Baju Bayi", "jumlah" => 7],
    ["nama" => "Jumper", "jumlah" => 12]
];

$total = 0;
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Struk Belanja</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 300px;
            margin: 0 auto;
            border: 1px solid #000;
            padding: 10px;
        }
        .title {
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
            font-size: 16px;
        }
        .label {
            font-weight: bold;
        }
        .right {
            float: right;
        }
        .total {
            font-weight: bold;
            margin-top: 10px;
            clear: both;
        }
        .line {
            border-bottom: 1px solid #000;
            margin: 10px 0;
        }
    </style>
</head>
<body>

<div class="container">
    <p class="title">Struk Belanja</p>
    <p><span class="label">Tanggal Transaksi :</span> 30 Oktober 2024</p>

    <?php
    foreach ($pembelian as $item) {
        foreach ($barang as &$produk) {
            if ($produk["nama"] === $item["nama"]) {
                if ($item["jumlah"] <= $produk["stok"]) {
                    $subtotal = $produk["harga"] * $item["jumlah"];
                    $total += $subtotal;
                    $produk["stok"] -= $item["jumlah"];
                    echo "<p><span class='label'>{$item['nama']} ({$item['jumlah']} x)</span> <span class='right'>Rp " . number_format($subtotal, 0, ',', '.') . "</span></p>";
                } else {
                    echo "<p><span class='label'>{$item['nama']} (stok tidak cukup)</span></p>";
                }
                break;
            }
        }
    }
    ?>

    <div class="line"></div>

    <p class="total">Total: <span class="right">Rp <?php echo number_format($total, 0, ',', '.'); ?></span></p>

    <?php
    $diskon = 0;
    if ($total >= 350000) {
        $diskon = 0.25 * $total;
    } elseif ($total >= 250000) {
        $diskon = 0.20 * $total;
    }

    $total_pembayaran = $total - $diskon;
    ?>
    <p>Diskon: <span class="right">Rp <?php echo number_format($diskon, 0, ',', '.'); ?></span></p>
    <p class="total">Total Pembayaran: <span class="right">Rp <?php echo number_format($total_pembayaran, 0, ',', '.'); ?></span></p>
</div>

</body>
</html>