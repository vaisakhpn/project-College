<?php
session_start();
include('logs/header.php');
include('config/dbcon.php');
if(isset($_SESSION['auth']))
{
    $_SESSION['status']="You are alreay logged in";
    header('Location:home.php');
	exit(0);
}
?>

<div class="limiter">
	
		<div class="container-login100">
	
			<div class="wrap-login100">
			<a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
			<div class="wrap-login100-form-btn">
			<ul>
                        <li>
                        </li>
				</ul>
				</div>
			
				<form class="login100-form validate-form" action="logincode.php" method='POST'>		
					 <?php
					 if(isset($_SESSION['auth_status']))
					 {
						 ?>
						
						 <div class="alert alert-warnig alert-dismissible fade show" role="alert">
							 <strong>Hey... </strong><?php echo $_SESSION['auth_status'];?>
							 <button type="button" class="close" data-dismiss="alert" aria-label="close">
							 <span aria-hidden="true">&times;</span>
						 </buttton>
						 </div>
						 <?php
						 unset($_SESSION['auth_status']);
					 
						 }
					 ?>
					 

					<?php
                    include('message.php');
                    ?>
					
					<div  class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" name="uid">
						<span class="focus-input100" data-placeholder="userid"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="password">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="login_btn" >
								Login
							</button>
						</div>
					</div>
					</div>
				</form>
			</div>
		</div>
	</div>
<?php
include('logs/footer.php');
?>