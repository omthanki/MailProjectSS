<?php

session_start();

if (!isset($_SESSION['admin'])) {
    header('Location:../login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Recipients</title>
    <style>
        .delete {
            color: red;
        }
    </style>
</head>

<body>
    <div class="container mx-auto" style="margin-top: 10%;">
        <a class="btn btn-danger" href="logout.php" style="float: right; margin-bottom: 2%; margin-left:2%">Logout</a>
        <a type="submit" href="adduser.php" class="btn btn-success" style="float: right; margin-bottom: 2%;">Add New Recipients</a>
        <h2 style="margin-bottom: 2%;">Recipients Data</h2>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Sr.No.</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

                <?php

                $i = 1;
                include('../db/db.php');

                $qry = "SELECT * FROM user";
                $r = mysqli_query($con, $qry);
                

                if (mysqli_num_rows($r)) {

                    while ($row = mysqli_fetch_array($r)) {
                        $id = $row["id"];
                ?>

                        <tr>
                            <td><?=$i?></td>
                            <td><?=$row["mail"] ?></td>
                            <td><a href="deleteuser.php?id=<?php echo($row['id']);?>" class="text-danger text-decoration-none">Delete</a></td>
                        </tr>

                        


                <?php
                $i++;
                                }
                            }

                ?>
            </tbody>
        </table>
    </div>
</body>

</html>