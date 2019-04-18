<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="BitShares is the first smart contract platform with built-in support for recurring payments, allowing users to authorize third parties within certain limits.">
    <meta name="keywords" content="bitshares, payments, scheduled, blockchain, subscriptions">
	<base href="/">


    <title>Recurring and Scheduled Payments | BitShares Blockchain</title>
    <!-- Styles -->
    <link href="../assets/css/core.min.css" rel="stylesheet">
    <link href="../assets/css/thesaas.min.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="../assets/css/popup.css">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="../assets/img/apple-touch-icon.png">
    <link rel="icon" href="../assets/img/favicon.ico">
	
    <!--  Open Graph Tags -->
    <meta property="og:title" content="Recurring and Scheduled Payments | BitShares Blockchain">
    <meta property="og:description" content="BitShares is the first smart contract platform with built-in support for recurring payments, allowing users to authorize third parties within certain limits.">
    <meta property="og:image" content="assets/img/og-img.jpg">
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
            <h1>Recurring &amp; Scheduled Payments</h1>
            <p class="fs-18 opacity-70">Flexible withdrawal permissions</p>
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
          <p>BitShares is the first smart contract platform with built-in support for recurring payments and subscription payments. This feature allows users to 
          set permissions for third parties to make withdrawals from their accounts within certain limits. For example, this feature is a convenient way to “set it and forget it” for monthly 
          payments and subscriptions.</p>
<br />
<h2 id="how-it-works">How it Works</h2>
<p>Recurring Payments are used for implementing a set of withdrawal permissions. Each account can grant any number of withdrawal
permissions to other accounts. Withdrawal permission includes the following properties:</p>
<ol class="ml-50">
<li>Start Date</li>
<li>End Date</li>
<li>Withdrawal Limit per Period</li>
<li>Period Length (i.e. monthly, weekly, daily)</li>
</ol>
<p>Any asset type can be used in the withdrawal limit.</p>
<p>After a user grants the withdrawal permissions, the authorized account can make one transfer per period of an
amount up to the limit. If there are insufficient funds then the withdrawal will fail. Withdrawal permissions aim to be a convenience for merchants and users, as they do not represent a commitment to pay.</p>
<p>It is up to each merchant to initiate each withdrawal. The BitShares platform does not automatically authorize the
transfer of funds unless sufficient signing authority is reached.</p>
<br />
<h2 id="daily-withdrawal-limits">Daily Withdrawal Limits</h2>
<p>For security purposes, many banks place daily withdrawal limits on user accounts. Theives are limited in the amount of damage they can do if an account is compromised. Withdrawal permissions enable users to
protect their BitShares funds in the same manner. To do so, a user creates two accounts: savings and checking.</p>
<p>The savings account has keys kept offline where they are unlikely to become compromised. For example - Before placing the keys in cold
storage, the savings account can authorize the checking account to make a daily withdrawal of up to $1000. The checking account can then pull money out of savings up to this limit, per day, and use those funds as
needed. This gives the user confidence that their losses are limited if their account is ever compromised.</p>
<br />
<h2 id="scheduled-payments">Scheduled Payments</h2>
<p>As stated above, the withdrawal permission system does not automatically make payments. However, BitShares has another
feature which enables scheduled payments: <em>proposed transactions</em>. At any time, a user can propose a transaction to
execute at a specific date and time in the future. If the transaction has sufficient authorization (i.e. is properly
signed by the account authorities) at the specified time, then it is automatically executed.</p>
<p>A merchant can use this feature, combined with withdrawal permissions, to implement automatic payments after a one-time
setup fee. In practice, it may be cheaper for merchants to maintain their own scheduler to automate billing, since the
blockchain charges a fee to propose a transaction separately from the transaction’s own fees.</p>
        </div>
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
