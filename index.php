<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<!--<meta http-equiv="X-UA-Compatible" content="IE=edge">-->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!--jQuery-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		
		<!--Bootstrap-->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

		<style>
			.break{page-break-before:always;}
			.videowrapper {
				float: none;
				clear: both;
				width: 100%;
				position: relative;
				padding-bottom: 56.25%;
				padding-top: 25px;
				height: 0;
			}
			.videowrapper iframe {
				position: absolute;
				top: 0;
				left: 0;
				width: 100%;
				height: 100%;
			}
		</style>
		
		<style>
			<link rel="stylesheet" type="text/css" href="resumeStyleSheet.css">
		</style>
		
		<script type="text/javascript">
		$(document).ready(function () {
			$(".navbar-nav li a").click(function(event) {
				$(".navbar-collapse").collapse('hide');
			});
		});
	</script>

		<title>Kyle Blazier</title>
	</head>
<body>
	<nav role="navigation" class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<!--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">-->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigationBar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Kyle Blazier's Website</a>
			</div>
		
			<div class="navbar-collapse collapse" id="navigationBar">	
				<ul class="nav navbar-nav navbar-right">			
					<li>
						<a href="#home">Home</a>
					</li>
					<li>
						<a href="#current">Current Endeavors</a>
					</li>
					<li>
						<a href="#about">About Me</a>
					</li>
					<li>
						<a href="#resume">Resume</a>
					</li>
					<li>
						<a href="#contact">Contact</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
			
	
	<div class="container" id="home">
		<!--<h3 class="text-muted">Kyle Blazier's Website</h3> -->
		
		<div style="padding-bottom: 50px"></div> <!-- Page break -->

		<h1>
			<span class="label label-primary">Home</span>
		</h1>
		<div class="jumbotron">
			<h2>Welcome to my website!</h2>
			<p class="lead" style="text-align:center">
				I'm a Software Engineer who is very passionate about his work, and loves to gain new skills! One of my biggest interests is Mobile App Development, specifically iOS Apps in Swift! I find the idea of developing a product which
				millions of people can hold in their hands and use at any given time to enhance their daily lives to be simply astounding, and therefore I have a passion to be one of the "superheros" that develops these apps! Why do I say "superheros"? - you may ask.
				When I was still in high school, taking my first programming class and looking forward to being a Software Engineering Major the following year, I followed Apple's Worldwide Developer Conference and saw a video that truly made an impact
				on me and inspired me. I've attached that very video below.
				
				<br></br>
				<div class="videowrapper">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/FirarNC85sU" frameborder="0" allowfullscreen></iframe>
				</div>
				<!--I am a driven person. I like to keep myself occupied and remain productive at all times. I strive to produce the best work I possibly can. My main objective is to continuously gain knowledge and improve my skills.-->
			</p>
		</div>

		<div id="about" style="padding-top: 50px">
			<h1>
				<span class="label label-primary">About Me</span>
			</h1>
			<div class="jumbotron">
				<h2>Professionally</h2>
				<p class="lead">
					I am a driven person. I like to keep myself occupied and remain productive at all times. By using my strong analytical and problem solving skills and my ability to pay close attention to detail, I strive to produce the best work I possibly can. My main objective is to continuously gain knowledge and improve my skills. I enjoy working in teams,
					as well as being a team leader who is willing to apply the initiative to get the job done, for which I can leverage my strong written and verbal communication skills.
				</p>
				<h2>Personally</h2>
				<p>
					Since my parents first dragged me onto an ice rink to go ice skating at the age of 6, I've never wanted to leave the ice. I'm a competitive ice hockey player, and play on Monmouth University's Club Ice Hockey team. I have applied the same drive to succeed that I have on the ice towards my professional development, and in each task I pursue on a daily basis.
				</p>
			</div>
		</div>

		<div id="current" style="padding-top: 50px">
			<h1>
				<span class="label label-primary">Current Endeavors</span>
			</h1>
			<div class="jumbotron" style="text-align:center">
				<h2>What I'm into now... Mobile!</h2>
				<p class="lead">
				
					<!--<img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcTVZXRRfuAdd-7rjbawrEAaqJIrHJEYVyw8ILNPB51Ra-xT0ghegw" alt="iOS Development Picture"/>-->
					<img src="swift_icon.jpeg" alt="Swift Image"/>
					
					<br></br>
					
					<strong>Mobile beginnings!</strong>
					
					<br></br>
					Currently I am all about mobile! I feel as though I've always wanted to learn mobile development, and downloading many apps onto my iPod Touch played a role in my desire to learn how to code. During my first internship after my Sophomore year
					of college, I built a Mobile Web App using the jQuery Mobile framework alongside Javascript, jQuery, HTML and CSS. At first I found it incredibly challenging; to design a powerful application with numerous options on a 4.7 inch or smaller screen takes a lot of trial and error,
					and most importantly the ability to step back and think about the user experience.
					
					<br></br>
					
					<strong>My first iOS App - Internship</strong>
					
					<br></br>

					Following up on that fantastic experience, during my internship in the summer after my Junior year of college, I was tasked with building an iOS App. Initially I thought using a program called Xamarin would be perfect - It creates native iOS Apps in C#, and I know Java well! Well,
					even though I felt creative for doing this, I couldn't help but to think I was taking the easy way out, and avoiding a challenge. Well I decided to tackle the challenge. I purchased an iOS Development Course to learn Swift, Apple's fairly new and incredibly powerful programming language.
					The course was quite long to go through, and at times it was tedious. Nevertheless, I couldn't be happier that I did it. I felt rather comfortable with Swift after the course, since it was project based and I actually built a number of apps along with the course's instruction. 
					Throughout the remainder of my internship, I operated under an agile development method and worked through numerous sprints with team members representing Development, Mobile Strategy and User Experience. Having a team with such diversity was a fantastic experience for me,
					and allowed the app to be the best that it could truthfully be. I successfully developed the app as a standalone product, released it for testing and then worked side by side with a team of over twenty mobile developers to integrate the functionality of my app into an app they had just put into
					production firm-wide. To look at the work I have done on a device I use countless times each and every single day is really a rewarding feeling. 
					
					<br></br>
					
					<strong>Public iOS App - URcode</strong>
					<br></br>
					<img src="URcodeImg.png" style="width:150px;height:150px;" alt="URcode App Image"/>
					<br></br>

					While at school for my Senior year, I was introduced to a friend of a friend who had an idea for an iOS app that he thought would be a hit. The main goal of the app was to simplify sharing contact information and social media accounts with other people that you meet, which is traditionally done verbally
					one at a time and is a relatively long and error-prone process (thanks to "creative" usernames!). That being said, he believed that it would be much simpler to present a QR code and let users scan it, which allows them to then view all of the entered data (contact information and usernames) as text. From there,
					it would be much easier for a user to copy and paste the data from the app and paste it into the corresponding app they were collecting the data for (e.g. Twitter username). Instantly, I loved the idea and could see it being an extremely popular app amongst high school and college students, and even in other contexts. 
					So I checked into the feasibility of the concept we had a few brainstorming sessions, and then we ran with the app. So we built out a set of features, placing emphasis on the quick and intuitive user experience, knowing the criticality of this, and I implemented the features. Within one week the app was built, 
					and within two weeks I had conducted a brief beta test of the app with some friends, elicited their feedback and incorporated it into the version which I submitted to the Apple App Store for review. The app is now available for download on the App Store <a href="https://appsto.re/us/kVEN-.i">here!</a>
										
					<!--The possibilites of creating something remarkable and placing it in the hands of hundreds or even thousands of people
					so that they can leverage that technology right at their fingertips from anywhere throughout their day is something that excites me greatly.-->
				</p>
			</div>
		</div>
		
		<div id="resume" style="padding-top: 50px">
			<h1>
				<span class="label label-primary">Resume</span>
			</h1>
			<div class="jumbotron">
				<p class="lead" style="text-align:center;padding:5px">
					Please click the button below to download a copy of my resume!
				</p>
				<p style="text-align:center">
					<a class="btn btn-lg btn-success" href="Blazier, Kyle-Resume.docx" target='_blank' title="Click here to open a Word document">Download My Resume <img src="msword_logo.png" style="width:35px;height:35px;"></a>
				</p>
			</div>					
		</div>
					
		<div id="contact" style="padding-top: 50px">
			<h1>
				<span class="label label-primary">Contact Me</span>
			</h1>
			<div class="jumbotron">
				<p class="lead" style="text-align:center;padding:5px">
					Feel free to contact me using any of the following methods below!
				</p>
				<h4 style="text-align:center">LinkedIn</h4>
				<p style="text-align:center">
					<a class="btn btn-lg btn-success" href="http://www.linkedin.com/in/kyleblazier/en" target='_blank' title="Click here to view my LinkedIn Profile">View My LinkedIn Profile <img src="linkedInPic.png" style="width:35px;height:35px;"></a>
				</p>
				<h4 style="text-align:center">Email Me</h4>
				<p style="text-align:center">
					<a class="btn btn-lg btn-success" href="mailto:blazierkyle@gmail.com" target='_blank' title="Click here to email me">Send Me an Email <img src="email_icon.jpg" style="width:35px;height:35px;"></a>
				</p>
			</div>
		</div>
	</div>
</body>
</html>