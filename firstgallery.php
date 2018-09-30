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
			<p><b>E- waste Drive: 10<sup>th</sup> April - 17<sup>th</sup> April 2017</b></p><hr>
			<div class="img">
				<ul id="list">
					<li id="pt">
	        			<img src='event1/41.jpg' id="img" onclick="openModal();currentSlide(1)" width='180' height='210' />
	        		</a></li>
	        	</ul>
			</div>
		</div>
		<br><br>
		<div id="two">
			<p><b>Inter college festival-“RANG-A-RANG”: 3<sup>rd</sup> March 2017</b></p><hr>
			<div class="img">
				<ul id="list">
					<li id="pt">
		        		<img src='event1/1.jpg' id="img" onclick="openModal();currentSlide(2)" width='180' height='210' />
		        	</li>
		        	<li id="pt">
		        		<img src='event1/2.jpg' id="img" onclick="openModal();currentSlide(3)" width='180' height='210' />
		        	</li>
		        	<li id="pt">
		        		<img src='event1/3.jpg' id="img" onclick="openModal();currentSlide(4)" width='180' height='210' />
		        	</li>
		        	<li id="pt">
		        		<img src='event1/4.jpg' id="img" onclick="openModal();currentSlide(5)" width='180' height='210' />
		        	</li>
		        	<li id="pt">
		        		<img src='event1/5.jpg' id="img" onclick="openModal();currentSlide(6)" width='180' height='210' />
		        	</li>
		        	<li id="pt">
		        		<img src='event1/6.jpg' id="img" onclick="openModal();currentSlide(7)" width='180' height='210' />
		        	</li>
		        	<li id="pt">
		        		<img src='event1/7.jpg' id="img" onclick="openModal();currentSlide(8)" width='180' height='210' />
		        	</li>
		        	<li id="pt">
		        		<img src='event1/8.jpg' id="img" onclick="openModal();currentSlide(9)" width='180' height='210' />
		        	</li>
		        	<li id="pt">
		        		<img src='event1/9.jpg' id="img" onclick="openModal();currentSlide(10)" width='180' height='210' />
		        	</li>
		        	<li id="pt">
		        		<img src='event1/10.jpg' id="img" onclick="openModal();currentSlide(11)" width='180' height='210' />
		        	</li>
		        	<li id="pt">
		        		<img src='event1/11.jpg' id="img" onclick="openModal();currentSlide(12)" width='180' height='210' />
		        	</li>
		        	<li id="pt">
		        		<img src='event1/12.jpg' id="img" onclick="openModal();currentSlide(13)" width='180' height='210' />
		        	</li>
		        </ul>
			</div>
		</div>
		<br><br>
		<div id="three">
			<p><b>Oil and Natural Gas Conservation: 13<sup>th</sup> February 2017</b></p><hr>
			<div class="img">
				<ul id="list">
					<li id="pt">
		        		<img src='event1/24.jpg' id="img" onclick="openModal();currentSlide(14)" width='180' height='210' />
		        	</li>
		        	<li id="pt">
		        		<img src='event1/25.jpg' id="img" onclick="openModal();currentSlide(15)" width='180' height='210' />
		        	</li>
		        	<li id="pt">
		        		<img src='event1/26.jpg' id="img" onclick="openModal();currentSlide(16)" width='180' height='210' />
		        	</li>
		        	<li id="pt">
		        		<img src='event1/27.jpg' id="img" onclick="openModal();currentSlide(17)" width='180' height='210' />
		        	</li>
		        	<li id="pt">
		        		<img src='event1/28.jpg' id="img" onclick="openModal();currentSlide(18)" width='180' height='210' />
		        	</li>
		        </ul>
			</div>
		</div>
		<br><br>
		<div id="four">
			<p><b>Asola-Bhatti Wildlife Sanctuary: 3<sup>rd</sup> February 2017</b></p><hr>
			<div class="img">
				<ul id="list">
					<li id="pt">
		        		<img src='event1/14.jpg' id="img" onclick="openModal();currentSlide(19)" width='180' height='210' />
		        	</li>
		        	<li id="pt">
		        		<img src='event1/15.jpg' id="img" onclick="openModal();currentSlide(20)" width='180' height='210' />
		        	</li>
		        	<li id="pt">
		        		<img src='event1/16.jpg' id="img" onclick="openModal();currentSlide(21)" width='180' height='210' />
		        	</li>
		        	<li id="pt">
		        		<img src='event1/17.jpg' id="img" onclick="openModal();currentSlide(22)" width='180' height='210' />
		        	</li>
		        	<li id="pt">
		        		<img src='event1/18.jpg' id="img" onclick="openModal();currentSlide(23)" width='180' height='210' />
		        	</li>
		        	<li id="pt">
		        		<img src='event1/19.jpg' id="img" onclick="openModal();currentSlide(24)" width='180' height='210' />
		        	</li>
		        </ul>
			</div>
		</div>
		<br><br>
		<div id="five">
			<p><b>No Cracker Campaign Week: 25<sup>th</sup> October 2016 - 28<sup>th</sup> October 2016</b></p><hr>
			<div class="img">
				<ul id="list">
					<li id="pt">
		        		<img src='event1/20.jpg' id="img" onclick="openModal();currentSlide(25)" width='180' height='210' />
		        	</li>
		        	<li id="pt">
		        		<img src='event1/21.jpg' id="img" onclick="openModal();currentSlide(26)" width='180' height='210' />
		        	</li>
		        	<li id="pt">
		        		<img src='event1/22.jpg' id="img" onclick="openModal();currentSlide(27)" width='180' height='210' />
		        	</li>
		        	<li id="pt">
		        		<img src='event1/23.jpg' id="img" onclick="openModal();currentSlide(28)" width='180' height='210' />
		        	</li>
		        	<li id="pt">
		        		<img src='event1/30.jpg' id="img" onclick="openModal();currentSlide(29)" width='180' height='210' />
		        	</li>
		        </ul>
			</div>
		</div>
		<br><br>
		<div id="six">
			<p><b>Solid Waste Management: 3<sup>rd</sup> October 2016</b></p><hr>
			<div class="img">
				<ul id="list">
					<li id="pt">
		        		<img src='event1/36.jpg' id="img" onclick="openModal();currentSlide(30)" width='180' height='210' />
		        	</li>
		        	<li id="pt">
		        		<img src='event1/37.jpg' id="img" onclick="openModal();currentSlide(31)" width='180' height='210' />
		        	</li>
		        	<li id="pt">
		        		<img src='event1/38.jpg' id="img" onclick="openModal();currentSlide(32)" width='180' height='210' />
		        	</li>
		        </ul>
			</div>
		</div>
		<br><br>
		<div id="seven">
			<p><b>Yamuna Biodiversity Park: 19<sup>th</sup> September 2016</b></p><hr>
			<div class="img">
				<ul id="list">
					<li id="pt">
		        		<img src='event1/33.jpg' id="img" onclick="openModal();currentSlide(33)" width='180' height='210' />
		        	</li>
		        	<li id="pt">
		        		<img src='event1/34.jpg' id="img" onclick="openModal();currentSlide(34)" width='180' height='210' />
		        	</li>
		        	<li id="pt">
		        		<img src='event1/35.jpg' id="img" onclick="openModal();currentSlide(35)" width='180' height='210' />
		        	</li>
		        </ul>
			</div>
		</div>
		<br><br>
		<div id="eight">
			<p><b>Orientation Programme: 4<sup>th</sup> September 2016</b></p><hr>
			<div class="img">
				<ul id="list">
					<li id="pt">
		        		<img src='event1/31.jpg' id="img" onclick="openModal();currentSlide(36)" width='180' height='210' />
		        	</li>
		        	<li id="pt">
		        		<img src='event1/32.jpg' id="img" sonclick="openModal();currentSlide(37)" width='180' height='210' />
		        	</li>
		        </ul>
			</div>
		</div>
	</div>

	<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 37</div>
      <img src="event1/41.jpg" class="galslid">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 37</div>
      <img src="event1/1.jpg" class="galslid">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 37</div>
      <img src="event1/2.jpg" class="galslid">
    </div>
    
    <div class="mySlides">
      <div class="numbertext">4 / 37</div>
      <img src="event1/3.jpg" class="galslid">
	</div>
	
	<div class="mySlides">
      <div class="numbertext">5 / 37</div>
      <img src="event1/4.jpg" class="galslid">
	</div>
	
	<div class="mySlides">
      <div class="numbertext">6 / 37</div>
      <img src="event1/5.jpg" class="galslid">
	</div>
	
	<div class="mySlides">
      <div class="numbertext">7 / 37</div>
      <img src="event1/6.jpg" class="galslid">
	</div>
	
	<div class="mySlides">
      <div class="numbertext">8 / 37</div>
      <img src="event1/7.jpg" class="galslid">
	</div>
	
	<div class="mySlides">
      <div class="numbertext">9 / 37</div>
      <img src="event1/8.jpg" class="galslid">
	</div>
	
	<div class="mySlides">
      <div class="numbertext">10 / 37</div>
      <img src="event1/9.jpg" class="galslid">
	</div>
	
	<div class="mySlides">
      <div class="numbertext">11 / 37</div>
      <img src="event1/10.jpg" class="galslid">
	</div>
	
	<div class="mySlides">
      <div class="numbertext">12 / 37</div>
      <img src="event1/11.jpg" class="galslid">
	</div>
	
	<div class="mySlides">
      <div class="numbertext">13 / 37</div>
      <img src="event1/12.jpg" class="galslid">
	</div>
	
	<div class="mySlides">
      <div class="numbertext">14 / 37</div>
      <img src="event1/24.jpg" class="galslid">
	</div>
	
	<div class="mySlides">
      <div class="numbertext">15 / 37</div>
      <img src="event1/25.jpg" class="galslid">
	</div>
	
	<div class="mySlides">
      <div class="numbertext">16 / 37</div>
      <img src="event1/26.jpg" class="galslid">
	</div>
	
	<div class="mySlides">
      <div class="numbertext">17 / 37</div>
      <img src="event1/27.jpg" class="galslid">
	</div>
	
	<div class="mySlides">
      <div class="numbertext">18 / 37</div>
      <img src="event1/28.jpg" class="galslid">
	</div>
	
	<div class="mySlides">
      <div class="numbertext">19 / 37</div>
      <img src="event1/14.jpg" class="galslid">
	</div>
	
	<div class="mySlides">
      <div class="numbertext">20 / 37</div>
      <img src="event1/15.jpg" class="galslid">
	</div>
	
	<div class="mySlides">
      <div class="numbertext">21 / 37</div>
      <img src="event1/16.jpg" class="galslid">
	</div>
	
	<div class="mySlides">
      <div class="numbertext">22 / 37</div>
      <img src="event1/17.jpg" class="galslid">
	</div>
	
	<div class="mySlides">
      <div class="numbertext">23 / 37</div>
      <img src="event1/18.jpg" class="galslid">
	</div>
	
	<div class="mySlides">
      <div class="numbertext">24 / 37</div>
      <img src="event1/19.jpg" class="galslid">
	</div>
	
	<div class="mySlides">
      <div class="numbertext">25 / 37</div>
      <img src="event1/20.jpg" class="galslid">
	</div>
	
	<div class="mySlides">
      <div class="numbertext">26 / 37</div>
      <img src="event1/21.jpg" class="galslid">
	</div>
	
	<div class="mySlides">
      <div class="numbertext">27 / 37</div>
      <img src="event1/22.jpg" class="galslid">
	</div>
	
	<div class="mySlides">
      <div class="numbertext">28 / 37</div>
      <img src="event1/23.jpg" class="galslid">
	</div>
	
	<div class="mySlides">
      <div class="numbertext">29 / 37</div>
      <img src="event1/30.jpg" class="galslid">
	</div>
	
	<div class="mySlides">
      <div class="numbertext">30 / 37</div>
      <img src="event1/36.jpg" class="galslid">
	</div>
	
	<div class="mySlides">
      <div class="numbertext">31 / 37</div>
      <img src="event1/37.jpg" class="galslid">
	</div>
	
	<div class="mySlides">
      <div class="numbertext">32 / 37</div>
      <img src="event1/38.jpg" class="galslid">
	</div>
	
	<div class="mySlides">
      <div class="numbertext">33 / 37</div>
      <img src="event1/33.jpg" class="galslid">
	</div>
	
	<div class="mySlides">
      <div class="numbertext">34 / 37</div>
      <img src="event1/34.jpg" class="galslid">
	</div>
	
	<div class="mySlides">
      <div class="numbertext">35 / 37</div>
      <img src="event1/35.jpg" class="galslid">
	</div>
	
	<div class="mySlides">
      <div class="numbertext">36 / 37</div>
      <img src="event1/31.jpg" class="galslid">
	</div>
	
	<div class="mySlides">
      <div class="numbertext">37 / 37</div>
      <img src="event1/32.jpg" class="galslid">
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