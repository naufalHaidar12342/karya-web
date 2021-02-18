<!DOCTYPE html>
<!-- haidar-12342 -->
<html>
<head>
    <? require "settingnya.php";?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kanal Game</title>
    <link rel="stylesheet" href="special4php.css">
</head>
<body>
    <header>
		<h1 style='text-align:center'> Kanal Game</h1>
		<h3 style='text-align:center'>kanal game (игровой канал)</h3>
		<h3 style='text-align:center'>hope you get something useful~</h3>
		<hr>
	</header>
	<div class="navbar">
        <ul>
            <li><a href="<?= base_url ?>/news.html">News/новость</a></li>
            <li><a href="<?= base_url ?>/game-story.html">Game Story/История Игры</a></li>
            <li><a href="<?= base_url ?>/opinion.html">Opinion/мой взгляд</a></li>
            <li><a href="<?= base_url ?>/about-me.html">About me/обо мне</a></li>
			<li><a href="<?= base_url ?>php/suggest_game.php">Suggest a game!</a></li>
		</ul>
    </div>


    <div class="confirmation">
        <div class="thanks">
            Thanks for the suggestion!
            I might not able to instantly reply to your suggestion, but i definitely gonna reply it~
        </div>
    </div>
        
    
    
    <div class="show-data">
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

    <footer>
            <p> Click the glasses!</p>
            <script type="text/javascript"src="jawa_skript.js"></script>
            <span class="icon" onclick="setDarkMode()" id="darkButton">👓</span>
            
        </footer>

</body>
</html>