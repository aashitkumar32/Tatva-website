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
        if(isset($comment))
                    echo '<h5 style="color: bisque">'.$comment.'</h5>';
        echo"
                <html>
                    
                <head>
                    <title>Control Pannel</title>
                    <link rel='stylesheet' href='backey.css'>
                    <meta charset='UTF-8'>
                    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
                    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
                    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
                    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
                </head>
                    
                <body>

                <div id='out'>
                        <a href='logout.php'><button type='button' style='float: right'>Logout<br></button></a>
                        <a href='changepanel.php'><button type='button' style='float: left'>Change Password<br></button></a><br>
                    </div>
                    <br>

                <hr>
                    <h2 style='color:white; text-align:center'>CONTROL PANNEL</h3>
                <hr>

                <div id='function'>
                    <a href='uploadpanel.php'><button type='button' id='btn'>UPLOAD PANNEL<br></button></a>
                    <a href='deletepanel.php'><button type='button' id='btn'>DELETE PANNEL<br></button></a><br>
                </div>          
                </body>
                </html>
                ";
                
    } else {
        $comment = 'You must login before you upload';
        include('admin.php');
    }
} else {
    $comment = 'You must login before you upload';
    include('admin.php');
}
?>