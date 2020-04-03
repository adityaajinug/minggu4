<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input01.php</title>
</head>
<body>
    <form action="" method="post" name="input">
        Nama Anda : <input type="text" name="nama">
        <br>
        <input type="submit" name="input"value="input">
    </form>







</body>
</html>

<?php 
    if (isset($_POST['input'])){
        $nama = $_POST['nama'];
        echo "Nama Anda : <b>$nama</b>";
    }
?>

