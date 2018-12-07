<?php

session_start();

if(isset($_POST['submit'])) {
    include_once 'dbh.inc.php';
    
    $name     = mysqli_real_escape_string($conn, $_POST['event_name']);
    $time  = mysqli_real_escape_string($conn, $_POST['event_time']);
    $desc    = mysqli_real_escape_string($conn, $_POST['event_desc']);
    $idget    = mysqli_real_escape_string($conn, $_GET['org_id']);
    
    
        $sql  = "INSERT INTO events (event_name, event_time, event_desc) VALUES ('$name', '$time', 'desc');";
        mysqli_query($conn, $sql);

        $sql3 = "SELECT * FROM events WHERE event_name = '$name';";
        $result3 = mysqli_query($conn, $sql3);
        $row3 = mysqli_fetch_assoc($result3);
        $eid = $row3['event_id'];

        $sql2 = "INSERT INTO org_event (org_id, event_id) VALUES ('$dget', eid);";
        mysqli_query($conn, $sql2);
        
        header("Location: ../home.php?eventcreate=success");
        exit();
    
}else{
    header("Location: ../home.php");
    exit();
}
