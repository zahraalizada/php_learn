<?php include "includes/admin_header.php" ?>

    <div id="wrapper">

    <!-- Navigation -->
    <?php include "includes/admin_navigation.php" ?>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Welcome to admin
                        <small>Author</small>
                    </h1>

                    <div class="col-xs-6">

                        <?php

                        if (isset($_POST['submit'])) { // POST-a submit deyerinin olub olmadigni yoxlayriq
                            $cat_title = $_POST['cat_title']; // post ile cat_title basligindaki datalari goturuk
                            if ($cat_title == "" || empty($cat_title)) { // bu basligi bos olub lmadiigniyoxluyuruq
                                echo "This field should not be empty"; // bos olsa
                            } else {
                                $query = "INSERT INTO categories(cat_title)"; //  insert edirik cat_title-a dbde
                                $query .= "VALUE('{$cat_title}')"; // postdan aldigimiz cat_title deyerin assign edirik

                                $create_category_query = mysqli_query($connection, $query); // db ile elaqe qurulur

                                if (!$create_category_query) {
                                    die('QUERY FAILED' . mysqli_error($connection)); // connection yoxlayiriq
                                }
                            }
                        }
                        ?>

                        <form action="" method="post">
                            <div class="form-group">
                                <label for="cat-title">Add Category</label>
                                <input class="form-control" type="text" name="cat_title">
                            </div>

                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" name="submit" value="Add Category">
                            </div>
                        </form>


                        <?php
                            if(isset($_GET['edit'])){
                                $cat_id = $_GET['edit'];

                                include  "includes/update_categories.php";
                            }

                        ?>


                    </div>

                    <div class="col-xs-6">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Category Title</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php
                            // FIND ALL CATEGORIES QUERY
                            $query = "SELECT * FROM categories"; // categories table-a aid butun elementler secilir
                            $select_categories = mysqli_query($connection, $query); // db ile elaqe qurulur

                            while ($row = mysqli_fetch_assoc($select_categories)) { // table-dan gelen melumatlar arraye cevrilir
                                // table basliqlari variable-a assign edilir
                                $cat_id = $row['cat_id'];
                                $cat_title = $row['cat_title'];
                                // tr>td formatinda yazdirilir melumatlar
                                echo "<tr>";
                                echo "<td>$cat_id</td>";
                                echo "<td>$cat_title</td>";
                                echo "<td><a href='categories.php?delete=$cat_id'>Delete</a> </td>";
                                echo "<td><a href='categories.php?edit=$cat_id'>Edit</a> </td>";
                                echo "</tr>";

                            }

                            ?>


                            <?php
                            // DELETE QUERY
                            if (isset($_GET['delete'])) { // get ile delete-in deyerinin olub olmadigini yoxlayir
                                $the_cat_id = $_GET['delete']; // get-delete ile aldigi deyeri variable-a assign edir
                                // db-de categoriyalar tabledan cat_id-si getden aldigimiz id valuesine beraber edib, sonra silirik
                                $query = "DELETE FROM categories WHERE cat_id ={$the_cat_id}";
                                $delete_query = mysqli_query($connection, $query);
                                header("Location: categories.php"); // sildikden sonra derhal gorunmesi ucun refresh effekti veren yonlendirme

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


<?php include "includes/admin_footer.php" ?>