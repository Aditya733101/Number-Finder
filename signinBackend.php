<?php
session_start();
        require 'database.php';
            $uname = $_POST['uname'];
            $psw = $_POST['password'];

            function validate($data){

                $data = trim($data);

                $data = stripslashes($data);

                //$data = htmlspecialchars($data);

                return $data;

            }
            
            $uname = validate($_POST['uname']);
            $psw = validate($_POST['password']);
           // $psw = md5($psw);
            $sql = "SELECT * FROM user WHERE username='$uname' AND password='$psw'";

            $result = mysqli_query($conn, $sql);
            
            $row = mysqli_fetch_assoc($result);
            
            if(mysqli_num_rows($result)>0){
                
                $_SESSION['first_name'] = $row['first_name'];

                $_SESSION['last_name'] = $row['last_name'];

                $_SESSION['email'] = $row['email'];

                $_SESSION['phone'] = $row['phone'];

                $_SESSION['country'] = $row['country'];

                $_SESSION['state'] = $row['state'];

                header("Location:home.php");
                //echo "<script> location.href='home.php;</script>";
                exit();
            }

            
            else{
                echo "<script>
                alert('Invalid Username or Password');
                window.location.href='signin.php';
                </script>";
            //     $_SESSION['log_in'] = 1;
            //    echo "<script>alert('Invalid Username/Email or password');</script>";
            //     header("Location:signin.php");
                
                exit();
            }
        
            mysqli_close($conn);

?>