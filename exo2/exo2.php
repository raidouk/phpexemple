<!doctype html>
<html>

<head>
    <meta charset="utf-8">
</head>

<body>
<?php
$ceJour= getdate();

echo "<h2>En ce ".$ceJour['mday']." ".$ceJour['month']." ".$ceJour['year'].", sur le server ".$_SERVER['SERVER_NAME']. " il est ".$ceJour['hours']."h".$ceJour['minutes']."</h2>";

?>
<h3> Variable HTTP server (getenv())</h3>
<table border="1">
    <tr>
        <td><b>Variable</b></td>
        <td><b>Valeur</b></td>
    </tr>
    <tr>
        <td>GATEWAY_INTERFACE</td>
        <td><?php echo getenv("GATEWAY_INTERFACE");?></td>
    </tr>
    <tr>
        <td>SERVER_NAME</td>
        <td><?php echo getenv("SERVER_NAME");?></td>
    </tr>
    <tr>
        <td>SERVER_SOFTWARE</td>
        <td><?php echo getenv("SERVER_SOFTWARE");?></td>
    </tr>
    <tr>
        <td>SERVER_PROTOCOL</td>
        <td><?php echo getenv("SERVER_PROTOCOL");?></td>
    </tr>
</table>
<h3> Varaible HTTP server ($_SERVER)</h3>
<table border="1">
<?php foreach ($_SERVER as $item => $valeur) {  ?>
   <tr>
       <td><?php echo $item ; ?></td>
       <td><?php echo $valeur ; ?> &nbsp;</td>
   </tr>
<?php } ?>
</table>


</body>

</html>