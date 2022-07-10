<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Username</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>Role</th>
        </tr>
    </thead>
    <tbody>

    <?php

        $query = "SELECT * FROM users";
        $select_users = mysqli_query($connection,$query);

        while($row = mysqli_fetch_assoc($select_users)) {
            $user_id = $row['user_id'];
            $user_username = $row['user_username'];
            $user_password = $row['user_password'];
            $user_firstname = $row['user_firstname'];
            $user_lastname = $row['user_lastname'];
            $user_email = $row['user_email'];
            $user_role = $row['user_role'];

            echo "<tr>";
            echo "<td>$user_id</td>";
            echo "<td>$user_username</td>";
            echo "<td>$user_firstname</td>";

            // $query = "SELECT * FROM categories WHERE cat_id = {$post_category_id} ";
            // $select_categories_id = mysqli_query($connection,$query);

            // while($row = mysqli_fetch_assoc($select_categories_id)) {
            //     $cat_id = $row['cat_id'];
            //     $cat_title = $row['cat_title'];

            //     echo "<td>{$cat_title}</td>";
            // }

            echo "<td>$user_lastname</td>";
            echo "<td>$user_email</td>";
            echo "<td>$user_role</td>";

            // $query = "SELECT * FROM posts WHERE post_id = $comment_post_id ";
            // $select_posts_id_query = mysqli_query($connection,$query);

            // while($row = mysqli_fetch_assoc($select_posts_id_query)) {
            //     $post_id = $row['post_id'];
            //     $post_title = $row['post_title'];

            //     echo "<td><a href='../post.php?p_id=$post_id'>$post_title</a></td>";
            // }

            echo "<td><a href='users.php?change_to_admin={$user_id}'>Admin</a></td>";
            echo "<td><a href='users.php?change_to_subscriber={$user_id}'>Subscriber</a></td>";
            echo "<td><a href='users.php?source=edit_user&edit_user={$user_id}'>Edit</a></td>";
            echo "<td><a href='users.php?delete={$user_id}'>Delete</a></td>";
            echo "</tr>";
        }
        
    ?>

    </tbody>
</table>

<?php

    // Approved
    if(isset($_GET['change_to_admin'])) {
        $the_user_id = $_GET['change_to_admin'];

        $query = "UPDATE users SET user_role = 'admin' WHERE user_id = '$the_user_id' ";
        $change_to_admin_query = mysqli_query($connection, $query);
        // to refresh page after change
        header("Location: users.php");
    }

    // Unapproved
    if(isset($_GET['change_to_subscriber'])) {
        $the_subscriber_id = $_GET['change_to_subscriber'];

        $query = "UPDATE users SET user_role = 'subscriber' WHERE user_id = '$the_subscriber_id' ";
        $change_to_subscriber_query = mysqli_query($connection, $query);
        // to refresh page after change
        header("Location: users.php");
    }

    // Delete users from the users table
    if(isset($_GET['delete'])) {
        $the_user_id = $_GET['delete'];

        $query = "UPDATE users SET user_role = 'admin' WHERE user_id = '$the_user_id' ";
        $change_to_admin_query = mysqli_query($connection, $query);
        // to refresh page after change
        header("Location: users.php");
    }

?>