
<?php
include('includes/headf.php');
include('includes/headerf.php');
include('config/dbcon.php');
?>
  
   <body>
    <!-- SLIDER -->
    <section>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
           
            <div class="carousel-inner">
                <div class="item slider1 active">
                    <img src="images/slider/1.png" alt="image">
                    <div class="carousel-caption slider-con">
                        <h2><span>Welcome to Gptc Muttom</span></h2>
                        <p>To impart state-of-the-art facilities to achieve excellence in academic and engineering skills</p>
                                            </div>
                </div>
                <div class="item">
                    <img src="images/slider/2.jpg" alt="image">
                    <div class="carousel-caption slider-con">
                        
                    </div>
                </div>
                <div class="item">
                    <img src="images/slider/3.jpg" alt="image">
                    <div class="carousel-caption slider-con">
                        
                    </div>
                </div>
            </div>

            <a class="left carousel-control" href="#myCarousel"  data-slide="prev">
                <i class="fa fa-chevron-left slider-arr"></i>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <i class="fa fa-chevron-right slider-arr"></i>
            </a>
        </div>
        
        <div class="news-container">
      <div class="news-heading">NEWS</div>
      <?php
                                $query  = "SELECT * FROM live ORDER BY id DESC LIMIT 3";
                                    $query_run = mysqli_query($con,$query);

                                                if(mysqli_num_rows($query_run)>0)
                                                {
                                                     foreach($query_run as $row) 
                                                     {
                                                
                                                        ?>
      <div class="news">
        <a href="#" class="news-single active">
        <?php echo $row['title']; ?> : <?php echo $row['content']; ?>
        </a>
       
       
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


    <script src="https://cdn.jsdelivr.net/gh/livebloggerofficial/News-Ticker@main/main.js"></script>
        
    </section>
 

    <script>
      
  const version = new Date().getTime(); // Generate a new version number based on the current timestamp
  const images = document.getElementsByTagName('img');
  for (let i = 0; i < images.length; i++) {
    const parsedSrc = new URL(images[i].src);
    parsedSrc.searchParams.set('v', version);
    images[i].src = parsedSrc.toString();
  }
</script>



    <!-- DISCOVER MORE -->
    <section>
        <div class="container com-sp pad-bot-70">
            <div class="row">
                <div class="con-title">
                    <h2>Discover <span>More</span></h2>
                    
                </div>
            </div>
            <div class="row">
                <div class="ed-course">
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="aboutus.php">
                                <img src="images/h-about.jpg" alt="">
                                <span>Academics</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="photogallarydetails.php">
                                <img src="images/h-ad.jpg" alt="">
                                <span>Photo Gallery</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="videogallarydetails.php">
                                <img src="images/vdo.jpg" alt="">
                                <span>Video Gallery</span>
                            </a>
                        </div>
                    </div>
                   
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="eventf.php">
                                <img src="images/eve.jpg" alt="">
                                <span>Events</span>
                            </a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    <!-- POPULAR COURSES -->
    <section class="pop-cour">
        <div class="container com-sp pad-bot-70">
            <div class="row" >
                <div class="con-title">
                    <h2>Courses <span></span></h2>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div>
                        <!--POPULAR COURSES-->
                        <a href="cmpterdetails.php">
                        <div class="home-top-cour">
                        
                            <!--POPULAR COURSES IMAGE-->
                            <div class="col-md-3"> <img src="images/course/sm-1.jpg" alt=""> </div>
                            <!--POPULAR COURSES: CONTENT-->
                            <div class="col-md-9 home-top-cour-desc">
                                
                                    <h3>Computer Engineering</h3>
                                </a>
                                <h4>Technology / Engineering</h4>
                                <p>Total seats 70 </p> 
                            </div>
                        </div>
                    </div>
                    <div>
                        <!--POPULAR COURSES-->
                        <a href="civildetails.php">
                        <div class="home-top-cour">
                            <!--POPULAR COURSES IMAGE-->
                            <div class="col-md-3"> <img src="images/course/sm-2.jpg" alt=""> </div>
                            <!--POPULAR COURSES: CONTENT-->
                            <div class="col-md-9 home-top-cour-desc">
                               
                                    <h3>Civil Engineering</h3>
                                </a>
                                <h4>Technology /Engineering</h4>
                                <p>Total seats 70 </p> 
                            </div>
                        </div>
                    </div>
                    <div>
                        <!--POPULAR COURSES-->
                        <a href="mechdetails.php">
                        <div class="home-top-cour">
                            <!--POPULAR COURSES IMAGE-->
                            <div class="col-md-3"> <img src="images/course/sm-3.jpg" alt=""> </div>
                            <!--POPULAR COURSES: CONTENT-->
                            <div class="col-md-9 home-top-cour-desc">
                               
                                    <h3>Mechanical Engineering</h3>
                                </a>
                                <h4>Technology /Engineering</h4>
                                <p>Total seats 70 </p> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div>
                        <!--POPULAR COURSES-->
                        <a href="electronicdetails.php">
                        <div class="home-top-cour">
                            <!--POPULAR COURSES IMAGE-->
                            <div class="col-md-3"> <img src="images/course/sm-5.jpg" alt=""> </div>
                            <!--POPULAR COURSES: CONTENT-->
                            <div class="col-md-9 home-top-cour-desc">
                               
                                    <h3>Electronics Engineering</h3>
                                </a>
                                <h4>Technology / Engineering</h4>
                                <p>Total seats 70 </p> 
                               
                            </div>
                        </div>
                        <!--POPULAR COURSES-->
                        <div>
                            <!--POPULAR COURSES-->
                            <a href="electricaldetails.php">
                            <div class="home-top-cour">
                                <!--POPULAR COURSES IMAGE-->
                                <div class="col-md-3"> <img src="images/course/sm-4.jpg" alt=""> </div>
                                <!--POPULAR COURSES: CONTENT-->
                                <div class="col-md-9 home-top-cour-desc">
                                    
                                        <h3>Electical & Electronics Engineering</h3>
                                    </a>
                                    <h4>Technology / Engineering</h4>
                                    <p>Total seats 70</p> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

    <!-- NEWS AND EVENTS -->
    <section>
        <div class="container com-sp">
            <div class="row">
                <div class="con-title">
                    <h2>News and <span>Events</span></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="bot-gal h-gal ho-event-mob-bot-sp">
                    
                        <h4>Photo Gallery</h4>
                        <?php
                                $query  = "SELECT * FROM photos ORDER BY id DESC LIMIT 9 ";
                                    $query_run = mysqli_query($con,$query);

                                                if(mysqli_num_rows($query_run)>0)
                                                {
                                                     foreach($query_run as $row) 
                                                     {
                                                
                                                        ?>
                        <ul>
                            <li><div style="height:90px;width:100%;overflow:hidden;" class="img-holder"><img src="uploads/product/<?php echo $row['image']?>" width="100%" height="auto" class="materialboxed" alt="image"></div>
                            </li>
                           
                        </ul>
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
                
                <div class="col-md-4">
                    <div class="bot-gal h-vid ho-event-mob-bot-sp">
                       
                    <h4>video Gallery</h4>
                        <?php
                                $query  = "SELECT * FROM videos ORDER BY id DESC LIMIT 3 ";
                                    $query_run = mysqli_query($con,$query);

                                                if(mysqli_num_rows($query_run)>0)
                                                {
                                                     foreach($query_run as $row) 
                                                     {
                                                
                                                        ?>
                        <ul>
                            <li><video class="materialboxed"  src="uploads/product/<?php echo $row['video']?>" width="200px" height="120px" alt="" controls>
                            </li>
                           
                        </ul>
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
                <div class="col-md-4">
                    <div class="bot-gal h-blog ho-event">
                        <h4>News & Event</h4>
                        <div class="ho-event">
                        <?php
                                $query  = "SELECT * FROM events ORDER BY id DESC LIMIT 4";
                                    $query_run = mysqli_query($con,$query);

                                                if(mysqli_num_rows($query_run)>0)
                                                {
                                                     foreach($query_run as $row) 
                                                     {
                                                
                                                        ?>
                            <ul>
                            
                     
                                <li>
                                    <div class="ho-ev-date"><span><?php echo $row['date']; ?></span>
                                    </div>
                                    <div class="ho-ev-link">
                                        <a href="eventdetails.php">
                                            <h4><?php echo $row['name']; ?></h4>
                                        </a>
                                        <p><?php echo $row['description']; ?></p>
                                        <span><?php echo $row['time']; ?></span>
                                    </div>
                                </li>
                               
                            </ul>
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
    </section>
    

  
   
  </body>

   

 <?php
include('includes/footerf.php')
?>