<?php
include "../session.php";
include "../connectdb.php";

if(isset($_POST['login'])){
    $user_id = $_POST['user_id'];
    $user_password = $_POST['user_password'];
    $user_password = md5($user_password);

    $query = mysqli_query($connect, "select * from tbl_auth_user where user_id = '$user_id' and user_password = '$user_password'");
    $cek = mysqli_num_rows($query);

    if($cek > 0){
        $_SESSION['user_id'] = $user_id;
        //Membuaat session dari semua isi tabel di database
        $query = mysqli_query($connect, "select * from tbl_auth_user where user_id = '$user_id'");
        $data = mysqli_fetch_array($query);
        $_SESSION['Nama'] = $data['Nama'];
        $_SESSION['NRP'] = $data['NRP'];
        $_SESSION['HP'] = $data['HP'];
        $_SESSION['Email'] = $data['Email'];
        $_SESSION['Alamat'] = $data['Alamat'];
        $_SESSION['TTL'] = $data['TTL'];

        echo "<script>alert('Login Success');</script>";
        echo "<script>location.href='../home/home.php';</script>";
    }
    else{
        echo "<script>alert('Login Failed');</script>";
        echo "<script>location.href='form_login.php';</script>";
    }
}
?>