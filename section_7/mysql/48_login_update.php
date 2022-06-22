<?php include "db.php"; ?>
<?php include "functions.php"; ?>
<?php updateTable(); ?>  
<?php $title = "Creating the Update Records Form"; ?>

<?php include "includes/header.php" ?>

    <h1>Update</h1>
    <form action="48_login_update.php" method="post">
        <input for="username" id="username" name="username" type="text" placeholder="Username">
        <input type="password" for="password" id="password" name="password" placeholder="Enter your Password">
        <select name="id" id="">
            <?php
                showAllData();
            ?>
        </select>
        <input type="submit" name="submit" value="Update">
    </form>

<?php include "includes/footer.php" ?>