<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Reach out to BitShares eco-system and it's respectful representatives through contact form.">
    <meta name="keywords" content="contact, reach us, contact us, bitshares, form, point, blockchain, eco-system, dpos, delegated">

    <title>Contact Us | BitShares Blockchain</title>
	<base href="/">
	    <!-- Styles -->
    <link href="assets/css/core.min.css" rel="stylesheet">
    <link href="assets/css/thesaas.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">
    <link rel="icon" href="assets/img/favicon.ico">

	<script src="https://www.google.com/recaptcha/api.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>
$(function()
{
    function after_form_submitted(data)
    {
        if(data.result == 'success')
        {
            $('form#reused_form').hide();
            $('#success_message').show();
            $('#error_message').hide();
        }
        else
        {
            $('#error_message').append('<ul></ul>');

            jQuery.each(data.errors,function(key,val)
            {
                $('#error_message ul').append('<li>'+key+':'+val+'</li>');
            });
            $('#success_message').hide();
            $('#error_message').show();

            //reverse the response on the button
            $('button[type="button"]', $form).each(function()
            {
                $btn = $(this);
                label = $btn.prop('orig_label');
                if(label)
                {
                    $btn.prop('type','submit' );
                    $btn.text(label);
                    $btn.prop('orig_label','');
                }
            });

        }//else
    }

	$('#reused_form').submit(function(e)
      {
        e.preventDefault();

        $form = $(this);
        //show some response on the button
        $('button[type="submit"]', $form).each(function()
        {
            $btn = $(this);
            $btn.prop('type','button' );
            $btn.prop('orig_label',$btn.text());
            $btn.text('Sending ...');
        });


                    $.ajax({
                type: "POST",
                url: 'handler.php',
                data: $form.serialize(),
                success: after_form_submitted,
                dataType: 'json'
            });

      });
});
</script>
<style>

	.valigned {vertical-align:top;}
	.grid-container {
	  display: grid;
	  grid-template-columns: 40% 60%;
	  grid-gap: 10px;
	  background-color: #fff;
	  padding: 0px;
	}
	.grid-container > div {
	  background-color: rgba(255, 255, 255, 0.8);
	  text-align: left;
	  padding: 20px 0;
	}
	
	.item1 {
	  grid-row: 1 / 3;
	}

	#mc_embed_signup input.email {width:73%!important;}
	#mc_embed_signup{background:#fff; clear:left; font-size:12px!important; }
	#mc_embed_signup form {padding: 10px 0 10px 0%!important;}
	.btn {font-size:13px;}

	@media (max-width: 2500px) {
		.col-lg-6 {
		-webkit-box-flex: 0 !important;
		-webkit-flex: 0 0 94% !important;
		-ms-flex: 0 0 94% !important;
		flex: 0 0 94% !important;
		max-width: 94% !important;
		}	
	}
	@media (max-width: 1200px) {
		.col-lg-6 {
		-webkit-box-flex: 0 !important;
		-webkit-flex: 0 0 92% !important;
		-ms-flex: 0 0 92% !important;
		flex: 0 0 92% !important;
		max-width: 92% !important;
		}	
	}
	@media (max-width: 992px) {
		.col-lg-6 {
		-webkit-box-flex: 0 !important;
		-webkit-flex: 0 0 90% !important;
		-ms-flex: 0 0 90% !important;
		flex: 0 0 90% !important;
		max-width: 90% !important;
		}	
		.grid-container {grid-template-columns: none !important;}
	}
	@media (max-width: 768px) {
		.col-lg-6 {
		-webkit-box-flex: 0 !important;
		-webkit-flex: 0 0 90% !important;
		-ms-flex: 0 0 90% !important;
		flex: 0 0 90% !important;
		max-width: 90% !important;
		}	
	}
	@media (min-width: 768px) {
	.col-md-6 {
		-webkit-box-flex: 0;
		-webkit-flex: 0 0 100%;
		-ms-flex: 0 0 100%;
		flex: 0 0 100%;
		max-width: 100%;
		}
	}
	@media (max-width: 414px) {
		.col-lg-6 {
		-webkit-box-flex: 0 !important;
		-webkit-flex: 0 0 90% !important;
		-ms-flex: 0 0 90% !important;
		flex: 0 0 90% !important;
		max-width: 90% !important;
		}	
	}
	@media (max-width: 380px) {
		.col-lg-6 {
		-webkit-box-flex: 0 ;
		-webkit-flex: 0 0 89% ;
		-ms-flex: 0 0 89% ;
		flex: 0 0 89% ;
		max-width: 89% ;
		}	
	}
	@media screen and (max-width: 414px) {
		.g-recaptcha {
		  transform:scale(1);transform-origin:0 0
		}
	}
	@media screen and (max-width: 411px) {
		.g-recaptcha {
		  transform:scale(0.98);transform-origin:0 0
		}
	}
	@media screen and (max-width: 375px) {
		.g-recaptcha {
		  transform:scale(0.89);transform-origin:0 0
		}
	}
	@media screen and (min-width: 361px) {
		.compact-hide {display:none;}
		.normal-hide {display:inherit;}
	}
	@media screen and (max-width: 360px) {
		.compact-hide {display:inherit; height:90px;}
		.normal-hide {display:none;}
	}
</style>
	
    <!--  Open Graph Tags -->
    <meta property="og:title" content="Contact Us | BitShares Blockchain">
    <meta property="og:description" content="Reach out to BitShares eco-system and it's respectful representatives through contact form.">
    <meta property="og:image" content="assets/img/og-img.jpg">
    <meta property="og:url" content="https://bitshares.org/">
    <meta name="twitter:card" content="summary_large_image">
    
    <!-- Topbar Navigation Bar Begins-->
    <?php require('assets/php/header.php'); ?>
    <!-- Top Navigation Bar Ends-->
</head>

  <body>

  <div canvas="container">

    <!-- Header -->
    <header class="header header-inverse inner-headers">
      <div class="container text-center">
      
        <div class="row">
          <div class="col-12 col-lg-8 offset-lg-2">

            <h1>Contact</h1>
            <p class="fs-18 opacity-70">Let's keep in touch.</p>

          </div>
        </div>

      </div>
    </header>
    <!-- END Header -->

    <!-- Main container -->
    <main class="main-content">
	<section class="section section-x">
        <div class="container">
			<div class="grid-container">
			  <div class="item1">
						<form id="contact-form" class="col-lg-6 mx-auto bg-grey p-6 rounded p-20" method="POST" >
					  <div class="form-row">
						<div class="form-group col-md-6 p-0">
						  <input id="name" class="form-control form-control-lg" type="text" name="name" placeholder="Name" required maxlenght="50">
						</div>
						<div class="form-group col-md-6 p-0">
						  <input id="email" class="form-control" type="email" name="email" placeholder="Your Email Address" required>
						</div>
					  </div>


					  <div class="form-group">
						<textarea id="message" class="form-control form-control-lg" rows="8" maxlenght="5000" placeholder="Your Message" name="message" required></textarea>
					  </div>
					  <div class="text-xs-center">
					  <div class="text-xs-center normal-hide">
						<div class="g-recaptcha" data-sitekey="6LdI73oUAAAAAE6g5PkvYXrH7OOwdBcc-CyA5-hT"></div>
                      			  </div>
					  <div class="text-xs-center compact-hide">
						<div class="g-recaptcha" data-size="compact" data-sitekey="6LdI73oUAAAAAE6g5PkvYXrH7OOwdBcc-CyA5-hT"></div>
                      			  </div>
                     			  </div>
					  <div class="text-center">
						<button class="btn btn-lg btn-primary" type="submit">Submit Inquiry</button>
					  </div>
					</form>
					<div  id="success_message" style="display:none">
      <h3>Submitted the form successfully!</h3>
      <p>
      We will get back to you soon.
      </p>
</div>
        <div id="error_message"
        style="width:100%; height:100%; display:none; ">
        <h3>Error</h3>
        Sorry there was an error sending your form.
        </div>
			  </div>
			  <div class="item2">
			      <h3>Move Institute</h3>
			      <p class="contact-desc">Owner of bitshares.org domain and Website Manager through Consensus</p>
			      
			      <p class="contact-info">Address: Naselje Ljudske Pravice 29<br>
			      9000 Murska Sobota, Slovenia<br>
			      Reg. number: 2098555000<br>
			      <a class="weblinks" href="https://move-institute.si">Official Website</a></p>
			  
			      <h3>BitShares Blockchain Foundation</h3>
			      <p class="contact-desc">Legal Representative, Public Escrow/Accountant and elected Spokesperson</p>
			      
			      <p class="contact-info">Address: Zutphenseweg 6<br>
                  7418AJ Deventer, Netherlands<br>
                  Reg. number: 66190169<br>
			      <a class="weblinks" href="https://bitshares.foundation">Official Website</a></p>
			  </div>
			</div>
		</div>
      </section>
    </main>
    <!-- END Main container -->
<?php require('assets/php/footer.php');?>
</div>
<!-- Responsive Menu -->
<?php require('assets/php/mobilemenu.php');?>
<!-- Responsive Menu -->
    <!-- Scripts -->
    <script src="assets/js/core.min.js"></script>
    <script src="assets/js/thesaas.js"></script>
    <script src="assets/js/script.js"></script>
	<script type="text/javascript" src="assets/js/marketcap.js"></script>
	<!-- End Scripts -->
	<!-- Go to Top Button -->
	  <div id="stop" class="scrollTop bttt-border bttt-round bttt-positionRight bttt-slideFromBottom">
		<i class='fa fa-chevron-up'></i>
	  </div>
	<!-- End Go to Top Button -->
  </body>
</html>
