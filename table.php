<?php
echo "<table width=100% border=1>";
for($x = 0; $x <6; $x++)
{
echo "<tr>";
for($y = 0; $y <5; $y++)
{
  echo "<td>$x*$y=".$x*$y."</td>";
}
echo "</tr>";
}
echo "</table>";
 ?>
