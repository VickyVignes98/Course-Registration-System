<?php
   $conn = mysqli_connect("localhost","root","","studentacademic"); //Connect to database

   if(isset($_POST['code']) && isset($_POST['course']) && isset($_POST['semester']) && isset($_POST['credithour']) && isset($_POST['statusGred']) && isset($_POST['id'])){
    $code = $_POST['code'];
    $course = $_POST['course'];
    $semester = $_POST['semester'];
    $credithour = $_POST['credithour'];
    $statusGred = $_POST['statusGred'];
    $id = $_POST['id'];
}

   if($conn-> connect_error){

       die("Connect Failed: " . $conn-> connect_error);
       
   }

    
    $sql = "UPDATE student SET code='$code',course='$course',semester='$semester',credithour='$credithour',statusgred='$statusGred' WHERE id='$id'";

    if(mysqli_query($conn,$sql)){
        header("refresh:1; url=cb18150.php");
    }else{
        echo "Not updated !!!";
    }
?>