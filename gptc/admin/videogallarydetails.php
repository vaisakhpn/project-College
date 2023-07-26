<?php
include('includes/headerf.php');
include('includes/headf.php');
include('config/dbcon.php');
?>
<section>
        <div class="head-2">
            <div class="container">
                <div class="head-2-inn head-2-inn-padd-top">
                    <h1>Video Gallery</h1>
                   
                </div>
            </div>
        </div>
    </section>	
	
    <!--SECTION START-->
    <section>
   
    <div class="container py-5">
                <div class="row mt-4">
                <?php
                                $query  = "SELECT * FROM videos ORDER BY id DESC  ";
                                    $query_run = mysqli_query($con,$query);

                                                if(mysqli_num_rows($query_run)>0)
                                                {
                                                     foreach($query_run as $row) 
                                                     {
                                                
                                                        ?>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                            <li><video class="materialboxed"  src="uploads/product/<?php echo $row['video']?>" width="350px" height="200px" alt="" controls>
                            </li>
                              
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
        </div>
		</div>
    </section>

<?php
include('includes/footerf.php')
?>