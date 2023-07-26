<?php
session_start();
include('authentication.php');
include('includes/topbar.php');
include('includes/sidebar.php');
include('includes/header.php');
include('config/dbcon.php')
?>
<div class="sb2-2">
<div class="sb2-2-2">
                    <ul>
                        <li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> Users(Students)</a>
                        </li>
                        <li class="page-back"><a href="home.php"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
                        </li>
                    </ul>
                </div>

                <!--== User Details ==-->
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                           
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Registerd edit</h4>
                                </div>
                                <div class="tab-inn">
                                    <form action="code.php" method="POST">
                                       
                                            <?php
                                                if(isset($_GET['user_id']))
                                                {
                                                    $user_id=$_GET['user_id'];
                                                    $query= "SELECT * FROM users WHERE id='$user_id' LIMIT 1";
                                                    $query_run=mysqli_query($con,$query);

                                                    if(mysqli_num_rows($query_run)>0)
                                                    {
                                                        foreach($query_run as $row)
                                                        {
                                                        ?>
                                            <input type="hidden" name="user_id" value="<?php echo $row['id']?>">
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input type="text" name="name" value="<?php echo $row['name']?>"class="validate" required>
                                                    <label class="">Name</label>
                                                </div>
                                                    <div class="input-field col s12">
                                                        <input type="text" name="uid" value="<?php echo $row['uname']?>" class="validate">
                                                        <label>User id</label>
                                                    </div>
                                                </div>
                                                
                                            
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input type="password" name="password" value="<?php echo $row['password']?>" class="validate">
                                                    <label class="">Password</label>
                                                </div>
                                            </div>
                                            
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <i class="waves-effect waves-light btn-large waves-input-wrapper" style=""><input type="submit" value="update" name="Update" class="waves-button-input"></i>
                                                </div>
                                            </div>
                                                    <?php
                                                        }
                                                }
                                                else
                                                {
                                                    echo "<h4>No Record Found.!</h4>";
                                                }

                                            }
                                            ?>
                                        
                                    </form>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>

</div>
<?php
include('includes/footer.php');
?>
