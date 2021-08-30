   <!-- Insert data from HTML to Database-->

<?php

include "connectdatabase.php";

if(isset($_POST["submit"])){
    if(isset($_POST['code']) && isset($_POST['course']) && isset($_POST['semester']) && isset($_POST['credithour']) && isset($_POST['statusGred'])){
        $code = $_POST['code'];
        $course = $_POST['course'];
        $semester = $_POST['semester'];
        $credithour = $_POST['credithour'];
        $statusGred = $_POST['statusGred'];
    }
    
    
    $sql = "INSERT INTO student (code,course,semester,credithour,statusgred) VALUES ('$code', '$course', '$semester', '$credithour', '$statusGred')";
    
    if(!mysqli_query($conn,$sql)){
        
        echo ("Not Inserted");
    
    }else{
    
        echo ("Inserted");
    
        header("location:profile.php");
    }
}


    

?>