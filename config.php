<?php 

define('DB_SERVER', 'localhost');
define('DB_USER', 'root');

define('DB_PASS', '');

define('DB_NAME', 'ecom2030');



$conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);


if ($conn == false) {

die("Database not connected" . mysqli_connect_error());


}else{


	//echo "Database connected";
}







?>