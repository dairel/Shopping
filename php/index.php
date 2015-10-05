<?php
     
require 'total.php';




$rice = $_GET['opcao1'];
$bean = $_GET['opcao2'];
$Chocolate = $_GET['opcao3'];
$psn = $_GET['opcao4'];
$totalsuper = 0.0;

if{is_double($rice) && is_double($bean) && is_double($Chocolate)
is_double($psn)){
    
    
     $totalsuper = total::getIndex($rice, $bean, $Chocolate, $psn);
}

  echo $totalsuper;

?>


 