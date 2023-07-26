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
                                <h2>Co-Operative Store</h2>
                               
                                
                            </div>
                            
                                <h3>Details:</h3>
                                <p>There is a co-operative store in the campus run by the GPC Muttom Co-operative Society. All the staff and students are members of the society. The profit is shared with the members and so materials are sold at rates lower than the market rates. It provides various stationary items, notebooks, practical record books, assignment books, textbooks and various application forms to the students of the college at lower prices. It produces and supplies note books and assignment books bearing the name of the college. The store is open on all working days, throughout the working time of the college.</p>
                               
                            
                            
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