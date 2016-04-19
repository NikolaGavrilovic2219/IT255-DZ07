<?php

$method = $_SERVER['REQUEST_METHOD'];


if($method=="GET"){
	echo "Saberi ili oduzmi dva broja:";
	
} else if($method=="POST"){
	
	$operacija = $_POST["operacija"];
	$br1 = $_POST["br1"];
	$br2 = $_POST["br2"];
	
	switch ($operacija) {
		case '+':
			$rezultat = $br1 + $br2;
			echo "Rezultat sabiranja je: " . $rezultat;
			break;
		
		case '-':
			$rezultat = $br1 - $br2;
			echo "Rezultat oduzimanja je: " . $rezultat;
			
			break;
			}

}