<?php include "db.php"; ?>
<?php include "functions.php"; ?>
<?php createRows() ?>  
<?php $title = "Creating Records into the database table with PHP"; ?>

<?php include "includes/header.php" ?>

    <h1>Create</h1>
    <form action="1_create.php" method="post">
        <input for="username" id="username" name="username" type="text" placeholder="Username">
        <input type="password" for="password" id="password" name="password" placeholder="Enter your Password">
        <input type="submit" name="submit" value="CREATE">
    </form>

<?php include "includes/footer.php" ?>