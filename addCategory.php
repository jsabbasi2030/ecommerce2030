


<?php 
include("session.php");

include("admin_header.php");
include("config.php");

?>



<?php 


 if (isset($_POST['btnsubmit'])) {
     

    $category_name = $_POST['category_name'];
    $category_status = $_POST['category_status'];

$query = "INSERT INTO categories(category_name,category_status) VALUES('$category_name','$category_status')";


 $result = mysqli_query($conn,$query);

 if ($result) {
    
   $results = "Category Add Sucessfully";

 }else{
    $results = "Category Add Not Sucessfully";
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





       
    <?php 

    if (isset($results)) {
        


    ?>


 <div class="alert alert-dismissible alert-success">
  
  <strong><?php echo $results; ?></strong> </a>.
</div>


<?php }  ?>












                            <div class="card-header">
                                <h4 class="card-title">Add Category</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                
                                        <div class="mb-3">
                                            <input type="text" name="category_name" class="form-control input-default " placeholder="Enter Category Name">
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" name="category_status" class="form-control input-rounded" placeholder="Enter Category Status">
                                        </div>



                                        <button type="submit" name="btnsubmit" class="btn btn-primary">Add Category</button>
                                  
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