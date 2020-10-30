$names = ['ama', 'kay', 'joe'];
<!-- to replace array -->
$names[1] = "lami";
<!-- add array -->
$names[] = "lami";
<!-- push item to the end -->
array_push($names, 'leonard');
<!-- count items -->
echo count($ages)

<!-- merge arrays -->
$allnames = array_merge($names, $ages);
print_r($allnames)
<!--  -->

<!-- array within array -->
$names = ['ama', 'kay', ['lol', 'lmao'], 'joe'];

<!-- push item to end of array -->
array_push($names, 'leonard');

<!-- remove item from end of array -->
array_pop($names);
<!-- count total number of items in an array -->
echo count($ages);

print_r($names);


<!-- =======Associative Array======== -->



<!-- multidimentional Array -->
$names = array('Accra', 'Kumasi',array('Ghana', 'Togo', 'Niger'), 'Takoradi', 'Koforidua');

<!-- =========Functions of Array======= -->
$numbers = array(13, 5, 63, 6, 12, 73,);


<h4>Max: <?php  echo max($numbers); ?> <br></h4>
<h4>Min: <?php  echo min($numbers); ?> <br></h4>
<h4>Yes / No: <?php  echo in_array(90,$numbers); ?> <br></h4>
<h4> <?php  echo sort($numbers); ?> <br></h4>
<h4>Sorting: <?php  print_r($numbers); ?> <br></h4>
<h4> <?php echo rsort($numbers); ?> <br></h4>
<h4>SortingR: <?php  print_r($numbers); ?> <br></h4>

<!-- extra -->
$quote = ['Never', 'Give', 'Up', 'In', 'Life'];
$string = ['explode function breaks sting into array'];
<!-- covert to string -->
<h4>Implode: <?php  echo implode(" ", $quote); ?> <br></h4>
<!-- covert from string to array -->

 <?php  print_r(explode(" ", $string)); ?> 


 <!-- the Inside Job of Arrays -->
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