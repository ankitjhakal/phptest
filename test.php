<?php
error_reporting( E_WARNING );
//marks array
$a1 = array("hindi"=>"35", "english"=>"37", "maths"=>"43");
$a2 = array("hindi"=>"34", "english"=>"36", "maths"=>"42");
$a3 = array("hindi"=>"33", "english"=>"35", "maths"=>"41");
$b1 = array("hindi"=>"35", "english"=>"37", "maths"=>"43");
$b2 = array("hindi"=>"34", "english"=>"36", "maths"=>"42");
$b3 = array("hindi"=>"33", "english"=>"35", "maths"=>"41");
$c1 = array("hindi"=>"35", "english"=>"37", "maths"=>"43");
$c2 = array("hindi"=>"34", "english"=>"36", "maths"=>"42");
$c3 = array("hindi"=>"33", "english"=>"35", "maths"=>"41");
$d1 = array("hindi"=>"35", "english"=>"37", "maths"=>"43");
$d2 = array("hindi"=>"34", "english"=>"36", "maths"=>"42");
$d3 = array("hindi"=>"33", "english"=>"35", "maths"=>"41");
// student data(id,name,class,marks)
$studentdata = array
  (
  array("id"=>"1","name"=>"a1","class"=>9,'marks' => $a1),
  array("id"=>"2","name"=>"a2","class"=>9,'marks' => $a2),
  array("id"=>"8","name"=>"a3","class"=>9,'marks' => $a3),
  array("id"=>"9","name"=>"b1","class"=>10,'marks' =>$b1),
  array("id"=>"10","name"=>"b2","class"=>10,'marks' =>$b2),
  array("id"=>"11","name"=>"b3","class"=>10,'marks' =>$b3),
  array("id"=>"12","name"=>"c1","class"=>11,'marks' =>$c1),
  array("id"=>"7","name"=>"c2","class"=>11,'marks' =>$c2),
  array("id"=>"6","name"=>"c3","class"=>11,'marks' =>$c3),
  array("id"=>"5","name"=>"d1","class"=>12,'marks' =>$d1),
  array("id"=>"4","name"=>"d2","class"=>12,'marks' =>$d2),
  array("id"=>"3","name"=>"d3","class"=>12,'marks' =>$d3)
  );
  print_r($studentdata);
  $arrlength = count($studentdata);

  echo "<br><br>==>after sorting<br><br>";
// it do total of marks and push it to studentdata array
  for($x = 0; $x < $arrlength; $x++)
 {
  $sum=$studentdata[$x]['marks']['hindi']+$studentdata[$x]['marks']['english']+$studentdata[$x]['marks']['maths'];
  $studentdata[$x]["marks"]=$sum;
 }
// sort array according to class then marks.
  $columns_1 = array_column($studentdata, 'class');
  $columns_2 = array_column($studentdata, 'marks');
  array_multisort($columns_1, SORT_DESC, $columns_2, SORT_DESC, $studentdata);
// display sorted array in a table.
  echo "<table width=100% border=1><tr><th>id</th><th>name</th><th>class</th><th>totalmarks</th></tr>";
  for($x = 0; $x <$arrlength; $x++)
 {
  echo "<tr><td>".$studentdata[$x]['id']."</td><td>".$studentdata[$x]['name']."</td><td>".$studentdata[$x]['class']."</td><td>".$studentdata[$x]['marks']."</td></tr>";
 }
  echo "</table><br>";
 ?>
