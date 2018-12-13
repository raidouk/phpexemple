<!doctype html>
<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    
    <?php
$marequ="insert into Matable values ('".$_GET['nom']."','".$_GET['age']."','".$_GET['situation']."'";

if (isset($_GET['internet'])) {
    $internet=$_GET['internet'];
    $marequ= $marequ.",1";
}else {
    $internet="";
    $marequ= $marequ.",0";
}
if (isset($_GET['microInformatique'])) {
    $microInformatique=$_GET['microInformatique'];
    $marequ= $marequ.",1";
}else {
    $microInformatique="";
    $marequ= $marequ.",0";
}
if (isset($_GET['jeuxVideo'])) {
    $jeuxVideo=$_GET['jeuxVideo'];
    $marequ= $marequ.",1)";
}else {
    $jeuxVideo="";
    $marequ= $marequ.",0)";
}

echo "<h1> Merci a vous, ".$_GET['nom']."</h1>";
echo "Vous aves donc le bel âge de ".$_GET['age'].", vous êtes".$_GET['situation']."<br>";
echo "et vous vous intéressez à :<b> ".$internet." ".$microInformatique." ".$jeuxVideo."</b>";
echo "<br>";
echo "<br>";
echo "Je m'empresse d'envoyer la requête : <br>";
echo  "<b>".$marequ."</b>";
echo "<br> à notre base de données.";

    ?>

</body>

</html>