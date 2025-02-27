<?php

//Mendefinisikan sebuah array
$list_buah = ["Pepaya", "Mangga", "Pisang", "Jambu"];

/**
 * Nilai didalam array masing-masing memiliki sebuah kunci yang disebut dengan index
 * 
 * Index dimulai dari 0
 */

echo $list_buah[2];
echo "<br>List berisi ". count ($list_buah) . " buah";

// Mencetak seluruh niilai di dalam array
echo "<ol>";
foreach($list_buah as $buah) {
    echo "<li>$buah</li>";
}
echo "</ol>";

// Menambahkan nilai array
$list_buah[] = "Durian";
echo "<ol>";
foreach($list_buah as $buah) {
    echo "<li>$buah</li>";
}
echo "</ol>";

// Menghapus nilai array berdasarkan index
unset($list_buah[1]);
echo "<ol>";
foreach($list_buah as $buah) {
    echo "<li>$buah</li>";
}
echo "</ol>";

//Mengubah nilai array berdasarkan index
$list_buah[0] = "Manggis";
echo "<ol>";
foreach($list_buah as $buah) {
    echo "<li>$buah</li>";
}
echo "</ol>";

// Mencetak seluruh nilai array beserta indexnya
echo "<ul>";
foreach($list_buah as $index => $buah) {
    echo "<li>Buah dengan index $index adalah $buah</li>";
}
echo "</ul>";


?>