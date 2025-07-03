<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php

$name = "Rushi";
$length = strlen($name);

echo "$name has $length characters.<br>";

$upper = strtoupper($name);
echo "Uppercase: $upper<br>";   

$lower = strtolower($name);
echo "Lowercase: $lower<br>";

$replaced = str_replace("Rushi", "Rushi Patel", $name);
echo "Replaced: $replaced<br>";

$reversed = strrev($name);
echo "Reversed: $reversed<br>";

$position = strpos($name, "shi"); // Find position of substring "shi"
// Returns false if not found, otherwise returns the position index
if ($position !== false) {
    echo "Found 'shi' at position: $position<br>";
} else {
    echo "'shi' not found in $name<br>";
}

$concat = $name . " Gujju ";
echo "Concatenated: $concat <br>";


$_2name = "Rushi Has a Pro gammer in BGMI.";
 
$replaced2 = str_replace( "Pro", "legit", $_2name);
echo "<h1>  $replaced2<br> </h1>";

echo str_repeat( "$_2name ", 3) . "<br>"; // Repeat string 3 times
$wordwrap = wordwrap($_2name, 10, "<br>"); // Wrap text at 20 characters
echo "Word wrapped text:<br>$wordwrap<br>";
?>

</body>
</html>