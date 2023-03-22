<?php
$conn = mysqli_connect("localhost", "root", "", "db_admin");

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $query = "INSERT INTO tb_admin VALUES('$username', '$password')";
    mysqli_query($conn, $query);
    echo "<script> alert('succes');
    document.location.href = 'dashboard.html';
    </script>;";
    }

