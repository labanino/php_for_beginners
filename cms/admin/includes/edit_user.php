<?php

    if(isset($_GET['edit_user'])) {
        $the_user_id = $_GET['edit_user'];

        $query = "SELECT * FROM users WHERE user_id = $the_user_id ";
        $select_users_query = mysqli_query($connection,$query);

        while($row = mysqli_fetch_assoc($select_users_query)) {
            $user_id = $row['user_id'];
            $user_username = $row['user_username'];
            $user_password = $row['user_password'];
            $user_firstname = $row['user_firstname'];
            $user_lastname = $row['user_lastname'];
            $user_email = $row['user_email'];
            $user_role = $row['user_role'];
        }
    }

    if(isset($_POST['edit_user'])) {
        $user_firstname = $_POST['user_firstname'];
        $user_lastname = $_POST['user_lastname'];
        $user_role = $_POST['user_role'];

        $user_username = $_POST['user_username'];
        $user_email = $_POST['user_email'];
        $user_password = $_POST['user_password'];

        $query = "SELECT randSalt FROM users";
        $select_randsalt_query = mysqli_query($connection, $query);

        if(!$select_randsalt_query) {
            die("QUERY FAILED: " . mysqli_error($connection));
        }

        $row = mysqli_fetch_array($select_randsalt_query);
        $salt = $row['randSalt'];
        $hashed_password = crypt($user_password, $salt);

        $query = "UPDATE users SET ";
        $query .="user_firstname = '{$user_firstname}', ";
        $query .="user_lastname = '{$user_lastname}', ";
        $query .="user_role = '{$user_role}', ";
        $query .="user_username = '{$user_username}', ";
        $query .="user_email = '{$user_email}', ";
        $query .="user_password = '{$hashed_password}' ";
        $query .= "WHERE user_id = {$the_user_id} ";

        $edit_user_query = mysqli_query($connection, $query);

        confirmQuery($edit_user_query);

        // Success Alert after updating a new user
        echo "<div class='alert alert-success' role='alert'>User Updated: " . " " . "<a href='users.php'>View Users</a></div> ";
    }
?>

<form action="" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="firstname">Firstname</label>
        <input type="text" value="<?php echo $user_firstname; ?>" class="form-control" name="user_firstname">
    </div>
    <div class="form-group">
        <label for="lastname">Lastname</label>
        <input type="text" value="<?php echo $user_lastname; ?>" class="form-control" name="user_lastname">
    </div>
    <div class="form-group">
        <select name="user_role" id="">
            <option value="<?php echo $user_role; ?>"><?php echo $user_role; ?></option>
            <?php
                if($user_role == 'admin') {
                    echo "<option value='subscriber'>subscriber</option>";
                } else {
                    echo "<option value='admin'>admin</option>";
                }
            ?>
        </select>
    </div>
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" value="<?php echo $user_username; ?>" class="form-control" name="user_username">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" value="<?php echo $user_email; ?>" class="form-control" name="user_email">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" value="<?php echo $user_password; ?>" class="form-control" name="user_password">
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-primary" name="edit_user" value="Edit User">
    </div>
</form>