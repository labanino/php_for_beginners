<?php include "db.php"; ?>
<?php include "functions.php"; ?>
<?php

    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);
    if(!$result) {
        die("Query failed" . mysqli_error());
    }

?>  
<?php $title = "Reading Information in the database with PHP"; ?>



<?php include "includes/header.php" ?>

    <?php
        while($row = mysqli_fetch_assoc($result)) {
        ?>

        <pre>
            <?php
                print_r($row);
            ?>
        </pre>

        <?php
        }
    ?>

<?php include "includes/footer.php" ?>