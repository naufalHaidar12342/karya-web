<!DOCTYPE html>
<!-- haidar-12342 -->
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>submit your favourit game</title>
    <link rel='stylesheet' href='css/styleForm.css'>
</head>
<body>
    <h2 style="text-align: center;">Thanks for the suggestion!</h2>
    <p>
        I might not able to instantly reply to your suggestion, but i definitely gonna reply it~
    </p>
    
    <div class="container">
            <?php
			    if (isset($_POST['your-name'])){
			    $yourname=$_POST['your-name'];
                echo "<h3>Your name : <b>$yourname</b></h3>";
                $gametitle=$_POST['game-title'];
                echo "<h3> Game's title : <b>$gametitle</b></h3>";
                $genre=$_POST['genre'];
	            echo "<h3>Genre of game : <b>$genre</b></h3>";
                $reason=$_POST['reason'];
                echo "<h3>Reason : <b>$reason</b></h3>";
			    }
		    ?>

            <div class="row">
                <a href="suggest_game.php">Submit other games!</a>
            </div>
        
    </div>
</body>
</html>