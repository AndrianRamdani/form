<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <FORM ACTION="" METHOD="POST" NAME="Input"> 
        <fieldset>
            <legend><h1>Bilangan Pangkat</h1></legend>
            <label>Masukan Jumlah</label>     
            <input type="number" min="1" name="jmlh"required><br><br>    
            <input type="submit" name="Input" value="done">
            <input type="reset" value="reset">
        </fieldset>
        <hr>
     </FORM>
     <FORM ACTION="tugas3proses.php" METHOD="POST" NAME="Input">  
        <?php
     
        if (isset($_POST['Input'])) {
            $masukan = $_POST['jmlh'];

            for ($i=0; $i < $masukan ; $i++) { ?>
                <label for=>Masukan Bilangan</label>     
                <input type="number" name="bil[]" required>
                <label for=>Masukan Pangkat Bilangan</label>     
                <input type="number" name="pang[]"required>
                <br>
                <br>
    <?php  } ?>
            <input type="submit" name="sbm" value="done">
            <input type="reset" value="reset">
    </FORM>
        <?php } ?>

</body>
</html>