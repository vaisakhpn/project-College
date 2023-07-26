<?php
session_start();
include('authentication.php');
include('includes/topbar.php');
include('includes/sidebar.php');
include('includes/header.php');
include('config/dbcon.php')
?>
<div class="sb2-2">
                <!--== breadcrumbs ==-->
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> Edit Photos</a>
                        </li>
                        <li class="page-back"><a href="home.php"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
                        </li>
                    </ul>
                </div>

                <!--== User Details ==-->
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
						<div class="box-inn-sp admin-form">
                                <div class="inn-title">
                                    <h4>Edit Photos</h4>
                                    
                                </div>
                                <div class="tab-inn">
                                    <form action="code.php" method="POST" enctype="multipart/form-data" >
                                    <?php
                                         if(isset($_GET['photo_id']))
                                                {
                                                    $photo_id=$_GET['photo_id'];
                                                    $query= "SELECT * FROM photos WHERE id='$photo_id' LIMIT 1";
                                                    $query_run=mysqli_query($con,$query);

                                                    if(mysqli_num_rows($query_run)>0)
                                                    {
                                                        foreach($query_run as $row)
                                                        {
                                                        ?>
                                         <input type="hidden" name="photo_id" value="<?php echo $row['id']?>">
                                         
                                        
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input type="file" name="image" value="" class="validate">
                                                <label class="">image</label>
                                                <input type="hidden" name="old_image" value="<?php echo $row['image']?>" >
                                            </div>
                                            <img src="uploads/product/<?php echo $row['image']?>" width="50px" height="50px" alt="image">
                                        </div>
										<div class="row">
                                            <div class="input-field col s12">
                                                <i class="waves-effect waves-light btn-large waves-input-wrapper" style=""><input type="submit" value="update" name="photo-edit" class="waves-button-input"></i>
                                            </div>
                                        </div>
                                        <?php
                                                        }
                                                }
                                                else
                                                {
                                                    echo "<h4>No Record Found.!</h4>";
                                                }

                                            }
                                            ?>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
 </div>
</div>
<?php
include('includes/footer.php');
?>
