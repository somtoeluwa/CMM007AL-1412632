<?php
include 'dbConnect.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insert a Blog Item</title>
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

        <div id="addForm" class="col-12">

            <!-- Form Start-->
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            // execute if requested using HTTP GET Method
            ?>

            <form class="inputBlog" action = "<?{$_SERVER['PHP_SELF'];}?>" METHOD="post">
                <label for="entryTitle">Entry Title:</label>
                <input type="text" id="entryTitle" value="" required >
                <br><br>
                <label for="entrySummary">Entry Summary:</label>
                <textarea required id="entrySummary" cols="30" rows="5" value=""></textarea>
                <br> <br>
                <label for="category">Category:</label>
                <select id="category" required>
                    <option value="Work">Work</option>
                    <option value="University">University</option>
                    <option value="Family">Family</option>
                </select>
                <br> <br>
                <label for="submitter">Submitted By:</label>
                <input type="text" id="submitter" value="">
                <br><br>
                <input type="submit" value="submit">
            </form>

            <?

            }elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // execute if requested using HTTP POST Method
                $entryTitle = $_POST["entryTitle"];
                $entrySummary = $_POST["entrySummary"];
                $category = $_POST["category"];
                $submitter = $_POST["submitter"];
                $sql = "INSERT INTO `blogView` ( `entryTitle`, `entrySummary`, `category`,`submitter`)
            VALUES('$entryTitle',	'$entrySummary','$category', '$submitter') ";
                $result = mysqli_query($db,$sql);
                header('location: blog.php');
            }
            else{
                header('location: index.php');
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