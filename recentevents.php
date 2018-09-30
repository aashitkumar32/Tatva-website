<?php
	include('header.html');
	include('DBLinker.php');
?>

<html>

<style>
	#events
	{
		width: 85%;
		margin-left: auto;
		margin-right: auto;
		margin-top: 40px;
	}
	#event3
	{
		width: 95%;
		margin-left: auto;
		margin-right: auto;
		margin-bottom:30px;
		font-size: 15px;
		font-family: palatino;
	}
	.image-slider 
	{	
		width: 80%;
		margin-left: auto;
		margin-right: auto;
		margin-top:30px;
		border: solid black 3px;
	}
</style>

<body>

	<?php

$dir=("recentevents/");
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
</div>
</section>";
?>

	<div id="events">

		<div id="event3">
			<h2>Academic Session 2018-2019</h2>
			<p>With the objective of developing sense of accountability and respect towards Natural
				Resources, the following activities are being conducted by Tatva: Eco Club in the academic
				session 2018-19:<br><br>
				<ul>
					<?php
	        			$result = mysqli_query($con, "select * from recentevents ORDER BY sno DESC");
        					while ($out = mysqli_fetch_assoc($result)) 
        					{
            					echo "<li>$out[link_name]</li><br><br>";
                			}
	            	?>

				</ul>
		</div>
	</div>

	</body>
</html>

<?php
	
	include('footer.html');
	
?>