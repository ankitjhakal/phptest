<?php
echo "<table width="270px" cellspacing="0px" cellpadding="0px" border="1px">";
for($r=1;$r<=8;$r++)
{
  echo "<tr>";
  for($c=1;$c<=8;$c++)
  {
    $sum=$r+$c;
    if($sum%2==0)
    {
      echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
    }
    else
    {
       echo "<td height=30px width=30px bgcolor=#000000></td>";
    }
  }
  echo "</tr>";

}
echo "</table>";
 ?>
