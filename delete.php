<?php

    include "connectdatabase.php";

    $sql = "DELETE FROM student WHERE id='$_GET[id]'";

    if(mysqli_query($conn,$sql)){

        echo '<script> alert("Your Data has been Deleted !!!");</script>';

        header("refresh:1; url=cb18150.php");
    
    }else{

        echo "Not Deleted";

    }

    
    
    
    //Execute the query

?>