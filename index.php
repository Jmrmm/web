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
<script src="js/jquery.min.js"> </script>
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
<!--gallery-->
   <script src="js/jquery.chocolat.js"></script>
		<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="all" />
		<!--light-box-files -->
		<script type="text/javascript">
		$(function() {
			$('#example1 a').Chocolat();
		});
		</script>
		<script type="text/javascript">
		$(function() {
			$('#portfolio a').Chocolat();
		});
		</script>

</head>
<body>
	<!--start-header-->
		<div class="header" id="home">
		<div class="container">
			<div class="logo">
				<a href="index.php"><img src="images/symbol.png"></a>
			</div>
			<div class="navigation">
			 <span class="menu"></span> 
				<ul class="navig">
					<li><a href="galeria.php">GALERIA</a><span> </span></li>
					<li><a href="sobre.php">SOBRE</a><span> </span></li>
					<li><a href="contactos.php">CONTACTOS</a><span> </span></li>
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
		     <div class="banner">
						<div class="callbacks_container">
						<ul class="rslides callbacks callbacks1" id="slider4">
							<li class="callbacks1_on" style="display: block; float: left; position: relative; opacity: 1; z-index: 2; transition: opacity 500ms ease-in-out;">
								<div class="banner-info">
								<h3>Uma batata</h3>
								</div>
							</li>
							<li class="" style="display: block; float: none; position: absolute; opacity: 0; z-index: 1; transition: opacity 500ms ease-in-out;">
								<div class="banner-info">
								   <h3>Duas batatas</h3>
								</div>
							</li>
							<li class="" style="display: block; float: none; position: absolute; opacity: 0; z-index: 1; transition: opacity 500ms ease-in-out;">
								<div class="banner-info">
								  <h3>Três batatas</h3>
								</div>
							</li>
						</ul>
						</div>
						<!--banner-Slider-->
						<script src="js/responsiveslides.min.js"></script>
						 <script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider4").responsiveSlides({
						auto: true,
						pager: true,
						nav:false,
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
			</div>
		</div>
	</div>
		 <!--about-->
		     <div class="about">
				   <div class="container">
					   <div class="about-top">
					       <div class="col-md-8 about-video">
					       <iframe width="560" height="315" src="https://www.youtube.com/embed/uiaRYQlsjy4" frameborder="0" allowfullscreen></iframe>
					       </div>
						   <div class="col-md-4 video-right">
								<h2>Watch the video about how it all started.</h2>
								<a class="face-book" href="#"> Partilhar no Facebook</a>
							   <div class="tweet">
								<a href="#"> Tweetar isto</a>
							  </div>
							</div>
							<div class="clearfix"></div>
					   </div>
				   </div>
	         </div>
		<!--services-->
		     <div class="services">
				  <div class="container">
				  <h3 class="title">Notorious Quotes by Alfred</h3>
				      <div class="serve-top">
					   <div class="col-md-7 services-left">
						    <div class="services-grid">
							   <div class="col-md-3 services-icon">
								   <div class="icon hvr-rectangle-out">
										<i class="glyphicon glyphicon-time"></i>
									</div>
								</div>
							    <div class="col-md-9 service-text">
										<h5>Bruce Wayne & Alfred Pennyworth:</h5>
										<p>Bruce Wayne: People are dying, Alfred. What would you have me do?<br/>
										Alfred Pennyworth: Endure, Master Wayne. Take it. They'll hate you for it, but that's the point of Batman, he can be the outcast. He can make the choice that no one else can make, the right choice.</p>
							   </div>
							   <div class="clearfix"></div>
							</div>
							<div class="services-grid">
							   <div class="col-md-3 services-icon">
								   <div class="icon hvr-rectangle-out">
										<i class="glyphicon glyphicon-cog"></i>
									</div>
								</div>
							    <div class="col-md-9 service-text">
									<h5>Alfred Pennyworth:</h5>
									<p>Drive sports cars, date movie stars, buy things that are not for sale... who knows, Master Wayne? You start pretending to have fun, you might even have a little by accident.</p>
							   </div>
							   <div class="clearfix"></div>
							</div>
							<div class="services-grid">
							   <div class="col-md-3 services-icon">
								   <div class="icon hvr-rectangle-out">
										<i class="glyphicon glyphicon-gift"></i>
									</div>
								</div>
							    <div class="col-md-9 service-text">
									<h5>Alfred Pennyworth:</h5>
									<p>Some men just want to watch the world burn.</p>
							   </div>
							   <div class="clearfix"></div>
							</div>
						 </div>
						 <div class="col-md-5 service-image">
						    <img src="images/logo.jpg" alt="/">
						</div>
					      <div class="clearfix"></div>
					  </div>
				  </div>
	         </div>
		<!--projects-->
	<div id="example1">
	  <h3 class="title ser">Projectos</h3>
		<div id="owl-demo" class="owl-carousel text-center">
			<div class="item">
				<a data-toggle="modal" data-target=".bs-example-modal-md" href="images/p1.jpg" class="b-link-stripe b-animate-go  thickbox" title="Erro!">
					<img class="img-responsive lot" src="images/p1.jpg" alt="">
                    <div class="b-wrapper">
                         <div class="b-animate b-from-left b-delay03 ">
                            <i class="plus"></i>
                        </div>
                    </div>
                </a>
			</div>
			<div class="item">
				<a data-toggle="modal" data-target=".bs-example-modal-md" href="images/p2.jpg" class="b-link-stripe b-animate-go  thickbox" title="Erro!">
					<img class="img-responsive lot" src="images/p2.jpg" alt="">
                     <div class="b-wrapper">
                         <div class="b-animate b-from-left b-delay03 ">
                             <i class="plus"></i>
				        </div>
                    </div>
				</a>
			</div>
			<div class="item">
				<a data-toggle="modal" data-target=".bs-example-modal-md" href="images/p3.jpg" class="b-link-stripe b-animate-go  thickbox" title="Erro!">
					<img class="img-responsive lot" src="images/p3.jpg" alt="">
                     <div class="b-wrapper">
                    <div class="b-animate b-from-left b-delay03 ">
                        <i class="plus"></i>
								</div>
                         </div>

				</a>
			</div>
			<div class="item">
                <a data-toggle="modal" data-target=".bs-example-modal-md" href="images/p4.jpg" class="b-link-stripe b-animate-go  thickbox" title="Erro!" >
					<img class="img-responsive lot" src="images/p4.jpg" alt="">
                     <div class="b-wrapper">
                         <div class="b-animate b-from-left b-delay03 ">
                            <i class="plus"></i>
                         </div>
                    </div>
				</a>
            </div>
			<div class="item">
				<a data-toggle="modal" data-target=".bs-example-modal-md" href="images/p5.jpg" class="b-link-stripe b-animate-go  thickbox" title="Erro!">
					<img class="img-responsive lot" src="images/p5.jpg" alt="">
                    <div class="b-wrapper">
                         <div class="b-animate b-from-left b-delay03 ">
                            <i class="plus"></i>
                        </div>
                    </div>
                </a>
			</div>
			<div class="item">
				<a data-toggle="modal" data-target=".bs-example-modal-md" href="images/p6.jpg" class="b-link-stripe b-animate-go  thickbox" title="Erro!">
					<img class="img-responsive lot" src="images/p6.jpg" alt="">
                     <div class="b-wrapper">
                         <div class="b-animate b-from-left b-delay03 ">
                             <i class="plus"></i>
				        </div>
                    </div>
				</a>
			</div>
			<div class="item">
				<a data-toggle="modal" data-target=".bs-example-modal-md" href="images/p7.jpg" class="b-link-stripe b-animate-go  thickbox" title="Erro!">
					<img class="img-responsive lot" src="images/p7.jpg" alt="">
                     <div class="b-wrapper">
                         <div class="b-animate b-from-left b-delay03 ">
                             <i class="plus"></i>
				        </div>
                    </div>
				</a>
			</div>
			<div class="item">
				<a data-toggle="modal" data-target=".bs-example-modal-md" href="images/p8.jpg" class="b-link-stripe b-animate-go  thickbox" title="Erro!">
					<img class="img-responsive lot" src="images/p8.jpg" alt="">
                     <div class="b-wrapper">
                         <div class="b-animate b-from-left b-delay03 ">
                            <i class="plus"></i>
                         </div>
                    </div>
				</a>
			</div>
		</div>
		</div>
        <!-- requried-jsfiles-for owl -->
							    <script src="js/owl.carousel.js"></script>
							      <script>
								  $(document).ready(function() {
									   $("#owl-demo").owlCarousel({
									    items : 4,
									    lazyLoad : true,
									    autoPlay : false,
									    navigation : true,
									    navigationText :  true,
									    pagination : false,
									    });
								  });
								</script>
        <!-- //requried-jsfiles-for owl -->
		<!--news-->
		  <div class="news">
		     <div class="container">
			    <div class="news-article">
			      <div class="col-md-4 article-post">
					<div class="post-details">
				   </div>
				   <div class="blog-text">
						<a href="single.php"><h4>Registo</h4></a>
						 <p>Para ter acesso aos dados dos contactos deste site, faça o seu registo ou login</p>
							<div class="read">
								<a class="button" href="single.php"><img src="images/read.png" alt="" /></a>
							</div>
					   </div>
						<div class="clearfix"> </div>
				<!--post-details-->	
				</div>		
					<div class="clearfix"> </div>				
				</div>
			</div>
	     </div>
			 <!--our-portfolio-->
<div class="portfolio" id="portfolio">
		<div class="container">
		<h3 class="title">Galeria</h3>
			<div class="gallery-bottom">
					<div class="col-md-4 gallery-left">
						<a data-toggle="modal" data-target=".bs-example-modal-md" href="images/p1.jpg" class="b-link-stripe b-animate-go  thickbox" title="Erro!">
							<img class="img-responsive lot" src="images/p1.jpg" alt="">
							   <div class="b-wrapper">
								 <div class="b-animate b-from-left b-delay03 ">
									<i class="plus second"></i>
								</div>
							   </div>
						</a>
					</div>
					<div class="col-md-4 gallery-left">
						<a data-toggle="modal" data-target=".bs-example-modal-md" href="images/p2.jpg" class="b-link-stripe b-animate-go  thickbox" title="Erro!">
							<img class="img-responsive lot" src="images/p2.jpg" alt="">
							   <div class="b-wrapper">
								 <div class="b-animate b-from-left b-delay03 ">
									<i class="plus second"></i>
								</div>
							   </div>
						</a>
					</div>
					<div class="col-md-4 gallery-left">
						<a data-toggle="modal" data-target=".bs-example-modal-md" href="images/p3.jpg" class="b-link-stripe b-animate-go  thickbox" title="Erro!">
							<img class="img-responsive lot" src="images/p3.jpg" alt="">
							   <div class="b-wrapper">
								 <div class="b-animate b-from-left b-delay03 ">
									<i class="plus second"></i>
								</div>
							   </div>
						</a>
					</div>
					<div class="col-md-4 gallery-left">
						<a data-toggle="modal" data-target=".bs-example-modal-md" href="images/p4.jpg" class="b-link-stripe b-animate-go  thickbox" title="Erro!">
							<img class="img-responsive lot" src="images/p4.jpg" alt="">
							   <div class="b-wrapper">
								 <div class="b-animate b-from-left b-delay03 ">
									<i class="plus second"></i>
								</div>
							   </div>
						</a>
					</div>
					<div class="col-md-4 gallery-left">
						<a data-toggle="modal" data-target=".bs-example-modal-md" href="images/p5.jpg" class="b-link-stripe b-animate-go  thickbox" title="Erro!">
							<img class="img-responsive lot" src="images/p5.jpg" alt="">
							   <div class="b-wrapper">
								 <div class="b-animate b-from-left b-delay03 ">
									<i class="plus second"></i>
								</div>
							   </div>
						</a>
					</div>
					<div class="col-md-4 gallery-left">
						<a data-toggle="modal" data-target=".bs-example-modal-md" href="images/p6.jpg" class="b-link-stripe b-animate-go  thickbox" title="Erro!">
							<img class="img-responsive lot" src="images/p6.jpg" alt="">
							   <div class="b-wrapper">
								 <div class="b-animate b-from-left b-delay03 ">
									<i class="plus second"></i>
								</div>
							   </div>
						</a>
					</div>
					<div class="col-md-4 gallery-left">
						<a data-toggle="modal" data-target=".bs-example-modal-md" href="images/p7.jpg" class="b-link-stripe b-animate-go  thickbox" title="Erro!">
							<img class="img-responsive lot" src="images/p7.jpg" alt="">
							   <div class="b-wrapper">
								 <div class="b-animate b-from-left b-delay03 ">
									<i class="plus second"></i>
								</div>
							   </div>
						</a>
					</div>
					<div class="col-md-4 gallery-left">
						<a data-toggle="modal" data-target=".bs-example-modal-md" href="images/p8.jpg" class="b-link-stripe b-animate-go  thickbox" title="Erro!">
							<img class="img-responsive lot" src="images/p8.jpg" alt="">
							   <div class="b-wrapper">
								 <div class="b-animate b-from-left b-delay03 ">
									<i class="plus second"></i>
								</div>
							   </div>
						</a>
					</div>
					<div class="col-md-4 gallery-left">
						<a data-toggle="modal" data-target=".bs-example-modal-md" href="images/p9.jpg" class="b-link-stripe b-animate-go  thickbox" title="Erro!">
							<img class="img-responsive lot" src="images/p9.jpg" alt="">
							   <div class="b-wrapper">
								 <div class="b-animate b-from-left b-delay03 ">
									<i class="plus second"></i>
								</div>
							   </div>
						</a>
					</div>
					<div class="clearfix"></div>
			</div>
		</div>
	</div>	
	<!--//portfolio-->
<div class="contact" id="contact">
		<div class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3004.3268061167264!2d-8.600905384928529!3d41.14921971868928!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd2464ede4ac66ff%3A0xc284a210925804dc!2sCampo+24+de+Agosto%2C+4300+Porto!5e0!3m2!1spt-PT!2spt!4v1444901651323" allowfullscreen=""></iframe>
					<span> </span>
				 </div>
				 <div class="container">
					<div class=" contact-box">
					<div class="col-md-6 contact-info">
						<h3>Informação de Contacto</h3>
						<p >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nisi metus, tristique nec dolor non, ornare sagittis dolor. Nulla vestibulum lacus sed molestie gravida.</p>
						<p >Cras fermentum elit quis magna congue, vel sodales arcu vestibulum. Nunc lobortis dui magna, quis dapibus lacus </p>
					</div>
					
					<div class="col-md-6 contact-form">
						<form>
								<div class="col-md-6 your-name">
									<span>NOME:</span>
									<input type="text" name="your name" disabled placeholder=" ">
								</div>
								<div class="col-md-6 your-name">
									<span>EMAIL:</span>
									<input type="text" name="your email" disabled placeholder=" ">
								</div>
							
								<div class="clearfix"> </div>
								<div class=" your-msg">
									<span>MENSAGEM:</span>
									<textarea cols="70" rows="5" name="message" disabled placeholder=" "> </textarea>
								</div>
							
								<div class="your-submit">
									<input type="submit" value="Enviar">
								
							</div>
						</form>
					</div>
					<div class="clearfix"> </div>
					</div>
					
					</div>
	          </div>
<!--//contact-->
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