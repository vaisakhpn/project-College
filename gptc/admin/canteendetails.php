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
                            <img src="images/canteen.jpg" alt="">
                        </div>
                        <div class="cor-con-mid">
                            <div class="cor-p1">
                                <h2>Canteen</h2>
                               
                                
                            </div>
                            
                                <h3>Details:</h3>
                                <p> Canteens and cafeterias are one of the important parts of student life where you can find most of students chatting and gossiping on different topics. It plays a vital role in removing tensions and refreshing students. The college canteen provides enough and delicious food at affordable rates. GPC Muttom has the facility of clean and hygienic canteen that caters to the taste of all students. The canteen remains open on all working days. It provides all types of nutritious and hygienic eatables and beverages to cater to the students, staff and visitors.</p>
                               
                            
                            
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