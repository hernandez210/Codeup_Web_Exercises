<?php 

$things = array("Sgt. Pepper", "11", null, array(1, 2, 3), 3.14, "12 + 7", false, (string) 11);
foreach ($things as $thing) {
    if (is_integer($things)) {
        echo "{$thing} is a integer\n";
    } else if (is_float($things)) {
        echo "{$thing} is a float\n";
    } else if (is_bool($things)) {
        echo "{$thing} is a boolean\n";
    } else if (is_array($things)) {
        echo "{$thing} is a array\n";
    } else if (is_null($things)) {
        echo "{$thing} is a null\n";
    } else if (is_string($things)) {
        echo "{$thing} is a string\n";
    }
};


foreach ($things as $thing) {
	if(is_scalar($thing)) {
		echo "$thing is scalar";
	}
}

// echo is_array("bob");


// if(is_string("bob") { 
// echo "this is a string";
// }



// $animals = [
// 	"horses",
// 	"pigs",
// 	"ducks"
// ];

// // The convention is to name the arrays as plural and the index a singular

// foreach ($animals as $value) {
// 	echo "old MAC osx had a farm. EIEIEO. and  on that farm he had some $value.";
// }

// for($i = 0; count($animals); i++) {
// 	$animal = $animals[$i];
// 	echo "old MAC osx had a farm. EIEIEO. and  on that farm he had some $animal.";

// };

// $languages = [
// "php",
// "js",
// "css",
// "html"
// ];

// foreach ($languages as $language) {
// 	echo "now I know $language" . PHP_EOL;
// };




 ?>