<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="BitShares is a DPoS blockchain, meaning stakeholders of the BTS core token hold weight on decisions, by the amount of BTS owned.">
    <meta name="keywords" content="utility token, blockchain, trading, cryptocurrency, BitShares">   <title>The BTS Utility Token | BitShares dApps</title>
    <base href="/">

    <!-- Styles -->
    <link href="assets/css/core.min.css" rel="stylesheet">
    <link href="assets/css/thesaas.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
	<link href="assets/css/popup.css" rel="stylesheet" >
	
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">
    <link rel="icon" href="assets/img/favicon.ico">
	
    <!--  Open Graph Tags -->
    <meta property="og:title" content="The BTS Utility Token | BitShares dApps">
    <meta property="og:description" content="BitShares is a DPoS blockchain, meaning stakeholders of the BTS core token hold weight on decisions, by the amount of BTS owned.">
    <meta property="og:image" content="assets/img/og-img.jpg">
    <meta property="og:url" content="https://bitshares.org/">
    <meta name="twitter:card" content="summary_large_image">
	
</head>

 <body>
	<div canvas="container">
	
    <!-- Topbar Navigation Bar Begins-->
    <?php require('assets/php/header.php'); ?>
    <!-- Top Navigation Bar Ends-->
	
    <!-- Header -->
    <header class="header header-inverse inner-headers">
      <div class="container text-center">
        <div class="row">
          <div class="col-12 col-lg-8 offset-lg-2">

            <h1>The BTS Utility Token | BitShares Blockchain</h1>
            <p class="fs-18 opacity-70"></p>
          </div>
        </div>
      </div>
    </header>
    <!-- END Header -->

    <!-- Main container -->
    <main class="main-content">
		</section>
      <section class="section section-x">
        <div class="container">
        <p>BitShares is a DPoS blockchain, meaning stakeholders of the BTS core token hold weight on decisions, by the amount of BTS owned. To improve
              voter participation and simplify life, holders can vote directly or delegate in full to a chosen proxy. DPoS is similar to a representative democracy,
              where selected persons decide the course of action. Leaders have to account for their actions, and core token holders can un-elect them. The difference
              to a representative democracy, is that the community members (token holders) have a vote weighted by their account holdings of BTS tokens.</p>

          <br />
          <h2>At any time, voters can decide on these aspects of the BitShares Blockchain:</h2><br />
          <div class="row">
            <div class="col-8 col-lg-6 offset-lg-1">
                <ul>
                <li>Vote for Witnesses</li>
                <li>Vote for Committee</li>
                <li>Vote for Workers</li>
                </ul>
              </div>
            </div>
            <br />

            <h3>Vote Members for Block Production (Witnesses)</h3><br />
              <p>Block production in BitShares is run through a DPoS algorithm.</p>
              <p>The Block producers must campaign for sufficient votes. Once elected, the witness can produce blocks and recieve rewards in the BTS core
                token for each one they produce. Given the governance system, a misbehaving witness node can be dismissed rapidly.</p>
      <br />
            <h3>Members for Blockchain Governance (Committee)</h3><br />
              <p>Members for Blockchain Governance oversee core blockchain parameters</p>
              <p>Committee controls the core settings such as block size, block time, witness reward, and over 30 others. The Committee can also change the fee schedule
                defining the minimum fee for each operation offered. BTS token holders can cast a vote for how many members the Committee should constitute, and
                vote for particular sets of members.</p>
      <br />
            <h3>Vote on Project Funding (Workers)</h3><br />
              <p>Voters have control over who receives funding from the Working Budget. A worker applies, and needs to campaign for sufficient votes before being
                approved the daily allowance.</p>
      <br />

        <h2>Initial Token Allocation</h2><br />
          <p>BitShares 2.0 was created on 13th of October 2015 by the community and block producers of BitShares 0.9 who decided to start a new token with an identical
            distribution from where 0.9 had evolved. The previous BitShares 0.9 Blockchain was abandoned by the community who had the option to continue that chain but declined to do so.</p>
      <p>In the genesis block of BitShares, a total of 2,412,042,197.37963 BTS have been distributed to individual keys accordingly. Original holders can still claim these
        BTS by proving ownership of the corresponding private key.</p>
      <p>The BTS token comes with a limited supply that is different from circulating (liquid) supply. The max supply placed on the blockchain is 3,600,570,502.10207 BTS.
        This number can never change, and the difference of roughly 1.1B initial tokens were set aside for future project funding and rewarding block producers. These are accessible only
         with approval by the BTS holders (through the Worker system).</p>
        <p><em>Note that revenues made from transaction fees are NOT shared with holders of BTS, instead going back into the working budget for further development. There is no
          reward for holding the core BTS token itself.</em></p>
      <br />
      <h2>Working Budget</h2><br />
        <p>The difference between max supply and circulating supply is called the Working Budget, often referred to as the reserve pool. The BitShares Blockchain has a daily
          budget to use for development and maintenance.</p><br />
          <p>This budget has a hard-coded upper limit of: <em><b>Total funds in the working budget / 2924 </em></b></p><br />
        <p>From this daily budget, block production, as well as project funding, is made. The BTS holders have the choice and need to approve BTS tokens leaving the working
          budget by voting on workers.</p>

          <br />
      <h2>Block Production (Witnesses)</h2><br />
        <p>Block production comes at the cost of running and maintaining equipment. The BitShares Blockchain acknowledges this fact by rewarding block producers in core BTS
          tokens per produced block. Depending on the valuation of BTS, the committee can modify the amount of BTS paid per block. As of Q1/2018, current block reward is 1 BTS.
          Those BTS come from the Worker budget.</p>
        <br />
      <h2>Project Funding (Workers)</h2><br />
          <p>A certain amount of the available daily tokens can be allocated to development through workers. Anyone can set up a Worker Proposal and ask for a regular allowance in
            BTS. If enough weight in BTS holders approve, the funds are set aside from the daily budget. A Soft-limit defines the maximum amount of the budget that is given to the
            authorized workers daily.
            Workers receiving more votes from BTS holders will receive funds first. Workers are under scrutiny from BTS holders, who can remove votes or ‘fire’ workers that do not
            deliver.</p>
            <br />
            <h2>Transaction Fees & Fee Schedule</h2><br />
              <p>Block production and project funding drains reserves. Transaction fees paid by users of BitShares go back into the pool. The total amount of BTS in the working
            budget alongside total in-out flow varies over time. Compared to proof-of-work-based Blockchains that continuously reward a (virtually) fixed amount of tokens to
                miners, BitShares has the possibility to grow the working budget. This occurs when the total transaction fees outweigh reserves spent.</p>
              <p>BitShares uses fixed fees instead of a fee-based market. The fee schedule defines the cost of 50+ blockchain features and operations.</p>
          <br />
        <h2>Legality of the BTS token</h2><br />
            <p>It is worth noting that the BitShares Blockchain is not a traditional registered entity and has no seat. The core token BTS does not imply any ownership rights. The
              core token merely serves as a utility for governance, arranging transaction fees and operating other features implemented only on the BitShares Blockchain.</p>
          <br />
        </div>
      </section>
    </main>
<!-- END Main container -->


<!-- Footer -->
<?php require('assets/php/footer.php');?>
<!-- END Footer -->

</div>

<!-- Slide Mobile Menu --->
<?php require('assets/php/mobilemenu.php');?>
<!-- End Slide Mobile Menu --->

    <!-- Scripts -->
    <script src="assets/js/core.min.js"></script>
    <script src="assets/js/thesaas.js"></script>
    <script src="assets/js/script.js"></script>
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
