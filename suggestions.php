<?php
    include('DBLinker.php');


    
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['mob'])  && !empty($_POST['desc']))
    {
        $num = $_POST['name'];
        $mail = $_POST['email'];
        $no = $_POST['mob'];
        $description = $_POST['desc'];

        if (preg_match("/[a-zA-Z]/",$num) && preg_match("/[a-zA-Z0-9][.@_]/",$mail) && preg_match("/[0-9]/",$no) && preg_match("/[a-zA-Z0-9][.,@]/",$description))
        {
                    
            $done = mysqli_query($con , "INSERT INTO `suggestion`(`sno`, `name`, `email`, `mob`, `description`, `date`, `time`) VALUES ('', '$num', '$mail', '$no', '$description', NOW(), NOW())");
            if($done)
            {
                $comment = "Suggestion Sent";
                include('suggest.php');
            }
            else
            {
                $comment = "Error sending suggestion";
                include('suggest.php');
            }
        }
        else
        {
            $comment = "Special symbols not allowed";
            include('suggest.php');
        }
    }
    else
    {
        $comment = "Please fill the form completely";
        include('suggest.php');
    }
?>
