<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
    </style>

</head>
<body>
<?php

include "connectdatabase.php";
if(isset($_GET["id"])){
$id = $_GET["id"];
}
$query = "SELECT * FROM student where id='$id'";

$queryrun = mysqli_query($conn,$query);

while($row = mysqli_fetch_array($queryrun)){
    ?>
    <form action="update1.php" method="POST">
    <label for="code">Code: </label>
    <input type="text" name="code" id="code" value="<?php echo $row['code']?>">
    <br>
    <label for="course">Course: </label>
    <input type="text" name="course" id="course" value="<?php echo $row['course']?>">
    <br>
    <label for="semester">Semester:</label>
    
    <select name="semester" id="semester">
        <?php 
            if($row['semester'] === $row['semester']){
                
                echo '<option value="'.$row['semester'].'">'.$row['semester'] .'</option>';
            }
            for($x=1;$x <= 8;$x++){

                if($row['semester']!=$x){
                    echo "<option value='$x'>$x</option>'";
                }
            }

        ?>
        
    </select>

    
    <br>
    <label for="credithour">Credit hour:</label>
    <select name="credithour" id="credithour">
            <option value="<?php $row['credithour']?>"><?php echo $row['credithour']?></option>
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="6">6</option>
<option value="8">8</option>


</select>
    <br>
    <label for="status">Status:</label>
    <input type="radio" name="statusGred" id="green" value="pass" checked="checked">Completed course with passed grade
            <br>
            <input type="radio" name="statusGred" id="yellow" value="on-going">On-going/currently enrolled course
            <br>
            <input type="radio" name="statusGred" id="blue" value="not-yet-enrolled">Not yet enrolled but already planned
            <br>
            <input type="radio" name="statusGred" id="red" value="already-enrolled">Already enrolled but failed grade
            <br>
            <input type="radio" name="statusGred" id="white" value="no-planning-yet">No planning yet (no semester set for the course)
    <input type="hidden" name="id" value="<?php echo $row['id']?>">
    <input type="submit" value="Update">

    </form>

    <?php
    
    
}
?>

</body>
</html>