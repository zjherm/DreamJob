<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Twine</title>
  <meta name="description" content="Twine">
  <meta name="author" content="Digital Telepathy">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <link rel="stylesheet" href="css/style.css">
  <link href='http://fonts.googleapis.com/css?family=Muli' rel='stylesheet' type='text/css'>

  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>

<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=369680353102789";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="header" class="section">
	<div class="inner">
		<div id="logo">
			<a href="/" title="Twine">Twine</a>
		</div>
		<h1>Listen to Your World. Talk to the Web.</h1>
		<a href="http://vimeo.com/33192464" class="vid-link red">Watch the Video</a>
		<p class="teal give">Give us your email, and we’ll let you know when it’s available to the public.</p>
		<form name="email-intake" id="email-intake" method="post" action="email-intake.php"> 
        	<input type="email" placeholder="Email" name="email" id="email" required autofocus>
        	<input class="submit" type="submit" name="submit" value="Submit">
		</form>
	</div><!-- .inner -->
</div><!-- #header -->
<div id="main" class="section">
	<div class="inner">
		<h2>Connect your things <br/>to the Internet, <br/>without a nerd degree.</h2>
		<div id="demo-box">
			<div id="thermo">
				<div class="icon"></div>
				<span class="fill"></span>
			</div>
			<div class="alert one"></div>
			<div class="wifi" id="wifi-left">
				<span class="overlay"></span>
			</div>
			<div id="twine-box">
				<span id="red-twine"></span>
				<span class="fill"></span>
			</div>
			<div class="wifi" id="wifi-right">
				<span class="overlay"></span>
			</div>
			<div id="iphone">
				<div class="icon"></div>
				<span class="fill"></span>
			</div>
			<div class="alert two"></div>
		</div><!-- #demo-box -->
		<div id="description" class="responsive">
			<p class="bold">Twine is the simplest possible way to get the objects in your life texting, tweeting or emailing.</p>
			<p>Want to hook up things to the Web? Maybe you want to get a tweet when your laundry's done, or get an email when the basement floods while you're on vacation. Even if you're good with electronics and programming, these are involved projects. Instead of worrying about wiring or networking code, you can focus on your idea.</p>
		</div><!-- #description -->
	</div><!-- .inner -->
</div><!-- #main -->
<div id="footer" class="section">
	<div class="inner">
		<h2 class="white">Objects that <br/>Connect Us.</h2>
		<p class="white">Drawing on our experience in hardware and software, we've spent the last few months creating working prototypes and near-final forms. We are truly excited about getting Twine into people's hands to see what new uses others will find for it.</p>
		<p class="excited red">Get Excited With Us.</p>
		<form name="email-intake" id="email-intake" method="post" action="email-intake.php"> 
        	<input type="email" placeholder="Email" name="email" id="email" required autofocus>
        	<input class="submit" type="submit" name="submit" value="Submit">
		</form>
		<div id="social-share">
			<div class="fb-like" data-href="http://dt.highrankdev.com/" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false" data-colorscheme="light"></div>
			<a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
		</div>
		<p class="copy white">&copy; Supermechanical Limited Liability Company. All Rights Reserved. Austin, Texas.</p>
	</div><!-- .inner -->
</div><!-- #footer -->
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script type="text/javascript">
$(document).ready(function() {
 $(".vid-link").fancybox({
 	width: 569,
 	height: 320,
	helpers: {
	    media: {},
	    overlay: {
	    	closeClick : true
	    }
	}
	});
});
</script>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
</body>
</html>