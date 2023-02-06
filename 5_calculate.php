<!DOCTYPE html>
<html lang = "en">
<head> 
  <title> calculater</title>
  <meta charset = "utf-8" />
  <?php
$arrayNum = array(1,2,3,4,5,6,7,8,9);

$sum_Even = 0;
$sum_odd = 0;
$product_Even = 1;
$product_odd = 1;

for($i = 0; $i < count($arrayNum); $i++) 
{
    if(($arrayNum[$i]%2) == 0)
    {
        
        $sum_Even = $sum_Even + $arrayNum[$i];
        $product_Even = $product_Even * $arrayNum[$i];
    }
    else
    {
        $sum_odd = $sum_odd + $arrayNum[$i];
        $product_odd = $product_odd * $arrayNum[$i];
    }
}

echo "Sum of Even numbers in list is " . $sum_Even ."<br>";
echo "Sum of Odd numbers in list is " . $sum_odd ."<br>";
echo "Product of Even numbers in list is " . $product_Even ."<br>";
echo "product of Odd numbers in list is " . $product_odd ."<br>";
