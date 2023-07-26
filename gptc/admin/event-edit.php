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
                        <li class="active-bre"><a href="#"> Add New Event</a>
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
                                    <h4>Edit Event</h4>
                                    
                                </div>
                                <div class="tab-inn">
                                    <form action="code.php" method="POST" enctype="multipart/form-data" >
                                    <?php
                                         if(isset($_GET['category_id']))
                                                {
                                                    $category_id=$_GET['category_id'];
                                                    $query= "SELECT * FROM events WHERE id='$category_id' LIMIT 1";
                                                    $query_run=mysqli_query($con,$query);

                                                    if(mysqli_num_rows($query_run)>0)
                                                    {
                                                        foreach($query_run as $row)
                                                        {
                                                        ?>
                                         <input type="hidden" name="category_id" value="<?php echo $row['id']?>">
                                         
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input type="text" name="name" value="<?php echo $row['name']?>" class="validate" required>
                                                <label class="">Event name</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <textarea name="ldesc" value="<?php echo $row['longdesc']?>"></textarea>
                                                <label class="">Long Descriptions</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <textarea name="desc" value="<?php echo $row['description']?>"></textarea>
                                                <label class="">Short Descriptions</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input type="text" value="<?php echo $row['date']?>" name="date" class="validate" required>
                                                <label class="">Date</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input type="text" name="time" class="validate" value="<?php echo $row['time']?>" required>
                                                <label class="">Time</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input type="file" name="image" value="" class="validate">
                                                <label class="">image</label>
                                                <input type="hidden" name="old_image" value="<?php echo $row['img']?>" >
                                            </div>
                                            <img src="uploads/product/<?php echo $row['img']?>" width="50px" height="50px" alt="image">
                                        </div>
										<div class="row">
                                            <div class="input-field col s12">
                                                <i class="waves-effect waves-light btn-large waves-input-wrapper" style=""><input type="submit" value="update" name="Update-event" class="waves-button-input"></i>
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
