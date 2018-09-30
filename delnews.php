<?php
    if(empty($_SESSION['fullname']))
    session_start();
    $con = mysqli_connect("localhost", "website", "website@admin", "Aashit");
    ?>
    <?php
    if (isset($_SESSION['fullname'])) 
    {
    
        $flag = $_SESSION['fullname'];
        if ($flag === 'admin') 
        {
            $dir = $_POST['dir'];
            if(!empty($_POST['sno']))
            {
                $sno = $_POST['sno'];
                $result = mysqli_query($con, "SELECT `sno` FROM $dir WHERE sno= '$sno'");
                $res = mysqli_fetch_row($result);
                if($res)
                {
                    $del = mysqli_query($con, "DELETE  FROM $dir WHERE sno = '$sno'");
                    if($del)
                    {
                        $comment = "News Successfully deleted";
                        include('delnewspanl.php');
                    }
                    else
                    {
                        $comment = "Error deleting that News";
                        include('delnewspanl.php');
                    }
                }
                else
                {
                    $comment = "Please enter a valid S. No.";
                    include('delnewspanl.php');
                }
            }
            else
            {
                $comment = "Please enter S. No. first";
                include('delnewspanl.php');
            }
        }
        else
        {
            $comment = "You are not logged in";
            include('admin.php');
        }
    }
    else
    {
        $comment = "You are not logged in";
        include('admin.php');
    }

?>