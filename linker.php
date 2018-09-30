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
        
        if (isset($_POST['link_name']) && isset($_POST['link_addr']) && isset($_POST['link_catagory']) && isset($_POST['submit'])) 
        {
            $desc = trimer($_POST['link_name']);
            $fileLink = trimer($_POST['link_addr']);
            $link_cat = trimer($_POST['link_catagory']);
            if (!empty($desc) && !empty($fileLink) && !empty($link_cat)) 
            {
                switch ($link_cat) 
                {
                    case "2":
                        {
                            $r = mysqli_query($con, "select link_addr from event_table where link_addr='$fileLink'");
                            $exist = mysqli_fetch_assoc($r);
                            if ($exist['link_addr'] != $fileLink) 
                            {
                                $sqli = "insert into event_table(`sno`, `link_name`,`link_addr`)
                          value('', '$desc','$fileLink')";
                                $result = mysqli_query($con, $sqli);
                                if ($result > 0) 
                                {
                                    $comment = 'Link has been successfully added to events';
                                    include('uploadpanel.php');;
                                }
                            } 
                            else 
                                { 
                                    $comment = 'Provided link already exists';
                                    include('uploadpanel.php');;
                                }
                        }
                        break;
                    case "3":
                        {
                            $r = mysqli_query($con, "select link_addr from notice_table where link_addr='$fileLink'");
                            $exist = mysqli_fetch_assoc($r);
                            if ($exist['link_addr'] != $fileLink) 
                            {
                                $sqli = "insert into notice_table(`sno`, `link_name`,`link_addr`)
                          value('', '$desc','$fileLink')";
                                $result = mysqli_query($con, $sqli);
                                if ($result > 0) 
                                {
                                    $comment = 'Link has been successfully added to notices';
                                    include('uploadpanel.php');;
                                }
                            } 
                            else 
                                { 
                                    $comment = 'Provided link already exists';
                                    include('uploadpanel.php');;
                                }
                        }
                        break;

                    case "4":
                    {
                        $r = mysqli_query($con, "select thought from thoughts where thought='$desc'");
                            $exist = mysqli_fetch_assoc($r);
                            if ($exist['thought'] != $desc) 
                            {
                                $sqli = "UPDATE `thoughts` SET `date`=NOW(),`thought`='$desc',`source`='$fileLink'";
                                $result = mysqli_query($con, $sqli);
                                if ($result > 0) 
                                {
                                    $comment = 'Thought has been successfully added to thoughts';
                                    include('uploadpanel.php');;
                                }
                            } 
                            else 
                                { 
                                    $comment = 'Provided thought already exists';
                                    include('uploadpanel.php');;
                                }
                    }
                    break;

                    case "5":
                    {
                        $r = mysqli_query($con, "select link from youtube where link='$fileLink'");
                            $exist = mysqli_fetch_assoc($r);
                            if ($exist['link'] != $desc) 
                            {
                                $sqli = "UPDATE `youtube` SET `date`= NOW(), `link`= '$fileLink'";
                                $result = mysqli_query($con, $sqli);
                                if ($result > 0) 
                                {
                                    $comment = 'Link has been successfully added to videos';
                                    include('uploadpanel.php');;
                                }
                            } 
                            else 
                                { 
                                    $comment = 'Provided link already exists';
                                    include('uploadpanel.php');
                                }
                    }
                    break;
                    default:
                    {
                        $comment = "Sorry!! An error occurred in uploading. Please try again";
                        include('uploadpanel.php');
                    }
                    break;
            }
        }

    } else {
            $comment = "Refill the form Completely";
            include('uploadpanel.php');
        }

}
}
 
else 
{
    $comment = "You must login before you upload";
    include('admin.php');
}

?>