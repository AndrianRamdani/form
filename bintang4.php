<html>
<head>
    <title>Page Title</title>
</head>
<body>
    <form method="POST" name="Input" >
    Masukan Bilangan : <input type="number" name="bintang">
    <button type="submit" name="si" >simpan</button>
    </form>
</body>
</html>
<?php
echo "<h3>Bintang Belah Ketupat</h3>";
if (isset($_POST['si'])) {
    $h = $_POST ['bintang'];
        
    for ($i=1; $i <= $h ; $i++) { 
        for ($a=1; $a <=$h-$i ; $a++) { 
            echo "&nbsp;&nbsp;";
        }
        for ($b=1; $b <=$i ; $b++) { 
            echo "*&nbsp;&nbsp;";
        }
        echo "<br  />";
    }
for ($i=1; $i <= $h ; $i++) { 
    for ($d=1; $d <=$i ; $d++) { 
        echo "&nbsp";
    }
    for ($g=$h; $g >=$i ; $g--) { 
        echo "*&nbsp";
    }
    echo "<br>";
}
echo "<br>";
echo "Total Bintang : $h <hr>";
}
?>  