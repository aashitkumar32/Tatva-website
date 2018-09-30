<?php
	include('header.html');
?>

<html>

<style>
	div.gallery 
	{
        align-content: center;
        width:200px;
        height: 200px;
        display: block;
        margin: auto;
  	}
    #img
    {
		margin-top: 30px;
        display: block;
     	margin-left: auto;
     	margin-right: auto;
    }

    div.gallery #img:hover 
    {
        transition: 0.2s;
        width: 180px;
        height:180px;
        border:1px solid aqua;
    }

    div.gallery #img 
    {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        transition: 0.4s;
        box-shadow: 20px 20px 30px 10px  #aaaaaa;
    }

  	div.desc 
  	{
      	padding: 15px;
      	text-align: center;
      	overflow: hidden;
      	font-weight: bold;
      	font-family: sans-serif;
  	}

  	* 
  	{
      	box-sizing: border-box;
 	}

    .responsive 
    {
    //	margin-top: 25px;
    	margin-bottom: 80px; 
      	padding: 0 6px;
      	float: left;
      	width: 24.99999%;
  	}

  	@media only screen and (max-width: 700px) {
      .responsive 
      {
          width: 49.99999%;
          margin: 6px 0;
      }
 	}

  	@media only screen and (max-width: 500px) {
      .responsive 
      {
          width: 100%;
      }
  	}
  	

	</style>

<body>


	<div class="members">
       <hr>
       <CENTER> <h2>OFFICE BEARERS</h2></CENTER>
       <hr>
	   <br>
	        <div class='gallery' style="margin-bottom: 50px">
	        	<a target='_blank' href='student/nikunj.jpeg'>
	        		<img src='student/nikunj.jpeg' id="img" alt='icon' width='150' height='150' />
	        	</a>
	        	<div class='desc'>Mr. Nikunj (President)</div>
	        </div>
	</div>
	<div class="members">
	    <div class='responsive'>
	        <div class='gallery'>
	        	<a target='_blank' href='student/harsh.jpeg'>
	        		<img src='student/harsh.jpeg' id="img" alt='icon' width='150' height='150' />
	        	</a>
	        	<div class='desc'>Mr. Harsh (Vice President)</div>
	        </div>
	    </div>
	    <div class='responsive'>
	        <div class='gallery'>
	        	<a target='_blank' href='student/uddish.jpeg'>
	        		<img src='student/uddish.jpeg' id="img" alt='icon' width='150' height='150' />
	        	</a>
	        	<div class='desc'>Mr. Uddish (Secretary)</div>
	        </div>
	    </div>
	    <div class='responsive'>
	        <div class='gallery'>
	        	<a target='_blank' href='student/garvit.jpeg'>
	        		<img src='student/garvit.jpeg' id="img" alt='icon' width='150' height='150' />
	        	</a>
	        	<div class='desc'>Mr. Garvit (Joint Secretary)</div>
	        </div>
	    </div>
	    
	   <div class='responsive' >
	        <div class='gallery'>
	        	<a target='_blank' href='student/nimisha.jpeg'>
	        		<img src='student/nimisha.jpeg' id="img" alt='icon' width='150' height='150' />
	        	</a>
	        	<div class='desc'>Ms. Nimisha (Marketing Head)</div>
	        </div>
	    </div>

	    <div class='responsive'>
	        <div class='gallery'>
	        	<a target='_blank' href='student/ankit.jpeg'>
	        		<img src='student/ankit.jpeg' id="img" alt='icon' width='150' height='150' />
	        	</a>
	        	<div class='desc'>Mr. Ankit (Marketing Head)</div>
	        </div>
	    </div>
	    <div class='responsive'>
	        <div class='gallery'>
	        	<a target='_blank' href='student/nandita.jpeg'>
	        		<img src='student/nandita.jpeg' id="img" alt='icon' width='150' height='150' />
	        	</a>
	        	<div class='desc'>Ms. Nandita (Creative Head)</div>
	        </div>
	    </div>
	    <div class='responsive'>
	        <div class='gallery'>
	        	<a target='_blank' href='student/pooja.jpeg'>
	        		<img src='student/pooja.jpeg' id="img" alt='icon' width='150' height='150' />
	        	</a>
	        	<div class='desc'>Ms. Pooja (Creative Head)</div>
	        </div>
	    </div>
	    <div class='responsive'>
	        <div class='gallery'>
	        	<a target='_blank' href='student/ravi.jpeg'>
	        		<img src='student/ravi.jpeg' id="img" alt='icon' width='150' height='150' />
	        	</a>
	        	<div class='desc'>Mr. Ravi (Technical Head)</div>
	        </div>
		</div>
		
		<div class='responsive'>
	        <div class='gallery'>
	        	<a target='_blank' href='student/pankaj.jpeg'>
	        		<img src='student/pankaj.jpeg' id="img" alt='icon' width='150' height='150' />
	        	</a>
	        	<div class='desc'>Mr. Pankaj (Technical Head)</div>
	        </div>
		</div>
		
		<div class='responsive'>
	        <div class='gallery'>
	        	<a target='_blank' href='student/akansha.jpeg'>
	        		<img src='student/akansha.jpeg' id="img" alt='icon' width='150' height='150' />
	        	</a>
	        	<div class='desc'>Ms. Akansha (Managing Director: Academics)</div>
	        </div>
		</div>
		
		<div class='responsive'>
	        <div class='gallery'>
	        	<a target='_blank' href='student/dheeraj.jpeg'>
	        		<img src='student/dheeraj.jpeg' id="img" alt='icon' width='150' height='150' />
	        	</a>
	        	<div class='desc'>Mr. Dheeraj (Managing Director: Non-Academics)</div>
	        </div>
	    </div>
	    
	</div>
</div>
</body>

</html>

<?php
	include('footer.html');
?>

