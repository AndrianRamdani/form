<?php
if (isset ($_POST['sbm'])) {
    
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $nomer = 0;
    $nomer2 = 0;
    // var_dump($nama);
    foreach ($nama as $data => $x) {
        //var_dump ($x);
        echo "Nama : " . $nama[$data] .
            " - Kelas : ". $kelas[$data] . "<hr>";
    }

}
?>