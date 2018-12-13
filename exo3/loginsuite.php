<!doctype html>
<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    <?php
    session_start();
    if (isset($_SESSION['userNom'])) {
        echo "<h1>Au menu du jour pour vous,</h1><br>".$_SESSION['userNom'];     
    }
    else {
        echo "<h1> VOUS N'AVEZ PAS ACCES A LA PAGE";
    }
    ?>

</body>

</html>