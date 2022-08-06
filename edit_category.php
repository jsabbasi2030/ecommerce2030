<?php 

include("session.php");
include("admin_header.php");
include("config.php");

?>

<?php 

if (isset($_GET['id'])) {
 


$id = $_GET['id'];

$query_edit = "SELECT * FROM categories WHERE category_id='$id'";

$results1 = mysqli_query($conn,$query_edit);


foreach ($results1 as $value) {
  // code...

$name = $value['category_name'];
$status = $value['category_status'];
$category_id = $value['category_id'];


}

}


?>




<?php  



if (isset($_POST['btnsubmit'])) {
	
  $category_name = $_POST['category_name'];
  $category_status = $_POST['category_status'];
  $category_id = $_POST['category_id'];




$query = "UPDATE categories SET category_name='$category_name',category_status='$category_status' WHERE category_id='$category_id'";





 $result = mysqli_query($conn,$query);

 if ($result) {
 	
   $results = "Category Update Sucessfully";

   header("location: allCategories.php");

 }else{
    $results = "Category Update Not Sucessfully";
 }



}



?>











            <div class="content-body">
            <div class="container-fluid">
				<div class="row page-titles">
					<ol class="breadcrumb">
						
					</ol>
                </div>


                 <div class="row">
              <form action="" method="POST">
                    <div class="col-xl-12 col-lg-12">
                        <div class="card">
















                            <div class="card-header">
                                <h4 class="card-title">Edit Category</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                 <input type="hidden" name="category_id" value="<?php  echo $category_id;  ?>">
                                        <div class="mb-3">
                                <input type="text" name="category_name"  class="form-control input-default " placeholder="Enter Category Name" value="<?php  echo $name;  ?>">
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" name="category_status" class="form-control input-rounded" placeholder="Enter Category Status" value="<?php  echo $status;  ?>">
                                        </div>



                                        <button type="submit" name="btnsubmit" class="btn btn-primary">Edit Category</button>
                                  
                                </div>
                            </div>
                        </div>
					</div>



                </form>
</div>
</div>
</div>


<?php 


include("admin_footer.php");

?>