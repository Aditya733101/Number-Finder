<?php
    require 'database.php';
    session_start();
    $search = $_POST['search'];

    function validate($data){

        $data = trim($data);

        $data = stripslashes($data);

        //$data = htmlspecialchars($data);

        return $data;

    }
    $search = validate($search);
    
    $keyword="%".$search."%";

    $sql = "SELECT * FROM `user` WHERE `phone` LIKE '$keyword'";

    $result = mysqli_query($conn, $sql);
            
    $row = mysqli_fetch_assoc($result);
            
    if(mysqli_num_rows($result)>0){
        $_SESSION['search'] = $search;
        $_SESSION['search_first_name'] = $row['first_name'];

        $_SESSION['search_last_name'] = $row['last_name'];

        $_SESSION['search_email'] = $row['email'];

        $_SESSION['search_phone'] = $row['phone'];

        $_SESSION['search_country'] = $row['country'];

        $_SESSION['search_state'] = $row['state'];

        header("Location:index.php");
        //echo "<script> location.href='home.php;</script>";
        exit();
    }
    else{
        $_SESSION['not_found'] = $search;
        header("Location:index.php");
        //echo "<script> location.href='home.php;</script>";
        exit();
    }
    mysqli_close($conn);

?>










$_SESSION['search']