<?php 

                
                
                $sql = "SELECT id, code, course, semester, credithour, statusgred from student";

                $result = $conn-> query($sql);

                if($result-> num_rows > 0){

                    while($row = $result->fetch_assoc()){

                        
                        echo "<tr id='".$row["id"]. "'><td>" .  $row["code"] . "</td><td>" . $row["course"] . "</td><td>" . $row["semester"] . "</td><td>" . $row["credithour"] . "</td><td>" . $row["statusgred"] . "</td><td><a href=delete.php?id=" .$row["id"].">Delete</a></td><td><a href=update.php?id=" .$row["id"].">Update</a></td></tr>";

                        echo '<script type="text/JavaScript"> pass("' . $row["statusgred"] . '", "' . $row["id"] . '") </script>'; 

                        $total = 0;

                        $total += $row["credithour"];
                    }
                    echo "total credit hour:" . $total;
                    echo "</table>";

                }else{

                    echo "No Result Found!!!";
                }

?>