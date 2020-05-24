<!--------------
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMWXKWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMW0;;KMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMWk"  dWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMWd... ,0MMMMMMMMMMWXXXWMMMMMMNXXXNWMMMMMM
MMMMMMMMNo..x0, oWMMMMMNOdl,".",oXWNOl;,,,;l0WMMMM
MMMMMMMXc.,OWWd."0MMMMXc. "lxkkodKKc.;x0K0d".dNMMM
MMWMMMK; .oOOOd. lNMMWo "lOWWMMMMWo .;cclcc, "0MMM
MMMMW0, .,,,,,,. .OWMWl ;kKMMMMMMNc "ldddddodkXMMM
MMMWk..lXNNWNNNK; cNMMO"..:OXXKOXWk..oKNWNOdOWMMMM
MMWk,.dNMMMMMMMWk";0MMW0c,"."".;0MWO:"",,,",xNMMMM
MMWXKXWMMMMMMMMMWXKNMMMMWWXOkkOKWMMMWX0kkOKNMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM

I hope you like my site! Please hire me!
-->

<!doctype html>
<html lang='en'>
  <head>
    <!-- Required meta tags -->
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>

  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css'>
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js'></script>

	<title>Ace Development</title>
	<link rel='icon' type='image/gif' href='img/icon.png' />
	<link href = type='text/css' media='print'>
	<meta name='viewport' content='width=device-width, initial-scale=1.0'>
	 <link rel='stylesheet' href='style.css?<?php echo time(); ?>'/>
	 <link href='https://fonts.googleapis.com/css?family=Fira+Mono|Titillium+Web' rel='stylesheet'>
	 <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src='https://www.googletagmanager.com/gtag/js?id=UA-157690547-1'></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag("js", new Date());

  gtag("config", "UA-157690547-1");
</script>

<script>
// When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo"s font size

window.onscroll = function() {scrollFunction()};


//to get scroll position,  onclick='alert(document.documentElement.scrollTop)'

if( !/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
	function scrollFunction() {
	var menuScrolltop=250;
	var scrolltop=Math.max(document.body.scrollTop, document.documentElement.scrollTop);
	var portfolioScrolltop = document.getElementById('portfolio').offsetTop-300;
	var resumeScrolltop = document.getElementById('resume').offsetTop-300;
	var educationScrolltop = document.getElementById('education').offsetTop-300;
	var referencesScrolltop = document.getElementById('references').offsetTop-300;
	var contactScrolltop= document.getElementById('contact').offsetTop-800;
	//menu
	  if (scrolltop < menuScrolltop) {
		document.getElementById('logo').classList.add('logo-big');
		document.getElementById('logo').classList.remove('logo-small');
	  } else {
		document.getElementById('logo').classList.add('logo-small');
		document.getElementById('logo').classList.remove('logo-big');
	  }
	  //portfolio
	  if (scrolltop > portfolioScrolltop&& scrolltop < resumeScrolltop){
			document.getElementById('portfolio-anchor').classList.add('active');
	  }else{
			document.getElementById('portfolio-anchor').classList.remove('active');
	  }
	  //resume
	  if (scrolltop > resumeScrolltop&& scrolltop < educationScrolltop){
			document.getElementById('resume-anchor').classList.add('active');
	  }else{
			document.getElementById('resume-anchor').classList.remove('active');
	  }
	  //education
	  if (scrolltop > educationScrolltop&& scrolltop < referencesScrolltop){
			document.getElementById('education-anchor').classList.add('active');
	  }else{
			document.getElementById('education-anchor').classList.remove('active');
	  }
	  //references
	  if (scrolltop > referencesScrolltop&& scrolltop < contactScrolltop){
			document.getElementById('references-anchor').classList.add('active');
	  }else{
			document.getElementById('references-anchor').classList.remove('active');
	  }
	  //references
	  if (scrolltop > contactScrolltop){
			document.getElementById('contact-anchor').classList.add('active');
	  }else{
			document.getElementById('contact-anchor').classList.remove('active');
	  }
	  
	}
}

</script>

	
</head>
<body>
<nav class='navbar navbar-inverse navbar-fixed-top'>
  <div class='container-fluid'>
    <div class='navbar-header'>
      <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#myNavbar'>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>                        
      </button>
      <a class='navbar-brand logo-big' id='logo' href='#' style='color:#aaa;'>Ace Development</a>
    </div>
    <div class='collapse navbar-collapse' id='myNavbar'>
      <ul class='nav navbar-nav'>
			<li id='portfolio-anchor'><a href='#portfolio' style='padding-right:0;'>Portfolio </a><a class='dropdown-toggle' data-toggle='dropdown'> <span class='caret' style='padding-left:0;'></span></a>
				<ul class='dropdown-menu inverse-dropdown'>
					<li><a href='#web'>Web</a></li>
					<li><a href='#software'>Software</a></li>
					<li><a href='#art'>Art</a></li>
					<li><a href='#fun'>Just for Fun</a></li>
				</ul></li>
			<li id='resume-anchor'><a href='#resume'>Resume</a></li>
			<li id='education-anchor'><a href='#education'>Education</a></li>
			<li id='references-anchor'><a href='#references'>References</a></li>
			<li id='contact-anchor'><a href='#contact'>Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

	
	<div class='hero' >
	<img src='portfolio/hero/0.png'  id='hero1'>
	<img src='portfolio/hero/1.png'>
	<img src='portfolio/hero/2.png'>
	<img src='portfolio/hero/3.png'>
	<img src='portfolio/hero/4.png'>
	<img src='portfolio/hero/5.png'>
	<img src='portfolio/hero/6.png'>
	<img src='portfolio/hero/7.png'>
	<img src='portfolio/hero/8.png'>
	<img src='portfolio/hero/0.png'>
	<div class="hero-name">
	<h2 style='font-size:2em'>Hi! I'm Ace.</h2>
	<p>I make solutions.</p>
	</div>
	</div>
	
	
	
<?php
function lightbox($name, $n) {
  echo "<div id='".$name."Modal' class='modal fade' role='dialog'>
  <div class='modal-dialog'>

    <!-- Modal content-->
	<div id='".$name."Carousel' class='carousel slide' data-ride='carousel' data-interval='0'>
	  
	  <ol class='carousel-indicators'>
		<li data-target='#".$name."Carousel' data-slide-to='0' class='active'></li>";
	  for($i =1; $i<$n; $i++){
		echo "<li data-target='#".$name."Carousel' data-slide-to='$i' class='inactive'></li>";
	  }
	  echo "</ol>

	  <!-- Wrapper for slides -->
	  <div class='carousel-inner'>
		<div class='item active'>
		  <img src='portfolio/".$name."/0.jpg' alt='Example of work from ".$name."'>
		</div>";
		
	  for($i =1; $i<$n; $i++){
		echo "<div class='item'>
		  <img src='portfolio/".$name."/".$i.".jpg' alt='Responsive mobile-first design'>
		</div>";
	  }
	  echo "
	  </div>

	  <!-- Left and right controls -->
	  <a class='left carousel-control' href='#".$name."Carousel' data-slide='prev'>
		<span class='glyphicon glyphicon-chevron-left'></span>
		<span class='sr-only'>Previous</span>
	  </a>
	  <a class='right carousel-control' href='#".$name."Carousel' data-slide='next'>
		<span class='glyphicon glyphicon-chevron-right'></span>
		<span class='sr-only'>Next</span>
	  </a>
	</div>

  </div>
</div>";
}

lightbox("barbersign", 3);
lightbox("rle",4);
lightbox("scoop",3);
lightbox("dot",2);
lightbox("scoopdb",5);
lightbox("hoard",4);
lightbox("donut", 3);
lightbox("dice", 5);
lightbox("syndra",2);
lightbox("appidea",4);
lightbox("mushrooms",5);
lightbox("trafficsim",7);

?>
	
<div class='container'>
	<h2>Welcome</h2>
	<p>My name is Ace, and I'm a fresh graduate looking for work.</p>
	<p>I graduated from California State University, Sacramento with a 3.7 GPA and a Bachelor's degree in Computer Science, with a minor in Mathematics and a certificate in Game Design. In school I learned Java, C/C++, Python, and SQL, as well as how to manage deadlines and work with others. In my work as a freelancer and web developer I have gained skills in HTML, CSS, JavaScript, jQuery, Bootstrap, PHP, Wordpress, Sitecore, and Drupal. In a range of personal projects and interests, I have also picked up proficiency with various tools for 3D Modeling, graphic design, and game development.</p>
	<p>My experience working with others have given me strong communication skills, and my love of creative pursuit has given me a passion to make the absolute best product possible within constraints. I'm used to working on deadlines and within requirements, with client oversight and with clients who have very little industry knowlege. I hope my broad range of skills can be of use to you!</p>
	<p>Email me at <a href='mailto:admin@ace-development.com'>admin@ace-development.com</a> so we can make a deal.</p>
	<p>I look forward to working with you!</p>
	<p>-Ace</p>
	<h2 id='portfolio' class='anchor underline'>Portfolio</h2>
	<h3 id='software' class='anchor'>Software Development</h3>
	<div class='well'>
		<img src='portfolio/trafficsim/thumb.png'  class='clickable' data-toggle='modal' data-target='#trafficsimModal'>
		<div>
		<h4>Senior Project - Driving Sim</h4>
		<p>CSU seniors are required to participate in a group oriented senior project, which involves client meetings to obtain requirements and two-week sprint style AGILE development. I led a team of seniors to create a software solution for the civil engineering department: a VR driving sim that can be used to collect reaction data. Driving simulators that exist on the market are extremely pricy, and our aim was to create one that requires less expensive tech by utilizaing Unreal 4's native virtual reality compatibility. In this project I worked on C++ code, assets, UX design, and practiced a fair bit of management process as I fell into a team leader role.</p>
		</div>
	</div>
	<div class='well'>
		<img src='portfolio/mushrooms/thumb.png'  class='clickable' data-toggle='modal' data-target='#mushroomsModal'>
		<div>
		<h4>Photorecognition AI - Mushroom Identification</h4>
		<p>In Python using Tensorflow I wrote a neural network to identify a mushroom's edibility based on a photograph. This project required merging two datasets, by training a convoluted neural network to make predictions about a mushroom's characteristics based on a photograph, and another to identify edibility based on those characteristics. The resulting neural network has a precision of 99% and an average recall of 96%. The full writeup can be read in this <a href="portfolio/mushrooms/report.pdf" target="_blank">report</a>. This project only works on agaricus mushrooms but could be scaled to apply to more genuses with the injection of new data.</p>
		</div>
	</div>
	<div class='well'>
		<img src='portfolio/scoopdb/thumb.png'  class='clickable' data-toggle='modal' data-target='#scoopdbModal'>
		<div>
		<h4>Small Business Billing Software</h4>
		<p>To help speed up the workflow of a small mom-and-pop business, I created a simple piece of accounting software tailored to their needs. I wrote this from scratch mostly with PHP and mySQL. The initial idea was to generate invoices that matched what the client had been painstakingly creating in Publisher. To do that with haste and efficiency, a database was required to fetch customer data. At first I included a guide to phpMyAdmin and left the client to try out interfacing with the backend themselves, but after it became apparant that would not suffice I created an easy-to-use front end user experience to wrap around the mySQL database instead.</p>
		<p>This project gave me experience communicating with non-technical clients about requirements and expectations. I also had the valuable experience of finding that the old requirements were insufficient and needed more development. The client is happy with the product and hasn't gone back to using Publisher.</p>
		</div>
	</div>
	<div class='well'>
		<img src='portfolio/hoard/thumb.png'  class='clickable' data-toggle='modal' data-target='#hoardModal'>
		<div>
		<h4>3D Asymetric Networked Game - Hoard!</h4>
		<p>In my university coursework I took a game architecture class and I am very proud of my finished product. It uses a student-built engine and utelizes collision physics, procedural map generation, listener architecture, 3D sound desgin, and AI fuzzy logic decision making. I wrote this mostly in Java with some python scripting.</p>
		<p>I think this game could use improvement particularly on its graphics, so as a hobby I have been reworking it in Unreal using C++. Stay posted for updates.</p>
		</div>
	</div>
	<h3 id='web' class='anchor'>Web Design</h3>
	<div class='well'>
		<img src='portfolio/barbersign/thumb.png' class='clickable' data-toggle='modal' data-target='#barbersignModal'>

		<div>
		<h4>Barbersign Productions</h4>
		<p><a href='https://barbersignproductions.com' target='_blank'>barbersignproductions.com</a></p>
		<p>A local barber had a shop set up he'd like to advertise as well as an online shop and online tutorial series. I recommended Wordpress to easily suit his needs, particularly because it would be easy for him to maintain with his lack of technical skills. I then set up his shop, forum, and online classes for him on Wordpress and now he is happily doing business internationally.</p>
		</div>
	</div>
	<div class='well'>
		<img src='portfolio/rle/thumb.png' class='clickable' data-toggle='modal' data-target='#rleModal'>
		<div>
		<h4>Rio Linda Chamber of Commerce</h4>
		<p><a href='http://rlechamber.org' target='_blank'>rlechamber.org</a></p>
		<p>A local community web page was sorely in need of a revamp, not only on the front end but also the back end. There was no content management system in place or procedural generation of content, and the old layout was some of the most outdated non-intuitive design I have ever seen.</p>
		<p>I remade the site incorporating given photos and content along a theme the clients selected. I also tailored a javascript file that was easy to update for when the community wanted to add a new business to the list of board members, update a photo, or add or modify an event in the community calendar. I wrote this page from javascript, HTML and CSS, using some open-source javascript libraries for advanced features.</p>
		</div>
	</div>
	<div class='well'>
		<img src='portfolio/scoop/thumb.png'  class='clickable' data-toggle='modal' data-target='#scoopModal'>
		<div>
		<h4>The Scoop Pet Waste Management</h4>
		<p><a href='https://thescooppwm.com/' target='_blank'>thescooppwm.com</a></p>
		<p>A small business was suffering from a terrible web presence on account of an ancient, ugly, flash-laden home page. I designed a new site for them with their content management system of choice, Wix, however they quickly found that the site was still performing badly due to slow performance on older computers.</p>
		<p>As an answer to their site's speed issues I rewrote it using pure HTML, CSS and Javascript. The design was almost entirely up to the specifications  of the client (please don't judge me for their love of Comic Sans, it is not mine). I also enabled Google Analytics on their website in order to keep a pulse on how their advertisements were faring. Their business is going stronger than ever and get a consistent number of conversions from their website.</p>
		</div>
	</div>
	<div class='well'>
		<img src='portfolio/dot/thumb.png' class='clickable' data-toggle='modal' data-target='#dotModal'>
		<div>
		<h4>CalTrans - California Department of Transportation</h4>
		<p><a href='https://dot.ca.gov/' target='_blank'>dot.ca.gov</a></p>
		<p>In college I interned at the California Department of Transportation in their web department and helped them migrate their site in a critical time period. Some days I fixed up to 90 pages a day.</p>
		<p>For this project we used Sitecore CMS. I worked mostly in HTML and CSS. To speed up my workflow I made frequent use of RegEx to find compliance issues, errors, and bad coding practices. I also got experience with Google Analytics and WCAG web accessibility requirements. And, of course, I got a lot of practice working in a team.</p>
		</div>
	</div>
	<h3 id='art' class='anchor'>Art</h3>
	<div class='well'>
		<img src='portfolio/donut/thumb.png'  class='clickable' data-toggle='modal' data-target='#donutModal'>
		<div>
		<h4>Breakfast at mountain cafe</h4>
		<p>I made this in Blender 2.8 over 7 hours. I utelized UV mapping, shader materials, particle effects, scultping, fluid simulation, and lighting composition. You can almost taste it.</p>
		</div>
	</div>
	<div class='well'>
		<img src='portfolio/dice/thumb.png'  class='clickable' data-toggle='modal' data-target='#diceModal'>
		<div>
		<h4>Still Life - Final Project</h4>
		<p>This was made as part of an art course in university. In this course I learned the fundamentals of 3D modeling, art, and composition, including materials, lighting, shading, modeling techniques, materials, bump mapping, UV mapping and composition. </p>
		</div>
	</div>
	<div class='well'>
		<img src='portfolio/syndra/thumb.png'  class='clickable' data-toggle='modal' data-target='#syndraModal'>
		<div>
		<h4>Art Nouveau Fanart</h4>
		<p>For copyright reasons I must remark that I do not own the IP of the subject matter of this piece, because she is a character from League of Legends. I made this as a birthday gift to a friend who is a big fan of the character and the artistic style of Alphonse Mucha. This piece took about 20 hours and was made in GIMP.</p>
		</div>
	</div>
	<h3 id='fun' class='anchor'>Just for fun</h3>
	<div class='well'>
		<img src='portfolio/appidea/thumb.png'  class='clickable' data-toggle='modal' data-target='#appideaModal'>
		<div class='description'>
		<h4>Joke app idea generator</h4>
		<p><a target='_blank' href='http://ihaveagreatappidea.com'>ihaveagreatappidea.com</a></p>
		<p>While joking with a group of fellow software developers, we remarked how many 'million dollar app ideas' our friends and family have brought up to us, and how a lot of them are such a generic combination of 'niche industry' and 'top 20 app', that we could write a random generator to come up with these 'million dollar ideas'. So I went and actually did it.</p>
		<p>This was built in an afternoon using PHP, MySQL and Ajax and hosted on a spare machine I run under my bed. Some of the ideas aren't even bad ideas.</p>
		</div>
	</div>
	
	<h2 id='resume' class='anchor underline'>Resume</h2>
	<h3><a href='https://docs.google.com/document/d/1huBAdG93ptRtfEQ-2vWnZ__I03sQSSYzBhdXHfkBmvM/export?format=pdf' target='_blank'>Full Resume (PDF)</a></h3>

	
	<h2 id='education' class='anchor underline'>Education</h2>
	<h3>California State University</h3>
	<h4>Bachelor's in Computer Science, Minor in Mathematics</h4>
	<div class='well'>
	<div>
	<p><a href='csus_diploma.pdf' target='_blank'>Diploma</a></p>
	<p><a href='csus_transcript.pdf' target='_blank'>Transcript</a></p>
	<p><a href='deans.pdf' target='_blank'>Dean's List</a></p>
	<p><a href='upe.pdf' target='_blank'>Upsilon Pi Epsilon Honor's Society</a> | <a href='http://upe.acm.org/membership.html'>Info</a></p>
	</div>
	</div>
	<h3>American River College</h3>
	<div class='well'>
	<div>
	<p><a href='arc_comsci.pdf' target='_blank'>Associate's in Computer Science</a></p>
	<p><a href='arc_math.pdf' target='_blank'>Associate's in Science and Mathematics</a></p>
	<p><a href='arc_transcript.pdf' target='_blank'>Transcript</a></p>
	</div>
	</div>
	<h2 id='references' class='anchor underline'>References</h2>
	<p>Contact info available on request.</p>
	<div class='reference'>
		<img src='karandeep.png'>
		<blockquote>After talking to me, I'll be surprised if they don't put you in charge of the whole company.
		<footer>Karandeep Singh, SCRUM Leader</footer>
		</blockquote>
	</div>
	<div class='reference'>
		<img src='gordon.png'>
		<blockquote> Her demeanor is very professional and she is certainly
going to be a successful computer scientist, whether she chooses a career in industry or academia. She gets along well with other students and will make a great team member.
		<footer>V. Scott Gordon, Professor</footer>
		</blockquote>
	</div>
	<div class='reference'>
		<img>
		<blockquote>Our department would have fallen apart without you.
		<footer>Jigme Chhimi, Manager, CalTrans web team</footer>
		</blockquote>
	</div>
	<div class='reference'>
		<img>
		<blockquote>If only she could be cloned....
		<footer>Chantel D, client</footer>
		</blockquote>
	</div>
	<h2 id='contact' class='anchor underline'>Contact</h2>
	<p>If you have a project you'd like me to work on, or a position on your team, please contact me. I am always excited to put my skills to good use.</p>
	<p>Email: <a href='mailto:admin@ace-development.com'>admin@ace-development.com</a></p>
	<div style='height:100px;'></div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js' integrity='sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo' crossorigin='anonymous'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js' integrity='sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1' crossorigin='anonymous'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js' integrity='sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM' crossorigin='anonymous'></script>
</body>

</html>
