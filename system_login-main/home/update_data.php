<?php
    include '../connectdb.php';
    $id = $_GET['updateid'];
    if(isset($_POST['submit'])){
        $nrp = $_POST['nrp'];
        $nama = $_POST['nama'];
        $gender = $_POST['gender'];

        $sql = "UPDATE siswa SET ID='$id', nrp='$nrp', nama='$nama', gender='$gender' WHERE ID='$id'";
        $result=mysqli_query($connect, $sql);
        if($result){
            header('location:home.php');
        }else{
            die(mysqli_error($connect));
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../WDW/css/Tailwind.css">
    <style>
        .center{
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>
<body>
<div class="w-full max-w-xs center my-20 border-2 rounded-md py-10 px-10">
    <form method="post">
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Nrp</label>
            <input name="nrp" type="text" autocomplete="off" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="3121600018">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Nama</label>
            <input name="nama" type="text" autocomplete="off" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Habibie">
        </div>
        <div class="inline-block relative w-64">
            <label class="block text-gray-700 text-sm font-bold mb-2">Jenis Kelamin</label>
            <select name="gender" class="block appearance-none bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                <option value="">Pilih</option>
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="mt-4 flex items-center justify-between">
        <button name="submit" type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
            Submit
        </button>
        </div>
    </form>
</div>    
</body>
</html>