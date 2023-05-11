<?php

    include('connect.php');


    if(isset($_GET['id']))
    {

        $id = $_GET['id'];


        $sql = "DELETE FROM customer WHERE id = '$id'";
        $result = mysqli_query($conn, $sql);

        if($result)
        {
            header('location: index.php');
        }

    }

?>