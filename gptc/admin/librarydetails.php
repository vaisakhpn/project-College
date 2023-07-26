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
                                <h2>Library</h2>
                               
                                
                            </div>
                            
                                <h3>Details:</h3>
                                <p>The Library GPC Muttom carries a full range of materials to support the curriculum and the lifelong learning needs of our students, staff, and community members. Key services and collections include reference, bibliographic instruction, circulation/reserves, print materials, audiovisual materials, electronic resources, internet access, and individual and group study areas. More than 8500 titles of technical books available in this library. The Library's mission statement reads as follows: The mission of the Library is to support student learning and excellence in teaching, provide access to learning resources in all formats, assist students in locating and evaluating information, and encourage lifelong learning.</p>
                               
                            
                            
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