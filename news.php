<?php
    include('header.html');
    include('DBLinker.php')
?>
<html>
    <head>
        <style>
            #news
            {
                width: 85%;
                margin-left: auto;
                margin-right: auto;
                background-color: white;
                margin-top: 100px;
                margin-bottom: 50px;
                padding: 40px;
                min-height: 300px;
                max-height: auto;
                box-shadow: 20px 20px 30px 10px  #aaaaaa;
            }
            h5
            {
                float: right;
                color: green;
            }
        </style>
    </head>

    <body>
        
            <?php
                $result = mysqli_query($con, "SELECT * FROM news ORDER BY sno DESC");
                while ($out = mysqli_fetch_assoc($result)) 
                {
                    echo "<div id='news'><u><h2>$out[headline]</h2></u><br>
                            <p><b>$out[news]</b></p><br>
                            <h5>Source: $out[source]</h5></div>";
                }
            ?>
        
    </body>
</html>

<?php
    include('footer.html');
?>
