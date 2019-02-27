<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Delegated Proof-of-Stake is a fast, efficient, and flexible consensus algorithm that enables stakeholder voting on the blockchain for democratic decisions.">
    <meta name="keywords" content="dpos, network, blockchain, consensus, bitshares, witness">

    <title>Delegated Proof-of-Stake Consensus | BitShares Blockchain</title>
	<base href="/">
    <!-- Styles -->
    <link href="../assets/css/core.min.css" rel="stylesheet">
    <link href="../assets/css/thesaas.min.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="../assets/css/popup.css">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="../assets/img/apple-touch-icon.png">
    <link rel="icon" href="../assets/img/favicon.ico">
<style>
.ls-none {list-style:none;}
</style>
    <!--  Open Graph Tags -->
    <meta property="og:title" content="Bitshares - Delegated Proof-of-Stake Consensus">
    <meta property="og:description" content="Delegated Proof-of-Stake is a fast, efficient, and flexible consensus algorithm that enables stakeholder voting on the blockchain for democratic decisions.">
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

            <h1>Delegated Proof-of-Stake Consensus</h1>
            <p class="fs-18 opacity-70">A robust and flexible decision making protocol</p>

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
    
    <h2>Background</h2>
         <p>Delegated Proof-of-Stake (DPoS) consensus is a fast, efficient, decentralized, and highly flexible blockchain design. The BitShares blockchain leverages the power of stakeholder approval voting, to resolve consensus issues in a manner which is democratic and fair. All network parameters, from fee schedules to block intervals and transaction sizes, can be tuned via elected delegates (Committee). Deterministic selection of block producers (Witnesses) allows transactions to be confirmed in an average of just 1 second. Perhaps most importantly, the consensus protocol is designed to protect all participants in a free and fair, transparent environment.</p>
         
         <p>BitShares is first and foremost a globally distributed database that is used as a ledger to track ownership of digital assets. To allow the database to remain consistent and universally agreed upon, all updates must be validated and applied in the proper order. Reaching a consensus over every ledger update is the purpose of Delegated Proof-of-Stake (DPoS).</p>
    <br />
    <h2 id="overview">Overview</h2>
         <p>The questions that must be answered by any consensus process include, but are not limited to:</p>
        <ol class="ml-50">
         <li>Who will produce the next block of updates to apply to the database?</li>
         <li>When will the next block be produced?</li>
         <li>What transactions should be included in the next block?</li>
         <li>How are changes to the blockchain protocol applied?</li>
         <li>How should competing transaction histories be resolved?</li>
       </ol>
         <p>By answering these questions, the goal of the BitShares blockchain is to ensure the consensus process is robust against attackers gaining control over the Delegated Proof-of-Stake network. In practice, control means acquiring the ability to unilaterally censor transactions (and corrupt or centralize the consensus protocol). The process must be autonomous against any inconsistency attack to the database state on different computers.</p>
    <br />
    <h4 id="block-production-by-elected-witnesses">Block Production by Elected Witnesses</h4>
         <p>The term witness was chosen because it is a literal metaphor and noun which describes the robotic function of the ‘Witness Node’ servers and those elected to operate them. <em>Witness</em > also happens to be a legally neutral word, free from trademark or brand copyrights. Traditional contracts often have a place for witnesses to sign. For extremely important contracts, a <a href="http://en.wikipedia.org/wiki/Notary_public" target="_blank">public notary</a> is sometimes used. Neither are party to the contract, but they serve a very important role of certifying that the contract was signed by the specified individuals at the specified time. In BitShares, witnesses serve a similar role of validating signatures and timestamping transactions by including them in blocks.</p>
         <p>Under Delegated Proof-of-Stake (DPoS), the stakeholders can elect any number of witnesses to generate blocks. A block is a group of transactions which update the state of the database. Each account is allowed one vote per share per witness, a process known as <a href="http://en.wikipedia.org/wiki/Approval_voting" target="_blank">approval voting</a>. The top N witnesses by total approval are selected. (N) is defined such that at least 50% of voting stakeholders believe there is enough decentralization. When stakeholders express a desired number of witnesses, they should also vote for at least that many. A stakeholder cannot vote for more decentralization for which they actually cast votes.</p>
         <p>Each time a witness produces a block, they are paid for their services. Their pay rate is set by the stakeholders via the elected delegates. If a witness fails to produce a block, they are not paid. The record of missed blocks is kept, and may lead to a witness becoming voted out in the future.</p>
         <p>The slate of active witnesses is updated once every maintenance interval (1 day) when the votes are tallied. They are then shuffled, and each witness given a turn to produce a block at a fixed schedule of one block every 2 seconds. After all the witnesses have had a turn, they are shuffled again. If a witness does not produce a block in their time slot, then that time slot is skipped, and the next witness produces the next block.</p>
         <p>Historically, BitShares has maintained a 99% witness participation rate. Anyone can monitor the network health by observing this metric. Any time witness participation falls below a certain level, users of the network can allow more time for transactions to confirm, and be extra vigilant about their network connectivity. This property gives BitShares the unique advantage of being able to alert users of a potential problem within 1 minute of it occuring.</p>

    <br />
    <h4 id="parameter-changes-by-elected-delegates">Parameter Changes by Elected Delegates - Committee</h4>
         <p>Delegates known as the ‘Committee’ are also elected in BitShares. The delegates each become a co-signer on a special account that has the privilege of proposing changes to the network parameters. This account is known as the <em>genesis</em> account. These parameters include everything from transaction fees, to block sizes, witness pay, and block intervals. After the majority of delegates have approved a proposed change, the stakeholders are granted a 2 week review period. During the review, stakeholders may vote out delegated committee members and nullify the proposed changes. The Committee are unpaid, however the parameters are not changed very often.</p>
         <p>This design was chosen to ensure that delegates technically have no direct power, and all network parameter changes are ultimately approved only by the stakeholders. With this delegated Proof-of-Stake, we can truly say that the administrative authority is fully decentralized and in the hands of the users (BTS token holders), and not the delegates nor the witnesses.</p>
         <p>The <em>genesis account</em> can technically perform any action that any other account can perform. This means it is possible to send funds to the <em>genesis account</em> or specify the <em>genesis account</em> as an escrow agent. The <em>genesis account</em> can also be used to issue new assets. This method provides a very high degree of trust and accountability, which creates an untold number of applications whereby elected delegates can perform tasks to aid stakeholders.</p>
<br />
    <h4 id="changing-the-rules--aka-hard-forks">Changing the Rules (aka Hard-Forks)</h4>
         <p>From time to time, it is necessary to upgrade a network to add new features. Under DPoS, all changes must be triggered by active stakeholder approval. While it is technically possible for the witnesses to collude and change their software unilaterally, it is not in their interest to do so. A witness is selected based upon their commitment to remain neutral to blockchain policy, which protects them against false allegations they are the administrators/managers/owners/operators of the network. A witness is merely an employee of the stakeholders.</p>
         <p>Developers may implement whatever changes they deem appropriate, so long as those changes are contingent upon stakeholder approval. This policy protects the developers as much as it protects the stakeholders and ensures that no individual has unilateral control over the direction of the network.</p>
         <p>The threshold for changing the rules is the same as replacing 51% of the elected witnesses. The more stakeholder participation in electing witnesses, the harder it becomes to change the rules.</p>
         <p>Ultimately, changing the rules depends upon everyone on the network to upgrade their software, and no blockchain level protocol can enforce how rules are changed. This means that hard-forking “bug fixes” can be rolled out without requiring a vote of the stakeholders, so long as they remain true to the universally expected behavior of the code.</p>
         <p>In practice, only security critical hard-forks should be implemented in such a manner. The developers and witnesses should wait for the stakeholders to approve even the most minor changes.</p>

<br />
     <h4 id="double-spend-attack">Double Spend Attack</h4>
        <p>A double spend can occur anytime a blockchain reorganization excludes a previously included transaction. For instance, the witnesses have a communication breakdown caused by a brief global Internet disruption. With DPoS, the probability of a communication breakdown enabling a double spend attack is very low. The network can immediately detect any loss in communication, as witnesses fail to produce the blocks on schedule. The network can throttle itself so users have to wait until half of the witnesses have confirmed their transactions, which could be up to a minute or two.</p>
<br />
    <h4 id="transactions-as-proof-of-stake">Transactions as Proof-of-Stake</h4>
         <p>Each transaction on the network may optionally include the hash of a recent block. If this is done, the signer of the transaction can be confident that their transaction may not be applied to any blockchain instance that does not include that block. A side effect of this process is that, over time, all stakeholders end up directly certifying the long-term integrity of the transaction history.</p>
<br />
    <h4 id="blockchain-reorganizations">Blockchain Reorganizations</h4>
         <p>Because all witnesses are elected, highly accountable, and granted dedicated time slots to produce blocks, there are rarely any situations where two competing chains can co-exist. From time to time, network latency will prevent one witness from receiving the prior block in time. If this happens, the next witness will resolve the issue by building on whichever block they received first. With 99% witness participation, a transaction has a 99% chance of being confirmed after reaching a single witness.</p>
         <p>While the system is robust against <em>natural</em> chain reorganization events, there is still some potential for software bugs, network interruptions, or an incompetent or malicious witness to create multiple competing histories longer than a block or two. The software always selects the blockchain with the highest witness participation rate. A witness operating on their own can only produce one block per round, and it will always have a lower participation rate than the majority. There is nothing that any witness (or minority group of witnesses) can do to produce a blockchain with a higher participation rate. The participation rate is calculated by comparing the expected number of blocks produced vs the actual number of blocks produced.</p>
<br />
    <h4 id="maximally-decentralized">Maximally Decentralized</h4>
         <p>Under DPOS, every stakeholder has influence that is directly proportional to their stake, and no stakeholders are excluded from exercising this influence. Every other consensus system on the market excludes the vast majority of stakeholders from participating. There are many different ways that alternatives exclude stakeholders. Some alternatives use invite-only systems. Others exclude participation by making it cost more to participate than they earn. Still other systems technically allow everyone to participate, but they can be safely ignored by a few large players who produce the vast majority of all blocks. Only DPOS ensures even distribution of block production among the most people and that everyone has a viable means to influence who those people are.</p>
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