<!DOCTYPE html>
<html>
<head>

    <title>Generator</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">

</head>
<body class="seda">
<div>
<form action="generated.php" method="post">
    Height: <input type="number" name="height" max="500"><br>
    Width: <input type="number" name="width" max="500"><br>
    Choose type of generation:<select name="random">
        <option value="1">All pixels random</option>
        <option value="2">Collums all random</option>
        <option value="3">Collums random but similar</option>
        <option value="4">Rows all random</option>
        <option value="5">Rows random but similar</option>
    <input type="submit">
</form>
</div>
</body>
</html>
