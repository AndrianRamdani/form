<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form Array</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
 <FORM ACTION="" METHOD="POST" NAME="Input"> 
    <fieldset>
    <legend><h1>Form Array</h1></legend>
    <tr>
        <td>Masukan Jumlah</td>     <td><input type="number" min="1" name="jmlh"required><br></td>
    </tr>
    <tr>
        <td><input type="submit" name="Input" value="done"></td>
        <td><input type="reset" value="reset"></td>
    </tr>
    </fieldset>
    <hr>
 </FORM>

    <FORM ACTION="prosess.php" METHOD="POST" NAME="Input">  
    <?php
     
    if (isset($_POST['Input'])) {
        $masukan = $_POST['jmlh'];

        for ($i=0; $i < $masukan ; $i++) { ?>
            <label for=>Nama</label>     
            <input type="text" name="nama[]" required>
            <label for=>Kelas</label>     
            <input type="text" name="kelas[]"required>
            <br>
            <br>
<?php  } ?>
    <input type="submit" name="sbm" value="done">
    <input type="reset" value="reset">
    </FORM>
<?php } ?>



    
 </body>
</html>