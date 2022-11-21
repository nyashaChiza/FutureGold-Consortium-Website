<?php
$conn = mysqli_connect('localhost:3306', 'iom_user', '1234', 'crypto_db') ;

if (!$conn)
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>