<?php
// connect to db
$con = mysqli_connect("localhost","root", "", "techsolv");

// insert into db
$created_date= date("Y-m-d");

// need prevent if already register with same email
$sql = mysqli_query($con, "SELECT email FROM `contact_form` WHERE email='".$_POST['email']."' ");
$count = mysqli_num_rows($sql);
if($count >= 1){
    echo "User already Register";
    //header("location: index.php");
}else{
    $query = mysqli_query($con, "INSERT INTO `contact_form` (`full_name`, `phone_no`, `email`, `subject`, `message`, `created_date`) values('".$_POST['fname']."', '".$_POST['phone']."','".$_POST['email']."','".$_POST['subject']."','".$_POST['message']."','".$created_date."')");

    if($query){
        echo "Data Inserted ";
        // $to      = $_POST['email'];
        // $subject = $_POST['subject'];
        // $message = $_POST['message'];
        // $headers = 'From: shivagirgal@gmail.com'       . "\r\n" .
        //             'Reply-To: shivagirgal@gmail.com' . "\r\n" .
        //             'X-Mailer: PHP/' . phpversion();

        // $send = mail($to, $subject, $message, $headers);
        // if($send){
        //     echo "<br>Email Sent successfully";
        // }
        // Need to install smtp server so mail not working here
        
    }else{
        echo "Failed to Insered data";
    }
    //header("location: index.php");
}

?>