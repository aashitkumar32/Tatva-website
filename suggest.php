<?php
    include("header.html");
?>

<html>
    <head>
        <style>
        .suggestion
		{
            width: 80%;
            margin-left: ;
			margin-top: 50px;
            margin-bottom: 50px;
		}
		input, textarea
		{
			font-family: 'Courier New', Courier, monospace;
			font-size:18px;
			margin-top: 10px;
			width: 100%;
			margin-left: 10%;	
			padding:12px;
			border:2px grey solid;
			border-radius:4px;	
			outline:none;
			transition:.5s;
		}
		input:focus{
			transition:.5s;
			border:2px black solid;
		}
        #sub
        {
            width: 100px;
            padding: 15px;
            border-radius: 40px;
        }
        </style>
    </head>

    <body>
        <div class="suggestion">
            <h2>Suggestions Page</h2>
            <?php
                if(isset($comment))
                    echo "<b style='color: green'>$comment</b>";
            ?>
            <form action="suggestions.php" method="post">
                <br><br>
                <input type="text" name="name" placeholder="Enter you name" autofocus required/><br><br>
                <input type="email" name="email" placeholder="Enter your Email Id" required/><br><br>
                <input type="text" name="mob" placeholder="Enter your Mobile number" required/><br><br>
                <textarea rows="8" cols="50" placeholder="Enter your suggestions here" name="desc" required></textarea><br><br>
                <input type="submit" name="submit" value="Submit" id="sub"/>
            </form>
        </div>
    </body>
</html>

<?php
    include("footer.html");
?>