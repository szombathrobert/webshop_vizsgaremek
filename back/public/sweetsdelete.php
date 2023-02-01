<?php
    include 'config.php';
    if(isset($_GET['deleteid'])){
        $id=$_GET['deleteid'];

        $sql="delete from `sweets` where id=$id";
        $result=mysqli_query($conn,$sql);
        if($result){
            header('location:sweets.php');
        }else {
            echo "Sikertelen törlés!";
        }
    }

    

?>
