<?php
$nim = $_GET["nim"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="Class.php" method="post">
        Masukan nim<input type="text" value="<?php echo $nim ?>" disabled><br>
        Masukan nama<input type="text" name="input2"><br>
        <br>
        <input type="hidden" name="input1" value="<?php echo $nim ?>">
        <input type="submit" name="edit" value="Edit">
    </form>
</body>
</html>
