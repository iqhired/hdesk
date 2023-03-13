<?php
session_start();
$conn = mysqli_connect('localhost','root');

if($conn){
    echo "Connection successful";
}else{
    echo "No connection";
}
mysqli_select_db($conn, 'receptionalist');

$f_name = $_POST['f_name'];
$l_name = $_POST['l_name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$c_name = $_POST['c_name'];
$p_visit = $_POST['p_visit'];


    $query = "insert into check_in(f_name, l_name, email, mobile, c_name, p_visit)
                values('$f_name', '$l_name', '$email', '$mobile' , '$c_name','$p_visit')";

$result1 = mysqli_query($conn, $query);
if ($result1) {
    $_SESSION ['status'] = "Data Inserted Sucessfully";

    header('location:check_in.php');
}

?>


