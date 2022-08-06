
<?php 

include("session.php");
include("admin_header.php");
include("config.php");

?>




<?php 

$query = "SELECT * FROM categories WHERE category_status ='active'";
$results = mysqli_query($conn,$query);

?>



            <div class="content-body">
            <div class="container-fluid">
				<div class="row page-titles">
					<ol class="breadcrumb">
						
					</ol>
                </div>


                 <div class="row">





<div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">All Categories</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-responsive-md">
                                        <thead>
                                            <tr>
                                                <th style="width:50px;">
													<div class="form-check custom-checkbox checkbox-success check-lg me-3">
														<input type="checkbox" class="form-check-input" id="checkAll" required="">
														<label class="form-check-label" for="checkAll"></label>
													</div>
												</th>
                                                <th><strong>Id</strong></th>
                                                <th><strong>NAME</strong></th>
                                                <th><strong>Status</strong></th>
                                                <th><strong>Action</strong></th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>



                                      <?php  

                                       foreach($results as $result){
 

                                       ?>


                                            <tr>
                                                <td>
													<div class="form-check custom-checkbox checkbox-success check-lg me-3">
														<input type="checkbox" class="form-check-input" id="customCheckBox2" required="">
														<label class="form-check-label" for="customCheckBox2"></label>
													</div>
												</td>
                                                <td><strong>
                                                    


                                                    <?php echo $result['category_id'] ;?>
                                                </strong></td>
                                                <td><div class="d-flex align-items-center"><img src="images/avatar/1.jpg" class="rounded-lg me-2" width="24" alt=""> <span class="w-space-no"> 
                                                    <?php echo $result['category_name'] ;?></span></div></td>
                                               
                                                <td><div class="d-flex align-items-center"><i class="fa fa-circle text-success me-1"></i> <?php echo $result['category_status'] ;?></div></td>
                                                <td>
													<div class="d-flex">



														<a href="edit_category.php?id=<?php echo $result['category_id'] ;?>" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>



                                                        

														<a href="del_cat.php?id=<?php echo $result['category_id'] ;?>" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>





													</div>
												</td>
                                            </tr>
											
                                        <?php 
                                        }

                                        ?>




                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>














</div>
</div>
</div>









<?php 


include("admin_footer.php");

?>