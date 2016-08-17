 <?php
// Array with names
$a[] = "Apple";
$a[] = "Ball";
$a[] = "Cat";
$a[] = "Dog";
$a[] = "Eye";
$a[] = "Fox";
$a[] = "Goat";
$a[] = "Helmet";
$a[] = "Ink";
$a[] = "Jug";
$a[] = "Knife";
$a[] = "Lion";
$a[] = "Neck";
$a[] = "Orange";
$a[] = "Parrot";
$a[] = "Animal";
$a[] = "Rat";
$a[] = "Cup";
$a[] = "Doll";
$a[] = "Ear";
$a[] = "Evening";
$a[] = "Sun";
$a[] = "Tub";
$a[] = "Umbrella";
$a[] = "Van";
$a[] = "Lightning";
/*$a[] = "Each";*/
$a[] = "Egg";
$a[] = "Watch";
$a[] = "Volume";
$a[] = "Yoyo";
$a[] = "Truck";
$a[] = "Car";
$a[] = "Rocket";
$a[] = "Monkey";
$a[] = "Kite";
$a[] = "Kick";
$a[] = "Queen";
$a[] = "Zebra";
$a[] = "X-Ray";
$a[] = "Elephant";
$a[] = "Helicopter";
$a[] = "Suv";
$a[] = "Icecream";
$a[] = "Juice";
// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
       
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
                $hint.="<img src=./icon_pack/$name.png width=100 >";
                
            } else {
                $hint .= ", $name";
                
                    
            }
        }
        
    }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?> 