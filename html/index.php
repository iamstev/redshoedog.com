<?php

/* ROOT SETTINGS */ require($_SERVER['DOCUMENT_ROOT'].'/root_settings.php');

/* FORCE HTTPS FOR THIS PAGE */ if($use_https === TRUE){if(!isset($_SERVER['HTTPS']) || $_SERVER['HTTPS'] == ""){header("Location: https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);exit;}}

/* GET KEYS TO SITE */ require($path_to_keys);

print'
<!DOCTYPE html>
<html>
	<head>
		<title>Red Shoe Pet Care - Dog Walker and Pet Sitter in Pittsburgh PA</title>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
		<meta name="viewport" content="width=device-width" />
		<meta name="viewport" content="initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
		<link rel="stylesheet" type="text/css" href="/css/main.css" />
		<script type="text/javascript" src="/js/main-ck.js"></script>
	</head>
	<body>
		<header class="small" id="smallheader">
			<div class="transbar"></div>
			<a href="#home"><h1 class="logo"><span class="font1 color1">Red Shoe</span> Pet Care</h1></a>
		</header>
		<header class="splash" id="home">
			<img src="/img/redshoerudy.jpg"/>
		</header>
		<h1 class="logo"><span class="font1 color1">Red Shoe</span> Pet Care</h1>
		<h2 class="logo">Pittsburgh, PA</h2>
		<div class="holder">
			<ul class="tri-bar">
				<li><a href="#contact">Inquire / Apply</a></li>
				<li><a href="tel:412-465-0742">412-465-0742</a></li>
				<li><a href="#contact">Contact Us</a></li>
			</ul>
			<section class="two-thirds-pic" >
				<a id="headerwaypoint"></a>
				<div class="l">
					<p class="first">&ldquo;At Red Shoe Pet Care I specialize in individual attention for your furry family members. Whether they take their time up and down the hills of Pittsburgh, or are a pup full of energy, I walk your dog at their pace in your neighborhood. Your cats get attention to fit their personality, whether they like to play or just need some company.</p>
					<p>I also wear red shoes.&rdquo;</p>
					<p class="sig">- Steve<br><span>Red Shoe Pet Care</span></p>
				</div>
				<div class="r">
					<figure></figure>
				</div>
			</section>
			<section class="bi linetop">
				<div class="l">
					<div class="hgroup"><h2>30 Minute Walk/Playtime <span class="font1 color1">$20</span></h2></div>
					<p>I take your dog on an individual walk through your neighborhood. He or she will spend 30 minutes enjoying new smells, getting their exercise, and doing their business. Cats get 30 minutes of playtime, petting, or just some company; whatever they prefer. I will also feed and water at your instruction, and clean up any litter boxes. Discounts available for multiple dogs or cats.</p>
				</div>
				<div class="r">
					<div class="hgroup"><h2>15 Min Check-in/Potty Break <span class="font1 color1">$15</span></h2></div>
					<p>I let your dog out in your yard to relieve itself and give him/her 15 minutes of active attention. Cats get 15 minutes of playtime, petting, or just some company; whatever they prefer. I will also feed and water at your instruction, and clean up any litter boxes. Discounts available for multiple dogs or cats.</p>
				</div>
			</section>
			<section class="list-2col linetop">
				<h2>About Red Shoe</h2>
				<ul>
					<li>My service area includes Lawrenceville, Stanton Heights, Morngingside, Highland Park; East Liberty, Garfield, Friendship, Bloomfield; Larimer, Shadyside, Oakland, ect. through Downtown; and parts of Squirrel Hill.</li>
					<li>Your neighborhood not on the list? I may still be able to accommodate you.</li>
					<li>Normal Hours are 8am – 6pm. Evenings, weekends and holidays are subject to availability. Additional charges may apply.</li>
					<li>I am bonded and insured.</li>
					<li>Pet First Aid and CPR certification by PetTech.</li>
					<li>Payments accepted: Cash or Credit Card</li>
				</ul>
			</section>
			<section class="bi linetop">
				<div class="l contactform">
					<a style="float:left;position:relative;top:-100px;" id="contact"> </a>
					<h2>Contact Us</h2>
					<label for="contact_firstname">First Name</label>
					<input name="contact_firstname" id="contact_firstname" type="text" />
					<label for="contact_lastname">Last Name</label>
					<input name="contact_lastname" id="contact_lastname" type="text" />
					<label for="contact_email">Email</label>
					<input name="contact_email" id="contact_email" type="email" autocorrect="off" autocapitalize="off"/>
					<label for="contact_comment">Question / Comment</label>
					<textarea name="contact_comment" id="contact_comment"></textarea>
					<input type="button" value="Send" onclick="contactus()" />
				</div>
				<div class="r contactform">
					<!-- <h2>Apply / Inquire</h2> -->
				</div>
			</section>
		</div>
		<footer>
			<figure></figure>
			<div class="p">Red Shoe Pet Care Ltd. <h1><a href="http://redshoedog.com/">Dog Walker and Pet Sitter in Pittsburgh PA.</a></h1></div>
			<p>Bonded and Insured by <a href="http://www.petsitllc.com/pet_sitter_profile.phtml/2ABF41F9AC/pittsburgh/pa/red_shoe_pet_care_ltd/">Pet Sitters Associates</a>. Online payments protected by SSL and <a href="https://stripe.com/help/security/">Stripe</a>.</p>
			<p><a href="http://www.yelp.com/biz/red-shoe-pet-care-pittsburgh">Yelp</a> - <a href="https://facebook.com/redshoedog"/>Facebook</a> - <a href="https://twitter.com/redshoepetcare/">Twitter</a> - <a href="https://www.google.com/+Redshoedog">Google+</a></p>
		</footer>
		<div class="robomutt_logo">
			<div class="robomutt_text">powered by</div>
			<a href="http://roboticmutt.com/"><img src="/img/roboticmutt.png" alt="Robotic Mutt Logo"/></a>
		</div>
';

/* FULL SCREEN LOADING */ print'<div id="fullscreenload"><span></span><img id="fullscreenload_img" src="/img/loading.gif" alt="Loading..." /></div>';
/* BLACKOUT FOR MODAL DIALOGS */ print'<div id="blackout" class="blackout"></div>';

print'
	<script>
		$(\'#headerwaypoint\').waypoint(function(direction) {
			if (direction === \'down\') {
			  $(\'#smallheader\').addClass(\'show\');
			} else {
			  $(\'#smallheader\').removeClass(\'show\');
			}
		});
	</script>
	<script>
		$(document).on(\'focus\', \'input, textarea\', function() {
			$(\'#smallheader\').css(\'display\', \'none\');
		});

		$(document).on(\'blur\', \'input, textarea\', function() {
			$(\'#smallheader\').css(\'display\', \'block\');
		});
	</script>
	<script>
		if(window.devicePixelRatio == \'2\'){
			document.getElementById(\'fullscreenload_img\').src=\'/img/loading@2x.gif\';
		}
	</script>
	</body>
</html>
';
?>
