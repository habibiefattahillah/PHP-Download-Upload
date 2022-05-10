<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Siswa</title>
    <link rel="stylesheet" href="Home.css">
    <link rel="stylesheet" href="../../WDW/css/Tailwind.css">
</head>

<body id="grad1" class="h-">
    <header>
        <a href="home.php" class="logo">Habibie~&lt3</a>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="../upload-download/load.php">Upload-Download</a></li>
        </ul>
    </header>
    <?php
        include "../connectdb.php";

        $i = 1;
        $sql = "SELECT * FROM siswa";
        $result = mysqli_query($connect, $sql);

        echo "
        <table class='mt-10'>
            <tr>
                <th colspan = '5'>Daftar Mahasiswa PENS</th>
            </tr>
            <tr>
                <th>#</th>
                <th>Nrp</th>
                <th>Nama</th>
                <th>Jenis kelamin</th>
                <th>Operasi</th>
            </tr>";

        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>" . $i . "</td>"; $i++;
            echo "<td>" . $row['nrp'] . "</td>";
            echo "<td>" . $row['nama'] . "</td>";
            echo "<td>" . $row['gender'] . "</td>";
            echo '
                <td class="flex justify-center items-center">
                    <button class="my-4 mr-4 bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
                    <a href="update_data.php?updateid='.$row['ID'].'">Update</a></button>
                    <button class="my-4 bg-red-500 hover:bg-red-400 text-white font-bold py-2 px-4 border-b-4 border-red-700 hover:border-red-500 rounded">
                    <a href="delete_data.php?deleteid='.$row['ID'].'">Delete</a></button>
                </td>
            </tr>';
        }
        echo "</table>";

        mysqli_close($connect);
    ?>

    <div class="flex justify-center items-center">
        <button class="mb-10 mt-4 bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
            <a href="input_data.php">
                Add
            </a>
        </button>
    </div>
</body>
</html>