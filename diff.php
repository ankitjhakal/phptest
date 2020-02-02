<?php
function key_compare($x,$y)
{
    if($x===$y)
    return 0;
    return($x>$y)?1:-1;
}
function diff($arr1, $arr2)
{
    print_r($arr1);
return array_diff_uassoc($arr1, $arr2,"key_compare");
}
//multidimenssional arrays
$nolist1=array('a'=>'1','b'=>'2','c'=>'4');
$nolist2=array('a'=>'1','b'=>'2','c'=>'5');
print_r(diff($color1, $color2));
?>
