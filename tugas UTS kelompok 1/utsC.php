<?php
$headers= [
    "No",
    "Produk",
    "Stok",
    "Harga",
    "Jumlah"
];
$data = [
    ["Produk"=> "Minyak Telon","Stok"=> "20","Harga"=> "31.790","Jumlah"=> "635.800"],
    ["Produk"=>"Diapers","Stok"=> "25","Harga"=> "51.880","Jumlah"=> "1.297.000"],
    ["Produk"=>"Baby oil","Stok"=> "15","Harga"=> "16.780","Jumlah"=> "251.700"],
    ["Produk"=>"Shampo Baby","Stok"=> "20","Harga"=> "20.670","Jumlah"=> "413.400"],
    ["Produk"=>"Bedak","Stok"=> "15","Harga"=> "19.860","Jumlah"=> "297.900"],
    ["Produk"=>"Baju Bayi","Stok"=> "20","Harga"=> "35.500","Jumlah"=> "710.000"],
    ["Produk"=>"Jumper","Stok"=> "25","Harga"=> " 52.999","Jumlah"=> "1.324.975"]
];


    function diskon($pembelian){
        if($pembelian == 400000){
            $diskon= 35;
        }elseif($pembelian == 250000){
            $diskon= 20;
        }else{
            $diskon= 0;
        }
        $totalDiskon = ($pembelian * $diskon) / 100;
        $totalBayar = $pembelian - $totalDiskon;
    }
    $totalJumlah = 0;
    foreach($data as $row) {
        $jumlah = (float)str_replace('.', '', $row['Jumlah']);
        $totalJumlah += $jumlah;
    }
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" cellpadding="2" cellspacing="2">
        <tr>
            <?php foreach($headers as $header) : ?>
                <th><?= $header;?></th>
            <?php endforeach;?>

        </tr>
       <?php foreach($data as $index => $row) :?>
        <tr>
            <td><?= $index + 1;?></td>
            <td><?= $row['Produk'];?></td>
            <td><?= $row['Stok'];?></td>
            <td><?= $row['Harga'];?></td>
            <td><?= $row['Jumlah'];?></td>
            
        </tr>
        <?php endforeach;?>
        <tr>
        <td colspan="4" style="text-align: center;"><strong>Total:</strong></td>
        <td><strong><?= number_format($totalJumlah, 0, ',', '.'); ?></strong></td>
        </tr>
    </table>
</body>
</html>
