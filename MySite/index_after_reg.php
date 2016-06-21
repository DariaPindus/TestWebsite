<?php
    session_start();
?>
<html>
<head>
    <meta charset="utf-8" />	
	<title>My Website</title>
    <meta name="viewport" content="user-scalable=yes, width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script src="js/menu.js"></script>
<script src="js/main.js"></script>
</head>
<body>
    <div id="above">
		
	<div class="menu">
		<div class="icon-close">
			<img src="img/close-btn.png"/>
		</div>
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">Aliexpress</a></li>
			<li><a href="#">Sales</a></li>
			<li><a href="#">Content</a></li>
			<li><a href="#">About Us</a></li>
		</ul>
	</div>
	
	<div id="user_acts">
			<a href="#signup">Hi, <?php echo $_SESSION['login']; ?></a>
			<a href="logout.php" onclick="LoggingOut()">Log out</a>
	</div>
	
    <header>
	<div class="icon-menu">
        <img src="img/hamburger_.png" height="35" width="40"/>
	 </div>
        <div  id="logo">
            <a href="index_after_reg.php">
            <h1><span id="name" >Alie Stylist </span></h1></a>
            <h3> Your own shopping guide</h3>
        </div>
		
    </header>
	
    <nav>
        <a href="index_after_reg.php" class="selected">Home</a>
        <a href="alie.html">Aliexpress</a>
        <a href="sales.html">Sales</a>
        <a  href="content.php">Content</a>
        <a href="about.php">About Us</a>
    </nav>
    </div>
    
    <div id="content">
        <div id="main">
            <div id="greeting">
                <h1 id="welcome">Welcome to Alie Stylist</h1>
                <article>
                    This site is made to let every shopoholic find cool, stylish and what's more important not expensive clothes using Aliexpress. As we all know it may seem to be an infinite stack of rag. But with the help of
                    our site this chasm will become a treasure chest for you.
                </article>
                <p class="buttons"><a href="alie.html">Start</a> <a id="draws" href="draws.html">Current draws</a></p>
            </div>
            <div id="links">
                <h2 >Useful links</h2>
                <ul>
                    <li><a href="https://soundcloud.com/" target="_blank">Make your mind to shop</a></li>
                    <li><a href="http://fashionista.com/" target="_blank">Learn more about fashion</a></li>
                    <li><a href="http://www.vogue.com/" target="_blank">Find more about current trends</a></li>
                    <li><a href="http://www.fashionphotographyblog.com/" target="_blank">Get yourself some more inspiration</a></li>
                    <li><a href="http://www.nycgo.com/events" target="_blank">Know where to show your new dress</a></li>
                </ul>
            </div>
        </div>
        
        <div class="table">
			<div class="thumb">
				<div class="content">
					<h1>Dresses</h1>
					<p>Light summer sleeves-off dresses, chic cocktail or simple everyday and basic apparels.</p>
					
				</div>
				<div class="wrapper">
					<img src="img/content/dress1.jpg"/>
				</div>
			</div>

			<div class="thumb">
				<div class="content">
					<h1>Tops</h1>
					<p>Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem. Mauris quam enim, molestie.</p>
				</div>
				<div class="wrapper">
					<img src="img/content/tshirt1.jpg"/>
				</div>
			</div>

			<div class="thumb">
				<div class="content">
					<h1>Bottoms</h1>
					<p>Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem. Mauris quam enim, molestie.</p>					
				</div>
				<div class="wrapper">
					<img src="img/content/bottoms1.jpg"/>
				</div>
			</div>

			<div class="thumb">
				<div class="content">
					<h1>Shoes</h1>
					<p>Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem. Mauris quam enim, molestie.</p>					
				</div>
				<div class="wrapper">
					<img src="img/content/shoes1.jpg"/>
				</div>
			</div>

			<div class="thumb">
				<div class="content">
					<h1>Accessories</h1>
					<p>Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem. Mauris quam enim, molestie.</p>					
				</div>
				<div class="wrapper">
					<img src="img/content/access1.jpg"/>
				</div>
			</div>

			<div class="thumb">
				<div class="content">
					<h1>Other</h1>
					<p>Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem. Mauris quam enim, molestie.</p>					
				</div>
				<div class="wrapper">
					<img src="img/content/other1.jpg"/>
				</div>
			</div>
			
            
        </div>
        
    </div>
	
	<footer>
		<div id="feedback">
			<input type="text" placeholder="Name" id="name_fb" name="name_fb"><br />
			<input type="text" placeholder="Email" id="email" name="email"><br />
			<input type="text" placeholder="Message subject" id="subject" name="subject"><br />
			<textarea name="message" id="message" placeholder="Enter your message"></textarea><br />
			<div id="#messageShow"></div>
			<input type="button" name="done" id="done" value="Send">
		</div>
		<ul class="icons">
			<li><a href="facebook.com"><img src="img/icons/fb.png"/></a></li>
			<li><a href="instagram.com"><img src="img/icons/inst.png"/></a></li>
			<li><a href="twitter.com"><img src="img/icons/twit.png"/></a></li>
		</ul>	
	</footer>
</body>
</html>