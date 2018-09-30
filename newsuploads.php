<?php
    session_start(); 
?>
<?php
include('DBLinker.php');

if (isset($_SESSION['fullname'])) 
{
    $flag = $_SESSION['fullname'];
    if(($flag === true) || ($flag === 'admin'))
    {
        if(!empty($_POST['headline']) && !empty($_POST['de']) && !empty($_POST['source']))
        {
            $head = $_POST['headline'];
            $description = $_POST['de'];
            $source = $_POST['source'];
            $repeat = mysqli_query($con, "SELECT headline FROM news WHERE headline='$head'");
            $exist = mysqli_fetch_assoc($repeat);
            if ($exist['headline'] != $head)
            {
                $done = mysqli_query($con, "INSERT INTO `news`(`sno`, `headline`, `news`, `source`, `date`, `time`) VALUES ('', '$head', '$description', '$source', NOW(), NOW())");
                if($done)
                {
                    $comment = "News successfully Uploaded";
                    include('uploadpanel.php');
                }
                else
                {
                    $comment = "Errror uploading News";
                    include('uploadpanel.php');
                }
            }
            else
            {
                $comment = "News already exist";
                include('uploadpanel.php');
            }
       }
       else
       {
           $comment = "Every field is Mandatory";
           include('uploadpanel.php');
       }
    }
    else
    {
        $comment = "Please login first";
        include('admin.php');
    }
}
else
{
    $comment = "Please login first";
    include('admin.php');
}

?>