<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Named accounts enable users to easily remember and communicate their account information. Every BitShares account is assigned a globally unique name that can be selected by its creator.">
    <meta name="keywords" content="bitshares, blockchain, named accounts, security">
	
    <title>Named Accounts | BitShares Blockchain</title>
    <base href="/">    
	<!-- Styles -->
    <link href="../assets/css/core.min.css" rel="stylesheet">
    <link href="../assets/css/thesaas.min.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="../assets/css/popup.css">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="../assets/img/apple-touch-icon.png">
    <link rel="icon" href="../assets/img/favicon.ico">

    <!--  Open Graph Tags -->
    <meta property="og:title" content="Transferable Named Accounts | BitShares Blockchain">
    <meta property="og:description" content="Named accounts enable users to easily remember and communicate their account information. Every BitShares account is assigned a globally unique name that can be selected by its creator.">
    <meta property="og:image" content="../assets/img/og-img.jpg">
    <meta property="og:url" content="https://bitshares.org/">
    <meta name="twitter:card" content="summary_large_image">
</head>
  <body>
  <div canvas="container">
    <!-- Topbar Navigation Bar Begins-->
    <?php require('../assets/php/header.php'); ?>
    <!-- Top Navigation Bar Ends-->

    <!-- Header -->
    <header class="header header-inverse inner-headers">
      <div class="container text-center">
        <div class="row">
          <div class="col-12 col-lg-8 offset-lg-2">
            <h1>Transferable Named Accounts</h1>
            <p class="fs-18 opacity-70">Easy and secure transactions</p>
          </div>
        </div>
      </div>
    </header>
    <!-- END Header -->

    <!-- Main container -->
    <main class="main-content">
		<section class="section no-show-btn pt-0 pb-0 cmc_div">
			<!-- MARKET CAP & PRICE -->
			<div class="price_mc">
			<div class="mc_data">
				<div class="mc_bts_price">BTS Price:</div><div class="coinmarketcap-currency-wig" data-currency="bitshares" data-base="USD" data-secondary="BTC" data-ticker="true" data-rank="false" data-marketcap="false" data-volume="false" data-stats="USD" data-statsticker="true"></div>
			
				<div class="mc_bts_mc">Market Cap:</div><div class="coinmarketcap-currency-widget" data-currency="bitshares" data-base="USD" data-secondary="BTC" data-ticker="true" data-rank="false" data-marketcap="true" data-volume="false" data-stats="USD" data-statsticker="true"></div>
			
				<div class="mc_bts_24">Volume (24h):</div><div class="coinmarketcap-currency-widget" data-currency="bitshares" data-base="USD" data-secondary="BTC" data-ticker="true" data-rank="false" data-marketcap="false" data-volume="true" data-stats="USD" data-statsticker="true"></div>
			</div>
			</div>
			<!-- MARKET CAP & PRICE -->
		</section>
      <section class="section section-x">
        <div class="container">
          <p>Named accounts allow you to easily remember and communicate your account information with security. We don't use IP addresses to browse the internet or numbers to identify our email, so why shouldn't we have human-friendly account names for our blockchain transactions?</p>
          <p>Every BitShares blockchain account is assigned a globally unique name that can be selected by its creator. There are many uses for named accounts beyond security and simply being an alias to a set of <a href="../technology/dynamic-account-permissions" target="_blank">dynamic account permissions</a>. They can be used as user logins or even mapped to your domain name. Named accounts are also transferable, which means a name can become valuable in its own right.</p>  
          <p>BitShares blockchain defines a simple algorithm to determine the fee it charges to reserve a new account name. Names that contain a number or dash '-', are longer than 8 characters, or contain no vowels are essentially free. Otherwise the name is priced according to its length. BitShares has the power to adapt to market demands by allowing <a href="../technology/delegated-proof-of-stake-consensus" target="_blank">delegates</a> to propose a different fee for each length.</p>
<br />
<h2 id="transferring-names">Transferring Names</h2>
          <p>BitShares blockchain ensures security for named account transfers by updating the permissions used to control them. In the context of web-of-trust however, the semantics of transferring an account are slightly different. Named account holders need a means to update their keys for security purposes while maintaining their standing in the web-of-trust. Users must be given a way to explicitly transfer a BitShares account name to a new user while breaking any liability for how the account is used in the future.</p>
          <p>When a BitShares blockchain user transfers an account name, they use a special transaction that clears all of the links in the web-of-trust. This protects both the buyer and the seller, because simply updating the key that controls a named account does not signify a legal change in ownership.</p>
      </section>
    </main>
    <!-- END Main container -->

<!-- Footer -->
<?php require('../assets/php/footer.php');?>
<!-- END Footer -->
	
</div>
<!-- Slide Mobile Menu --->
<?php require('../assets/php/mobilemenu.php');?>
<!-- End Slide Mobile Menu --->
    <!-- Scripts -->
    <script src="../assets/js/core.min.js"></script>
    <script src="../assets/js/thesaas.js"></script>
    <script src="../assets/js/script.js"></script>
	<script type="text/javascript" src="../assets/js/marketcap.js"></script>
	<!-- End Scripts -->
	<!-- Go to Top Button -->
	  <div id="stop" class="scrollTop bttt-border bttt-round bttt-positionRight bttt-slideFromBottom">
		<i class='fa fa-chevron-up'></i>
	  </div>
	<!-- End Go to Top Button -->
	  	<script>
			$(function() {
				cbpHorizontalMenu.init();
			});
		</script>
	</body>
</html>