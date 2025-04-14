<?php 
function salam($nama = "Nurul Fikri"){
    echo "Assalamu'alaikum Apa Kabar Teman ! " . $nama;
}
?>
<h1>Selamat Datang di STT-NF</h1>
<p><?php    
    salam("Neng Fauziyah Hasanah");
    echo "<br>";
    salam();
?>