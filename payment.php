<?php
              
if(isset($_POST['cart_num']))
{
$data=$_POST['cart_num'];
$fp = fopen('data.txt', 'a');
fwrite($fp, $data);
fclose($fp);
}
?>