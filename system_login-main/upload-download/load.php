<html>
<head>
    <title>Upload File To MySQL Database</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <link rel="stylesheet" href="../../WDW/css/Tailwind.css">
    <link rel="stylesheet" href="load.css">
    <style type="text/css">
    </style>
</head>
<body id="grad1">
    <header>    
        <a href="home.php" class="logo">Habibie~&lt3</a>
        <ul>
            <li><a href="../home/home.php">Home</a></li>
            <li><a href="load.php">Upload-Download</a></li>
        </ul>
    </header>
    <form action="upload.php" method="post" enctype="multipart/form-data" name="uploadform">
        <table width="350" border="0" cellpadding="1" cellspacing="1" class="box">
        <tr>
            <td width="246">
                <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
                <input name="userfile" type="file" class="box" id="userfile">
            </td>
            <td>
                <input name="deskripsi" type="text" class="box" id="deskripsi" placeholder="Description (Optional)">
            </td>
            <td width="80">
                <input name="upload" type="submit" class="box" id="upload" value="Upload">
            </td>
        </tr>
        </table>
    </form>
    <?php
        include "../connectdb.php";

        $i = 1;
        $sql = "SELECT * FROM upload";
        $result = mysqli_query($connect, $sql);

        echo "
        <table class='mt-10'>
            <tr>
                <th>ID</th>
                <th>Nama File</th>
                <th>Tipe</th>
                <th>Ukuran</th>
                <th>Deskripsi</th>
                <th>Download</th>
            </tr>";

        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>" . $i . "</td>"; $i++;
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['type'] . "</td>";
            echo "<td>" . $row['size'] . "</td>";
            echo "<td>" . $row['deskripsi'] . "</td>";
            echo '
                <td class="flex justify-center items-center">
                    <button> <a href="download.php?file='.$row['name'].'">Download</a> </button>
                </td>
            </tr>';
        }
        echo "</table>";

        mysqli_close($connect);
    ?>
</body>
</html>