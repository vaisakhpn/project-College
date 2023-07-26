<?php
include('includes/headerf.php');
include('includes/headf.php');
include('config/dbcon.php');
?>
<section>
        <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                    <div class="col-md-6">
                    <div class="col-lg-7">
                    <div class="col-lg-5">
                    
            <div class="container com-sp pad-bot-70">
            <div class="row">
                    <div class="con-title">
                        <div class="cor-mid-img">
                            <img src="images/civil.jpg" alt="">
                        </div>
                        <div class="cor-con-mid">
                            <div class="cor-p1">
                                <h2>Civil</h2>
                                <span>Category: Engineering</span>
                                
                            </div>
                            
                                <h3>Course Details:</h3>
                                <p>Civil engineers are the builders of our world. They are responsible for virtually for all the great structures around us today and throughout history. Considered a pioneering branch of engineering, Civil Engineering deals with the built environment and can be dated to the first time someone placed a roof over his or her head or laid a tree trunk across a river to make it easier to get across. It is an exciting profession because at the end of the day you can see the results of your work, whether this is a completed bridge, a high-rise building, a subway station, or a hydroelectric dam. Over the years, the Department has grown much in different spheres of activities. At present, the Department offers an undergraduate programme in Civil Engineering leading to the diploma course. The Department has well-equipped laboratories with facilities more than those prescribed in the course syllabus.</p>
                                <p>The Civil Engineering Department is continuing the process of building strong links with the building and construction industry. Besides high quality teaching and instruction at undergraduate level, the department offers technical advisory support to various Governmental & Private organizations by way of consultancy services and testing facilities for different building materials in the Strength of Materials Laboratory. The client profile includes construction firms, industries, Government Departments and general public. Facilities for Quality Analysis for potable water is available with the newly constituted Water Testing Laboratory and these services are offered for the public water distribution system as well as for testing the quality of well water used by the general public. The Department organizes career guidance classes for the students helping them to achieve a successful career through the various placement opportunities presented by the college. Department of Civil Engineering contributes to the interdisciplinary academic and research activities of the institute.</p>
                            
                            
                        </div>
                    </div>
                    </div>

                </div>   
</div>

</div>
</div>
</div>
<script>
  const version = new Date().getTime(); // Generate a new version number based on the current timestamp
  const images = document.getElementsByTagName('img');
  for (let i = 0; i < images.length; i++) {
    const parsedSrc = new URL(images[i].src);
    parsedSrc.searchParams.set('v', version);
    images[i].src = parsedSrc.toString();
  }
</script>
<div class="cor-p5">
                                <h3>Course Syllabus</h3>
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#home">
									<img src="images/icon/cor4.png" alt=""> <span>Requirements</span></a>
                                    </li>
                                    <li><a data-toggle="tab" href="#menu1"><img src="images/icon/cor3.png" alt=""><span>Fees</span></a></li>
                                    <li><a data-toggle="tab" href="#menu2"><img src="images/icon/cor1.png" alt=""><span>Faculty</span></a></li>
                                </ul>

                                <div class="tab-content">
                                    <div id="home" class="tab-pane fade in active">
                                        <h4>You need to pass SSLC or THSLC.</h4>
                                        <h4> Admission is based on index mark</h4>
                                    </div>
                                    <div id="menu1" class="tab-pane fade">
                                       
                                        <h4>2k-3k per semester.</h4>
                                    </div>
                                    <div id="menu2" class="tab-pane fade">
                                    <div class="container-fluid py-5">
                                    <div class="container pt-5 pb-3">
                                        <div class="text-center mb-5">
                                            <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Teachers</h5>
                                          
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
                                                    <div style="height:400px;width:70%;overflow:hidden;" class="card">
                                                        <div  class="card-body" >
                                                            <div style="height:200px;width:100%;overflow:hidden;" class="img-holder"><img src="uploads/product/<?php echo $row['image']?>" width="100%" height="auto" class="card-img-top" alt="image"></div>
                                                            
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
            </div>
        </div>
        
    </section>

 <?php
include('includes/footerf.php')
?>