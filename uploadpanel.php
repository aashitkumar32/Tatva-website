<?php
if(empty($_SESSION['fullname']))
session_start();
?>
<?php
if (isset($_SESSION['fullname'])) 
{

    $flag = $_SESSION['fullname'];
    if(($flag === true) || ($flag === 'admin'))
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
                        <h2 style='color:white; text-align:center'>UPLOAD PANNEL</h3>
                    <hr>
                    <section class='main-section'>
                        <div class='container-fluid'>
                            <div class='row'>

                            <div class='col-md-6'>
                            <div class='panel panel-default'>
                                <div class='panel-heading'>
                                    <h3 class='panel-title'>NEWS UPLOADS</h3>
                                </div>
                                <form action='newsuploads.php' method='post'>
                                    <br>
                                    <br>
                                    <input type='text' name='headline' placeholder='Head Line of the News' required>
                                    <br>
                                    <br>                                    
                                    <textarea name='de' rows='5' cols='50' placeholder='Enter your suggestions here' required></textarea>
                                    <br>
                                    <br>
                                    <input type='text' name='source' placeholder='Enter the source of News' required>
                                    <br>
                                    <br>
                                    <button type='submit' name='submit'>Submit</button></br>
                                </form>
                            </div>
                            </div>

                                <div class='col-md-6'>
                                <div class='panel panel-default'>
                                    <div class='panel-heading'>
                                        <h3 class='panel-title'>UPLOAD IMAGES</h3>
                                    </div>
                                    <form action='upload.php' method='post' enctype='multipart/form-data'>  
                                        <br><br>                           
                                        <input type='text' name='filename' placeholder='File Name' /><br><br>
                                        <input type='text' name='desc' placeholder='Description' required /><br><br>
                                        <label>Link Category</label>
                                        <select name='image_catagory' class='drop-list'>
                                            <option value='2'>Gallery</option>
                                            <option value='3'>Homeslider</option>
                                            <option value='4'>Recent Events</option>
                                        </select><br><br>
                                        <label>Upload File</label>
                                        <input type='file' name='fileupload' required />
                                        <br>
                                        <br>
                                        <button type='submit'>UPLOAD</button>                                
                                    </form>
                                </div>
                                </div>

                                

                                <div class='col-md-6'>
                                <div class='panel panel-default'>
                                    <div class='panel-heading'>
                                        <h3 class='panel-title'>LINK UPLOADS</h3>
                                    </div>
                                    <form action='linker.php' method='post'>
                                        <br>
                                        <br>
                                        <input type='text' name='link_name' placeholder='Description' required /><br><br>
                                        <input type='text' name='link_addr' placeholder='Link' required />
                                        <br>
                                        <br>
                                        <label>Link Category</label>
                                        <select name='link_catagory' class='drop-list'>
                                            <option value='2'>Events</option>
                                            <option value='3'>Notices</option>
                                            <option value='4'>Thoughts</option>
                                            <option value='5'>Youtube Link</option>
                                        </select>
                                        <br>
                                        <br>
                                        <button type='submit' name='submit'>Submit</button></br>                            
                                    </form>
                                </div>
                                </div>

                                <div class='col-md-6'>
                                <div class='panel panel-default'>
                                    <div class='panel-heading'>
                                        <h3 class='panel-title'>EVENT UPLOADS</h3>
                                    </div>
                                    <form action='newevent.php' method='post'>
                                        <br>
                                        <br>
                                        <input type='text' name='namevent' placeholder='Name of the event' id='input' required>
                                        <br>
                                        <br>                                    
                                        <input type='text' name='descevent' placeholder='Description of the event' id='input' required>
                                        <br>
                                        <br>
                                        <button type='submit' name='submit'>Submit</button></br>
                                    </form>
                                </div>
                                </div>

                               
                                <div class='col-md-6'>
                                <div class='panel panel-default'>
                                    <div class='panel-heading'>
                                        <h3 class='panel-title'>SEE SUGGESTIONS</h3>
                                    </div>
                                    <form action='seesuggestions.php' method='post'>
                                        <br>
                                        <br>
                                        <button type='submit' name='submit'>Submit</button></br>
                                    </form>
                                </div>
                                </div>
                            </div>
                        </div>";
                        if($flag === 'admin')
                        {
                            echo "<div class='migrate'>
                                            <a href='controlpanel.php'><button type='button' id='btn'>Migrate to Control Pannel<br></button></a><br>
                                        </div>";
                        } 
                echo    "</section>
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