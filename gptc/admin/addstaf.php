<?php
session_start();
include('authentication.php');
include('includes/topbar.php');
include('includes/sidebar.php');
include('includes/header.php');
?>
<div class="sb2-2">
                <!--== breadcrumbs ==-->
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> Add New Staff</a>
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
                                    <h4>Add Staff</h4>
                                    
                                </div>
                                <div class="tab-inn">
                                    <form action="code.php" method="POST"  enctype="multipart/form-data" >
                                     
                                    <div class="row">
                                            <div class="input-field col s12">
                                                <input type="text" name="name" value="" class="validate" required>
                                                <label class="">Name</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <label class="">Department</label>
                                    
                                                <select name="department" class="validate">
                                                        <option >Select</option>
                                                        <option value="Computer" >Computer</option>
                                                        <option value="Electrical">Electical & Electronics</option>
                                                        <option value="Mechanical">Mechanical</option>
                                                        <option value="Civil">Civil</option>
                                                        <option value="Electronics">Electronics</option>
                                                        <option value="General">General</option>


                                                </select>
                                            </div>
                                            
                                        </div><div class="row">
                                            <div class="input-field col s6">
                                                <input type="text" value="" name="position" class="validate" required>
                                                <label class="">Position</label>
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input type="text" value="" name="email" class="validate" required>
                                                <label class="">Email</label>
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input type="file" name="image" value="" class="validate" required>
                                               
                                            </div>
                                        </div>  
										<div class="row">
                                            <div class="input-field col s12">
                                                <i class="waves-effect waves-light btn-large waves-input-wrapper" style=""><input type="submit" name="addstaf" class="waves-button-input"></i>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
 </div>
<?php
include('includes/footer.php')
?>