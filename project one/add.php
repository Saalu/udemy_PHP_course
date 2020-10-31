<?php

    // if(isset($_GET['submit'])){
    //     echo $_GET['email'];
    //     echo $_GET['title'];
    //     echo $_GET['indgredients'];
    // }

    // if(isset($_POST['submit'])){
    //     echo htmlspecialchars($_POST['email']);
    //     echo htmlspecialchars($_POST['title']);
    //     echo htmlspecialchars($_POST['indgredients']);
    // }

 $email = $title = $ingredients = '';

 $errors = array('email' => '' ,'title' => '' ,'ingredients' => '' );

    if(isset($_POST['submit'])){
       
        if(empty($_POST['email'])){
            $errors['email'] = 'An email is required <br>';
        }else {
            $email = $_POST['email'];
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $errors['email'] = 'Email must be a valid email address';
            }
            // echo htmlspecialchars($_POST['email']);
        }
        if(empty($_POST['title'])){
            $errors['title'] ='An title is required <br>';
        }else { 
            $title = $_POST['title'];
            if(preg_match('/^[a-zA-Z\s]+$/', $title)){
                $errors['title'] ='Title must be letters and spaces only';
            }
        }
        if(empty($_POST['ingredients'])){
            $errors['ingredients'] ='An ingredients is required <br>';
        }else { 
            $ingredients = $_POST['ingredients'];
            if(preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)){
                $errors['ingredients'] ='Title must be letters and spaces only';
            }
        }
       


     } //end of post request
?>


<!DOCTYPE html>
<html>

<?php include('templates/header.php');?>

<section class="container grey-text">
    <h4 class="center">Add a Pizza</h4>
    <form  class="white" action="add.php" method='POST'>
        <label>Your Email:</label>
        <input type='text' name='email' value="<?php echo htmlspecialchars($email) ?>">
        <div class="red-text"><?php echo $errors['email']; ?></div>

        <label>Pizza Title:</label>
        <input type='text' name='title' value="<?php echo htmlspecialchars($email) ?>">
        <div class="red-text"><?php echo $errors['title']; ?></div>

        <label>Ingredients (comma seperated):</label>
        <input type='text' name='ingredients' value="<?php echo htmlspecialchars($email) ?>">
        <div class="red-text"><?php echo $errors['ingredients']; ?></div>

        <div class="center">
            <input type="submit" value='submit' name='submit' class="btn brand ">
        </div>
    </form>
</section>



<?php include('templates/footer.php');?>



    

</html>