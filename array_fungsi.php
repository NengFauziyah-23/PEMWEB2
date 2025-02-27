<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arary Fungsi</title>
</head>

<body>
    <?php
    $ar_buah = ["p"=>"Pepaya","a"=>"Apel","m"=>"Mangga","j"=>"Jambu" ];
    echo '<ol>';
    foreach($ar_buah as $k =>$v){
    echo '<li>'.$k.' - ' . $v .'</li>';
    }
    echo '</ol>';
    sort($ar_buah);
    echo '<hr/>';
    echo '<ol>';
    foreach($ar_buah as $k =>$v){
        echo '<li>'.$k.' - ' . $v .'</li>';
        }
        echo '</ol>';
    ?>
    
    <?php
    $tims = ["fauziyah", "mida", "mayy", "rahma"];
    array_pop($tims);
    array_push($itms, "siti");
    array_shift($itms);
    array_unshift($itms, "neng", "yuni");
    foreach ($tims as $person) {
        echo $person .'<br>';
    }
    ?> 

</body>

</html>