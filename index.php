<?
  include('DBLinker.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Tatva</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Alfa+Slab+One|Francois+One|Patua+One" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="images/logo.jpg" type="image/jpg" sizes="16x16">
  </head>

  <body>
<!-- start of the header section  -->
  <section class="header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <div class="row brand">
            <div class="col-md-3 col-sm-3">
              <img src="images/logo.jpg" class="img-responsive logo1" alt="">
            </div>
            <div class="col-md-6 col-sm-6">
              <h3 class="heading-3">TATVA: ECO CLUB</h3>
              <h3 class="heading-1">RAMANUJAN COLLEGE</h3>
              <span class="heading-2"><p>(UNIVERSITY OF DELHI)</p></span>
            </div>

            <div class="col-md-3 col-sm-3">
              <img src="images/logo2.jpeg"class="img-responsive logo2" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


<!-- End of the header section -->

<!-- Start of the main menu      -->
    <section class="main-menu">
        <nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
              <ul class="nav navbar-nav">
                <li><div><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a></div></li>
                <li><div><a href="about.html"><i class="fa fa-info-circle" aria-hidden="true"></i> About</a></div></li>
                <li id="li"><div class="dropdown">
                  <a id="a" class="menu"><i class="fa fa-users"></i> Team</a>
                  <div class="dropdown-content">
                    <a id="a" href="faculty.php"><i class="fa fa-chevron-right"></i> Faculties</a>
                    <a id="a" href="student.php"><i class="fa fa-chevron-right"></i> Office Bearers</a>
                  </div>
                </div> </li>
                <li id="li"><div class="dropdown">
                  <a id="a" class="menu"><i class="fa fa-image"></i> Gallery</a>
                  <div class="dropdown-content">
                    <a id="a" href="recentgallery.php"><i class="fa fa-chevron-right"></i> Recent</a>
                    <a id="a" href="secondgallery.php"><i class="fa fa-chevron-right"></i> 2017-2018</a>
                    <a id="a" href="firstgallery.php"><i class="fa fa-chevron-right"></i> 2016-2017</a>
                  </div>
                </div></li>
                <li id="li"><div class="dropdown">
                  <a id="a" class="menu"><i class="fa fa-calendar"></i> Events</a>
                  <div class="dropdown-content">
                    <a id="a" href="recentevents.php"><i class="fa fa-chevron-right"></i> Recent</a>
                    <a id="a" href="secondevent.php"><i class="fa fa-chevron-right"></i> 2017-2018</a>
                    <a id="a" href="firstevent.php"><i class="fa fa-chevron-right"></i> 2016-2017</a>
                  </div>
                </div></li>
                <li><div><a href="suggest.php"><i class="fa fa-meetup" aria-hidden="true"></i> Suggestions</a></div></li>
                <li><div><a href="news.php"><i class="fa fa-globe" aria-hidden="true"></i> News</a></div></li>
                <li><div><a href="admin.php"><i class="fa fa-lock" aria-hidden="true"></i> Admin</a></div></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </nav>
    </section>

<!-- End of the Header    -->

<!-- Start of the images Slider  -->

<?php

$dir=("homeslider/");
$images=scandir($dir);
array_splice($images,0,2);
$val=count($images);
chdir($dir);
array_multisort(array_map('filemtime', ($files = glob("*.*"))), SORT_DESC, $files);




echo "<section class='image-slider'>
<div class='overlay'>
  <div id='carousel-example-generic' class='carousel slide' data-ride='carousel'>
      <!-- Indicators -->
      <ol class='carousel-indicators'>
        <li data-target='#carousel-example-generic' data-slide-to='0' class='active'></li>
        <li data-target='#carousel-example-generic' data-slide-to='1'></li>
        <li data-target='#carousel-example-generic' data-slide-to='2'></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class='carousel-inner' role='listbox'>
    <div class='item active'>
              <img src='$dir$files[0]' class='img-responsive' >

            </div>
            <div class='item'>
              <img src='$dir$files[1]' class='img-responsive' alt='...'>

            </div>

            <div class='item'>
              <img src='$dir$files[2]' class='img-responsive' alt='...'>

            </div>

            <div class='item'>
              <img src='$dir$files[3]' class='img-responsive' alt='...'>

            </div>

            <div class='item'>
              <img src='$dir$files[4]' class='img-responsive' alt='...'>

            </div>

            <div class='item'>
              <img src='$dir$files[5]' class='img-responsive' alt='...'>

            </div>

            <div class='item'>
              <img src='$dir$files[6]' class='img-responsive' alt='...'>

            </div>

            <div class='item'>
              <img src='$dir$files[7]' class='img-responsive' alt='...'>

            </div>

            <div class='item'>
              <img src='$dir$files[8]' class='img-responsive' alt='...'>

            </div>

            <div class='item'>
              <img src='$dir$files[9]' class='img-responsive' alt='...'>

            </div>
          </div>
    
    
    <!-- Left and right controls -->
    <a class='left carousel-control' href='#carousel-example-generic' role='button' data-slide='prev'>
         <span class='icon-prev' aria-hidden='true'></span>
         <span class='sr-only'>Previous</span>
        </a>
            <a class='right carousel-control' href='#carousel-example-generic' role='button' data-slide='next'>
         <span class='icon-next' aria-hidden='true'></span>
         <span class='sr-only'>Next</span>
        </a>
  </div>
</div>";
?>

<!-- End of the Image Slider -->

<!-- start of the main container  -->
  <section class="main-section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">UPCOMING EVENTS</h3>
            </div>
            <!-- List group -->
            <marquee id='mar' onMouseOver="this.scrollAmount=0" onMouseOut="this.scrollAmount=2" scrollamount="2" direction="up" loop="true">
				      <?php
	        		$result = mysqli_query($con, "select * from event_table ORDER BY sno DESC");
        			while ($out = mysqli_fetch_assoc($result)) 
        			{
            		echo "<a href=$out[link_addr] class='set'><b><i class='glyphicon glyphicon-star-empty'></i> $out[link_name]</b></a>
                	<br><br>";
                	}
	            ?>
	          </marquee>

          </div>
        </div>
        <div class="col-md-4">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">NOTICES</h3>
            </div>
            <!-- List group -->
            <marquee id='mar' onMouseOver="this.scrollAmount=0" onMouseOut="this.scrollAmount=2" scrollamount="2" direction="up" loop="true">
			        <?php
	        		$result = mysqli_query($con, "select * from notice_table ORDER BY sno DESC");
        			while ($out = mysqli_fetch_assoc($result)) 
        			{
            		echo "<a href=$out[link_addr] class='set'><b><i class='glyphicon glyphicon-star-empty'></i> $out[link_name]</b></a>
                	<br><br>";
                	}
	            ?>
	            </marquee>
          </div>
        </div>
        <div class="col-md-4">

            <div class="panel panel-default">
               <?php
                  $result = mysqli_query($con, "select link from youtube");
                  $link = mysqli_fetch_assoc($result);
                  echo "<iframe height='237px' width='100%' src=$link[link]></iframe>";
               ?>
              
  
            </div>
          
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- End of the main container -->

<!-- Start of the last content -->

<section class="lower-section">
  <div class="container-fluid">
    <?php
    $thou = mysqli_query($con, "select thought from thoughts");
    $sour = mysqli_query($con, "select source from thoughts");
    $thought = mysqli_fetch_assoc($thou);
    $source = mysqli_fetch_assoc($sour);
    echo "<h3>$thought[thought]</h3>";
    echo "<h4>$source[source]</h4>";
    ?>
    
  </div>
</section>

<!-- End of the lower section  -->

<section class="footer">
  <div class="container">
    <p>&copy; 2018 All Right Reserved to Tatva</p>
    <p><a href="https://www.facebook.com/tatva.rcdu/"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>  <a href="https://twitter.com/TatvaOf"><i class="fa fa-twitter" aria-hidden="true"></i></a>  <a href="https://www.instagram.com/tatva.rcdu/"><i class="fa fa-instagram" aria-hidden="true"></i></a></p>
    <p><i  class="fa fa-envelope"></i><a href="mailto:tatva.ecoclub@gmail.com"> tatva.ecoclub@gmail.com</a></p>
    <p>Designed and Developed by <a href="http://www.charla.cf">CHARLA</p>
  </div>
</section>


    <!-- javascript and Jquery Section  -->
    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script src="https://use.fontawesome.com/328d40c2b3.js"></script>

    <script>
    $('.carousel').carousel({
      interval: 2000,
    })
    </script>
  </body>
</html>
