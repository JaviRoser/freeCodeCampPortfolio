
<!DOCTYPE html>

<!-- My personal Page (Main Page)
	July 7,2017
	Designed by Carlos Sanchez-->

<html>
	<title>My Website</title>
	<body class="mypersonalwebsite">
		<head>
			<meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1">
			<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			<link rel="stylesheet" href="me.css">
			<link href="https://fonts.googleapis.com/css?family=Francois+One" rel="stylesheet">
			<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
		</head>
<!----->
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">About</a>
  <a href="#">Portfolio</a>
  <a href="#">Contact Me</a>
  <a href="#">Contact</a>
</div>

<!-- Use any element to open the sidenav -->
<div class="menu">
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; MENU</span>
</div>
<!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->



		<!--Contact information-->
		<div id="wholepage">
			<div class="jumbotron ">
				<div class="container">
					<div class="header ">
						<h1 class="display-1">CARLOS SANCHEZ</h1>
					</div>

					<ul class="informationlist">
						<li><i class="fa fa-laptop fa-fw"></i>Computer Scientist</li>
						<li><i class="fa fa-map-marker fa-fw"></i>80 ELM ST,NEWARK N.J., 07105</li>
						<li><i class="fa fa-envelope-o fa-fw"></i>admroser@gmail.com</li>
						<li><i class="fa fa-phone fa-fw"></i>(732) 688-8979</li>
						<li><i class="fa fa-linkedin fa-fw"></i> <a href="https://www.linkedin.com/in/carlos-sanchez-330031a1/"> &nbsp;My Linkedin</a></li>
					</ul>
				</div>
			</div>
			<!--button to the top-->
			<button onclick="topFunction()" id="myBtn" title="Go to top">
				<span class="fa-stack fa-lg"><i class="fa fa-arrow-circle-up  fa-stack-2x"></i></span>
			</button>


			<!--Summary-->
			<div  class="summary">

					<div class="row">
						<div style="padding:0"class="col-md-7 ">
							<img class="img-responsive" src="me.jpg" style="width:100%">
						</div>
						<div style="padding:30px"class="col-md-5  backgroundcolorchange">
							<div class="header">
								<h2>ABOUT ME</h2>
							</div>
							<div class="panel panel-primary">
								<div class="panel-body">
									<p>
									I recently graduated from Kean University with a major in Computer Science
									Major and a minor in Math. As an undergraduate Kean University student, I
									took advanced computer courses related to networking and computer security.
									Also, I am familiarized with several programming languages. I have developed
									several individual projects and played a major role in multiple team projects.
									These projects were websites related to hotel reservation, event planning, book
									sales and a networking hardware vendor. During the development of these projects,
									I learned a lot about web and database security. Recently, I have developed and
									design a mobile android application using Google Maps API.
									</p>
								</div>
							</div>
						</div>
					</div>

			</div>
			<div  class="summary">

					<div class="row">
						<div style="padding:0"class="col-md-7 ">

			<div style='background-color:#112D4E ;color:white'>

					<h1 style='text-align:center'>PORTFOLIO</h1>
				</div>
						</div>

							<div style="padding:0"class="col-md-5 ">
							<img class="img-responsive" src="eagleelectric.jpg" style="width:100%">
						</div>

					</div>

			</div>

				<div  class="summary">

					<div class="row">
						<div style="padding:0"class="col-md-7 ">

			<div style='background-color:#112D4E ;color:white'>

					<h1 style='text-align:center'>PORTFOLIO</h1>
				</div>
						</div>

							<div style="padding:0"class="col-md-5 ">
							<img class="img-responsive" src="eagleelectric.jpg" style="width:100%">
						</div>

					</div>

			</div>



			<!--Personal Profile-->
			<div style='padding-top:20px' class="personalprofile backgrouncolor_personalprofile">
				<div class=" container">
					<div class="header">
					<h2 onload="typeWriter()"></h2>
						<h2 id="demo" ></h2>

					</div>
					<br></br>
					<div class="container">
						<div class="row">
							<div class="col-md-8">
								<img class="img-responsive" src="coding.png	" style="width:100%">
							</div>
							<br></br>
							<div class="col-md-4">
							<p>My personal interests include learning about new things related to tech</p>
							<p>Watch Udemy and Lynda courses</p>

							</div>
						</div>
					</div>
				</div>
			</div>
			</div><!--EndofWholePage-->

			<div class="ContactMe"> </div>















			<footer class="contactme text-center background_footer">
				<div class="container">
					<i class="fa fa-copyright">2017</i>
				</div>
			</footer>
	</body>
	<script>
	/* Set the width of the side navigation to 250px and the left margin of the page content to 250px */
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("wholepage").style.marginLeft = "250px";
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("wholepage").style.marginLeft = "0";
}

		//Typewriter Effect

		var i = 0;
var txt = 'Personal Profile!'; /* The text */
var speed = 50; /* The speed/duration of the effect in milliseconds */

function typeWriter() {
  if (i < txt.length) {
    document.getElementById("demo").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}















	</script>
</html>
