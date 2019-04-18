<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="BitShares blockchain is self-funding and has a reserve pool self-sustained by fees, and Stakeholder-Approved Funding directs where blockchain budgets go.">
    <meta name="keywords" content="bitshares, blockchain, stakeholder approved funding">

    <title>Stakeholder Approved Funding | BitShares Blockchain</title>
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
    <meta property="og:title" content="Stake-holder Approved Funding | BitShares Blockchain">
    <meta property="og:description" content="BitShares blockchain is self-funding and has a reserve pool self-sustained by fees, and Stakeholder-Approved Funding directs where blockchain budgets go.">
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
            <h1>Stakeholder-Approved Project Funding</h1>
            <p class="fs-18 opacity-70">A self-sustaining funding model</p>
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
          <p>BitShares is self-funded and self-sustaining, and stakeholder-approved funding directs where to spend blockchain budgets. There is a reserve pool of 0.9 billion BTS (March 2019) that automatically grows with the collection of transaction fees. Each day, the blockchain is authorized to autonomously spend up to 432,000 BTS, which at current market rates is enough to hire a small team to maintain the <a href="https://bitshares.org/technology/industrial-performance-scalability" target="_blank"> network</a> for years.</p>
<br />
<h2 id="income">Income</h2>
<p>The network’s ultimate goal is to collect more from transaction fees than it spends on paying witnesses and workers. Delegates can adjust the transaction fees and
  referral commission rates to ensure that the network remains sustainable. By charging appropriate fees and distributing the income in an effective manner, BitShares-powered
  networks can grow, even while others struggle. Lifetime Members pay fees similar to Bitcoin ($0.04 per transaction), while users pay fees similar to Dwolla ($0.20 per transaction)
  or centralized exchanges (0.2% of trade volume).</p>
<br />
<h2 id="workers">Workers</h2>
<p>A worker is a paid position elected by the stakeholders to fund new blockchain infrastructure or features and dApps. A Worker’s “smart contract” specifies a start date, an end date, a daily pay rate ($BTS), and a vesting period for receiving their pay. Each day, a budget allocation totalling 432,000 BTS is paid to all workers. The workers are automatically sorted by net stakeholder approval and paid in turn, until the daily budget runs out. After this point, approving further workers is not possible.</p>
  <!-- New paragraph -->
<p>Workers typically engage the whole community to campaign votes for their proposal. Once in action, progress is public to the stakeholders and community, typically along with a foundation or escrow service acting in proxy for the funds. An escrow applies an additional layer of reassurance for stakeholders, with professional reviews of work undertaken. All stakeholders (holders of BTS tokens) have the opportunity to review workers by following links published online to their descriptions or reports.</p>
<p>Each worker can specify a vesting period for funds received. This optional vesting period reassures stakeholders that a proposed worker has a long-term commitment because it prevents them from selling their received funds immediately.</p>
<br />
<h2 id="refund-workers">Refund Workers</h2>
<p>Refund workers are a special type of worker who return their pay to the reserve pool. Electing these workers can prevent spending on other workers, which saves more funds in the reserve pool for future projects.</p>
        </div>
      </section>
    </main>
    <!-- END Main container -->

<!-- Footer -->
<?php require('../assets/php/footer.php');?>
<!-- END Footer -->

</div>
<?php require('../assets/php/mobilemenu.php');?>

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
