<?php 

$conn = mysqli_connect("localhost","root","","studentacademic"); //Connect to database

                if($conn-> connect_error){

                    die("Connect Failed: " . $conn-> connect_error);
                    
                }

?>