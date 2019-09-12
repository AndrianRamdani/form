<?php
if (isset ($_POST['sbm'])) {
    
    $bil = $_POST['bil'];
    $pangkat = $_POST['pang'];
    // $hasil = pow($bil,$pangkat);
    $nomer = 0;
    $nomer2 = 0;

    for ($i=0; $i < count($bil); $i++) { 
        for ($a=1; $a <= $pangkat[$i]; $a++) { 
           echo "$bil[$i]";
           if ($a < $pangkat[$i]) {
               echo " x ";
           }
        }
        $hasil = pow ($bil[$i],$pangkat[$i]);
        echo " = ". $hasil . "->";
        if ($hasil % 2 == 1) {
            echo "Bilangan Ganjil";
        }else {
            echo "Bilangan Genap";
        }
        echo "<hr>";
    }
    
}
?>