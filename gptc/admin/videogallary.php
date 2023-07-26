<?php
session_start();
include('authentication.php');
include('includes/topbar.php');
include('includes/sidebar.php');
include('includes/header.php');
include('config/dbcon.php');
?>
<div class="col-md-12">
    <?php
    include('message.php');
    ?>
</div>
 <div class="sb2-2">
                <!--== breadcrumbs ==-->
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> Videos</a>
                        </li>
                        <li class="page-back"><a href="home.php"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
                        </li>
                    </ul>
                </div>

                <!--== User Details ==-->
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                        <?php
                            if(isset($_SESSION['status']))
                            {
                                echo "<h4>".$_SESSION['status']."</h4>";
                                unset($_SESSION['status']);
                            }
                            ?>
                     
                            <div class="box-inn-sp">
                                <div class="inn-title">
									<h4>All videos</h4>
                                    
                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                    
                                                    <th>videos</th>
													
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                                $query  = "SELECT * FROM videos";
                                                $query_run = mysqli_query($con,$query);

                                                if(mysqli_num_rows($query_run)>0)
                                                {
                                                     foreach($query_run as $row) 
                                                     {
                                                
                                                        ?>
                                                        <tr>
                                                           
                                                            <td><video src="uploads/product/<?php echo $row['video']?>" width="150px" height="150px" controls></td>
                                                        
                                                             <td>
                                                                   <form action="code.php" method="POST">
                                                               
                                                                
                                                                <button type="submit" name= "video_delete" value="<?php echo $row['id']; ?>" class="btn btn-danger btn-sm deletebtn">Delete</a>
                                                     </form>
                                                     </td>                                                       										
                                                </tr>
                                                        <?php
                                                     }  
                                                }
                                                else
                                                {
                                                    ?>
                                                    <tr>
                                                        <td>No Record Found</td>
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

        </div>
    </div>

<?php
include('includes/footer.php')
?>