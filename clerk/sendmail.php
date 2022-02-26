<?php
	
	include('../db/db.php');

    if (isset($_POST['submit'])){
        
        $qry = "SELECT * FROM user";
	    $r = mysqli_query($con, $qry);

        echo $_POST['message'];

        if(mysqli_num_rows($r)){

            while($row = mysqli_fetch_array($r)){

                //mail()
                echo "<br>".$row["mail"];

               mail($row["mail"], "Testing purpose", $_POST['message']);

            }

        }
        else{
            echo $r->mysql_error;
        }
    }

    

?>