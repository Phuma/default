<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>Mark Philip Alexander Sørensen</title>
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.4/css/bootstrap.min.css" />
		<link rel="stylesheet/less" type="text/css" href="style/style.less" />
	</head>
	
	<body class="row">
		<section class="loader">
			<h1>Mark Sørensen</h1>
		</section>
		<article class="page col-sm-12">
			<section class="col-sm-6">
				<div class="col-sm-12 left full case">
					<div class="btn">Contact me</div>
				</div>
				<div class="col-sm-12 full email">
					<div class="btn-close"></div>
					<form>
						<div class="input">						
							<input type="email" id="email" placeholder="E-mail" autocomplete="off">
						</div>
						<div class="input">
							<input type="text" id="subject" placeholder="Subject" autocomplete="off">				
						</div>
						<div class="input">							
							<textarea rows="5" type="text" id="msg" placeholder="Message"></textarea>
						</div>
						<button class="submit">Send E-mail</button>
					</form>
					<div class="thankyou">
						<h1>Thank You!</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean id ligula a sapien dignissim fermentum. Proin lacus arcu, cursus ut accumsan eget, venenatis sed lorem.</p>
					</div>
				</div>
			</section>
			<section class="col-sm-6">
				<section class="threefractions col-sm-12">
					<div class="top full desc col-sm-12">
						<div class="text">
							<h1>Case</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean id ligula a sapien dignissim fermentum. Proin lacus arcu, cursus ut accumsan eget, venenatis sed lorem.</p>
						</div>
					</div>
				</section>
				<section class="onefractions col-sm-6">
					<div class="bottom full link col-sm-12">
						
					</div>
				</section>
				<section class="onefractions col-sm-6">
					<div class="right full back col-sm-12">
						
					</div>
				</section>
			</section>
		</article>
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js" type="text/javascript">></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.4/js/bootstrap.min.js" type="text/javascript">></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.5.1/less.min.js" type="text/javascript">></script>
		<script type="text/javascript">
			jQuery(document).ready(function(){
			    $( ".loader" ).delay(2000).fadeOut(400, function(){
			    	$( "article" ).fadeIn(400);
			    }); 
			    $(".top").on("animationend webkitAnimationEnd oAnimationEnd MSAnimationEnd", function(e){
				    $(".desc h1").delay(500).fadeIn();
				    $(".desc p").delay(500).fadeIn();
				});
				$(".btn").click(function() {
				 $(".email").removeClass("email-out").addClass("email-in").fadeIn();
				});
				$(".btn-close").click(function() {
				 $(".email").removeClass("email-in").addClass("email-out").fadeOut();
				});
				
				$('.submit').click(function() {
					var email = $("input#email").val();
					var subject = $("input#subject").val();
					var msg = $("input#msg").val();
					var dataString = 'email='+ email + '&subject=' + subject + '&msg=' + msg;
					$.ajax({
						type:'POST',
						url:'email.php',
						data: dataString,
						success: function() {
							$('form').hide();
							$('.thankyou').show()
				 		},
					})
					return false;
				});
			});
			
		</script>
	</body>
</html>