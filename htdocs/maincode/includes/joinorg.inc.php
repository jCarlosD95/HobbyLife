<?php

//if(isset($_POST['submit'])) {
    include_once 'dbh.inc.php';
    session_start();
    
    //$org_name = mysqli_real_escape_string($conn, $_POST['org_name']);
    //$address  = mysqli_real_escape_string($conn, $_POST['address']);
    $usrid    = mysqli_real_escape_string($conn, $_SESSION['u_id']);
    $idget    = mysqli_real_escape_string($conn, $_GET['org_id']);
    
    //echo $org_name;
    //echo $address;
    //echo $idget;
        $sql = "INSERT INTO user_org (user_id, org_id) VALUES ('$usrid', '$idget');";
        //$sql = "UPDATE user_org
                //SET user_id = '$usrid', org_id = '$idget'
                //WHERE org_id = '$idget'";
        //echo $GET['org_id'];
        mysqli_query($conn, $sql);
        header("Location: ../orgpage2.php?signup=success&org_id=$idget");
        exit();
    
//}else{
    //header("Location: ../editorg.php");
    //exit();
//}