<?php
$names = ['kofi', 'ama', 'wofa'];
?> <hr>

<?php 
for ($i = 0; $i < count($names); $i++){

    echo $names[$i] . '<br>';
}


$products = [
    ['name'=> 'Milo', 'price'=> 30],
    ['name'=> 'Bread', 'price'=> 10],
    ['name'=> 'Sugar', 'price'=> 12],
    ['name'=> 'Milk', 'price'=> 5],
    ['name'=> 'Biscuit', 'price'=> 30],
];




foreach($products as $product){
    echo $product['name'] . ' - ' . $product['price'] . '<br>' ;
}

?>

<!-- extracting items with key and value pair "key=>value" -->
$products = [
    'name'=> 'Milo', 'price'=> 30,
    'name'=> 'Bread', 'price'=> 10

];

foreach($products as $key=>$value){
    echo "{$key} : {$value} <br> ";
}

<!-- example Full of nuggets -->
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

<!-- In HTML -->

<ul>
      <?php foreach($products as $product) { ?>
        
        <h3><?php echo $product['name']; ?> </h3>
        <p><?php echo $product['price']; ?> </p>
    <?php } ?>
  </ul>




