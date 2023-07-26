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
                            <img src="images/course.jpg" alt="">
                        </div>
                        <div class="cor-con-mid">
                            <div class="cor-p1">
                                <h2>Mens Hostel</h2>
                               
                                
                            </div>
                            
                                <h3>Details:</h3>
                                <p>   One of the star attractions of Our College is the excellent hostel facility for boys. The campus hostel is taken care of by our Government. There is telephonic access to all students but mobile phone is banned as it is in the College. Affectionate discipline, tasty food at moderate rates and neat rooms with modern sanitation and professional laundry services are the hallmarks of the Polytechnic hostels</p>
                               
                            
                            
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

    </section>

 <?php
include('includes/footerf.php')
?>