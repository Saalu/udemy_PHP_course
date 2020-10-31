
<?php


?>


<!DOCTYPE html>
<html>

<?php include('templates/header.php');?>

<section class="container grey-text">
    <h4 class="center">Add a Pizza</h4>
    <form action="" method='' class="white">
        <label>Your Email:</label>
        <input type='text' name='email'>
        <label>Pizza Title:</label>
        <input type='text' name='title'>
        <label>Ingredients (comma seperated):</label>
        <input type='text' name='ingredients'>
        <div class="center">
            <input type="submit" value='submit' name='submit' class="btn brand ">
        </div>
    </form>
</section>



<?php include('templates/footer.php');?>



    

</html>