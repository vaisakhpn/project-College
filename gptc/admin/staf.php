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
                        <li class="active-bre"><a href="#">Staffs</a>
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
									<h4>All Staff</h4>
                                    
                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                    
                                                    <th>Image</th>
													<th>Name</th>
                                                    <th>Department</th>
                                                    <th>Position</th>
                                                    <th>Email</th>
													
                                                </tr>
                                            </thead>
                                            <tbody>
                                               
                                            <?php
                                                $query  ="(SELECT * FROM staf) UNION (SELECT * FROM stafcmp) UNION (SELECT * FROM stafeee) UNION (SELECT * FROM stafel) UNION (SELECT * FROM stafmec) UNION (SELECT * FROM stafcv)";
                                
                                            
                                                $query_run = mysqli_query($con,$query);

                                                if(mysqli_num_rows($query_run)>0)
                                                {
                                                     foreach($query_run as $row) 
                                                     {
                                                
                                                        ?>
                                                        <tr>
                                                           
                                                            <td><img src="uploads/product/<?php echo $row['image']?>" width="50px" height="50px" alt="image"></td>
                                                            <td><a href="#"><span class="list-enq-name"><?php echo $row['name']; ?></span></a>
                                                                </td>
                                                                <td><a href="#"><span class="list-enq-name"><?php echo $row['department']; ?></span></a>
                                                                </td>
                                                                <td><a href="#"><span class="list-enq-name"><?php echo $row['positon']; ?></span></a>
                                                                </td>
                                                                <td><a href="#"><span class="list-enq-name"><?php echo $row['email']; ?></span></a>
                                                                </td>
                                                                
                                                                <td>
                                                                <form action="code.php" method="POST">
                                                                
                                                                <input type="hidden" name="staf_delete" value="<?php echo $row['id']; ?>">

                                                                <input type="hidden" name="department" value="<?php echo $row['department']; ?>">
                                                               
                                                                <button type="submit" class="btn btn-danger btn-sm deletebtn">Delete</button>
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