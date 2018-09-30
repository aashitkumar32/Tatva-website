<?php
if(empty($_SESSION['fullname']))
session_start();
include('DBLinker.php');
?>
<?php
if (isset($_SESSION['fullname'])) 
{

    $flag = $_SESSION['fullname'];
    if ($flag === 'admin') 
    {
        if(empty($dir))
        {
            $link_cat = $_POST['link_catagory'];

            if($link_cat == 1)
                $dir = "news";
                
        }

        echo "<!DOCTYPE html>
                <html lang='en'>
                <head>
                    <meta charset='UTF-8'>
                    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
                    <title>Delete News</title>
                    <link rel='stylesheet' href='css/delimg.css'>
                    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
                <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
                <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
                </head>

                <body>
                    <div class='container-fluid'>
                    <div class='table-responsive'> 
                    <div id='delete'>
                        <form action='delnews.php' method='post'>
                            <input type='text' value='$dir' name='dir' readonly id='in'/>
                            <input type='number' name='sno' placeholder='Enter the S No. of News that you want to delete' id='inpt' />
                            <input type='submit' value='Delete' id='sbmt' />
                        </form>
                        <a href='deletepanel.php' style='background-color: white'><img src='images/done.jpg' style='border-radius: 50%; width: 50px'></a><br>
                    </div>

                    <table class='table table-striped'>
                    <tbody>
                    <thead> 
                        <tr>
                            <th>S NO.</th>
                            <th>Headline</th>
                            <th>News</th>
                            <th>Source</th>
                            <th>Date / Time</th>
                        </tr>
                    </thead>";

                    $result = mysqli_query($con, "select * from $dir");
        			while ($out = mysqli_fetch_assoc($result)) 
        			{
                    echo "<tr>
                                <td>$out[sno]</td>
                                <td>$out[headline]</td>
                                <td>$out[news]</td>
                                <td>$out[source]</td>
                                <td>$out[date] / $out[time]</td>
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