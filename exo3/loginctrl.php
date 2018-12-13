
    <?php 
    session_start();
    $_SESSION["userNom"] = $_POST['nom'];
    header('location:loginsuite.php');
    ?>
