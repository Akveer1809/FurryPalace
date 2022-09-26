<?php

include('config.php');

if (isset($_POST['Username'])) {

    $name = $_POST['Username'];
    // echo $fname;
    $email = $_POST['Useremail'];
    // echo $lname;
    $subject = $_POST['Usersubject'];
    // echo $subject;
    $message = $_POST['Usermessage'];
    // echo $email;

    

    $sql = "INSERT INTO `contact` (`Name`, `Email`, `Subject`, `Message`) VALUES ('$name', '$email', '$subject ', ' $message');";
    $result = mysqli_query($con, $sql);

    if ($result) {
        header('Location:index.php');
        // echo 'Data Inserted';
    } else {
        echo "field to connect " . $con->error;
    }
    mysqli_free_result($result);
    mysqli_close($con);
}

?>