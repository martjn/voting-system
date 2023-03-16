<?php
include_once 'database.php';
?>
<!doctype html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/styles.css">

    <title>Hääletus</title>
</head>
<body>

<div id="heading">
    <h1 id="vote_heading">Keelame sportimise</h1>
    <h2 id="vote_time"><?php echo $row["h_alguse_aeg"]; ?></h2>
</div>

<div id="votes">
    <?
    $row = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM TULEMUSED ORDER BY TULEMUSED_id DESC LIMIT 1"));
    ?>
    <div id="yes">
        <h2>Poolt:</h2>
        <h1 id="yes_value">
            <?php echo $row["poolt"]; ?>
        </h1>
    </div>
    <div id="no">
        <h2>Vastu:</h2>
        <h1 id="no_value">
            <?php echo $row["vastu"]; ?>
        </h1>
    </div>
</div>

<form class="text-center">
    <button onclick=window.open("update.php")>Hääleta</button>
</form>
<!--
<div>
    <div id="login-btn">
        <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
    </div>
    <div id="id01" class="modal">

        <form class="modal-content animate" action="/action_page.php" method="post">
            <div class="container">
                <label><b>Teema</b></label>
                <input type="text" placeholder="Sisesta teema" name="uname" required>

                <button type="submit">Alusta Hääletust</button>
            </div>

            <div class="container" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">
                    Cancel
                </button>
            </div>
        </form>
    </div>
-->
</div>
<script src="js/index.js"></script>
</body>
</html>
