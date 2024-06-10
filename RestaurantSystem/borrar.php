<?php
    $id = $_GET['id'];
    include("conexion.php");

    $sql = "DELETE FROM platos WHERE id='".$id."'";
    $result = mysqli_query($conn, $sql);

    echo "<script language='JavaScript'>
            location.assign('index.php')
            </script>";

?>