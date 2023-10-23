<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modul 2 - latihan 1</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            display: inline-block;
            text-align: center;
            vertical-align: middle;
            line-height: 50px;
            border: 1px solid black;
            margin-top: 5px;
            margin-left: 4px;
        }
        .clear {
            clear: both;
        }
        .ganjil {
            background-color: #003;
            color: #fff;
        }
        .genap {
            background-color: #999;
        }
    </style>
</head>
<body>
    <?php
    $jumlah_baris = 5;

    for ($i = 1; $i <= $jumlah_baris; $i++) {
        $class = ($i % 2 == 0 ? 'genap' : 'ganjil');
        for ($j = 1; $j <= $i; $j++) {
            echo '<div class="kotak ' . $class . '">' . $j . '</div>';
        }
        echo '<div class="clear"></div>';
    }
    ?>
</body>
</html>
