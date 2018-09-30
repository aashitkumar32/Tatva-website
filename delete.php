<?php
    if(empty($_SESSION['fullname']))
    session_start();
    ?>
    <?php
    if (isset($_SESSION['fullname'])) 
    {
    
        $flag = $_SESSION['fullname'];
        if ($flag === 'admin') 
        {
            $dir = $_POST['dir'];
            $dirHandle = opendir($dir);
            if(!empty($_POST['imgnm']))
            {   
                $data = $_POST['imgnm'];
                while($file = readdir($dirHandle))
                {
                    if($file == $data)
                    {
                        $done = unlink($dir."/".$file);
                        if($done)
                        {
                            $comment = "File $file successfully deleted";
                            include('delimg.php');
                            break;
                        }
                        else
                        {
                            $comment = "Error deleting that file";
                            include('delimg.php');
                            break;
                        }
                    }
                }
                if($file != $data)
                {
                    $comment = "Please enter a valid file name";
                    include('delimg.php');
                }
            }
            else
            {
                $comment = 'Please enter Image name first!!';
                include('delimg.php');
            }
            closedir($dirHandle);
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
