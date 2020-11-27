
<?php 
$Numbers = array(8, 60, 100, 25, 5);
foreach($Numbers as $Num){
    echo "Numbers: {$Num} <br> ";
}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Course</title>
</head>
<body>
<h1><?php echo "Hey Saalu, welcome to PHP"; ?> </h1>
  <hr>  
    
  <h2>Products</h2>
 
  <?php
    $Food = array(
        "item_num" => 1050,
        'name' => 'Pizza',
        'region' => 'Ghana',
        'side' => 'Cocktail',
        'price' => 1233
    );

    foreach($Food as $Key => $Value){
        $Data=ucwords(str_replace("_", " ",$Key));

        if($Key == "price"){
            if(is_numeric($Value)){

            }else{
                $Value = "Cannot be determined";
            }
        }

        echo "$Data : $Value   <br>";
    }

  ?>

</body>
</html>