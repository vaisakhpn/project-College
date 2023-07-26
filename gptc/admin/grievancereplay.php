<?php
session_start();
include('authentication.php');
include('includes/topbar.php');
include('includes/sidebar.php');
include('includes/header.php');
include('config/dbcon.php')
?>
<?php
if(isset($_POST['replaym']))
{

    $phn = $_POST['phn'];
    $msg = $_POST['msg'];
    

    $user_query = "INSERT INTO grievreply(phn,msg) VALUES ('$phn','$msg')";
    $user_query_run = mysqli_query($con,$user_query);

    if($user_query_run)
    {
      
        header("Location:home.php");
        
    }
    else
    {
       
        header("Location:home.php");

    }
}
?>
<div class="sb2-2">

                <!--== breadcrumbs ==-->
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="page-back"><a href="home.php"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
                        </li>
                    </ul>
                </div>

                <!--== User Details ==-->
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
						<div class="box-inn-sp admin-form">
                                <div class="inn-title">
                                    <h4>Grievance Replay</h4>
                                    
                                </div>
                                <div class="tab-inn">
                                    <form method="POST" >
                                    <?php
                                                if(isset($_GET['id']))
                                                {
                                                    $id=$_GET['id'];
                                                    $query= "SELECT * FROM grievstud WHERE id='$id' LIMIT 1";
                                                    $query_run=mysqli_query($con,$query);

                                                    if(mysqli_num_rows($query_run)>0)
                                                    {
                                                        foreach($query_run as $row)
                                                        {
                                                        ?>
                                         <input type="hidden" name="id" value="<?php echo $row['id']?>">
                                         
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input type="text" name="name" value="<?php echo $row['name']?>" class="validate" required>
                                                <label class="">Name</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input type="text" name="admi" value="<?php echo $row['admi']?>" class="validate" required>
                                                <label class="">Admission Number</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input type="text" name="phn" value="<?php echo $row['phn']?>" class="validate" required>
                                                <label class="">Phone number</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <textarea name="msg" value="<?php echo $row['msg']?>"></textarea>
                                                <label class="">Replay Message</label>
                                            </div>
                                        </div>
                                        
										<div class="row">
                                            <div class="input-field col s12">
                                                <i class="waves-effect waves-light btn-large waves-input-wrapper" style=""><input type="submit" value="Replay" name="replaym" class="waves-button-input"></i>
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
</div>
<?php
include('includes/footer.php');
?>
