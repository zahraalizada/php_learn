<?php include "includes/db.php"; ?>
<?php include "includes/header.php"; ?>

    <!-- Navigation -->
<?php include "includes/navigaton.php"; ?>

    <!-- Page Content -->
    <div class="container">

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

            <?php

            if (isset($_POST['submit'])) { // formdan submit deyerinin alinib alinmadigini yoxlayiriq
                $search = $_POST['search']; // search inputunu secirik
                // posts table-dan post_tags basligli sutunda yazilanlara oxsar ne varsa secilir
                $query = "SELECT * FROM posts WHERE post_tags LIKE '%$search%'";
                $search_query = mysqli_query($connection, $query);

                if (!$search_query) { // searchquery qosulmasa error vermesi ucun
                    die("QUERY FAILED" . mysqli_error($connection));
                }
                // search_query rows sayi goturulur
                $count = mysqli_num_rows($search_query);

                if ($count == 0) { // search_query rows sayi sifirdirsa no result
                    echo "<h1>No Result</h1>";
                } else { // search_query rows sayi sifir deyilse result


                    while ($row = mysqli_fetch_assoc($search_query)) {
                        //posts table-in setirleri fetchassoc ile arraye cevrilir, table basliqlar loopa salinir
                        $post_title = $row['post_title'];
                        $post_author = $row['post_author'];
                        $post_date = $row['post_date'];
                        $post_image = $row['post_image'];
                        $post_content = $row['post_content'];

                        ?>
                        <div>
                            <h1 class="page-header">
                                Page Heading
                                <small>Secondary Text</small>
                            </h1>

                            <!-- First Blog Post -->
                            <h2>
                                <a href="#"><?php echo $post_title; // dinamic datalar ucun deyisken yazilir ?> </a>
                            </h2>
                            <p class="lead">
                                by <a href="index.php"><?php echo $post_author; ?></a>
                            </p>
                            <p><span class="glyphicon glyphicon-time"></span> <?php echo $post_date; ?></p>
                            <hr>
                            <img class="img-responsive" src="images/<?php echo $post_image; ?>" alt="">
                            <hr>
                            <p><?php echo $post_content; ?></p>
                            <a class="btn btn-primary" href="#">Read More <span
                                        class="glyphicon glyphicon-chevron-right"></span></a>

                            <hr>

                        </div>


                    <?php }

                }

            }

            ?>


        </div>

        <!-- Blog Sidebar Widgets Column -->
        <?php include "includes/sidebar.php"; ?>

    </div>
    <!-- /.row -->

    <hr>

<?php include "includes/footer.php"; ?>