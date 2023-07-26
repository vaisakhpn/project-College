<?php
include('includes/headerf.php');
include('includes/headf.php');
include('config/dbcon.php');
?>

<section>
<?php
                                $query  = "SELECT * FROM events ORDER BY id DESC LIMIT 4";
                                    $query_run = mysqli_query($con,$query);

                                                if(mysqli_num_rows($query_run)>0)
                                                {
                                                     foreach($query_run as $row) 
                                                     {
                                                
                                                        ?>
        
            <div class="head-2">
            
                <div class="head-2-inn">
                    <h1><?php echo $row['name']; ?></h1>
                    <p><?php echo $row['description']; ?></p>
                    <div class="event-head-sub">
                        <ul>
                            <li>Date: <?php echo $row['date']; ?></li>
                            <li>Time:<?php echo $row['time']; ?></li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        
    </section>
    <!--SECTION START-->
    <section>
        
            <div class="row">
                <div class="cor about-sp">
                    <div class="s18-age-event l-info-pack-days">
                    <div class="container com-sp pad-bot-70">
                        <ul>
                            <li>
                                     
            <div class="container com-sp pad-bot-70">
            <div class="row">   
                            <div class="con-title">
                                    <div style="height:800px;width:100%;overflow:hidden;" class="img-holder"><img src="uploads/product/<?php echo $row['img']?>" width="100%" height="auto"  alt="image"></div>
                                        
                                    
                                      
                                
                            </li>
                            <li>
                            
                                     
                                        <p><?php echo $row['longdesc']; ?></p>
                                        
                                        
                                        </div>	
                                        </div>
                                        </div>	
                                    
                               
                            </li>
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

                        </ul>
                    </div>
                    <div class="ed-about-sec1">
                        <div class="col-md-6"></div>
                        <div class="col-md-6"></div>
                    </div>
                </div>
            </div>
        
    </section>

<?php
include('includes/footerf.php')
?>