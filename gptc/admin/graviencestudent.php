<?php
include('includes/headf.php');
include('includes/headerf.php');
include('config/dbcon.php');
?><head><style>

.form-group {
  margin-bottom: 20px;
}

label {
  font-weight: bold;
}

input[type="text"],
input[type="email"],
input[type="number"],
input[type="password"] {
  width: 100%;
  padding: 10px;
  border-radius: 5px;
  border: none;
  background-color: #f2f2f2;
  font-size: 16px;
}

textarea {
  width: 100%;
  padding: 10px;
  border-radius: 5px;
  border: none;
  background-color: #f2f2f2;
  font-size: 16px;
}

.form-check-input {
  margin-right: 5px;
}

.btn-primary {
  background-color: #007bff;
  border: none;
  border-radius: 5px;
  color: #fff;
  font-size: 16px;
  padding: 10px 20px;
}

.btn-primary:hover {
  background-color: #0069d9;
  color: #fff;
}
<?php
if(isset($_POST['submitg']))
{
    $name = $_POST['name'];
    $admi = $_POST['admi'];
    $phn = $_POST['phn'];
    $type = $_POST['type'];
    $msg = $_POST['msg'];
    

    $user_query = "INSERT INTO grievstud(name,admi,phn,type,msg) VALUES ('$name','$admi','$phn','$type','$msg')";
    $user_query_run = mysqli_query($con,$user_query);

    if($user_query_run)
    {
      
        header("Location:graviencelog.php");
    }
    else
    {
       
        header("Location:graviencelog.php");

    }
}
?>
    </style></head>
<form  method="POST" style="margin-left: 10%;">
  <div class="form-group row">
    <label for="inputName" class="col-sm-2 col-form-label">Name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="name" placeholder="Enter your name">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputAdmissionNumber" class="col-sm-2 col-form-label">Admission Number:</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" name="admi" placeholder="Enter your admission number">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail" class="col-sm-2 col-form-label">Email:</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail" placeholder="Enter your email">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputGuardianName" class="col-sm-2 col-form-label">Guardian Name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputGuardianName" placeholder="Enter your guardian name">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputAddress" class="col-sm-2 col-form-label">Address:</label>
    <div class="col-sm-10">
      <textarea class="form-control" id="inputAddress" rows="3" placeholder="Enter your address"></textarea>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Gender:</label>
    <div class="col-sm-10">
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="genderRadios" id="genderMale" value="male">
        <label class="form-check-label" for="genderMale">Male</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="genderRadios" id="genderFemale" value="female">
        <label class="form-check-label" for="genderFemale">Female</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputSemester" class="col-sm-2 col-form-label">Semester:</label>
    <div class="col-sm-10">
    <select ><option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      <option>6</option>
      
    </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputContactNumber" class="col-sm-2 col-form-label">Contact Number:</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" name="phn" placeholder="Enter your contact number">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputAddress" class="col-sm-2 col-form-label">Gravience Type</label>
    <div class="col-sm-10" >
      <select name="type" ><option>Grievance related to Admission</option>
      <option>Grievance related to Victimization</option>
      <option>Grievance related to Attendance</option>
      <option>Grievance related to charging of fees</option>
      <option>Non-transparent or unfair evaluation process</option>
      <option>Non-observation of AICTE norms</option>
      <option>Refusal to return documents</option>
      <option>Harassment by students or teachers</option>
      <option>Student amenities and quality education</option>
      <option>Non-payment or Delay in payment of scholarships</option>
      <option>SC/ST/Minority Women/Disabled discrimination</option>
      
    </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputAddress" class="col-sm-2 col-form-label">Message</label>
    <div class="col-sm-10">
      <textarea class="form-control" name="msg" rows="3" placeholder="Enter your message"></textarea>
    </div>
  </div>
    <div class="form-group row">
    <div class="col-sm-10 offset-sm-2">
      <button type="submit" name="submitg" class="btn btn-primary">Save</button>
    </div>
  </div>
</form>
<?php
include('includes/footerf.php')
?>