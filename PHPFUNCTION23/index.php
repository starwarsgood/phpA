<?php

function array_swap_forward($arr,$elem)
{
$ndx = array_search($elem,$arr) - 1;
$b4 = array_slice($arr,0,$ndx);
$mid = array_reverse(array_slice($arr,$ndx,2));
$after = array_slice($arr,$ndx + 2);

return array_merge($b4,$mid,$after);
}

function array_swap_back($arr,$elem)
{
$ndx = array_search($elem,$arr);
$b4 = array_slice($arr,0,$ndx);
$mid = array_reverse(array_slice($arr,$ndx,2));
$after = array_slice($arr,$ndx + 2);

return array_merge($b4,$mid,$after);
}

$arr =array('1','2','3','4','5','6');
print_r(array_swap_forward($arr,'1'));
echo '<br>';
print_r(array_swap_back($arr,'1'));
?>