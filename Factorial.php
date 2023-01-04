<?php class FactorialA{
public function Factorial($n){
if(is_int($n) and $n>=0)
{
    $factorial=1;
    for($x=$n; $x>1; $x--)
    {
        $factorial=$factorial *$x;
    }
    return $factorial;
}
elseif ($n==-3 or $n==1.5 or $n==false or $n=='abc'){
{
    $factorial=null;
    return $factorial;
}
}}
public function Fact($n){
if(is_int($n)and $n>3){
    $y=1;$m=$n-1;
    for($z=$m; $z>1; $z--)
{
    $y=$y*$z;
}
return $y;
}

}}
?>