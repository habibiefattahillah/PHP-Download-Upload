<html>
    <head>
        <title>Download File From MySQL</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    </head>
    <body>
        <?php
        include '../connectdb.php';
        $query = "SELECT id, name, path FROM upload";
        $result = mysqli_query($connect, $query) or die('Error, query failed');
        if (mysqli_num_rows($result) == 0) {
            echo "Database is empty <br>";
        } else {
            while (list($id, $name,$path) = mysqli_fetch_array($result)) {
            ?>
            <a href="<?php echo $path;?>"><?php echo $name;?></a><br>
            <?php
            }
        }
        ?>
    </body>
</html>
