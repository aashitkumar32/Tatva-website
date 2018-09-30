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
                    <title>Upload Pannel</title>
                    <link rel='stylesheet' href='backey.css'>
                    <meta charset='UTF-8'>
                    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
                    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
                    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
                    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
                </head>
                    
                <body>
                <div class='container-fluid'>
                    <div id='out'>
                        <a href='logout.php'><button type='button' style='float: right'>Logout<br></button></a>
                        <a href='changepanel.php'><button type='button' style='float: left'>Change Password<br></button></a><br>
                    </div>
                    <br>
                   
                    <hr>
                        <h2 style='color:white; text-align:center'>DELETE PANNEL</h3>
                    <hr>

                    <section class='main-section'>
                        <div class='container-fluid'>
                            <div class='row'>
                                <div class='col-md-4'>
                                <div class='panel panel-default'>
                                    <div class='panel-heading'>
                                        <h3 class='panel-title'>DELETE LINKS</h3>
                                    </div>
                                    <form action='dellinkpan.php' method='post'>
                                        <br>
                                        <br>
                                        <label>Link Category</label>
                                        <select name='link_catagory' class='drop-list'>
                                            <option value='2'>Upcoming Events</option>
                                            <option value='3'>Notices</option>
                                            <option value='4'>Recent Events</option>
                                        </select>
                                        <br>
                                        <br>
                                        <button type='submit' name='submit'>Submit</button></br>                            
                                    </form>
                                </div>
                                </div>

                                <div class='col-md-4'>
                                <div class='panel panel-default'>
                                    <div class='panel-heading'>
                                        <h3 class='panel-title'>DELETE IMAGES</h3>
                                    </div>
                                    <form action='delimg.php' method='post' enctype='multipart/form-data'>  
                                        <br><br>                           
                                        <label>Link Category</label>
                                        <select name='image_catagory' class='drop-list'>
                                            <option value='2'>Gallery</option>
                                            <option value='3'>Homeslider</option>
                                            <option value='4'>Recent Events</option>
                                        </select><br><br>
                                        <button type='submit'>Submit</button>                                
                                    </form>
                                </div>
                                </div>

                                <div class='col-md-4'>
                                <div class='panel panel-default'>
                                    <div class='panel-heading'>
                                        <h3 class='panel-title'>DELETE NEWS</h3>
                                    </div>
                                    <form action='delnewspanl.php' method='post'>
                                        <br>
                                        <br>
                                        <label>Link Category</label>
                                        <select name='link_catagory' class='drop-list'>
                                            <option value='1'>News</option>
                                        </select>
                                        <br>
                                        <br>
                                        <button type='submit' name='submit'>Submit</button></br>                            
                                    </form>
                                </div>
                                </div>


                            </div>
                        </div>

                        <div class='migrate'>
                            <a href='controlpanel.php'><button type='button' id='btn'>Migrate to Control Pannel<br></button></a><br>
                        </div>
                    </section>

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