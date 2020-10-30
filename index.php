
<?php 

$products = [
    'name'=> 'Milo', 'price'=> 30,
    'name'=> 'Bread', 'price'=> 10,
    'name'=> 'Sugar', 'price'=> 12,
    'name'=> 'Milk', 'price'=> 43
    // ['name'=> 'Biscuit', 'price'=> 30],
];

foreach($products as $key=>$value){
    // converting to uppercase 
    $Data = ucwords (str_replace('_', ' ', $key));
// checking if prices are all numeric
if($key == "price"){
    if(is_numeric($value)){
    }else{
        $value = "Cannot be tested ";
    }
}


    echo "{$Data} : {$value} <br> ";
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
  <!-- <ul>
      <?php foreach($products as $product) { ?>
        
        <h3><?php echo $product['name']; ?> </h3>
        <p><?php echo $product['price']; ?> </p>
    <?php } ?>
  </ul> -->






</body>
</html>