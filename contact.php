<?php 
ob_start()
if(isset($_POST['submit'])){
    $to = "ivelikic@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $number = $_POST['numb'];
    $subject = "Sajt/Forografije";
    $message = $_POST['message'];
    $message = ""
    $headers = "From:" . $from . "Phone:" . $number;
    
    mail($to,$subject,$message,$headers);
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    header('Location: index.php');
    
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>