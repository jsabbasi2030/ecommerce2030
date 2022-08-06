<?php 
include("session.php");

include("admin_header.php");
include("config.php");

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
                                <h4 class="card-title">Add Product</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                
                                        <div class="mb-3">
                                            <input type="text" name="product_name" class="form-control input-default " placeholder="Enter Product Name">
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" name="product_discription" class="form-control input-rounded" placeholder="Enter Product Discription">
                                        </div>


                                         <div class="mb-3">
                                            <input type="text" name="product_short_disc" class="form-control input-default " placeholder="Enter product Short Discription Name">
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" name="product_price" class="form-control input-rounded" placeholder="Enter product price ">
                                        </div>



                                         <div class="mb-3">
                                            <input type="text" name="product_sale_price" class="form-control input-default " placeholder="Enter product sale price">
                                        </div>





                                        <div class="mb-3">
                                            


                                        <select class="default-select form-control wide mb-3 text-dark">
											<option>Select Product Category</option>



											<?php 

$query = "SELECT * FROM categories";
$results = mysqli_query($conn,$query);

?>


                                              <?php  

                                       foreach($results as $result){
 

                                       ?>

											<option value="<?php echo $result['category_id']; ?>">
                                              <color="#000">

												<?php echo $result['category_name']; ?>
													

                                                 </font>

												</option>



										<?php  } ?>
											
										</select>



                                        </div>



                                         <div class="mb-3">
                                            <input type="file" name="product_image" class="form-control input-default " placeholder="Select Product Image">
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