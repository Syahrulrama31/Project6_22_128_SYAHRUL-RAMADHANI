<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    if(isset($_POST['hitung'])) {
        $bil1 = $_POST['bil1'];
        $bil2 = $_POST['bil2'];
        $operasi = $_POST['operasi'];
        switch ($operasi) {
            case 'tambah':
                $hasil = $bil1 + $bil2;
            break;
            case 'kurang':
                $hasil = $bil1 - $bil2;
            break;
            case 'kali':
                $hasil = $bil1 * $bil2;
            break;
            case 'bagi':
                $hasil = $bil1 / $bil2;
            break;
        }
    }
    ?>
    <div class="kalkulator">
        <h2 class="judul">Kalkulator</h2>
        <form method="post" action="">
            <input type="text" name="bil1" class="bil" autocomplete="off" placeholder="Masukkan bilangan pertama">
            <input type="text" name="bil2" class="bil" autocomplete="off" placeholder="Masukkan bilangan kedua">
            <select class="opt" name="operasi">
                <option value="tambah">+</option>
                <option value="kurang">-</option>
                <option value="kali">x</option>
                <option value="bagi">/</option>
            <input type="submit" name="hitung" value="Hitung" class="tombol">
        </form>
        <?php if(isset($_POST['hitung'])){ ?>
            <input type="text" value="<?php echo $hasil; ?>" class="bil">
        <?php }else{ ?>
            <input type="text" value="Hasil" class="bil">
        <?php }?>
        
    </div>
</body>
</html> 