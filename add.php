<?php 
    include('validation.php');
?>

<!DOCTYPE html>
<html lang="en">

    <?php include('templates/header.php'); ?>

    <section class="container">
        <h4 class="text-center">Add a Pizza</h4>
        <form action="add.php" method="POST">
            <label for="email" class="form-label">Your email</label>
            <input type="text" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>">
            <div class="text-danger"><?php echo $errors['email']; ?></div>

            <label for="title" class="form-label">Pizza Title</label>
            <input type="text" class="form-control" id="title" name="title" value="<?php echo htmlspecialchars($title); ?>">
            <div class="text-danger"><?php echo $errors['title']; ?></div>

            <label for="ingredients" class="form-label">Ingredients (comma separated)</label>
            <input type="text" class="form-control" id="ingredients" name="ingredients" value="<?php echo htmlspecialchars($ingredients); ?>">
            <div class="text-danger"><?php echo $errors['ingredients']; ?></div>

            <div class="text-center">
                <input type="submit" name="submit" value="submit" class="btn btn-primary">
            </div>
        </form>
    </section>

    <?php include('templates/footer.php'); ?>

</html>