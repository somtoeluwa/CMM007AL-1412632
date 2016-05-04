<?php
include ('dbConnect.php');
$category=$_GET['category'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Show Blog Items</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300italic' rel='stylesheet' type='text/css'>
</head>
<body>
<!-- Header Start-->
<header>

    <h1><a href="index.php">myBlog</a></h1>
    <h3>Because the Internet needs to know what I think</h3>


    <!-- Navigation bar Start-->
    <nav>
        <ul>
            <li><a href="blog.php">All Blog Items</a></li>
            <li><a href="blog.php?category=Work">Work Items</a></li>
            <li><a href="blog.php?category=University">University Items</a></li>
            <li><a href="blog.php?category=Family">Family Items</a></li>
            <li><a href="add.php">Insert a Blog Item</a></li>
        </ul>
    </nav>
</header>

<!-- Main Start-->
<main>


    <div class="row">

        <!-- Content Start-->
        <div id="content" class="col-12">

            <?php
            // $category=$_GET['BugCategory'];
            if($_GET['category']){
                $sql_query = "select * from `blogView` WHERE category  = '$category'";
            }else {
                $sql_query = "select * from `blogView`"; }
            $result = mysqli_query($db, $sql_query);
            while ($row = $result->fetch_array()) {
            ?>



            <div id="blogItem">
                <h3><?php echo $row['entryTitle'] ?><span style="font-weight: 300"> by </span><?php echo $row['submitter']?></h3>
                <h4><?php echo $row['category'] ?></h4>
                <p><?php echo $row['entrySummary'] ?></p>
            </div>

                <?php
            }
            ?>


        </div>

    </div>
</main>

<!-- footer Start-->
<footer>
    <p>Designed by [Somto Eluwa, 1412632] [2016]</p>

</footer>
</body>
</html>