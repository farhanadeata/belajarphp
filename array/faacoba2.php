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
    <H1 style="color:Blue;" > Nama Nama hari </H1> 

<?php foreach ($hari as  $a) : ?>
        <div>
            <?= $a; ?>
        </div>
    <?php endforeach; ?>
</body>
</html>
