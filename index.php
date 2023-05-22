<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="eggplant.png">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form action="conn.php" method="post">

        <div id="box">
            <div class="p1">
                <img src="zd/tomato.png">
                <?php 
                require "conn.php"

                echo "Ilosc: " . $row["ziemniak"];
                ?>
                <input type="submit" value="wybierz">
            </div>
            <div class="p1">
                <input type="submit" value="wybierz">
            </div>
            <div class="p1">
                <input type="submit" value="wybierz">
            </div>
            <div class="p2">
                <input type="submit" value="wybierz">
            </div>
            <div class="p2">
                <input type="submit" value="wybierz">
            </div>
            <div class="p2">
                <input type="submit" value="wybierz">
            </div>
        </div>
    </form>
</body>
</html>