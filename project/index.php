
<?php
// connect to database
include('config/db_connection.php');

// write query for all pizzas
$sql = 'SELECT title, ingredients, id FROM pizzas ORDER BY created_at';
// make query & get result
$result = mysqli_query($conn, $sql);
// fetch the resulting rows as an array
$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

// free result from memory
mysqli_free_result($result);
// close connections
mysqli_close($conn);

//  print_r( explode(',', $pizzas[0]['ingredients']));

?>


<!DOCTYPE html>
<html>



<?php include('templates/header.php');?>


<h4 class="center grey-text">
    Pizzas!
</h4>

    <div class="container">
        <div class="row">
            <?php  foreach ($pizzas as $pizza) { ?>
               
                <div class="col s6 md3">
                <div class="card z-depth-0">
                    <div class="card-content center">
                        <h6><?php echo htmlspecialchars($pizza['title']);  ?></h6>
                        <!-- <div><?php echo htmlspecialchars($pizza['ingredients']);  ?></div> -->
                        <ul class="">
                            <?php   foreach(explode(',', $pizza['ingredients']) as $item) {?>
                                <li><?php echo htmlspecialchars($item) ?></li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="card-action right-align">
                        <a href="details.php?id=<?php echo $pizza['id']?>" class="brand-text">more info</a>
                    </div>
                </div>
            </div>
           <?php } ?>
        </div>
    </div>

<?php include('templates/footer.php');?>


</html>