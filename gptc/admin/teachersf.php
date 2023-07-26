
<head>
<link href="includes/stylee.css" rel="stylesheet" />  
</head>
<?php
include('includes/headerf.php');
include('config/dbcon.php');
?>



    <!-- Team Start -->
   
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Teachers</h5>
                <h1>Computer</h1>
            </div>
           <div class="container py-5">
                <div class="row mt-4">
                <?php
                                $query  = "SELECT * FROM stafcmp ";
                                    $query_run = mysqli_query($con,$query);

                                                if(mysqli_num_rows($query_run)>0)
                                                {
                                                     foreach($query_run as $row) 
                                                     {
                                                
                                                        ?>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div style="height:250px;width:100%;overflow:hidden;" class="img-holder"><img src="uploads/product/<?php echo $row['image']?>" width="100%" height="auto" class="card-img-top" alt="image"></div>
                                
                                <h3 class="card-title"><?php echo $row['name']; ?></h3>
                                <p class="card-text"><?php echo $row['department']; ?></p>
                                <p class="card-text"><?php echo $row['positon']; ?></p>
                                <p class="card-text"><?php echo $row['email']; ?></p>
                            </div>    
                        </div>
                    </div>
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
                </div>
               
            </div> 
            <div class="text-center mb-5">
              
                <h1>Electical Engineering</h1>
            </div>
           <div class="container py-5">
                <div class="row mt-4">
                <?php
                                $query  = "SELECT * FROM stafeee ";
                                    $query_run = mysqli_query($con,$query);

                                                if(mysqli_num_rows($query_run)>0)
                                                {
                                                     foreach($query_run as $row) 
                                                     {
                                                
                                                        ?>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div style="height:250px;width:100%;overflow:hidden;" class="img-holder"><img src="uploads/product/<?php echo $row['image']?>" width="100%" height="auto" class="card-img-top" alt="image"></div>
                                
                                <h3 class="card-title"><?php echo $row['name']; ?></h3>
                                <p class="card-text"><?php echo $row['department']; ?></p>
                                <p class="card-text"><?php echo $row['positon']; ?></p>
                                <p class="card-text"><?php echo $row['email']; ?></p>
                            </div>    
                        </div>
                    </div>
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
                </div>
               
            </div> 
            <div class="text-center mb-5">
              
                <h1>Electronic</h1>
            </div>
           <div class="container py-5">
                <div class="row mt-4">
                <?php
                                $query  = "SELECT * FROM stafel ";
                                    $query_run = mysqli_query($con,$query);

                                                if(mysqli_num_rows($query_run)>0)
                                                {
                                                     foreach($query_run as $row) 
                                                     {
                                                
                                                        ?>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div style="height:250px;width:100%;overflow:hidden;" class="img-holder"><img src="uploads/product/<?php echo $row['image']?>" width="100%" height="auto" class="card-img-top" alt="image"></div>
                                
                                <h3 class="card-title"><?php echo $row['name']; ?></h3>
                                <p class="card-text"><?php echo $row['department']; ?></p>
                                <p class="card-text"><?php echo $row['positon']; ?></p>
                                <p class="card-text"><?php echo $row['email']; ?></p>
                            </div>    
                        </div>
                    </div>
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
                </div>
               
            </div> 
            <div class="text-center mb-5">
              
                <h1>Mechanical</h1>
            </div>
           <div class="container py-5">
                <div class="row mt-4">
                <?php
                                $query  = "SELECT * FROM stafmec ";
                                    $query_run = mysqli_query($con,$query);

                                                if(mysqli_num_rows($query_run)>0)
                                                {
                                                     foreach($query_run as $row) 
                                                     {
                                                
                                                        ?>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div style="height:250px;width:100%;overflow:hidden;" class="img-holder"><img src="uploads/product/<?php echo $row['image']?>" width="100%" height="auto" class="card-img-top" alt="image"></div>
                                
                                <h3 class="card-title"><?php echo $row['name']; ?></h3>
                                <p class="card-text"><?php echo $row['department']; ?></p>
                                <p class="card-text"><?php echo $row['positon']; ?></p>
                                <p class="card-text"><?php echo $row['email']; ?></p>
                            </div>    
                        </div>
                    </div>
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
                </div>
               
            </div> 
            <div class="text-center mb-5">
              
                <h1>Civil</h1>
            </div>
           <div class="container py-5">
                <div class="row mt-4">
                <?php
                                $query  = "SELECT * FROM stafcv ";
                                    $query_run = mysqli_query($con,$query);

                                                if(mysqli_num_rows($query_run)>0)
                                                {
                                                     foreach($query_run as $row) 
                                                     {
                                                
                                                        ?>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div style="height:250px;width:100%;overflow:hidden;" class="img-holder"><img src="uploads/product/<?php echo $row['image']?>" width="100%" height="auto" class="card-img-top" alt="image"></div>
                                
                                <h3 class="card-title"><?php echo $row['name']; ?></h3>
                                <p class="card-text"><?php echo $row['department']; ?></p>
                                <p class="card-text"><?php echo $row['positon']; ?></p>
                                <p class="card-text"><?php echo $row['email']; ?></p>
                            </div>    
                        </div>
                    </div>
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
                </div>
               
            </div>  
            <div class="text-center mb-5">
              
                <h1>General</h1>
            </div>
           <div class="container py-5">
                <div class="row mt-4">
                <?php
                                $query  = "SELECT * FROM staf ";
                                    $query_run = mysqli_query($con,$query);

                                                if(mysqli_num_rows($query_run)>0)
                                                {
                                                     foreach($query_run as $row) 
                                                     {
                                                
                                                        ?>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div style="height:250px;width:100%;overflow:hidden;" class="img-holder"><img src="uploads/product/<?php echo $row['image']?>" width="100%" height="auto" class="card-img-top" alt="image"></div>
                                
                                <h3 class="card-title"><?php echo $row['name']; ?></h3>
                                <p class="card-text"><?php echo $row['department']; ?></p>
                                <p class="card-text"><?php echo $row['positon']; ?></p>
                                <p class="card-text"><?php echo $row['email']; ?></p>
                            </div>    
                        </div>
                    </div>
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
                </div>
               
            </div>         
        </div>
    </div>
    
    
<?php
include('includes/footerf.php')
?>