<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="col-md-12">
			<img src="zuri.png" class="col-md-4" style="border-radius: 40px;">
			<h3>Check out the internship company: <a href="https://zuri.team" target="_blank">Zuri</a></h3>
			<h2 id="my_name">Adetunji Adeyinka</h2>
			<h1 class="h1-responsive font-weight-bold">Resume</h1>
			<h2 class="h2-responsive">Overview</h2>
			<p>My name is Adetunji Adeyinka.<br> I am a Nigerian.<br> I am a 16-years-old developer with 3 years of experience.<br> I can:<br> - use HTML, CSS and Javascrpt for the frontend.<br> - use Frameworks (Bootstrap, W3CSS, JQuery) for fast development.<br> - use PHP and Python for the backend.<br> - use Flutter (a little) for building mobile apps.<br> - use MySQL for database management.<br> - use Heroku for DevOps, deployment and cloud computing. <br> - use Git/GitHub for efficient code management, code contribution and to set up continuous integration and development.<br> - use postman for testing APIs.<br> - build and use REST APIs.<br> <br> I also possess:<br> - fast learning abilities.<br> - team playing qualities ( currently the Labour Prefect of my high school (Caleb International College)).<br> - cyber security skills. <br> - keynote speaking qualities.<br> I was also the Head Boy for my primary school (The Pathway Schhol). <br> I have been the leader/ assistant for various projects.<br> I want to be the Elon Musk of Nigeria.
			</p><br>
			<h2 class="h1-responsive font-weight-bold">Educational History</h2>
			<h3 class="h3-responsive">2006-2015 | The Pathway School</h3>
			<p>I completed 9 years in elementary school and graduated as the best graduating student. I was in clubs such as the chess club and book club. I was also the head boy of my sceondary school.</p>
			<hr>
			<h3 class="h3-responsive">2015-2021 | Caleb International College</h3>
			<p>I am currenly in my final year in high school. I involve myself in clubs such as the media crew, the chess club and the JETS club. I am also the Labour prefect of my school.</p>
			<hr>
			<h2 class="h1-responsive font-weight-bold">Expreience</h2>
			<h3 class="h3-responsive">Feb 21 - July 21 | Zuri Internship Training</h3>
			<p>I enrolled in an internship trainnig programme so as to make myself familiar with the work environment and prepare myself for upcoming internships and become more responsible in my work field.</p>
		</div>
		<section class="mb-4">
		<h2 class="h2-responsive font-weight-bold text-center my-4">My socials</h2>
	    <h2 class="h2-responsive text-center my-4 mb-3"><a href="https://twitter.com/itzadetunji1"target="_blank">Twitter</a> | <a href="https://instagram.com/itzadetunji">Instagram</a> | <a href="https://github.com/itzadetunji"target="_blank">Github</a></h2>
	    <h2 class="h1-responsive font-weight-bold text-center my-4">Contact Me</h2>
	    <p class="text-center w-responsive mx-auto mb-5">Send Me An E-mail.
		    <div class="row">
		        <div class="col-md-12 mb-md-0 mb-5">
		            <form id="contact-form" name="sentMessage" action="mail.php" method="POST">
		                <div class="row">
		                    <div class="col-md-6">
		                        <div class="md-form mb-0">
		                            <input type="text" id="name" name="name" class="form-control" placeholder="Your Full-Name">
		                            <label for="name"></label>
		                        </div>
		                    </div>
		                    <div class="col-md-6">
		                        <div class="md-form mb-0">
		                            <input type="text" id="email" name="email" class="form-control" placeholder="Your Email Address">
		                            <label for="email"></label>
		                        </div>
		                    </div>
		                </div>
		                <div class="row">
		                    <div class="col-md-12">
		                        <div class="md-form mb-0">
		                            <input type="text" id="subject" name="subject" class="form-control" placeholder="Subject">
		                            <label for="subject"></label>
		                        </div>
		                    </div>
		                </div>
		                <div class="row">
		                    <div class="col-md-12">
		                        <div class="md-form">
		                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" placeholder="Your message" style="resize: none;"></textarea>
		                            <label for="message"></label>
		                        </div>
		                    </div>
		                </div>
		            </form>
		            <div class="text-center text-md-left">
		                <button class="btn btn-primary" name="submit" type="submit">Send Message</button>
		            </div>
		            <div class="status"></div>
		        </div>
		    </div>
		</section>
	</div>
</body>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
	<script>
		document.getElementById("my_name").innerHTML = "Adetunji Adeyinka";
	</script>
</html>