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
		margin-top: 50px;
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

    .responsiv
    {
    //	margin-top: 25px;
    	margin-bottom: 80px; 
      	padding: 0 6px;
      	float: left;
      	width: 24.99999%;
  	}

  	@media only screen and (max-width: 700px) {
      .responsiv 
      {
          width: 49.99999%;
          margin: 6px 0;
      }
 	}

  	@media only screen and (max-width: 500px) {
      .responsiv 
      {
          width: 100%;
      }
  	}
  
  

	</style>

<body>


	<div class="members">
       <hr>
       <CENTER> <h2>FACULTY MEMBERS</h2></CENTER>
       <hr>
	   <br>
	        <div class='gallery' style="margin-bottom: 50px">
	        	<a target='_blank' href='faculty/sumit.jpeg'>
	        		<img src='faculty/sumit.jpeg' id="img" alt='icon' width='150' height='150' />
	        	</a>
	        	<div class='desc'>Dr. Sumit Nagpal (Convenor) (Department of Mathematics)</div>
	        </div>
	</div>
	<div class="members">
	    <div class='responsiv'>
	        <div class='gallery'>
	        	<a target='_blank' href='faculty/neha.jpeg'>
	        		<img src='faculty/neha.jpeg' id="img" alt='icon' width='150' height='150' />
	        	</a>
	        	<div class='desc'>Ms. Neha Yadav (Department of Environmental Studies)</div>
	        </div>
	    </div>
	    <div class='responsiv'>
	        <div class='gallery'>
	        	<a target='_blank' href='faculty/tenzin.jpeg'>
	        		<img src='faculty/tenzin.jpeg' id="img" alt='icon' width='150' height='150' />
	        	</a>
	        	<div class='desc'>Dr. Tenzin Thakur (Department of Environmental Studies)</div>
	        </div>
	    </div>
	    <div class='responsiv'>
	        <div class='gallery'>
	        	<a target='_blank' href='faculty/shruti.jpeg'>
	        		<img src='faculty/shruti.jpeg' id="img" alt='icon' width='150' height='150' />
	        	</a>
	        	<div class='desc'>Dr. Shruti Jain (Department of English)</div>
	        </div>
	    </div>
	    
	   <div class='responsiv' >
	        <div class='gallery'>
	        	<a target='_blank' href='faculty/suchi.jpeg'>
	        		<img src='faculty/suchi.jpeg' id="img" alt='icon' width='150' height='150' />
	        	</a>
	        	<div class='desc'>Ms. Suchi Patti (Department of Commerce)</div>
	        </div>
	    </div>

	    <div class='responsiv'>
	        <div class='gallery'>
	        	<a target='_blank' href='faculty/aparajita.jpeg'>
	        		<img src='faculty/aparajita.jpeg' id="img" alt='icon' width='150' height='150' />
	        	</a>
	        	<div class='desc'>Dr. Aparajita Mazumdar (Department of Political Science)</div>
	        </div>
	    </div>
	    <div class='responsiv'>
	        <div class='gallery'>
	        	<a target='_blank' href='faculty/isha.jpeg'>
	        		<img src='faculty/isha.jpeg' id="img" alt='icon' width='150' height='150' />
	        	</a>
	        	<div class='desc'>Ms. Isha Gangwani (Department of Economics)</div>
	        </div>
	    </div>
	    <div class='responsiv'>
	        <div class='gallery'>
	        	<a target='_blank' href='faculty/sajjan.jpeg'>
	        		<img src='faculty/sajjan.jpeg' id="img" alt='icon' width='150' height='150' />
	        	</a>
	        	<div class='desc'>Mr. S. K. Sajjan (Department of Political Science)</div>
	        </div>
	    </div>
	    <div class='responsiv'>
	        <div class='gallery'>
	        	<a target='_blank' href='faculty/shailendra.jpeg'>
	        		<img src='faculty/shailendra.jpeg' id="img" alt='icon' width='150' height='150' />
	        	</a>
	        	<div class='desc'>Mr. Shailender Pathak (Department of Political Science)</div>
	        </div>
	    </div>
	    <div class='responsiv'>
	        <div class='gallery'>
	        	<a target='_blank' href='faculty/parul.jpeg'>
	        		<img src='faculty/parul.jpeg' id="img" alt='icon' width='150' height='150' />
	        	</a>
	        	<div class='desc'>Ms. Parul Yadav (Department of Commerce and Management)</div>
	        </div>
	    </div>
	    <div class='responsiv'>
	        <div class='gallery'>
	        	<a href='#'>
	        		<img src='faculty/anumita.png' id="img" alt='icon' width='150' height='150' />
	        	</a>
	        	<div class='desc'>Dr. Anumita Shukla (Department of Philosophy)</div>
	        </div>
	    </div>
	    <div class='responsiv'>
	        <div class='gallery'>
	        	<a target='_blank' href='faculty/anshika.jpeg'>
	        		<img src='faculty/anshika.jpeg' id="img" alt='icon' width='150' height='150' />
	        	</a>
	        	<div class='desc'>Dr. Anshika Agarwal (Department of Commerce)</div>
	        </div>
	    </div>
	    <div class='responsiv'>
	        <div class='gallery'>
	        	<a target='_blank' href='faculty/aanchal.jpeg'>
	        		<img src='faculty/aanchal.jpeg' id="img" alt='icon' width='150' height='150' />
	        	</a>
	        	<div class='desc'>Ms. Aanchal Singh (Department of Commerce and Management)</div>
	        </div>
	    </div>
	</div>
	
</body>

</html>


<?php
	include('footer.html');
?>
