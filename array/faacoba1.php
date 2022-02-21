<?php   
        $hari =  ["Senin","Selasa","Rabu","kamis","Jumat","Sabtu","Minggu"];
    var_dump($hari);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Araay Pada PHP</title>
</head>
<body>
    <marquee direction="right">
    <H1 style="color:Blue;" > Nama Nama hari </H1> 
</marquee>
<marquee direction="left">
    <H1 style="color:Blue;" > Nama Nama hari </H1> 
</marquee>

<?php for ($i = 0; $i < 7; $i++) {?>
        <div>
            <?php echo $hari[$i]; ?>
        </div>
    <?php } ?>
</body>
</html>
