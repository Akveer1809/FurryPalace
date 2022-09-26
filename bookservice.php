<?php
session_start();
include('config.php');

if (isset($_POST['Username'])) {

    $name = $_POST['Username'];
    // echo $fname;
    $email = $_POST['Useremail'];
    // echo $lname;
    $servicetype = $_POST['Userservicetype'];
    // echo $subject;
    $message = $_POST['Usermessage'];
    // echo $email;

    if(isset($_SESSION['name']))
    {
        $sql = "INSERT INTO `ServiceBooking` (`Name`, `Email`, `ServiceType`, `Message`) VALUES ('$name', '$gmail', '$servicetype', '$message');";
        $result = mysqli_query($con, $sql);
    
        if ($result) {
            header('Location:index.php');
            // echo 'Data Inserted';
        } else {
            echo "field to connect " . $con->error;
        }
    }
    else{
        header('Location:login.php');
    }
 
    mysqli_free_result($result);
    mysqli_close($con);
}

?>