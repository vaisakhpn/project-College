<div class="container-fluid sb2">
        <div class="row">
            <div class="sb2-1">
             
                                <!--== LEFT MENU ==-->
                                <div class="sb2-13">
                                    <ul class="collapsible" data-collapsible="accordion">
                                        <li><a href="home.php" class="menu-active"><i class="fa fa-bar-chart" aria-hidden="true"></i> Dashboard</a>
                                        </li>
                                        <?php if($_SESSION['auth_role'] == '1') : ?>
                                                    
                                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-user" aria-hidden="true"></i> Users</a>
                                            <div class="collapsible-body left-sub-menu">
                                                <ul>
                                                    <li><a href="registereduser.php">All Users</a>
                                                    </li>
                                                  
                                                   
                                                    <li><a href="registered.php">Add New user</a>
                                                   
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <?php endif; ?>
                                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-calendar" aria-hidden="true"></i> Events</a>
                                            <div class="collapsible-body left-sub-menu">
                                                <ul>
                                                    <li><a href="event.php">All Events</a>
                                                    </li>
                                                    <li><a href="addevent.php">Create New Events</a>
                                                    </li>
                                                    <li><a href="livenews.php">Add new live news</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-user" aria-hidden="true"></i> Staf Details</a>
                                            <div class="collapsible-body left-sub-menu">
                                                <ul>
                                                    <li><a href="staf.php">Staf</a>
                                                    </li>
                                                    <li><a href="addstaf.php">Add New Staf</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-calendar" aria-hidden="true"></i>Photo Gallary</a>
                                            <div class="collapsible-body left-sub-menu">
                                                <ul>
                                                    <li><a href="gallary.php">All Photos</a>
                                                    </li>
                                                    <li><a href="addphoto.php">Add Photos</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-calendar" aria-hidden="true"></i>Video Gallary</a>
                                            <div class="collapsible-body left-sub-menu">
                                                <ul>
                                                    <li><a href="videogallary.php">All videos</a>
                                                    </li>
                                                    <li><a href="addvideos.php">Add videos</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <?php if($_SESSION['auth_role'] == '1') : ?>
                                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-calendar" aria-hidden="true"></i>Grievance</a>
                                            <div class="collapsible-body left-sub-menu">
                                                <ul>
                                                    <li><a href="grievancedetails.php">Messages</a>
                                                    </li>
                                                    
                                                </ul>
                                            </div>
                                        </li>
                                        <?php endif; ?>
                                    </ul>
                                </div>
</div>
</div>
                                