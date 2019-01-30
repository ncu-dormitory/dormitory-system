<?php
function random($len = 64){
  $string = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0987654321";
  $slen = strlen($string);
  $str = "";
  while(strlen($str)<$len)
    $str.=$string[rand(0, $slen)];
  return $str;
}
$num = intval($_GET['test']);
if(isset($_GET['test'])&&!is_nan($num)&&$num<9999)
  echo random($num);
?>
