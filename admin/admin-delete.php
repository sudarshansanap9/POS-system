<?php
require "../config/function.php";
$id=$_GET['id'];

    $conn = mysqli_connect("localhost", "root", "", "pos_system_php");

    $queryDelete = "Delete FROM admins WHERE id=$id";
    if(!(($result=mysqli_query($conn,$queryDelete))))
    {
        Echo "Not possible to delete data";
    }
    if($result){
            redirect("admins.php","Admin Deleted Successfully!.");
    }


