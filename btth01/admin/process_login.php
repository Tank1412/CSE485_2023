<?php

    $username= $_POST['username'];
    $email= $_POST['email'];
    $password = $_POST['password'];

    $conn = mysqli_connect('localhost', 'root', '', 'btth01_cse485');
    $sql = "insert into taikhoan(username, email, password)

    values('$username', '$email', '$password')";
    mysqli_query($conn, $sql);
    mysqli_set_charset($conn,"utf8");

    $error = mysqli_error($conn);
    echo $error;

    $result = $conn->query($sql);

    if ($result['password'] == $password) {
        header('Location: http://localhost/BTTH01/btth01/admin/index.php')
    } else {
        echo $error;
    }
    
    mysqli_close($conn);
