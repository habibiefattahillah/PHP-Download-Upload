<?php
    include '../connectdb.php';
    $sql = "DELETE FROM siswa WHERE nrp=10001";
    
    if(isset($_GET['deleteid'])){
        $id = $_GET['deleteid'];

        $sql="DELETE FROM siswa WHERE ID=$id";
        $result=mysqli_query($connect,$sql);
        if($result){
            header('location:home.php');
        }else{
            die(mysqli_error($connect));
        }
    }
?>