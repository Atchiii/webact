<?php
    
    $query = "SELECT * from tbls LEFT JOIN tblsyllabus ON tblsyllabus.subject_id = tbls.Subject_id";
    $result = mysqli_query($dbc, $query);

?>