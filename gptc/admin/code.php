<?php
session_start();
include('authentication.php');
include('config/dbcon.php');
ini_set('display_errors', 1);
error_reporting(E_ALL);

if ((isset($_POST['live']))) 
{
    $title = $_POST['title'];
    $content = $_POST['content'];
   
    
    $user_query = "INSERT INTO live(title,content) VALUES ('$title','$content')";
    $user_query_run = mysqli_query($con,$user_query);
    

    if($user_query_run)
    {
        $_SESSION['status']="news Added Successfully";
        header("Location:home.php");
    }
    else
    {
        $_SESSION['status']="news Registration Failed";
        header("Location:livenews.php");

    }
}

if(isset($_POST['addevent']))
{
    $name = $_POST['name'];
    $ldesc=$_POST['ldesc'];
    $desc = $_POST['desc'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $image=$_FILES['image']['name'];

    $allowed= array('png','jpg','jpeg');
    $file= pathinfo($image,PATHINFO_EXTENSION);
    
    $filename=time().'.'.$file;
    if(!in_array($file,$allowed))
    {
        $_SESSION['status']="allowed only jpg,png,jpeg image";
        header("Location:addevent.php");
        exit(0);
    }
    else
    {
        $category_query = "INSERT INTO events(img,name,longdesc,description,date,time) VALUES ('$filename','$name','$ldesc','$desc','$date','$time')";
        $category_query_run = mysqli_query($con,$category_query);
    
   
  if($category_query_run)
    {
        move_uploaded_file($_FILES['image']['tmp_name'],'uploads/product/'.$filename);
        $_SESSION['status']="Event Added Successfully";
        header("Location:event.php");
        exit(0);
    }
    else
    {
        $_SESSION['status']="Failed";
        header("Location:addevent.php");
        exit(0);
    }
    }
}

if(isset($_POST['Update-event']))
{
    $category_id = $_POST['category_id'];
    $name = $_POST['name'];
    $ldesc=$_POST['ldesc'];
    $desc = $_POST['desc'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    $image=$_FILES['image']['name'];
    $old_image=$_POST['old_image'];

    if($image !='')
    {
        $update=$_FILES['image']['name'];

        $allowed= array('png','jpg','jpeg');
        $file= pathinfo($image,PATHINFO_EXTENSION);
        
        $filename=time().'.'.$file;
        if(!in_array($file,$allowed))
        {
            $_SESSION['status']="allowed only jpg,png,jpeg image";
            header("Location:event-edit.php");
            exit(0);
        }
        $update=$filename;
    }
    else
    {
        $update=$old_image;
    }
    
    $query = "UPDATE events SET img='$update',name='$name',longdesc='$ldesc',description='$desc',date='$date',time='$time' WHERE id='$category_id'";
    $query_run = mysqli_query($con,$query);

    if($query_run)
    {
        if($image != '')
        {
            move_uploaded_file($_FILES['image']['tmp_name'],'uploads/product/'.$filename);
            if(file_exists('uploads/product/'.$old_image)){
                unlink("uploads/product/".$old_image);
            }
        }
        
        $_SESSION['status']="Event updation Successfully";
        header("Location:event.php");
        exit(0);
    }
    else
    {
        $_SESSION['status']="User updation Failed";
        header("Location:event-edit.php");
        exit(0);

    }

}

if(isset($_POST['logout_btn']))
{

   unset($_SESSION['auth']);
   unset($_SESSION['auth_user']);

   $_SESSION['status']="Logged out successfully";
   header("Location:login.php");
   exit(0);
}


if(isset($_POST['addUser']))
{
    $name = $_POST['name'];
    $uid = $_POST['uid'];
    $password = $_POST['password'];

    $user_query = "INSERT INTO users(name,uname,password) VALUES ('$name','$uid','$password')";
    $user_query_run = mysqli_query($con,$user_query);

    if($user_query_run)
    {
        $_SESSION['status']="User Added Successfully";
        header("Location:registereduser.php");
    }
    else
    {
        $_SESSION['status']="User Registration Failed";
        header("Location:registereduser.php");

    }
}

if(isset($_POST['Update']))
{
    $user_id = $_POST['user_id'];
    $name = $_POST['name'];
    $uid = $_POST['uid'];
    $password = $_POST['password'];
    
    $query = "UPDATE users SET name='$name',uname='$uid',password='$password' WHERE id='$user_id'";
    $query_run = mysqli_query($con,$query);

    if($user_query_run)
    {
        $_SESSION['status']="User updated Successfully";
        header("Location:registereduser.php");
    }
    else
    {
        $_SESSION['status']="User updation Failed";
        header("Location:registereduser.php");

    }

}

if(isset($_POST['user_delete']))
{
    $user_id = $_POST['user_delete'];
    $query = "DELETE FROM users WHERE id='$user_id'";
    $query_run = mysqli_query($con,$query);

    if($user_query_run)
    {
        $_SESSION['status']="User deleted Successfully";
        header("Location:registereduser.php");
    }
    else
    {
        $_SESSION['status']="User deleting Failed";
        header("Location:registereduser.php");

    }
}


if(isset($_POST['category_delete']))
{
    $category_id = $_POST['category_delete'];
    $query = "DELETE FROM events WHERE id='$category_id'";
    $query_run = mysqli_query($con,$query);

    if($category_query_run)
    {
        $_SESSION['status']="Event deleted Successfully";
        header("Location:event.php");
    }
    else
    {
        $_SESSION['status']="event deleting Failed";
        header("Location:event.php");

    }
}

if(isset($_POST['addstaf']))
{
    $name = $_POST['name'];
    $department = $_POST['department'];
    $position = $_POST['position'];
    $email = $_POST['email'];
    $image = $_FILES['image']['name'];

    $allowed = array('png','jpg','jpeg');
    $file = pathinfo($image, PATHINFO_EXTENSION);
    
    $filename = time().'.'.$file;
    if(!in_array($file, $allowed))
    {
        $_SESSION['status'] = "allowed only jpg,png,jpeg image";
        header("Location:addstaf.php");
        exit(0);
    }
    else
    {
        switch($department) {
            case "Computer":
                $table_name = "stafcmp";
                break;
            case "Mechanical":
                $table_name = "stafmec";
                break;
            case "Electrical":
                $table_name = "stafeee";
                break;
            case "Electronics":
                $table_name = "stafel";
                break;
            case "Civil":
                $table_name = "stafcv";
                break;
            case "General":
                $table_name = "staf";
                break;
            default:
                $_SESSION['status'] = "Invalid department selected";
                header("Location:addstaf.php");
                exit(0);
        }

        $query = "INSERT INTO $table_name(image, name, department, positon, email) VALUES (?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($con, $query);
        mysqli_stmt_bind_param($stmt, "sssss", $filename, $name, $department, $position, $email);
        mysqli_stmt_execute($stmt);

        if(mysqli_stmt_affected_rows($stmt) > 0)
        {
            move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/product/'.$filename);
            $_SESSION['status'] = "Staf Added Successfully";
            header("Location:staf.php");
            exit(0);
        }
        else
        {
            $_SESSION['status'] = "Failed";
            header("Location:addstaf.php");
            exit(0);
        }

        mysqli_stmt_close($stmt);
    }
}

if(isset($_POST['staf_delete']))
{

    $department = $_POST['department'];
    $id = $_POST['staf_delete'];
    $tables = array('staf', 'stafcmp', 'stafeee', 'stafcv', 'stafmec','stafel');

    
    foreach($tables as $table){
        $query = "DELETE FROM $table WHERE department = '$department' AND id = '$id'";
        $query_run = mysqli_query($con, $query);
    }
    header("Location: staf.php");
 }

if(isset($_POST['addphotos']))
{
    $image=$_FILES['image']['name'];

    $allowed= array('png','jpg','jpeg');
    $file= pathinfo($image,PATHINFO_EXTENSION);
    
    $filename=time().'.'.$file;
    if(!in_array($file,$allowed))
    {
        $_SESSION['status']="allowed only jpg,png,jpeg image";
        header("Location:addphoto.php");
        exit(0);
    }
    else
    {
        $photo_query = "INSERT INTO photos(image) VALUES ('$filename')";
        $photo_query_run = mysqli_query($con,$photo_query);
    
   
  if($photo_query_run)
    {
        move_uploaded_file($_FILES['image']['tmp_name'],'uploads/product/'.$filename);
        $_SESSION['status']="photo Added Successfully";
        header("Location:gallary.php");
        exit(0);
    }
    else
    {
        $_SESSION['status']="Failed";
        header("Location:addphoto.php");
        exit(0);
    }
    }
}
if(isset($_POST['photo-edit']))
{
    $photo_id = $_POST['photo_id'];
    $image=$_FILES['image']['name'];
    $old_image=$_POST['old_image'];

    if($image !='')
    {
        $update=$_FILES['image']['name'];

        $allowed= array('png','jpg','jpeg');
        $file= pathinfo($image,PATHINFO_EXTENSION);
        
        $filename=time().'.'.$file;
        if(!in_array($file,$allowed))
        {
            $_SESSION['status']="allowed only jpg,png,jpeg image";
            header("Location:photo-edit.php");
            exit(0);
        }
        $update=$filename;
    }
    else
    {
        $update=$old_image;
    }
    
    $query = "UPDATE photos SET image='$update' WHERE id='$photo_id'";
    $query_run = mysqli_query($con,$query);

    if($query_run)
    {
        if($image != '')
        {
            move_uploaded_file($_FILES['image']['tmp_name'],'uploads/product/'.$filename);
            if(file_exists('uploads/product/'.$old_image)){
                unlink("uploads/product/".$old_image);
            }
        }
        
        $_SESSION['status']="gallary updation Successfully";
        header("Location:gallary.php");
        exit(0);
    }
    else
    {
        $_SESSION['status']="gallary updation Failed";
        header("Location:photo-edit.php");
        exit(0);

    }

}
if(isset($_POST['photo_delete']))
{
    $photo_id = $_POST['photo_delete'];
    $query = "DELETE FROM photos WHERE id='$photo_id'";
    $query_run = mysqli_query($con,$query);

    if($staf_query_run)
    {
        $_SESSION['status']="photo deleted Successfully";
        header("Location:gallary.php");
    }
    else
    {
        $_SESSION['status']="photo deleting Failed";
        header("Location:gallary.php");

    }
}
if(isset($_POST['addvideo']))
{
    $video=$_FILES['video']['name'];

    $allowed= array('mp4','MOV','MP4','AVI','MPEG-2');
    $file= pathinfo($video,PATHINFO_EXTENSION);
    
    $filename=time().'.'.$file;
    if(!in_array($file,$allowed))
    {
        $_SESSION['status']="";
        header("Location:addvideos.php");
        exit(0);
    }
    else
    {
        $photo_query = "INSERT INTO videos(video) VALUES ('$filename')";
        $photo_query_run = mysqli_query($con,$photo_query);
    
   
  if($photo_query_run)
    {
        move_uploaded_file($_FILES['video']['tmp_name'],'uploads/product/'.$filename);
        $_SESSION['status']="video Added Successfully";
        header("Location:videogallary.php");
        exit(0);
    }
    else
    {
        $_SESSION['status']="Failed";
        header("Location:addvideos.php");
        exit(0);
    }
    }
}
if(isset($_POST['video_delete']))
{
    $video_id = $_POST['video_delete'];
    $query = "DELETE FROM videos WHERE id='$video_id'";
    $query_run = mysqli_query($con,$query);

    if($staf_query_run)
    {
        $_SESSION['status']="video deleted Successfully";
        header("Location:videogallary.php");
    }
    else
    {
        $_SESSION['status']="video deleting Failed";
        header("Location:videogallary.php");

    }
}

?>
