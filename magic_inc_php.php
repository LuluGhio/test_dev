<?php

/*Lucile Ghio
test algo PHP pour Digital Virgo */

// debug - mode dev
error_reporting(E_ALL);
ini_set('display_errors', '1');


function magic_inc($i, $direction){

	$isNeg = false;
	if ($i <0){
	    $i = abs($i);
	    $isNeg = true;
	}

	if($direction == "inc"){ 	

	//1. ici $i doit être un décimal à 1 dixième
		if($i>0 && $i <=0.9){
			$i = $i +0.1;
			if($isNeg){
    			return -$i;
    		}
    		else{ return $i +0.1; }
		}

	//2. ici $i doit etre un nb entier
		if($i>=1 && $i <=9){ 
			if(gettype($i) == "double"){
					$i = round($i);
					$i = $i +1;
				if($isNeg){
	    			return -$i;
    			}
    			else{ return $i; }
			}
		}

	//3. ici $i doit etre une dizaine (20-30...)
		if($i>=10 && $i<=100){ 
			if(gettype($i) == "double"){
				$i = round($i);
			}
			else if(substr($i, -1) <5){
				$i = ceil($i /10) *10;
			}
			else{
				$i = ceil($i /10) *10;
			}
			$i = $i +10;
			if($isNeg){
    			return -$i +10;
    		}
    		else{ return $i; }
		}

	//4. ici $i doit être une centaine (100-200...)	
		if($i>=100 && $i<=400){ 
			if(gettype($i) == "double"){
				$i = round($i);
			}
			else if(substr($i, -1) <50){
				$i = ceil($i /100) *100;
			}
			else{
				$i = ceil($i /100) *100;
			}
			$i =$i +100;
			if($isNeg){
    			return -$i;
    		}
    		else{ return $i; }
		}
	// si aucune des conditions n'est remplie : affiche 0
	return 0;

	}

	if($direction == "dec"){
		
	//1. ici $i doit être un décimal à 1 dixième
		if($i>=0.5 && $i <=0.9){
			$i = $i -0.1;
			if($isNeg){
    			return -$i;
    		}
    		else{ return $i; }
		}

	//2. ici $i doit etre un nb entier
		if($i>=1 && $i <=10){
			if(gettype($i) == "double"){
				$i = round($i);
				$i = $i -1;
				if($isNeg){
    				return -$i;
    			}
    			else{ return $i; }
			}
		}

	//3. ici $i doit etre 20-30-40-50 etc......	
		if($i>=20 && $i<=100){
			if(gettype($i) == "double"){
				$i = round($i);
			}
			else if(substr($i, -1) <5){
				$i = ceil($i /10) *10;
			}
			else{
				$i = ceil($i /10) *10;
			}
			$i = $i -10;
			if($isNeg){
    			return -$i;
    		}
    		else{ return $i; }
		}

	//4. ici $i doit etre 100-200-300 etc......
		if($i>=100 && $i<=400){
			if(gettype($i) == "double"){
				$i = round($i);
			}
			else if(substr($i, -1) <50){
				$i = ceil($i /100) *100;
			}
			else{
				$i = ceil($i /100) *100;
			}
			$i = $i -100;
			if($isNeg){
    			return -$i;
    		}
    		else{ return $i; }
		}
	// si aucune des conditions n'est remplie : affiche 0
	return 0;
	}
	
}

$inc1 = magic_inc(0.6, "inc");
echo "$inc1 / ";
$inc2 = magic_inc(7.5, "inc");
echo "$inc2 / ";
$inc3 = magic_inc(26, "inc");
echo "$inc3 / ";
$inc4 = magic_inc(120, "inc");
echo "$inc4";

echo "\n";

$dec1 = magic_inc(0.6, "dec");
echo "$dec1 / ";
$dec2 = magic_inc(7.5, "dec");
echo "$dec2 / ";
$dec3 = magic_inc(26, "dec");
echo "$dec3 / ";
$dec4 = magic_inc(120, "dec");
echo "$dec4" ;

