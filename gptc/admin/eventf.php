<?php
include('includes/headerf.php');
include('includes/headf.php');
include('config/dbcon.php');
?>

<section>
        <div class="container com-sp">
            <div class="row">
                <div class="cor about-sp">
                    <div class="ed-about-tit">
                        <div class="con-title">
                            <h2>College <span> Events</span></h2>
                            
                        </div>
                        <div>
                            <div class="ho-event pg-eve-main">
                                <ul>
                                <?php
                                $query  = "SELECT * FROM events ORDER BY id DESC LIMIT 4";
                                    $query_run = mysqli_query($con,$query);

                                                if(mysqli_num_rows($query_run)>0)
                                                {
                                                     foreach($query_run as $row) 
                                                     {
                                                
                                                        ?>
                            <li>
                                 
                                    <li>
                                        <div class="ho-ev-date pg-eve-date"><span><?php echo $row['date']; ?></span>
                                        </div>
                                        <div class="ho-ev-link pg-eve-desc">
                                            <a href="event-register.html">
                                                <h4><?php echo $row['name']; ?></h4>
                                            </a>
                                            <p><?php echo $row['description']; ?></p>
                                            <span><?php echo $row['time']; ?></span>
                                        </div>
                                        <div class="pg-eve-reg">
                                         <a href="eventdetails.php">Read more</a>
                                        </div>
                                    </li>
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
                    </div>
                </div>
            </div>
        </div>
    </section>
                        

<?php
include('includes/footerf.php')
?>