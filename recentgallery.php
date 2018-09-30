<?
	include('header.html');
	include('DBLinker.php');
?>

<html>

<style>
	.img:hover
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

		display: inline-block;
		margin-right: 30px;
		margin-left: 30px;
		margin-bottom: 30px;
	}
	.desc
	{
		color: green;
	}
	.gall
	{
		width: 85%;
		margin-left: auto;
		margin-right:auto;
		margin-top: 30px;
	}
</style>
<body>
	<div class="gall">
		<?php

$dir=("gallery/");
$images=scandir($dir);
array_splice($images,0,2);
$val=count($images);
chdir($dir);
array_multisort(array_map('filemtime', ($files = glob("*.*"))), SORT_DESC, $files);

for($value=0;$value<$val;$value++)
{   
$description = mysqli_query($con, "SELECT `description` FROM `images` WHERE name = '$files[$value]'");
$desc = mysqli_fetch_array($description);

 echo "		    	
	 <ul id='list'>
		 <li id='pt'><a target='_blank' href='$dir$files[$value]'>
			 <hr><div class='desc'><b>$desc[0]</b></div><hr>
					 <img src='$dir$files[$value]' alt='$images[$value]' style='width: 180px; height: 210px' class='img'>
				 </a></li>
			 </ul>
 ";
}
		 ?>
		 
		</div>
	
</body>

</html>

<?php
	include('footer.html');
?>


