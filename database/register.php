<?php
    include("connection.php");

    $name = $_POST['name'];
    $aadhaar = $_POST['aadhaar'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];
    $add = $_POST['add'];
    $image = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $role = $_POST['role'];

    if($cpass!=$pass){
        echo '<script>
                alert("Passwords do not match!");
                window.location = "../sfolder/register.php";
            </script>';
    }
    else{
        move_uploaded_file($tmp_name,"../images/$image");
        $insert = mysqli_query($connect, "insert into user (name, aadhaar, password, address, photo, status, votes, role) values('$name', '$aadhaar', '$pass', '$add', '$image', 0, 0, '$role') ");
        if($insert){
            echo '<script>
                    alert("Registration successfull!");
                    window.location = "../";
                </script>';
        }
    }
    
?>