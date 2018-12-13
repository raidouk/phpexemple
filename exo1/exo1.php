<!doctype html>
<html>

<head>
    <meta charset="utf-8">
</head>

<body>
<?php

echo"methode 1";

for ($i=1; $i < 5 ; $i++) { 
  echo "<h".$i.">titre en taille ".$i."</h".$i.">";     // plus evidente
}
?>
<?php
echo"methode 2";
for ($i=1; $i < 5 ; $i++) { 
?>
<h<?php echo $i; ?>>mon titre en taille <?php echo $i; ?> </h<?php echo $i; ?>>  <!-- plus chiant -->
 
<?php

} ?>




</body>

</html>