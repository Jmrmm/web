<?php
session_start();
include("assets/time_stamp.php");
?>
<!DOCTYPE HTML>
<html>
<head>
<title>WEB</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Multimédia, IEFP, Formação" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />	
<link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all" />
<link href="assets/css/styles.css" type="text/css" rel="stylesheet" media="screen" />
<script src="js/jquery.min.js"> </script>
<script src="js/script.js"> </script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,600italic,800' rel='stylesheet' type='text/css'>
<!--/script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
   <script src="js/jquery.chocolat.js"></script>
		<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="all" />
		<!--light-box-files -->
		<script type="text/javascript">
		$(function() {
			$('#portfolio a').Chocolat();
		});
		</script>

<script type="text/javascript" >
$(function() {
$("#tweet_submit").click(function() 
{
var tweet = $("#tweet").val();
var dataString = 'tweet='+ tweet;
if(tweet!='')
{
$.ajax({
type: "POST",
url: "assets/post_tweet.php",
data: dataString,
cache: false,
success: function(html){
$("#tweet").val('');
$("#content").prepend(html);
}
});
}return false;
}); });
</script>

</head>
<body>
	<div class="loader"></div>
	<!--start-header-->
		<div class="header second" id="home">
		<div class="container">
			<div class="logo">
				<a href="main"><img src="images/symbol.png"></a>
			</div>
			<div class="navigation">
			 <span class="menu"></span> 
				<ul class="navig second">
					<li><a href="galeria">GALERIA</a><span> </span></li>
					<li><a href="sobre">SOBRE</a><span> </span></li>
					<li><a href="contactos">CONTACTOS</a><span> </span></li>
				</ul>
			</div>
				 <!-- script-for-menu -->
		 <script>
				$("span.menu").click(function(){
					$(" ul.navig").slideToggle("slow" , function(){
					});
				});
		 </script>
		 <!--script-for-menu -->
		</div>
	</div>
		 <!--our-portfolio-->
<div class="portfolio" id="portfolio">
		<div class="container">
		<h2 class="title">BLOG</h2>
			<div class="gallery-bottom">
<div id="sidebar">
<form action="#" method="POST">
<div><textarea id="tweet" name="tweet" placeholder="Compose new Howl"></textarea></div>
<input type="submit"  value=" Howl " class="btn" id="tweet_submit"/> 
</form>
<div id="flash_result"></div>
</div>

<div id="main">
<div id='heading'>Howls</div>
<div id='content'>
<?php
foreach ($person as $row)
{
$time = $row->age;
echo "<div class='tweet_box'>";
echo "<div class='tweet_user'><img class='user_img' src='assets/includes/wolf.png'></div>";
echo "<div class='tweet_body'>";
?>
<div class='tweet_time'><?php time_stamp($time);?></div>
<?php
echo "<div><b><a href='https://twitter.com/JMRMM76'>JMM</a></b> <span class='uname'>@JMRMM76</span></div>";
echo "<div class='tweet_text'>".utf8_decode($row->post)."</div>";
echo "</div></div>";
}

?>
</div>
</div>
			</div>
		</div>
	</div>	
				<!--start-smoth-scrolling-->
						<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>


</body>
</html>