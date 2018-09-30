<?php
include('DBLinker.php');
session_start();
?>
<?php
if (isset($_SESSION['fullname'])) 
{

    $flag = $_SESSION['fullname'];
    if(($flag === true) || ($flag === 'admin')) 
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") 
        {
            
            $link_cat = $_POST['image_catagory'];
            if($link_cat == 2)
                $target_dir = "gallery/";
            else if($link_cat == 3)
                $target_dir = "homeslider/";
            else if($link_cat == 4)
                $target_dir = "recentevents/";
            $target_file = $target_dir . basename($_FILES["fileupload"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

            $img = basename($_FILES["fileupload"]["name"]);
            $des = $_POST['desc'];
            $done = mysqli_query($con, "INSERT INTO `images`(`name`, `description`) VALUES ('$img', '$des')");


            if (isset($_POST["submit"]) && isset($_POST['filename']) && isset($_POST['desc'])) 
            {
                $check = getimagesize($_FILES["fileupload"]["tmp_name"]);
                if ($check !== false) 
                {
                    $comment = "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                    include('uploadpanel.php');
                } 
                else 
                {
                    $comment = "File is not an image.";
                    $uploadOk = 0;
                    include('uploadpanel.php');
                    
                }
            }

            if (file_exists($target_file)) 
            {
                $comment = "Sorry, file already exists.";
                $uploadOk = 0;
                include('uploadpanel.php');
                
            }

            else if ($_FILES["fileupload"]["size"] > 10000000) 
            {
                $comment = "Sorry, your file is too large.";
                $uploadOk = 0;
                include('uploadpanel.php');
                
            }

            else if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") 
            {
                $comment = "Sorry, only JPG, JPEG and PNG are allowed.";
                $uploadOk = 0;
                include('uploadpanel.php');
                
            }

            else if ($uploadOk == 0) 
            {
                $comment = "Sorry, your file was not uploaded.";
                include('uploadpanel.php');
                

            } 
            else 
            {
                if (move_uploaded_file($_FILES["fileupload"]["tmp_name"], $target_file)) 
                {
                    $comment = "The file " . basename($_FILES["fileupload"]["name"]) . " has been uploaded.";
                    include('uploadpanel.php');
                } 
                else 
                {
                    $comment = "Sorry, there was an error uploading your file.";
                    include('uploadpanel.php');
                }
            }
        }
    } 
    else 
    {
        $comment = "You must login before you upload";
        include('admin.php');
    }
} 
else 
{
    $comment = "login before you upload.";
    include('admin.php');
}

?>