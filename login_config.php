<?php
$conn = mysqli_connect('localhost','root');

if($conn){
    echo "Connection successful";
}else{
    echo "No connection";
}
mysqli_select_db($conn, 'receptionalist');

$u_name = $_POST['u_name'];
$pass = $_POST['pass'];


$query = "insert into login_info(u_name, pass)
                values('$u_name','$pass')";

$result1 = mysqli_query($conn, $query);
if ($result1) {
    $message_stauts_class = 'alert-success';
    $import_status_message = 'Login successfully.';
} else {
    $message_stauts_class = 'alert-danger';
    $import_status_message = 'Error: Please Insert valid data';
}

header('location:index.php');

?>