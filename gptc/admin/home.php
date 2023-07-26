<?php
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
                        <li class="active-bre"><a href="#"> Dashboard</a>
                        </li>
                        <li class="page-back"><a href="home.php"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
                        </li>
                    </ul>
                </div>
                <!--== DASHBOARD INFO ==-->
                <div class="sb2-2-1">
                    <h2>Admin Dashboard</h2>
                    <div class="db-2">
                        <ul>
                            <li>
                                <div class="dash-book dash-b-1">
                                    <h5>All</h5>
                                    <h4> Events</h4>
                                    <a href="event.php">View more</a>
                                </div>
                            </li>
                            <li>
                                <div class="dash-book dash-b-2">
                                    <h5>All</h5>
                                    <h4> Staf</h4>
                                    <a href="staf.php">View more</a>
                                </div>
                            </li>
                            <li>
                                <div class="dash-book dash-b-3">
                                    <h5>All</h5>
                                    <h4> Photos</h4>
                                    <a href="gallary.php">View more</a>
                                </div>
                            </li>
                            <li>
                                <div class="dash-book dash-b-4">
                                    <h5>All</h5>
                                    <h4> Videos</h4>
                                    <a href="videogallary.php">View more</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!--== User Details ==-->
                				
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
									<h4>All Events</h4>
                                    
                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>image</th>
													<th>Name</th>
                                                    <th>Long Description</th>
                                                    <th>Description</th>
                                                    <th>Date</th>
													<th>Time</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                                $query  = "SELECT * FROM events";
                                                $query_run = mysqli_query($con,$query);

                                                if(mysqli_num_rows($query_run)>0)
                                                {
                                                     foreach($query_run as $row) 
                                                     {
                                                
                                                        ?>
                                                        <tr>
                                                        <td><img src="uploads/product/<?php echo $row['img']?>" width="50px" height="50px" alt="image"></td>
                                                            <td><a href="#"><span class="list-enq-name"><?php echo $row['name']; ?></span></a>
                                                                </td>
                                                                <td><a href="#"><span class="list-enq-name"><?php echo $row['longdesc']; ?></span></a>
                                                                </td>
                                                                <td><a href="#"><span class="list-enq-name"><?php echo $row['description']; ?></span></a>
                                                                </td>
                                                                <td><a href="#"><span class="list-enq-name"><?php echo $row['date']; ?></span></a>
                                                                </td>
                                                                <td><a href="#"><span class="list-enq-name"><?php echo $row['time']; ?></span></a>
                                                                </td>
                                                                <td>
                                                                <form action="code.php" method="POST">
                                                                
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
                    <div class="box-inn-sp">
                                <div class="inn-title">
									<h4>All Staf</h4>
                                    
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
                                                $query  = "SELECT * FROM staf";
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
				
               

                <!--== Latest Activity ==-->
                
                <!--== User Details ==-->
                </div>
<?php
include('includes/footer.php')
?>