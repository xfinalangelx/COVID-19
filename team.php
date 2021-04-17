<?php include('components/head.inc.php'); ?>
<?php include('components/navbar.inc.php'); ?>
<?php include('sendEmail.php'); ?>

<div class="container bg panel" id="about-one">
  <div class="row">
    <div class="col-lg-12">
    <div class="head-about" id="head">
            <h2 id="about-head">About Us</h2>
    </div>
    <p class="text-about">
    We all have been affected by the current COVID-19 pandemic. However, the impact of the pandemic and its consequences are felt differently depending on our status as individuals and as members of society. While some try to adapt to working online, homeschooling their children and ordering food via Instacart, others have no choice but to be exposed to the virus while keeping society functioning.This webpage is a platform to draw the attention of the world to focus on Covid-19 Issue. So, we are aiming to provide information about Covid-19 such as the news, effects and vaccines to the public.
    </p>
    </div>
  </div>
</div>

<hr style="height:40px;border-width:0;color:gray;background-color:gray">

<div class="row">
  <div class="col-md-3">
    <div class="card">
      <img src="images/Xiaoqi.png" alt="xiaoqi" class= "center" style="width:50%">
      <div class="container">
        <h2 class="text-center">OOI XIAO QI</h2>
        <p class="title">UI/UX DESIGNER</p>
        <p class="title">example@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="col-md-3">
    <div class="card">
      <img src="images/Xiuli.png" alt="xiuli" class= "center" style="width:50%">
      <div class="container">
        <h2 class="text-center">TAN XIU LI</h2>
        <p class="title">UI/UX DESIGNER</p>
        <p class="title">example@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="col-md-3">
    <div class="card">
      <img src="images/richie.png" alt="richie"class= "center" style="width:50%">
      <div class="container">
        <h2 class="text-center">TEO RICHIE</h2>
        <p class="title">FRONTEND DEVELOPER</p>
        <p class="title">teorichiemalaya@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="col-md-3">
    <div class="card">
      <img src="images/Huiyee.png" alt="huiyee" class= "center" style="width:50%">
      <div class="container">
        <h2 class="text-center">LIM HUI YEE</h2>
        <p class="title">UI/UX DESIGNER</p>
        <p class="title">example@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>



<hr style="height:40px;border-width:0;color:gray;background-color:gray">

<div class="head-about" id="head">
            <h2 id="about-head">Contact Us</h2>
    </div>


		<form id="myForm">

			<label>Name</label>
			<input id="name" type="text" placeholder="Enter Name">
			<br><br>

			<label>Email</label>
			<input id="email" type="text" placeholder="Enter Email">
			<br><br>

			<label>Subject</label>
			<input id="subject" type="text" placeholder=" Enter Subject">
			<br><br>

			<p>Message</p>
			<textarea id="body" rows="5" placeholder="Type Message"></textarea>
			<br><br>

			<button type="button" style="background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin:0 auto;
  display:block;
  font-size: 28px;" onclick="sendEmail()" value="Send An Email">Submit</button>
		</form>
    <h4 class="notification" style = "text-align:center"></h4>

	<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script type="text/javascript">
        function sendEmail() {
            var name = $("#name");
            var email = $("#email");
            var subject = $("#subject");
            var body = $("#body");

            if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)) {
                $.ajax({
                   url: 'sendEmail.php',
                   method: 'POST',
                   dataType: 'json',
                   data: {
                       name: name.val(),
                       email: email.val(),
                       subject: subject.val(),
                       body: body.val()
                   }, success: function (response) {
                        $('#myForm')[0].reset();
                        $('.notification').text("Message Sent Successfully!");
                   }
                });
            }
        }

        function isNotEmpty(caller) {
            if (caller.val() == "") {
                caller.css('border', '1px solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }
    </script>


<?php include('components/footer.inc.php'); ?>