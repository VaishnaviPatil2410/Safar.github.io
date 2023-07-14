<?php
if(isset($_POST['submit']))
{
    $email = $_POST['email'];
$password = $_POST['password'];
$address = $_POST['address'];
$mobile = $_POST['mobile'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];

if(!empty($email)|| !empty($password) || !empty($address) || !empty($mobile) || 
!empty($city) || !empty($state) || !empty($zip)){
    $host = '127.0.0.1';
    $dbUsername = 'root';
    $dbPassword = 'root';
    $dbname = 'safar';

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }
    else {
        $stmt = $conn->prepare("insert into login (email, password, address, mobile, city, state, zip)
        values(?, ?, ?, ?, ?, ?, ?)");

        $stmt->bind_param("sssisss", $email, $password, $address, $mobile, $city, $state, $zip);
        $stmt->execute();
        echo "Registration successfully";
       $stmt->close();
       $conn->close();

       
    }
} else {
    echo "All fields are required";
    die();
}
}
?>