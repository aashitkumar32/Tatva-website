<?php

	include('header.html');

?>

<html>
	<head>
		<link rel="stylesheet" href="css/gallery1.css">
	</head>
<style>

	#gallery
	{
		width: 90%;
		margin-right: auto;
		margin-left: auto; 
		margin-top: 30px;
		margin-bottom: 30px;
	}
	.img
	{

		margin-left: 5%;
		padding: 10px;
		display: grid;
		grid-column-gap: 30px;
	}
	#img:hover
	{
		transition: 0.2s;
        opacity: 0.7;
        border: 2px solid aqua;
	}
	#list
	{
		list-style-type: none;
		margin:0;
		padding:0;
		display: inline;
	}
	
	#pt
	{
		display: block;
		margin-right: 30px;
		float: left;
		margin-bottom: 20px;
	}
</style>

<body>
	<div id="gallery">
		<div id="one">
			<p><b>Save Electricity Campaign: 24<sup>th</sup> March 2018</b></p><hr>
			<div class="img">
				<ul id="list">
					<li id="pt">
		        		<img src='event2/11.jpg' id="img" onclick="openModal();currentSlide(1)" width='180' height='210' />
		        	</li>
		        	<li id="pt">
		        		<img src='event2/46.jpg' id="img" onclick="openModal();currentSlide(2)" width='180' height='210' />
		        	</li>
		        	<li id="pt">
		        		<img src='event2/47.jpg' id="img" onclick="openModal();currentSlide(3)" width='180' height='210' />
		        	</li>
		        	<li id="pt">
		        		<img src='event2/48.jpg' id="img" onclick="openModal();currentSlide(4)" width='180' height='210' />
		        	</li>
					<li id="pt">
		        		<img src='event2/45.jpg' id="img" onclick="openModal();currentSlide(5)" width='180' height='210' />
		        	</li>
		        </ul>
		        </ul>
			</div>
		</div>
		<br><br>
		<div id="two">
			<p><b>Save Water Campaign: 20<sup>th</sup> February 2018</b></p><hr>
			<div class="img">
				<ul id="list">
		        	<li id="pt">
		        		<img src='event2/37.jpg' id="img" onclick="openModal();currentSlide(6)" width='180' height='210' />
		        	</li>
		        	<li id="pt">
		        		<img src='event2/38.jpg' id="img" onclick="openModal();currentSlide(7)" width='180' height='210' />
		        	</li>
		        	<li id="pt">
		        		<img src='event2/39.jpg' id="img" onclick="openModal();currentSlide(8)" width='180' height='210' />
		        	</li>
		        	<li id="pt">
		        		<img src='event2/40.jpg' id="img" onclick="openModal();currentSlide(9)" width='180' height='210' />
		        	</li>
		        	<li id="pt">
		        		<img src='event2/41.jpg' id="img" onclick="openModal();currentSlide(10)" width='180' height='210' />
		        	</li>
		        	<li id="pt">
		        		<img src='event2/42.jpg' id="img" onclick="openModal();currentSlide(11)" width='180' height='210' />
		        	</li>
		        	<li id="pt">
		        		<img src='event2/43.jpg' id="img" onclick="openModal();currentSlide(12)" width='180' height='210' />
		        	</li>
		        	<li id="pt">
		        		<img src='event2/44.jpg' id="img" onclick="openModal();currentSlide(13)" width='180' height='210' />
		        	</li>
		        </ul>
			</div>
		</div>
		<br><br>
		<div id="three">
			<p><b>Aravalli Biodiversity Park: 9<sup>th</sup> February 2018</b></p><hr>
			<div class="img">
				<ul id="list">
					<li id="pt">
		        		<img src='event2/12.jpg' id="img" onclick="openModal();currentSlide(14)" width='180' height='210' />
		        	</li>
		        	<li id="pt">
		        		<img src='event2/13.jpg' id="img" onclick="openModal();currentSlide(15)" width='180' height='210' />
		        	</li>
		        	<li id="pt">
		        		<img src='event2/34.jpg' id="img" onclick="openModal();currentSlide(16)" width='180' height='210' />
		        	</li>
		        	<li id="pt">
		        		<img src='event2/35.jpg' id="img" onclick="openModal();currentSlide(17)" width='180' height='210' />
		        	</li>
		        	<li id="pt">
		        		<img src='event2/36.jpg' id="img" onclick="openModal();currentSlide(18)" width='180' height='210' />
		        	</li>
		        </ul>
			</div>
		</div>
		<br><br>
		<div id="five">
			<p><b>Jashn-e-Josh 2018: 18<sup>th</sup> and 19<sup>th</sup> January 2018</b></p><hr>
			<div class="img">
				<ul id="list">
					<li id="pt">
		        		<img src='event2/30.jpg' id="img" onclick="openModal();currentSlide(19)" width='180' height='210' />
		        	</li>
		        	<li id="pt">
		        		<img src='event2/31.jpg' id="img" onclick="openModal();currentSlide(20)" width='180' height='210' />
		        	</li>
		        	<li id="pt">
		        		<img src='event2/32.jpg' id="img" onclick="openModal();currentSlide(21)" width='180' height='210' />
		        	</li>
		        	<li id="pt">
		        		<img src='event2/33.jpg' id="img" onclick="openModal();currentSlide(22)" width='180' height='210' />
		        	</li>
		        </ul>
			</div>
		</div>
		<br><br>
		<div id="six">
			<p><b>Installation of Blue and Green dustbins : 12<sup>th</sup> January 2018</b></p><hr>
			<div class="img">
				<ul id="list">
					<li id="pt">
		        		<img src='event2/28.jpg' id="img" onclick="openModal();currentSlide(23)" width='180' height='210' />
		        	</li>
		        	<li id="pt">
		        		<img src='event2/29.jpg' id="img" onclick="openModal();currentSlide(24)" width='180' height='210' />
		        	</li>
		        </ul>
			</div>
		</div>
		<br><br>
		<div id="seven">
			<p><b>Car Pooling Day: 14<sup>th</sup> November 2017</b></p><hr>
			<div class="img">
				<ul id="list">
					<li id="pt">
		        		<img src='event2/1.jpg' id="img" onclick="openModal();currentSlide(25)" width='180' height='210' />
		        	</li>
		        </ul>
			</div>
		</div>
		<br><br>
		<div id="eight">
			<p><b>Mask Distribution: 3<sup>rd</sup> November 2017</b></p><hr>
			<div class="img">
				<ul id="list">
					<li id="pt">
		        		<img src='event2/26.jpg' id="img" onclick="openModal();currentSlide(26)" width='180' height='210' />
		        	</li>
		        	<li id="pt">
		        		<img src='event2/22.jpg' id="img" onclick="openModal();currentSlide(27)" width='180' height='210' />
		        	</li>
		        	<li id="pt">
		        		<img src='event2/23.jpg' id="img" onclick="openModal();currentSlide(28)" width='180' height='210' />
		        	</li>
		        	<li id="pt">
		        		<img src='event2/24.jpg' id="img" onclick="openModal();currentSlide(29)" width='180' height='210' />
		        	</li>
		        	<li id="pt">
		        		<img src='event2/25.jpg' id="img" onclick="openModal();currentSlide(30)" width='180' height='210' />
		        	</li>
		        	<li id="pt">
		        		<img src='event2/26.jpg' id="img" onclick="openModal();currentSlide(31)" width='180' height='210' />
		        	</li>
		        	<li id="pt">
		        		<img src='event2/27.jpg' id="img" onclick="openModal();currentSlide(32)" width='180' height='210' />
		        	</li>
		        </ul>
			</div>
		</div>
		<br><br>
		<div id="nine">
			<p><b>Anti-Cracker Campaign</b></p><hr>
			<div class="img">
				<ul id="list">
					<li id="pt">
		        		<img src='event2/15.jpg' id="img" onclick="openModal();currentSlide(33)" width='180' height='210' />
		        	</li>
		        	<li id="pt">
		        		<img src='event2/16.jpg' id="img" onclick="openModal();currentSlide(34)" width='180' height='210' />
		        	</li>
		        	<li id="pt">
		        		<img src='event2/17.jpg' id="img" onclick="openModal();currentSlide(35)" width='180' height='210' />
		        	</li>
		        	<li id="pt">
		        		<img src='event2/18.jpg' id="img" onclick="openModal();currentSlide(36)" width='180' height='210' />
		        	</li>
		        	<li id="pt">
		        		<img src='event2/19.jpg' id="img" onclick="openModal();currentSlide(37)" width='180' height='210' />
		        	</li>
		        	<li id="pt">
		        		<img src='event2/20.jpg' id="img" onclick="openModal();currentSlide(38)" width='180' height='210' />
		        	</li>
		        </ul>
			</div>
		</div>
		<br><br>
		<div id="ten">
			<p><b>Triathlon of Knowledge: 28<sup>th</sup> September 2017</b></p><hr>
			<div class="img">
				<ul id="list">
					<li id="pt">
		        		<img src='event2/2.jpg' id="img" onclick="openModal();currentSlide(39)" width='180' height='210' />
		        	</a></li>
		        	<li id="pt">
		        		<img src='event2/3.jpg' id="img" onclick="openModal();currentSlide(40)" width='180' height='210' />
		        	</li>
		        	<li id="pt">
		        		<img src='event2/4.jpg' id="img" onclick="openModal();currentSlide(41)" width='180' height='210' />
		        	</li>
		        	<li id="pt">
		        		<img src='event2/5.jpeg' id="img" onclick="openModal();currentSlide(42)" width='180' height='210' />
		        	</li>
		        	<li id="pt">
		        		<img src='event2/6.jpg' id="img" onclick="openModal();currentSlide(43)" width='180' height='210' />
		        	</li>
		        	<li id="pt">
		        		<img src='event2/8.jpg' id="img" onclick="openModal();currentSlide(44)" width='180' height='210' />
		        	</li>
		        </ul>
			</div>
		</div>
		<br><br>
		<div id="eleven">
			<p><b>Orientation Programme: 6<sup>th</sup> September 2017</sup></b></p><hr>
			<div class="img">
				<ul id="list">
					<li id="pt">
		        		<img src='event2/7.jpg' id="img" onclick="openModal();currentSlide(45)" width='180' height='210' />
		        	</li>
		        	<li id="pt">
		        		<img src='event2/9.jpg' id="img"  onclick="openModal();currentSlide(46)" width='180' height='210' />
		        	</li>
		        	<li id="pt">
		        		<img src='event2/10.jpg' id="img" onclick="openModal();currentSlide(47)" width='180' height='210' />
		        	</li>
		        </ul>
			</div>
		</div>
	</div>

<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 47</div>
      <img src="event2/11.jpg" style="width:100%; height: 80%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 47</div>
      <img src="event2/46.jpg" style="width:100%; height: 80%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 47</div>
      <img src="event2/47.jpg" style="width:100%; height: 80%">
    </div>
    
    <div class="mySlides">
      <div class="numbertext">4 / 47</div>
      <img src="event2/48.jpg" style="width:100%; height: 80%">
	</div>
	
	<div class="mySlides">
      <div class="numbertext">5 / 47</div>
      <img src="event2/45.jpg" style="width:100%; height: 80%">
	</div>
	
	<div class="mySlides">
      <div class="numbertext">6 / 47</div>
      <img src="event2/37.jpg" style="width:100%; height: 80%">
	</div>
	
	<div class="mySlides">
      <div class="numbertext">7 / 47</div>
      <img src="event2/38.jpg" style="width:100%; height: 80%">
	</div>
	
	<div class="mySlides">
      <div class="numbertext">8 / 47</div>
      <img src="event2/39.jpg" style="width:100%; height: 80%">
	</div>
	
	<div class="mySlides">
      <div class="numbertext">9 / 47</div>
      <img src="event2/40.jpg" style="width:100%; height: 80%">
	</div>
	
	<div class="mySlides">
      <div class="numbertext">10 / 47</div>
      <img src="event2/41.jpg" style="width:100%; height: 80%">
	</div>
	
	<div class="mySlides">
      <div class="numbertext">11 / 47</div>
      <img src="event2/42.jpg" style="width:100%; height: 80%">
	</div>
	
	<div class="mySlides">
      <div class="numbertext">12 / 47</div>
      <img src="event2/43.jpg" style="width:100%; height: 80%">
	</div>
	
	<div class="mySlides">
      <div class="numbertext">13 / 47</div>
      <img src="event2/44.jpg" style="width:100%; height: 80%">
	</div>
	
	<div class="mySlides">
      <div class="numbertext">14 / 47</div>
      <img src="event2/12.jpg" style="width:100%; height: 80%">
	</div>
	
	<div class="mySlides">
      <div class="numbertext">15 / 47</div>
      <img src="event2/13.jpg" style="width:100%; height: 80%">
	</div>
	
	<div class="mySlides">
      <div class="numbertext">16 / 47</div>
      <img src="event2/34.jpg" style="width:100%; height: 80%">
	</div>
	
	<div class="mySlides">
      <div class="numbertext">17 / 47</div>
      <img src="event2/35.jpg" style="width:100%; height: 80%">
	</div>
	
	<div class="mySlides">
      <div class="numbertext">18 / 47</div>
      <img src="event2/36.jpg" style="width:100%; height: 80%">
	</div>
	
	<div class="mySlides">
      <div class="numbertext">19 / 47</div>
      <img src="event2/30.jpg" style="width:100%; height: 80%">
	</div>
	
	<div class="mySlides">
      <div class="numbertext">20 / 47</div>
      <img src="event2/31.jpg" style="width:100%">
	</div>
	
	<div class="mySlides">
      <div class="numbertext">21 / 47</div>
      <img src="event2/32.jpg" style="width:100%">
	</div>
	
	<div class="mySlides">
      <div class="numbertext">22 / 47</div>
      <img src="event2/33.jpg" style="width:100%">
	</div>
	
	<div class="mySlides">
      <div class="numbertext">23 / 47</div>
      <img src="event2/28.jpg" style="width:100%">
	</div>

	<div class="mySlides">
      <div class="numbertext">24 / 47</div>
      <img src="event2/29.jpg" style="width:100%">
	</div>
	
	<div class="mySlides">
      <div class="numbertext">25 / 47</div>
      <img src="event2/1.jpg" style="width:100%">
	</div>
	
	<div class="mySlides">
      <div class="numbertext">26 / 47</div>
      <img src="event2/26.jpg" style="width:100%">
	</div>
	
	<div class="mySlides">
      <div class="numbertext">27 / 47</div>
      <img src="event2/22.jpg" style="width:100%">
	</div>
	
	<div class="mySlides">
      <div class="numbertext">28 / 47</div>
      <img src="event2/23.jpg" style="width:100%">
	</div>
	
	<div class="mySlides">
      <div class="numbertext">29 / 47</div>
      <img src="event2/24.jpg" style="width:100%">
	</div>
	
	<div class="mySlides">
      <div class="numbertext">30 / 47</div>
      <img src="event2/25.jpg" style="width:100%">
	</div>
	
	<div class="mySlides">
      <div class="numbertext">31 / 47</div>
      <img src="event2/26.jpg" style="width:100%">
	</div>
	
	<div class="mySlides">
      <div class="numbertext">32 / 47</div>
      <img src="event2/27.jpg" style="width:100%">
	</div>
	
	<div class="mySlides">
      <div class="numbertext">33 / 47</div>
      <img src="event2/15.jpg" style="width:100%">
	</div>
	
	<div class="mySlides">
      <div class="numbertext">34 / 47</div>
      <img src="event2/16.jpg" style="width:100%">
	</div>
	
	<div class="mySlides">
      <div class="numbertext">35 / 47</div>
      <img src="event2/17.jpg" style="width:100%">
	</div>
	
	<div class="mySlides">
      <div class="numbertext">36 / 47</div>
      <img src="event2/18.jpg" style="width:100%">
	</div>
	
	<div class="mySlides">
      <div class="numbertext">37 / 47</div>
      <img src="event2/19.jpg" style="width:100%">
	</div>
	
	<div class="mySlides">
      <div class="numbertext">38 / 47</div>
      <img src="event2/20.jpg" style="width:100%">
	</div>

	<div class="mySlides">
      <div class="numbertext">39 / 47</div>
      <img src="event2/2.jpg" style="width:100%">
	</div>

	<div class="mySlides">
      <div class="numbertext">40 / 47</div>
      <img src="event2/3.jpg" style="width:100%">
	</div>

	<div class="mySlides">
      <div class="numbertext">41 / 47</div>
      <img src="event2/4.jpg" style="width:100%">
	</div>

	<div class="mySlides">
      <div class="numbertext">42 / 47</div>
      <img src="event2/5.jpeg" style="width:100%">
	</div>

	<div class="mySlides">
      <div class="numbertext">43 / 47</div>
      <img src="event2/6.jpg" style="width:100%">
	</div>

	<div class="mySlides">
      <div class="numbertext">44 / 47</div>
      <img src="event2/8.jpg" style="width:100%">
	</div>

	<div class="mySlides">
      <div class="numbertext">45 / 47</div>
      <img src="event2/7.jpg" style="width:100%">
	</div>


	<div class="mySlides">
      <div class="numbertext">46 / 47</div>
      <img src="event2/9.jpg" style="width:100%">
	</div>


	<div class="mySlides">
      <div class="numbertext">47 / 47</div>
      <img src="event2/10.jpg" style="width:100%">
	</div>

	




    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    </div>
</div>

<script>
function openModal() {
  document.getElementById('myModal').style.display = "block";
}

function closeModal() {
  document.getElementById('myModal').style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>

</body>

</html>

<?php

	include('footer.html');

?>