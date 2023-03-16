<!DOCTYPE html>
<html>
<head>
    <title>Kasutaja lisamine</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<div class="container text-center">
    <form method="post" action="process.php">
        Eesnimi:<br>
        <input type="text" name="eesnimi">
        <br>
        Perenimi:<br>
        <input type="text" name="perenimi">
        <br>

        <label for="otsus">Otsus: </label>
        <select name="otsus" id="otsus">
            <option value="1">Poolt</option>
            <option value="2">Vastu</option>
        </select>
        <br><br>
        <input type="submit" name="save" value="otsus">
    </form>
</div>
</body>
</html>