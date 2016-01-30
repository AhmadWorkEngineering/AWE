<?php
// Free html5 templates : www.zerotheme.com

$text = "<span style='color:red; font-size: 35px; line-height: 40px; magin: 10px;'>Error! Please try again.</span>";

if(isset($_POST['name']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];

	$to = "youremail@gmail.com";
	$subject = "Zerotheme - Testing Contact Form";
	$message = " Name: " . $name ."\r\n Email: " . $email . "\r\n Message:\r\n" . $message;
	 
	$from = "Zerotheme";
	$headers = "From:" . $from . "\r\n";
	$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 
	 
	if(@mail($to,$subject,$message,$headers))
	{
	  $text = "<span style='color:blue; font-size: 35px; line-height: 40px; margin: 10px;'>Your Message was sent successfully !</span>";
	}
}
?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>zFurniture - Free Responsive Html5 Templates</title>
	<meta name="description" content="Free Responsive Html5 Css3 Templates | zerotheme.com">
	<meta name="author" content="www.zerotheme.com">
	
    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
  ================================================== -->
  	<link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/menu.css">
	<link rel="stylesheet" href="css/responsiveslides.css">
    <script src="js/jquery183.min.js"></script>
    <script src="js/responsiveslides.min.js"></script>
    <script>
		// You can also use "$(window).load(function() {"
		$(function () {
		  // Slideshow 
		  $("#slider").responsiveSlides({
			auto: true,
			pager: false,
			nav: true,
			speed: 500,
			namespace: "callbacks",
			before: function () {
			  $('.events').append("<li>before event fired.</li>");
			},
			after: function () {
			  $('.events').append("<li>after event fired.</li>");
			}
		  });
		});
	</script>
	
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="js/html5.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
	<![endif]-->
    
</head>
<body>
<div class="wrap-body">

<!--////////////////////////////////////Header-->
<header>
	<div class="zerogrid">
		<div class="wrap-header">
			<div class="row">
				<div class="col-1-3">
					<div class="wrap-col">
						<div class="logo"><a href="index.html"><h2>Ahmad Works Engineering</h2></a></div>	
					</div>
				</div>
				<div class="col-1-3 offset-1-3">
					<div class="wrap-col">
						<form method="get" action="/search" id="search" class="f-right">
						  <input name="q" type="text" size="40" placeholder="Search..." />
						</form>
					</div>
				</div>
			</div>
		</div>
		<nav id="menu-wrap"><div id="menu-trigger">Menu</div>    
			<ul id="menu" style="display: none;">
				<li><a href="index.html">Home</a></li>
				<li>
					<a href="#">Categories</a>
					<ul>
						<li>
							<a href="#">Item 01</a>
						</li>
						<li>
							<a href="#">Item 02</a>
						</li>
						<li>
							<a href="#">Item 03</a>
							<ul>
								<li><a href="#">Item 31</a></li>
								<li><a href="#">Item 32</a></li>
							</ul>				
						</li>
						<li>
							<a href="#">Item 04</a>				
							<ul>
								<li><a href="#">Item 41</a></li>
								<li><a href="#">Item 42</a></li>
								<li><a href="#">Item 43</a></li>
								<li><a href="#">Item 44</a></li>
							</ul>	
						</li>
					</ul>
				</li>
				<li><a href="single.html">About</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
		</nav>
	</div>
</header>

<section id="container">
	<div class="wrap-container">
		<div class="zerogrid">
			<div class="row">
				<h2>Contact</h2>
				<div class="col-full">
					<iframe src="https://www.google.com/maps/dir/Nishter+St,+Lahore,+Pakistan//@31.5259051,74.2772487,15z/data=!3m1!4b1!4m8!4m7!1m5!1m1!1s0x391903131726efc1:0x332b6b6ce94c3419!2m2!1d74.2860035!2d31.5258871!1m0" width="100%" height="450" frameborder="0" style="border:0"></iframe>
				</div>
				<div class="col-1-3">
					<div class="wrap-col">
						<h3>Contact Info</h3>
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque la udantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia.</p>
						<p>JL.Kemacetan timur no.23. block.Q3<br>
							Jakarta-Indonesia</p>
						   <p>+6221 888 888 90 <br>
							+6221 888 88891</p>
						<p>info@yourdomain.com</p>
					</div>
				</div>
				<div class="col-2-3">
						<div class="wrap-col">
							<div class="contact">
								<h3>Contact Form</h3>
								<!--Warning-->
								<center><?php echo $text;?></center>
								<!---->
								<div id="contact_form">
									<form name="form1" id="ff" method="post" action="contact.php">
										<label class="row">
											<div class="col-1-2">
												<div class="wrap-col">
													<input type="text" name="name" id="name" placeholder="Enter name" required="required" />
												</div>
											</div>
											<div class="col-1-2">
												<div class="wrap-col">
													<input type="email" name="email" id="email" placeholder="Enter email" required="required" />
												</div>
											</div>
										</label>
										<label class="row">
											<div class="col-2-4">
												<div class="wrap-col">
												<input type="text" name="subject" id="subject" placeholder="Subject" required="required" />
												</div>
											</div>
											<div class="col-1-4">
												<div class="wrap-col">
												<input type="date"  name="date" id="date" placeholder="Date"/>
												</div>
											</div>
											<div class="col-1-4">
												<div class="wrap-col">
												<input type="time"  name="time" id="time" placeholder="Time"/>
												</div>
											</div>											
										</label>
										<label class="row">
											<div class="wrap-col">
												<textarea name="message" id="message" class="form-control" rows="4" cols="25" required="required"
												placeholder="Message"></textarea>
											</div>
										</label>
										<center><input class="sendButton" type="submit" name="Submit" value="Submit"></center>
									</form>
								</div>
							</div>
						</div>
					</div>
			</div>
		</div>
	</div>
</section>

<footer>
	<div class="zerogrid">
		<div class="wrap-footer">
			<div class="row">
				<div class="col-1-2">
					<div class="wrap-col">
						<div class="copy-right">
							<p>Copyright 2016 - <a href="index.html" target="_blank" rel="nofollow">Ahmad Works Engineering</a> designed by Zeeshan Ayyub</p>
						</div>
					</div>
				</div>
				<div class="col-1-2">
					<div class="wrap-col">
						<div class="bottom-social t-right">
							<a href="#"><img src="images/facebook.png" title="facebook"/></a>
							<a href="#"><img src="images/twitter.png" title="twitter"/></a>
							<a href="#"><img src="images/google.png" title="google"/></a>
							<a href="#"><img src="images/pinterest.png" title="pinterest"/></a>
							<a href="#"><img src="images/instagram.png" title="instagram"/></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>

<script type="text/javascript">
    $(function() {
		if ($.browser.msie && $.browser.version.substr(0,1)<7)
		{
		$('li').has('ul').mouseover(function(){
			$(this).children('ul').css('visibility','visible');
			}).mouseout(function(){
			$(this).children('ul').css('visibility','hidden');
			})
		}

		/* Mobile */
		$("#menu-trigger").on("click", function(){
			$("#menu").slideToggle();
		});

		// iPad
		var isiPad = navigator.userAgent.match(/iPad/i) != null;
		if (isiPad) $('#menu ul').addClass('no-transition');      
    });          
</script>

</div>
</body></html>