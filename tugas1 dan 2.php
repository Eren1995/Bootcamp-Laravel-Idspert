<?php

  /* Tugas 1 */ 
  	$arr = array (1,2,3,4,5);
  	echo "\n Diketahui nilai dari sebuah array adalah 1,2,3,4,5";
  	echo "\n";
  	echo " \n Tugas 1";
  	echo " \n Buatlah sebuah Program menghitung (sum) nilai dari array";
  	echo " \n Hasil dari tugas 1 adalah  ";
  	echo array_sum($arr);
	  echo "\n \n \n \n ";
	/* Tugas 2 */  
	
	  // Carilah nilai array dan indexnya dengan kondisi
    // nilai target lebih kecil dari 4 dan lebih besar dari 2;

	  $target = NULL;
    $targetIndex = NULL;
    
    foreach($arr as $key => $value) {
      if($value < 4 && $value > 2 ) {
        $target = $value;
        $targetIndex = $key;
      }
    }
    
    echo "\n Tugas 2";
    echo "\n Carilah nilai dari array index dengan kondisi";
    echo "\n Ketemu nih, aku ada di index $targetIndex dengan nilai $target";
   // echo "Found! $targetIndex with $target";
	
?>