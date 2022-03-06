<?php

    include('../db/db.php');

    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename=data.csv');

    $output = fopen("php://output", "w");

    fputcsv($output, array('ID', 'Name', 'Mail', 'Department', 'State'));

    $query = "SELECT * from user ORDER BY mail";
    $result = mysqli_query($con, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        fputcsv($output, $row);
    }

    fclose($output);

?>