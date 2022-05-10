<?php
if(isset($_POST['save'])){
    include "../connectdb.php";

    $user_id = $_POST['user_id'];
    $user_password = $_POST['user_password'];
    $cpassword = $_POST['cpassword'];
    $NRP = $_POST['nrp'];
    $NAMA = $_POST['name'];
    $HP = $_POST['no_telp'];
    $email = $_POST['email'];
    $Alamat = $_POST['Alamat'];
    $TTL = $_POST['TTL'];

    $query = mysqli_query($connect, "select * from tbl_auth_user where user_id = '$user_id'");
    $cek = mysqli_num_rows($query);

    if($cek > 0){
        echo "<script>alert('User already registered');</script>";
        echo "<script>location.href='sign_up.php';</script>";
    }else{
        if($user_password == $cpassword){
            $user_password = md5($user_password);
            $query = mysqli_query($connect, "insert into log set user_id = '$user_id'");
            $query = mysqli_query($connect, "insert into tbl_auth_user set
            user_id = '$user_id',
            NRP = '$NRP',
            Nama = '$NAMA',
            Email = '$email', 
            user_password = '$user_password', 
            HP = '$HP',  
            Alamat = '$Alamat', 
            TTL = '$TTL'") or die(mysqli_error($connect));
            echo "<script>alert('Registration Success');</script>";
            echo "<script>location.href='../login/sign_in.php';</script>";
        }else{
            echo "<script>alert('Password does not match');</script>";
            echo "<script>location.href='sign_up.php';</script>";
        }
    }
}
?>