<?php
	session_start();
	?>
<html>
<head>
    <meta charset="utf-8" />	
	<title>My Website</title>
    <meta name="viewport" content="user-scalable=yes, width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" href="css/style_content.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="js/menu.js"></script>
</head>

<body>
    <div id="above">
        <div id="user_acts">
			<a href="#signup" id="first">Register</a>
			<a href="#signin">Log in</a>
        </div>
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
     <div class="icon-menu">
        <img src="img/hamburger_.png" height="35" width="40"/>
	 </div>
	 
	 <div id="user_acts">
			<a href="#signup">Hi, <?php echo $_SESSION['login']; ?></a>
			<a href="logout.php" onclick="LoggingOut()">Log out</a>
	</div>
        
    <header>
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
        <a  href="content.html">Content</a>
        <a href="about.html">About Us</a>
    </nav>
    
    </div>
    
    <div id="content">
<!--        <div id="side_bar">
            <ul>
			<li><a href="index.html">Home</a></li>
			<li><a href="alie.html">Aliexpress</a></li>
			<li><a href="sales.html">Sales</a></li>
			<li><a href="content.html">Content</a></li>
			<li><a href="about.html">About Us</a></li>
		</ul>
        </div>
		-->
		<div id="main">
			<h1> CONTENT </h1>
			<div id="container">
				<div id="element"><a href="http://ali.pub/2xuqm">
                    <img src="http://cs604527.vk.me/v604527269/13874/qhXBVDsGP7M.jpg">
                    <div id="info">
                        <p id="name">Nice top</p><p id="price">6.5$</p>
                    </div>
                </a></div>
                
                <div id="element"><a href="http://ali.pub/tbxd7">
                    <img src="https://pp.vk.me/c626324/v626324269/14a5c/hTS5MIpz8tY.jpg">
                    <div id="info">
                        <p id="name">Cute pink floral bag</p><p id="price">13.5$</p>
                    </div>
                </a></div>
                
                <div id="element"><a href="http://ali.pub/3gsh4">
                    <img src="https://pp.vk.me/c626324/v626324269/14667/8OAD-jpuj6w.jpg">
                    <div id="info">
                        <p id="name">Stylish white sneakers</p><p id="price">18.9$</p>
                    </div>
                </a></div>
                
                <div id="element"><a href="http://ali.pub/m7bn5 ">
                    <img src="https://pp.vk.me/c604527/v604527269/1355e/2l8tJ0mNAAw.jpg">
                    <div id="info">
                        <p id="name">Simple basic white dress</p><p id="price">11.3$</p>
                    </div>
                </a></div>
			</div>
		</div>
		
		<footer>
		<ul class="icons">
			<li><a href="facebook.com"><img src="img/icons/fb.png"/></a></li>
			<li><a href="instagram.com"><img src="img/icons/inst.png"/></a></li>
			<li><a href="twitter.com"><img src="img/icons/twit.png"/></a></li>
		</ul>	
	</footer>
    </div>