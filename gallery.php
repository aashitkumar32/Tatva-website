<html>
<head>
    <style>
        body
        {
          background-color:;
        }
        div.gallery 
        {
            border: 1px solid #ccc;
            height: 200px;
            position: relative;
            -moz-box-shadow: 1px 2px 4px rgba(0, 0, 0,0.5);
            -webkit-box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);
            box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);
            padding: 10px;
            background: white;
        }

        div.gallery:hover 
        {
            border: 1px solid black;
            box-shadow: 15px 15px 20px rgba(0, 0, 0, 0.3);
            
        }

        div.gallery img 
        {
            width: 100%;
            height: auto;
            border-style: inset;
                }

        div.desc 
        {
            padding: 15px;
            text-align: center;
            overflow: hidden;
        }

        * {
            box-sizing: border-box;
        }

        .responsive 
        {
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
</head>
<body>
      
<?php
    include('header.php');
   $dir=("gallery/");
   $images=scandir($dir);
   array_splice($images,0,2);
    $val=count($images);
   
    
for($value=0;$value<$val;$value++)
{   
      echo "<div class='responsive'>
      <div class='gallery'>
      <a target='_blank' href='$dir$images[$value]'>
      <img src='$dir$images[$value]' alt='$images[$value]' style='width: 285px; height: 180px'>
      </a>
      <div class='desc>Add a description of the image here</div>
      </div>
      </div>";
}
 ?>
    <br />
</body>
<?php
   include('footer.php');
?>    