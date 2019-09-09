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
echo "<h3>Bintang</h3>";
if (isset($_POST['si'])) {
    $h = $_POST ['bintang'];
    for ($i=0; $i <=$h ; $i++) { 
        echo"* ";
        }
    echo "<br>";
    echo "Total Bintang : $h <hr>";
}
?>