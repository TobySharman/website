<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Interlogical Contacct page</title>
    <link rel="icon" href="favicon.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
    <link rel="stylesheet" type="text/css" href="base.css">
    <style>
    h1 {
      color: white;
    }

    h4 {
      color: #eee;
    }

    input:focus ~ label, textarea:focus ~ label, input:valid ~ label, textarea:valid ~ label {
      font-size: 0.75em;
      color: #999;
      top: -5px;
      -webkit-transition: all 0.225s ease;
      transition: all 0.225s ease;
    }

    input, textarea {
      padding: 30px;
      border: 0;
      width: 100%;
      font-size: 1rem;
      background-color: #2d2d2d;
      color: white;
      border-radius: 4px;
    }

    input:focus, textarea:focus {
      outline: 0;
    }

    input:focus ~ span, textarea:focus ~ span {
      width: 100%;
      -webkit-transition: all 0.075s ease;
      transition: all 0.075s ease;
    }

    textarea {
      width: 100%;
      min-height: 15em;
    }

    input[type=checkbox] + label {
      color: #ccc;
      font-style: italic;
    }

    input[type=checkbox]:checked + label {
      color: #f00;
      font-style: normal;
    }

    .input-container {
      width: 650px;
      max-width: 100%;
      margin: 20px auto 25px auto;
    }

    .styled-input {
      float: left;
      width: 293px;
      margin: 1rem 0;
      position: relative;
      border-radius: 4px;
    }

    .styled-input label {
      color: #999;
      padding: 1.3rem 30px 1rem 30px;
      position: absolute;
      top: 10px;
      left: 0;
      -webkit-transition: all 0.25s ease;
      transition: all 0.25s ease;
      pointer-events: none;
    }

    .styled-input.wide {
      width: 650px;
      max-width: 100%;
    }

    .submit-btn {
      float: right;
      padding: 7px 35px;
      border-radius: 60px;
      display: inline-block;
      background-color: #4b8cfb;
      color: white;
      font-size: 18px;
      cursor: pointer;
      box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.06), 0 2px 10px 0 rgba(0, 0, 0, 0.07);
      -webkit-transition: all 300ms ease;
      transition: all 300ms ease;
    }

    .submit-btn:hover {
      transform: translateY(1px);
      box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.10), 0 1px 1px 0 rgba(0, 0, 0, 0.09);
    }

    .container {
      padding: 0 16px;
    }

    .container::after, .row::after {
      content: "";
      clear: both;
      display: table;
    }

    .container:after, .row:after {
      content: "";
      clear: both;
      display: table;
    }

    @media screen and (max-width: 700px) {
      body {
        background-image: url(mbackground.png);
      }
    }
    </style>
  </head>
  <body>

    <header>
      <img class="logo" src="logo.png" alt="Logo">
      <nav>
        <ul>
          <li><a href="http://ye-interlogical.com/"><i class="fa fa-home"></i>  Home</a></li>
          <li class="sub-menu"><a><i class="fa fa-info-circle"></i> About</a>
            <ul>
              <li><a href="http://ye-interlogical.com/team.html"><i class="fa fa-users"></i> Team</a></li>
              <li><a href="http://ye-interlogical.com/product.html"><i class="fas fa-rocket"></i> Product</a></li>
              <li><a href="#"><i class="far fa-newspaper"></i> News</a></li>
            </ul>
          </li>
          <li><a class="presentpage"><i class="fa fa-phone"></i> Contact</a></li>
          <li class="sub-menu"><a><img class="ye" src="ye.png" alt="YE Logo">   Young Enterprise</a>
            <ul>
              <li><a href="https://www.young-enterprise.org.uk/"><img class="ye" src="ye.png" alt="YE Logo">   Young Enterprise</a></li>
              <li><a href="#"><i class="fas fa-shopping-basket"></i> YE Marketplace</a></li>
            </ul>
          </li>
          <li><a href="http://ye-interlogical.com/download.html"><i class="fa fa-download"></i> App Download</a></li>
        </ul>
      </nav>
      <div class="menu-toggle">
        <i class="fa fa-bars" aria-hidden="true" onclick="toggleClass(this)"></i>
      </div>
    </header>

      <div class="container">
	<div class="row">
			<h1 style="text-align:center">contact us</h1>
	</div>
	<div class="row">
			<h4 style="text-align:center">We'd love to hear from you!</h4>
	</div>
  <form action="contactForm.php" method="post">
	<div class="row input-container">
			<div class="col-xs-12">
				<div class="styled-input wide">
					<input type="text" name="name" required />
					<label>Name</label>
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="styled-input">
					<input type="email" name="mail" required />
					<label>Email</label>
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="styled-input" style="float:right;">
					<input type="text" name="subject" required />
					<label>Subject</label>
				</div>
			</div>
			<div class="col-xs-12">
				<div class="styled-input wide">
					<textarea name="message" required></textarea>
					<label>Message</label>
				</div>
			</div>
			<div class="col-xs-12">
        <button type="submit" name="submit" class="btn-lrg submit-btn">Send Message</button>
			</div>
    </form>
	</div>
</div>

<section id="social_icon_footer">
  <div class="container">
    <div class="text-center center-block">
      <p><b>Disclaimer:</b> We use a third party service as a directory to our social media accounts. <br> You will be routed to a urlgenius page and then to whatever medium is best suited for your device.</p>
      <a href="#"><i id="social-fb" class="fab fa-facebook-square fa-3x social"></i></a>
      <a href="#"><i id="social-tw" class="fab fa-twitter-square fa-3x social"></i></a>
      <a href="https://urlgeni.us/instagram/Interlogical"><i id="social-ig" class="fab fa-instagram fa-3x social"></i></a>
      <a href="#"><i id="social-yt" class="fab fa-youtube fa-3x social"></i></a>
      <a href="#"><i id="social-sc" class="fab fa-snapchat-square fa-3x social"></i></a>
    </div>
  </div>
</section>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="js.js"></script>

  </body>
  </html>