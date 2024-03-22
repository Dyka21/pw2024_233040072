<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .hijau {
            width: 50px;
            height: 50px;
            text-align: center;
            line-height: 50px;
            margin: 2px;
            display: inline-block;
            background-color: green;
            border: 2px solid black;
        }

    .biru {
        width: 50px;
            height: 50px;
            text-align: center;
            line-height: 50px;
            margin: 2px;
            display: inline-block;
            background-color: blue;
            border: 2px solid black;
    }
    </style>
</head>
<body>
    <form action="" method="post">
        Masukan Angka:
        <input type="text" name="angka">
        <button type="submit" name="submit">submit</button>
    </form>




    <?php
        if (isset ($_GET["angka"])) {
            $angka = $_GET["angka"];
            for ($i = $angka; $i >= 1; $i--) {
                for ($t = 1; $t <= $i; $t++) {
                    if ( $i % 2 == 0) {
                        echo "<div class= 'hijau'>$i</div>";
                    } else {
                        echo " <div class= 'biru'>$i</div>";
                    }
                }
                echo "<br>";
            }
        } else {
        }
    ?>
</body>
</html>