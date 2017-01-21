<?php
try {
	$baza = new PDO('mysql:host=localhost;dbname=domemy', 'root', '');
	echo 'Pomyslnie polaczono z baza!';
} catch(PDOException $e) {
	echo 'Cos poszlo nie tak, nie mozna sie polaczyc'; $e->getMessage();
}	
 ?>