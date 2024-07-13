<?php
        require 'database.php';
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $tel = $_POST['tel'];
            $country = $_POST['country'];
            $state = $_POST['state'];
            $uname = $_POST['username'];
            $psw = $_POST['password'];
            $psw2 = $_POST['password_confirm'];
             
            function validate($data){

                $data = trim($data);

                $data = stripslashes($data);

                //$data = htmlspecialchars($data);

                return $data;

            }
            
            $uname = validate($uname);
            $psw = validate($psw);
            $psw2 = validate($psw2);
            $check_user = "SELECT * FROM user WHERE username='$uname'";
            $obj = mysqli_query($conn, $check_user);
            $row = mysqli_fetch_assoc($obj);
            if(mysqli_num_rows($obj)>0){
                echo "<script>
                alert('Username not Available');
                window.location.href='register.php';
            </script>";
            exit(); 
            //$psw = md5($psw);
            }
            if(true){
                $sql = "INSERT INTO `user` (`id`, `first_name`, `last_name`, `email`, `phone`, `country`, `state`, `username`, `password`) VALUES (NULL, '$fname', '$lname', '$email', '$tel', '$country', '$state', '$uname', '$psw')";
                if(!mysqli_query($conn, $sql)){
                        echo "<script>
                        alert('Server Error');
                        window.location.href='register.php';
                        </script>";
                        //header("Location:register.php");
                    exit();
                }
                else {
                    echo "<script>
                        alert('Account Created');
                        window.location.href='signin.php';
                        </script>";
                       // header("Location:register.php");
                    //header("Location:signin.php?error=Account Created");
                    //header("Location:signin.php");
                    exit();
                }
            }
            else{
                echo "<script>
                        alert('Password Not Matches');
                        window.location.href='register.php';
                        </script>";
                 //header("Location:register.php?error=Password Not Matches");
                 exit();
            }
        mysqli_close($conn);   
        
?>