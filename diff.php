<?php
function key_compare($x,$y)
{
    if($x===$y)
    return 0;
    return($x>$y)?1:-1;
}
function diff($arr1, $arr2)
{
return array_diff_uassoc($arr1['c'], $arr2['c'],"key_compare");
}
//multidimenssional arrays

$nolist1=array('a'=>'1','d'=>'2','c'=>array('a'=>'4','b'=>'5','c'=>'3'));
$nolist2=array('a'=>'1','b'=>'2','c'=>array('a'=>'1','b'=>'2','c'=>'3'));
print_r(diff($nolist1, $nolist2));
?>
