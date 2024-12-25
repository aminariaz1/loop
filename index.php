
<pre>
<?php
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as &$x) {
  if ($x == "blue") $x = "pink";
}

var_dump($colors);
echo "<br>";
?>
</pre>


<?php
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) :
  echo "$x <br>";
endforeach;
echo "<br>";
?>

<?php
//break  
for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    break;
  }
  echo "The number is: $x <br>";
}
echo "<br>";
?>

<?php  
$x = 0;
 
while($x < 10) {
  if ($x == 4) {
    break;
  }
  echo "The number is: $x <br>";
  $x++;
}
echo "<br>"; 
?> 

<?php  
$i = 1;

do {
  if ($i == 3) break;
  echo $i;
  $i++;
} while ($i < 6);
echo "<br>";
?> 

<?php
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  if ($x == "blue") break;
  echo "$x <br>";
}
echo "<br>";
?>

<?php  
//continue
for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    continue;
  }
  echo "The number is: $x <br>";
}
echo "<br>";
?>

<?php  
$x = 0;
 
while($x < 10) {
  $x++;
  if ($x == 4) {
    continue;
  }
  echo "The number is: $x <br>";
} 
echo "<br>";
?>  

<?php  
$i = 0;

do {
  $i++;
  if ($i == 3) continue;
  echo $i;
} while ($i < 6);
echo "<br>";
?>  

<?php
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  if ($x == "blue") continue;
  echo "$x <br>";
}
echo "<br>";
?>


