<?php include "connectdatabase.php"; ?> 


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Academic Plan System</title> <!-- title -->
    <?php echo '<link rel="stylesheet" href="cb18150.css" type="text/css">'; //link to css ?>
    <script src="cb18150.js"></script> 
</head>
<body>
    
    <h2>Student Academic Plan System</h2>
    
    

    <h3>APPENDIX A</h3>

    <form action="insert.php" method="POST">

    <hr> <!-- Student's Input-->

    <div>

        <label for="code">Code: </label>
            <input type="text" name="code" id="code">

    </div>
    
    <div>

        <label for="course">Course: </label>
            <input type="text" name="course" id="course">

    </div>
    
    <div>
    
        <label for="semester">Semester:</label>

            <select name="semester" id="semester">

                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>

            </select>

    </div>

    <div>
    
        <label for="credithour">Credit hour:</label>

            <select name="credithour" id="credithour">

                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="6">6</option>
                <option value="8">8</option>
                

            </select>

    </div>

    <div>

        <label for="status">Status:</label>

        <div id="statusStudent">
            <input type="radio" name="statusGred" id="green" value="pass" checked="checked">Completed course with passed grade
            <br>
            <input type="radio" name="statusGred" id="yellow" value="on-going">On-going/currently enrolled course
            <br>
            <input type="radio" name="statusGred" id="blue" value="not-yet-enrolled">Not yet enrolled but already planned
            <br>
            <input type="radio" name="statusGred" id="red" value="already-enrolled">Already enrolled but failed grade
            <br>
            <input type="radio" name="statusGred" id="white" value="no-planning-yet">No planning yet (no semester set for the course)
            <br>
        </div>

    </div>

    <div>

        <input type="submit" value="Submit" name="submit"> 

        <?php include "insert.php"; ?>

    </div>

    

    <hr>


    <table border="1">

        <tr>

            <th>CODE</th>
            <th>COURSE</th>
            <th>SEMESTER</th>
            <th>CREDIT HOURS</th>
            <th>STATUS</th>
            <th>Action</th>

        </tr>
        
        <tr>
            
            <?php 
            
                include "view.php";

            ?>

        </tr>
    </table>

    </form>
    <b id="logout"><a href="logout.php">Log Out</a></b>
</body>
</html>