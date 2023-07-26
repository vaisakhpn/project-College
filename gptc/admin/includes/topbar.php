<div class="container-fluid sb1">
        <div class="row">
        
            <!--== MY ACCCOUNT ==-->
            <div class="col-md-2 col-sm-3 col-xs-6">
                <!-- Dropdown Trigger -->
                <a type="submit" class='waves-effect dropdown-button top-user-pro' href='#' data-activates='top-menu'>
                <?php
               if(isset($_SESSION['auth']))
               { 
                echo $_SESSION['auth_user']['user_name'];
                }  
                else
                {
                    echo "not logged in";
                }
                ?>
             </a>

                <!-- Dropdown Structure -->
                <ul id='top-menu' class='dropdown-content top-menu-sty'>
                    <li class="divider"></li>
                    <form action="code.php" method="POST">
                    <button type="submit" class="dropdown-item" href="#" name="logout_btn" > Logout</button>
            </form>
                       
                    
                </ul>
            </div>
        </div>
    </div>
 

                