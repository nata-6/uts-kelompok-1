<?php

$produk = [
    [
        "ID" => 1, 
        "Produk" => "Minyak Telon", 
        "Stok" => 20, 
        "Harga" => 31790
    ],
    [
        "ID" => 2, 
        "Produk" => "Diapers", 
        "Stok" => 25, 
        "Harga" => 51880
    ],
    [
        "ID" => 3, 
        "Produk" => "Baby Oil", 
        "Stok" => 15, 
        "Harga" => 16780
    ],
    [
        "ID" => 4, 
        "Produk" => "Shampo Baby", 
        "Stok" => 20, 
        "Harga" => 20670
    ],
    [
        "ID" => 5, 
        "Produk" => "Bedak", 
        "Stok" => 15, 
        "Harga" => 19860],
    [
        "ID" => 6, 
        "Produk" => "Baju Bayi", 
        "Stok" => 20, 
        "Harga" => 35500
    ],
    [
        "ID" => 7, 
        "Produk" => "Jumper", 
        "Stok" => 25, 
        "Harga" => 52999
    ]
];


$totalKeseluruhan = 0;
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tabel Harga Barang</title>
</head>
<body>
    <center><h2>Tabel Harga Barang</h2></center>
    <center>
        <table border="" cellpadding="15">
        <tr>
            <th>ID</th>
            <th>Produk</th>
            <th>Stok</th>
            <th>Harga</th>
            <th>Jumlah</th>
        </tr>
        <?php foreach ($produk as $item): ?>
            <tr>
                <td><?php echo $item['ID']; ?></td>
                <td><?php echo $item['Produk']; ?></td>
                <td><?php echo $item['Stok']; ?></td>
                <td><?php echo number_format($item['Harga'], 0, ',', '.'); ?></td>

                <?php 
                $jumlah = $item['Stok'] * $item['Harga'];
                $totalKeseluruhan += $jumlah;
                ?>

                <td><?php echo number_format($jumlah, 0, ',', '.'); ?></td>
            </tr>
        <?php endforeach; ?>
        <tr>
            <td colspan="4" align="right"><strong> <center>Total Keseluruhan</center></strong></td>
            <td><?php echo number_format($totalKeseluruhan, 0, ',', '.'); ?></td>
        </tr>
        </table>
    </center>
</body>
</html>