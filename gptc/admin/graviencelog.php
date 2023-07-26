<?php
include('includes/headf.php');
include('includes/headerf.php');
include('config/dbcon.php');
?>
    <section>
        <div class="container com-sp pad-bot-70">
            <div class="row">
                <div class="con-title">
                    <h2>Graviences</h2>              
                </div>
            </div>
            <div class="row">
                <div class="ed-course">
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in" style="height:250px;width:100%;overflow:hidden;">
                            <a class="course-overlay" href="graviencestudent.php">
                                <img src="images/student.png" alt="">
                                <span>Students</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in" style="height:250px;width:100%;overflow:hidden;">
                            <a class="course-overlay" href="grievanceparent.php">
                                <img src="images/parent.png" alt="">
                                <span>Parents</span>
                            </a>
                        </div>
                    </div>              
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in" style="height:250px;width:100%;overflow:hidden;">
                            <a class="course-overlay" href="login.php">
                                <img src="images/admin.png" alt="">
                                <span>Admin</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in" style="height:250px;width:100%;overflow:hidden;">
                            <a class="course-overlay" href="grievancecheck.php">
                                <img src="images/reply.png" alt="">
                                <span>Check Reply</span>
                            </a>
                        </div>
                    </div> 
                    
                </div>
            </div>
        </div>
    </section>
<?php
include('includes/footerf.php')
?>