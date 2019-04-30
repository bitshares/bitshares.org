<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="The BitShares Token Factory is a built in dApp enabling token holders to create their own cryptographic assets or tokens on the BitShares blockchain.">
    <meta name="keywords" content="decentralized, blockchain, tokens, business, BitShares">
    <base href="https://bitshares.org/">

    <title>BitShares Token Factory | Bitshares dApps</title>
    <!-- Styles -->
    <link href="../assets/css/core.min.css" rel="stylesheet">
    <link href="../assets/css/thesaas.min.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="../assets/css/popup.css">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="../assets/img/apple-touch-icon.png">
    <link rel="icon" href="../assets/img/favicon.ico">

    <!--  Open Graph Tags -->
    <meta property="og:title" content="BitShares Token Factory | Bitshares dApps">
    <meta property="og:description" content="The BitShares Token Factory is a built in dApp enabling token holders to create their own cryptographic assets or tokens on the BitShares blockchain.">
    <meta property="og:image" content="../assets/img/og-img.jpg">
    <meta property="og:url" content="https://bitshares.org/">
    <meta name="twitter:card" content="summary_large_image">
</head>

  <body>

  <div canvas="container">
    <!-- Topbar Navigation Bar Begins-->
    <nav class="topbar topbar-inverse topbar-expand-md topbar-sticky">
	<div class="container container_bar">
		<div class="topbar-left">
			<a class="topbar-brand" href="/">
			<img alt="BitShares" class="logo-default" src="assets/img/logo.svg" width="150" height="52">
			<img alt="BitShares" class="logo-inverse" src="assets/img/logo.svg" width="150" height="52">
			</a></div>
		<div class="topbar-right">
			<ul class="topbar-nav nav nav-toggle-click">
				<li class="nav-item"><a class="nav-link" href="/">Home</a></li>
				<li class="nav-item"><a class="nav-link" href="#">About <i class="fa fa-caret-down"></i></a>
				<div class="nav-submenu">
					<div class="nav-item">
						<a class="nav-link" href="#">Development
						<i class="fa fa-caret-right"></i></a>
						<div class="nav-submenu">
							<a class="nav-link" target="_blank" href="http://dev.bitshares.works">Dev Integration Guide</a>
							<a class="nav-link" target="_blank" href="https://bitshares.org/doxygen/">Doxygen</a>
							<a class="nav-link" target="_blank" href="https://github.com/bitshares" >GitHub</a>
						</div>
					</div>

					<div class="nav-item">
						<a class="nav-link" href="#">Native dApps<i class="fa fa-caret-right"></i></a>
						<div class="nav-submenu">
							<a class="nav-link" href="https://wallet.bitshares.org" target="_blank">BitShares DEX</a>
						</div>
					</div>

					<a class="nav-link" target="_blank" href="http://how.bitshares.works">Documentation</a>
				</div>
				</li>
				<li class="nav-item"><a class="nav-link" href="#">Technology<i class="fa fa-caret-down"></i></a>
				<div class="nav-submenu">
					<a class="nav-link" href="technology/decentralized-asset-exchange">Decentralized Asset Exchange</a>
					<a class="nav-link" href="technology/delegated-proof-of-stake-consensus">DPoS Consensus</a>
					<a class="nav-link" href="technology/dynamic-account-permissions">Dynamic Account Permissions</a>
					<a class="nav-link" href="technology/named-accounts">Named Accounts</a>
					<a class="nav-link" href="technology/industrial-performance-and-scalability">Performance and Scalability</a>
					<a class="nav-link" href="technology/price-stable-cryptocurrencies">Price-Stable-Cryptocurrencies</a>
					<a class="nav-link" href="technology/recurring-scheduled-payments">Recurring & Scheduled Payments</a>
					<a class="nav-link" href="technology/referral-rewards-program">Referral Rewards Program</a>
					<a class="nav-link" href="technology/stakeholder-approved-funding">Stakeholder Approved Funding</a>
					<a class="nav-link" href="technology/user-issued-assets">User-Issued Assets</a>
				</div>
				</li>
				<li class="nav-item"><a class="nav-link" target="_blank" href="https://github.com/bitshares-foundation/bitshares.foundation/blob/master/download/articles/BitSharesBlockchain.pdf">Whitepaper</a></li>
				<li class="nav-item"><a class="nav-link" href="download">Download</a></li>
				<li class="nav-item"><a class="nav-link" href="contact">Contact</a></li>
			</ul>
		</div>
	</div>
</nav>

<!-- bitshares.org - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-129197857-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-129197857-1');
</script>

    <!-- Top Navigation Bar Ends-->

    <!-- Header -->
    <header class="header header-inverse inner-headers">
      <div class="container text-center">
        <div class="row">
          <div class="col-12 col-lg-8 offset-lg-2">
            <h1>The BitShares Token Factory dApp</h1>
            <p class="fs-18 opacity-70">Create cryptographic tokens, called UIAs (User Issued Assets)</p>
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
  bitshares-token-factory-dapp.php
</div>
      </section>
    </main>
    <!-- END Main container -->

<!-- Footer -->
      <footer class="site-footer py-90">
        <div class="container">
          <div class="row gap-y">
            <div class="col-6 col-md-4 col-lg-2 hideit">
              <h6 class="heading-alt text-uppercase fs-14 mb-3 untext">Learn</h6>
              <div class="nav flex-column">
                <a class="nav-link" href="https://how.bitshares.works">Documentation</a>
                <a class="nav-link" href="http://bitshares-explorer.io/">Block Explorer</a>
				<a class="nav-link" href="https://dev.bitshares.works">Dev Integration Guide</a>
				<a class="nav-link" href="https://bitshares.org/doxygen/">Doxygen</a>
              </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2 hideit">
              <h6 class="heading-alt text-uppercase fs-14 mb-3 untext">Participate</h6>
              <div class="nav flex-column">
				<a class="nav-link" href="#">Events</a>
				<a class="nav-link" href="assets/bitshares-media-kit.zip">Media Kit</a>
              </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2 hideit">
              <h6 class="heading-alt text-uppercase fs-14 mb-3 untext">Social</h6>
              <div class="nav flex-column">
				<a class="nav-link" target="_blank" href="https://github.com/bitshares">GitHub</a>
				<a class="nav-link" target="_blank" href="https://www.bitsharestalk.org/">Forum</a>
              </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2 hideit">
              <h6 class="heading-alt text-uppercase fs-14 mb-3 untext">BitShares.org</h6>
              <div class="nav flex-column">
                <a class="nav-link" href="contact">Contact</a>
                <a class="nav-link" href="#">Terms of Use</a>
		<a class="nav-link" href="#">Privacy Policy</a>
              </div>
            </div>

            <div class="col-12 col-lg-3">
              <h6 class="heading-alt text-uppercase fs-14 mb-3 untext">BITSHARES.ORG&nbsp;NEWSLETTER</h6>
                COMING SOON
				<!--
				<link href="https://cdn-images.mailchimp.com/embedcode/slim-10_7.css" rel="stylesheet" type="text/css">
					<div class="popup" onclick="popup()"><input type="submit" value="CLICK TO SUBSCRIBE" name="subscribe" class="btn btn2 btn-md btn-primary subscribe">
						<span class="popuptext" id="popup">
							<iframe style="height:60vh" src="https://bitshares.us19.list-manage.com/subscribe/post?u=bd722493f0fc05df682c6b82f&id=1228ad58e8"></iframe>
						</span>
					</div> -->
              <hr>
              <div class="social text-center">
				  <a class="social-twitter" target="_blank" href="https://twitter.com/search?q=bitshares"><i class="fa fa-twitter"></i></a>
				  <a class="social-twitter" target="_blank" href="https://github.com/bitshares"><i class="fa fa-github"></i></a>
              </div>
              <br>
            </div>
          </div>
        </div>
      </footer>
<!-- END Footer --><!-- END Footer -->

</div>

<!-- Slide Mobile Menu --->
<div class="button_container" id="toggle"><span class="top"></span><span class="middle"></span><span class="bottom"></span></div>
<div class="overlay" id="overlay">
	<div class="scrollbar2" id="style-2">
		<a href="/"><img class="logo-default my-15 mx-25" src="assets/img/logo.png" alt="Bitshares" width="130"></a>
		<nav class="overlay-menu h-full mt-25">
			<div class="containerz">
				<div class="main">
					<nav id="cbp-hrmenu" class="cbp-hrmenu">
					<nav id="cbp-hrmenu" class="cbp-hrmenu">
						<ul>
							<li>
								<a href="#">ABOUT</a>
								<div class="cbp-hrsub">
									<div class="cbp-hrsub-inner">
										<div class="menu-part">
										<a class="fw-600" href="#">DEVELOPMENT</a>
											<ul>
												<li class="ml-20"><a target="_blank" href="https://github.com/bitshares">GitHub</a></li>
												<li class="ml-20"><a target="_blank" href="https://dev.bitshares.works">Dev Integration Guide</a></li>
												<li class="ml-20"><a target="_blank" href="https://bitshares.org/doxygen/">Doxygen</a></li>
											</ul>
										</div>
									</div>

									<div class="cbp-hrsub-inner">
										<div class="menu-part">
										<a class="fw-600" href="#">NATIVE dAPPS</a>
											<ul>
												<li class="ml-20"><a target="_blank" href="https://bitshares.org/wallet">BitShares DEX</a></li>
												</ul>
										</div>
									</div>

								</div><!-- /cbp-hrsub -->
							</li>

							<li>
								<a href="#">TECHNOLOGY</a>
								<div class="cbp-hrsub">
									<div class="cbp-hrsub-inner">
										<div class="menu-comm">
											<ul>
												<li class="ml-20"></li><a href="technology">Technology</a></li>
											</ul>
										</div>
									</div><!-- /cbp-hrsub-inner -->
								</div><!-- /cbp-hrsub -->
							</li>
							<li>
								<a href="#">DOCUMENTATION</a>
								<div class="cbp-hrsub">
									<div class="cbp-hrsub-inner">
										<div class="menu-part">
											<ul>
											    <li class="ml-20"><a href="https://how.bitshares.works">Documentation</a></li>
												<li class="ml-20"><a target="_blank" href="https://github.com/bitshares-foundation/bitshares.foundation/blob/master/download/articles/BitSharesBlockchain.pdf">BitShares Blockchain Whitepaper</a></li>
											</ul>
										</div>
									</div>
								</div>
							</li>
						<li>
								<a href="#">CONTACT</a>
								<div class="cbp-hrsub">
									<div class="cbp-hrsub-inner">
										<div class="menu-part">
											<ul>
												<li class="ml-20"><a href="contact">Contact</a></li>
											</ul>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</nav>
	</div>
</div><!-- End Slide Mobile Menu --->

    <!-- Scripts -->
    <script src="../assets/js/core.min.js"></script>
    <script src="../assets/js/thesaas.js"></script>
    <script src="../assets/js/script.js"></script>
	<script src="../assets/js/popup.js"></script>
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
