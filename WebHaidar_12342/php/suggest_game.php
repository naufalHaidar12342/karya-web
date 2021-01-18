
<html lang='en'>
<head>
	<meta charset="UTF-8"> 
    <meta name="viemport" content="width=device-width,intial-scale=1.0">
	<title>Kanal Game</title>
	<link rel='stylesheet' href='css/kanal-gameCss.css'>
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
            <li><a href="WebHaidar_12342/news.html">News/новость</a></li>
            <li><a href="WebHaidar_12342/game-story.html">Game Story/История Игры</a></li>
            <li><a href="WebHaidar_12342/opinion.html">Opinion/мой взгляд</a></li>
            <li><a href="WebHaidar_12342/about-me.html">About me/обо мне</a></li>
			<li><a href="php/suggest_game.php">Suggest a game!</a></li>
		</ul>
    </div>
    
    <div class="suggestion">
        <div class="pengantar-form">
            <h2 style="text-align: center;">Suggest a game!</h2>
        <p>
            I'm aware that not all games being reviewed yet, so I need your help! By submitting your suggestion, you are enliven my blog and indirectly helps my blog to grow. Thanks!
        </p>
        </div>

        <div class="container">
            <form method="POST" action="mapPlastik.php">
                <div class="row">
                    <div class="col-25">
                        <label for="your-name">Your Name:</label>
                    </div>
                    
                    <div class="col-75">
                        <input type="text" id="your-name" name="your-name" placeholder="Your name here...">
                    </div>
                </div>
    
    
                <div class="row">
                    <div class="col-25">
                        <label for="game-title">Game's title:</label>
                    </div>
                    
                    <div class="col-75">
                        <input type="text" id="game-title" name="game-title" placeholder="Write the game name here...">
                    </div>
                </div>
    
    
                <div class="row">
                    <div class="col-25">
                        <label for="genre">Genre of game :</label>
                    </div>
    
                    <div class="col-75">
                        <select name="genre" id="genre">
                            <option value="FPS">First-Person Shooter</option>
                            <option value="Racing">Racing</option>
                            <option value="Action">Action</option>
                            <option value="Fighting">Fighting</option>
                            <option value="other">Other...</option>
                        </select>
                    </div>
                </div>
    
                <div class="row">
                    <div class="col-25">
                        <label for="reason">Reason</label>
                    </div>
    
                    <div class="col-75">
                        <textarea name="reason" id="reason" placeholder="write your opinion here..." style="height: 200px;"></textarea>
                    </div>
                </div>
    
                <div class="row">
                    <input type="submit" value="Submit!">
                </div>
            </form>
        </div>
    </div>
    