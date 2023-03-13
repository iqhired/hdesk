<?php
$conn = mysqli_connect('localhost','root');

if($conn){
    echo "Connection successful";
}else{
    echo "No connection";
}
mysqli_select_db($conn, 'receptionalist');

$f_name = $_POST['f_name'];
$c_name = $_POST['c_name'];


$query = "insert into check_out(f_name, c_name)
                values('$f_name','$c_name')";

mysqli_query($conn, $query);

header('location:index.php');

?>