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
                            <img src="images/course1.jpg" alt="">
                        </div>
                        <div class="cor-con-mid">
                            <div class="cor-p1">
                                <h2>Electronics</h2>
                                <span>Category: Engineering</span>
                                
                            </div>
                            
                                <h3>Course Details:</h3>
                                <p>Electronics engineering, or electronic engineering, is an engineering discipline which utilizes non-linear and active electrical components (such as semiconductor devices, especially transistors, diodes and integrated circuits) to design electronic circuits, devices,Microprocessors/Microcontrollers and systems including VHDL Modelling for Programmable logic devices and FPGAs. The discipline typically also designs passive electrical components, usually based on printed circuit boards.</p>
                                <p> The term "electronic engineering" denotes a broad engineering field that covers subfields such as analog electronics, electronics, consumer, embedded systems and power electronics. Electronics engineering deals with implementation of applications, principles and algorithms developed within many related fields, for example solid-state physics, radio engineering, telecommunications, control, signal processing, systems engineering, computer engineering, instrumentation engineering, control, robotics, and many others.</p>
                            
                            
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
                                                            $query  = "SELECT * FROM stafeee ";
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