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

        // $post_image = $_FILES['image']['name'];
        // $post_image_temp = $_FILES['image']['tmp_name'];

        $user_username = $_POST['user_username'];
        $user_email = $_POST['user_email'];
        $user_password = $_POST['user_password'];
        // $post_date = date('d-m-y');

        // move_uploaded_file($post_image_temp, "../images/$post_image" );

        $query = "INSERT INTO users(user_firstname, user_lastname, user_role, user_username, user_email, user_password) ";

        $query .= "VALUES('{$user_firstname}', '{$user_lastname}', '{$user_role}', '{$user_username}', '{$user_email}', '{$user_password}' )";

        $create_user_query = mysqli_query($connection, $query);

        confirmQuery($create_user_query);
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
            <option value="subscriber">Select Options</option>
            <option value="admin">Admin</option>
            <option value="subscriber">Subscriber</option>
        </select>
    </div>
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" value="<?php echo $user_username; ?>" class="form-control" name="user_username">
    </div>
    <!-- <div class="form-group">
        <label for="post_image">Post Image</label>
        <input type="file" name="image">
    </div> -->
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