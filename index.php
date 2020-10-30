

<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Course</title>
</head>
<body>

<h1><?php echo "Hey Saalu, welcome to PHP"; ?> </h1>
    
<?php 
?>

<?php
$numbers = array(13, 5, 63, 6, 12, 73,);
print_r($numbers);

?> <hr>

<?php 

echo current ($numbers). "<br>";
next($numbers);
echo current ($numbers). "<br>";
next($numbers);
echo current ($numbers). "<br>";
reset($numbers);
echo current ($numbers). "<br>";
end($numbers);
echo current ($numbers). "<br>";
next($numbers);
echo current ($numbers). "<br>";




?>





</body>
</html>