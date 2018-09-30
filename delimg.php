<?php

    if(empty($_SESSION['fullname']))
    session_start();
    
    if (isset($_SESSION['fullname'])) 
    {

        $flag = $_SESSION['fullname'];
        if ($flag === 'admin') 
        {
            if(empty($dir))
                {
                    $link_cat = $_POST['image_catagory'];

                            if($link_cat == 2)
                                $dir = "gallery/";
                            else if($link_cat == 3)
                                $dir = "homeslider/";
                            else if($link_cat == 4)
                                $dir = "recentevents/";
                }
            echo"
                <!DOCTYPE html>
                <html lang='en'>
                <head>
                    <meta charset='UTF-8'>
                    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
                    <title>Delete Images</title>
                    <link rel='stylesheet' href='css/delimg.css'>
                    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
                <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
                <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
                </head>

                <body>

                    
                    <div class='container-fluid'>
                    <div class='table-responsive'> 
                    <div id='delete'>
                        <form action='delete.php' method='post'>
                            <input type='text' value='$dir' name='dir' readonly id='in'/>
                            <input type='text' name='imgnm' placeholder='Enter the name of file you want to delete' id='inpt' />
                            <input type='submit' value='Delete' id='sbmt' />
                        </form>
                        <a href='deletepanel.php' style='background-color: white'><img src='images/done.jpg' style='border-radius: 50%; width: 50px'></a><br>
                    </div>
                    <table class='table table-striped'>
                        <tbody>
                            <thead> 
                                <tr>
                                    <th>Image</th>
                                    <th>Image Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>";

                                $images = scandir($dir);
                                array_splice($images,0,2);
                                $val = count($images);

                                for($value=0; $value<$val; $value++)
                                {
                                    echo "<tr>
                                            <td><img src='$dir$images[$value]' class='del'></td>
                                            <td>$images[$value]</td>
                                            <td><a target='_blank' href='$dir$images[$value]'>Preview</a></td>
                                        </tr>";
                                }

                                if(isset($comment))
                                    echo "<b style='color: red'>$comment</b>
                           
                        </tbody>
                    </table>
                    </div>
                </div>
                </body>
                </html>";
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