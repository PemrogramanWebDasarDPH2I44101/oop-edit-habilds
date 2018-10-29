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
        Masukan nim<input type="text" name="input1"><br>
        Masukan nama<input type="text" name="input2"><br>
        Pilih Operasi
        <select name="operasi">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <br>
        <input type="submit" value="Kirim">
    </form>
</body>
</html>
