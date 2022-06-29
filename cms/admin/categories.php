<?php include "includes/admin_header.php"; ?>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include "includes/admin_navigation.php"; ?>
        
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Admin Panel
                            <small>Username</small>
                        </h1>

                        <div class="col-xs-6">

                            <?php
                                // Get data after submit
                                if(isset($_POST['submit'])) {
                                    $cat_title = $_POST['cat_title']; // Get 'cat_title' after submit 
                                    
                                    // Validates the 'cat_title'
                                    if($cat_title == "" || empty($cat_title)) {
                                        echo "This field should not be empty";
                                    } else {
                                        // Not empty, insert into table
                                        $query = "INSERT INTO categories(cat_title) ";
                                        $query .= "VALUE('{$cat_title}') ";
                                        
                                        // Save query into variable
                                        $create_category_query = mysqli_query($connection, $query);

                                        // Kill connection if false
                                        if(!$create_category_query) {
                                            die('QUERY FAILED' . mysqli_error($connection));
                                        }
                                    }
                                }

                            ?>

                            <!-- Create Categories Form -->
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="cat-title">Add Category</label>
                                    <input class="form-control" type="text" name="cat_title">
                                </div>
                                <div class="form-group">
                                    <input class="btn btn-primary" type="submit" name="submit" value="Add Category">
                                </div>
                            </form>
                        </div>
                        <div class="col-xs-6">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Category Title</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    
                                        // Query ID and Title from Categories table
                                        $query = "SELECT * FROM categories";
                                        $select_categories = mysqli_query($connection,$query);

                                        while($row = mysqli_fetch_assoc($select_categories)) {
                                            $cat_id = $row['cat_id'];
                                            $cat_title = $row['cat_title'];

                                            echo "<tr>";
                                            echo "<td>{$cat_id}</td>";
                                            echo "<td>{$cat_title}</td>";
                                            echo "<td><a href='categories.php?delete={$cat_id}'>Delete</a></td>";
                                            echo "</tr>";
                                        }

                                    ?>
                                    <?php

                                        // Delete Category Title from table
                                        if(isset($_GET['delete'])) {
                                            $the_cat_id = $_GET['delete'];
                                            $query = "DELETE FROM categories WHERE cat_id = {$the_cat_id} ";
                                            $delete_query = mysqli_query($connection, $query);
                                            // Refresh the page after deleting a Category Title
                                            header("Location: categories.php");
                                        }

                                    ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

<?php include "includes/admin_footer.php"; ?> 