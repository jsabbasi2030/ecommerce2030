<?php  

include "config.php";

$id = $_GET['id'];


$query="DELETE from categories WHERE category_id='$id'";

$results = mysqli_query($conn,$query);


if ($results) {
	

   header("location: allCategories.php");

}else{

header("location: allCategories.php");

}


?>