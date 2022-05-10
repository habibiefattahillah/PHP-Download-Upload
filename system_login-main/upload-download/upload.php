<?php
include '../connectdb.php';
$uploadDir = '../file/';
if (isset($_POST['upload'])) {
    $fileName = $_FILES['userfile']['name'];
    $tmpName = $_FILES['userfile']['tmp_name'];
    $fileSize = $_FILES['userfile']['size'];
    $fileType = $_FILES['userfile']['type'];
    $filePath = $uploadDir . $fileName;
    $result = move_uploaded_file($tmpName, $filePath);
    $deskripsi = $_POST['deskripsi'];
    if (!$result) {
        echo "Error uploading file";
        exit;
    }
    $fileName = addslashes($fileName);
    $filePath = addslashes($filePath);
    $query = "INSERT INTO upload (name, size, type, deskripsi, path ) " . "VALUES ('$fileName', '$fileSize', '$fileType', '$deskripsi', '$filePath')";
    mysqli_query($connect,$query) or die('Error, query failed : ' . mysqli_error());
    header('location:load.php');
}
?>