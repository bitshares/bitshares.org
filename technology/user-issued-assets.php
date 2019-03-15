<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="BitShares Blockchain provides user-issued assets for the creation of cryptocurrency enabled tokens to facilitate potential business models for certain types of services.">
    <meta name="keywords" content="bitshares, user-issued assets, blockchain, tokens">
    <title>User Issued Assets | BitShares Blockchain</title>
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
    <meta property="og:title" content="User-Issued Assets | BitShares Blockchain">
    <meta property="og:description" content="BitShares Blockchain provides user-issued assets for the creation of cryptocurrency enabled tokens to facilitate potential business models for certain types of services.">
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

            <h1>User-Issued Assets</h1>
            <p class="fs-18 opacity-70">Regulation-compatible cryptoasset issuance</p>
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
          
<p>BitShares Blockchain provides an important feature known as "user-issued assets" to help facilitate profitable business models for certain types of services. The term refers to a type of custom token registered on the platform, which users can hold and trade within certain restrictions. A creator of a user-issued asset names, describes, and distributes its tokens. They can also specify customized requirements, such as an approved whitelist of accounts permitted to hold the tokens, or the associated trading and transfer fees.</p>
<p>The regulations applied to different kinds of token vary widely and are often different in every jurisdiction. BitShares provides the tools to allow issuers to remain compliant with all applicable regulations when issuing assets. This can prevent potential problems for both issuers and the accounts holding the tokens.</p>

<p>The potential uses for user-issued assets are innumerable. Below are a few sample use cases:</p>
<br />
<h3 id="1-deposit-receipts">1. Deposit Receipts</h3>
<p>Banks are simply companies that maintain a database of customer account balances and facilitate the transfer of these assets among their depositors. Companies like Dwolla and PayPal essentially issue deposit receipts and then offer cheaper transfers among their users than between banks. With BitShares, it is now possible to move these internal databases onto the blockchain where it is possible to use the deposits with other smart contracts such as the internal markets, escrow, or bonds.</p>
<p>By talking to many different banks and exchanges, BitShares learnt what the law requires of those who wish to issue deposit receipts.</p>
<br />
<h3 id="2-know-your-customer">2. Know Your Customer</h3>
<p>First and foremost, the issuer must know every single customer. BitShares supports this by enabling both whitelists and blacklists. Rather than requiring every issuer to whitelist every customer separately, an issuer may specify a set of identity verifiers that they trust to do this job. This allows issuers to benefit from the network effect of validated users without having to do any direct identity verification themselves.</p>
<p>When an asset enables whitelists, no account may send or receive that asset without being on an authorized whitelist. Removing an account from the whitelist will freeze the account’s funds.</p>
<br />
<h3 id="3-asset-seizing">3. Asset Seizing</h3>
<p>From time to time, an issuer may need to seize funds as a result of a court order. While this may be unappealing to cryptocurrency purists, it is an unavoidable reality of trust-based assets. An issuer can determine whether or not they wish to revoke this privilege, but it may be a requirement in some jurisdictions.</p>
<br />
<h3 id="4-market-restriction">4. Market Restriction</h3>
<p>An issuer who offers both USD and EUR deposits may need to restrict direct trading between their USD and EUR assets to
  avoid being subject to foreign currency exchange regulations. Some cryptocurrency exchanges allow trading between fiat and cryptocurrencies, but not between two fiat
  currencies. Without this feature, many exchanges would be unable to issue their assets on the BitShares blockchain.</p>
<br />
<h3 id="5-transfer-restrictions">5. Transfer Restrictions</h3>
<p>A transfer-restricted asset allows the holders of the asset to trade it in the markets but not transfer it from person to person. Only a few cryptocurrency exchanges
  allow user-to-user transfer of funds outside the market, because this particular activity is often subject to a different set of money transmission regulations.</p>
<p>The deposit receipt is probably one of the most important, yet most heavily regulated examples of user-issued assets.</p>
<br />
<h3 id="6-company-shares">6. Company Shares</h3>		
<p>Corporate shares are heavily regulated by the SEC, but none of those regulations prevents issuing or trading them on an 
  <a href="http://en.wikipedia.org/wiki/Alternative_trading_system" target="_blank">alternative trading system</a>. The regulations in many
 jurisdictions require registering all shares (aka held by known identities). BitShares corporate shares can be collateral for a bond or be
 useful in any number of smart contracts.</p>
<br />
<h3 id="7-event-tickets">7. Event Tickets</h3>
<p>Event tickets are a largely unregulated use case for user-issued assets. Issuing tickets to a school play could be a use of digital tokens - by 
auctioning them off to the highest bidder, who would then resell them. This ensures that the ticket issuer raises as much money as possible up front while transferring the risk of ticket sales on to speculators.</p>
<p>On the day of the event, the issuer can freeze all trading of the asset and then allow users to cryptographically check-in.</p>
<br />
<h3 id="8-rewards-points">8. Rewards Points</h3>
<p>Merchants around the world offer <a href="https://en.wikipedia.org/wiki/Loyalty_program" target="_blank">loyalty programs</a> to reward customers. Accumulating points allows the customer to earn discounts on future purchases. Rewards systems are a prime opportunity to add value by making them available to BitShares smart contracts.</p>
<br />
<h3 id="9-individual-or-corporate-debt">9. Individual or Corporate Debt</h3>
<p>Many businesses raise money by selling bonds. Using BitShares means these bonds can be tradeable and/or fungible, which makes them more compelling to investors.</p>
<br />
<h3 id="10-crowd-funding">10. Crowd Funding</h3>
<p>Whether using tokens as a transferable coupon for a pre-sale or doing an IPO on a small company, issuing an asset is one of the most effective means of raising money for a cause.</p>
<br />
<h3 id="11-digital-property">11. Digital Property</h3>
<p>Software and music licenses can be transferable by issuing them as a digital asset. Every copy of a program can check to make sure that the user has control of a token before running. Software implementing such a licensing scheme can remain functional even if the company that produced the license goes out of business.</p>
<p>It is also possible to simulate trading cards by creating many limited issue assets. Online games can use these assets to represent game items.</p>
<br />
<h2 id="privatized-smartcoins-stable-cryptocurrencies">Privatized SmartCoins (Stable Cryptocurrencies)</h2>
<p><a href="technology/price-stable-cryptocurrencies" target="_blank">Price-stable cryptocurrencies</a> (aka SmartCoins) were the inspiration for BitShares. Now, users can create their own price-stable assets with custom parameters designed to track the value of any asset they can imagine. The benefit of price-stable cryptocurrencies is that they are fully collateralized, and the issuer only needs to be trustworthy enough  to appoint an honest set of independent (non-collusive) feed producers. Unlike deposit receipts, the value of a privatized SmartCoin is stable even if the issuer disappears.</p>
<p>BitShares provides many parameters that an issuer may tune. In addition to account whitelists, market restrictions, and transfer restrictions, the issuer of a
  private SmartCoin has control over:</p>
<ul class="ml-50">
<li>Collateral Type</li>
<li>Initial Collateral Rate</li>
<li>Maintenance Collateral Rate</li>
<li>Forced Settlement Fee, Delay, and Daily Volume</li>
<li>Price Feed Update Rate</li>
<li>Global Forced Settlement</li>
</ul>
<p>With these tools it is possible to emulate a pure contract for difference with periodic global forced settlement (i.e. monthly, yearly, etc.), or to emulate BitShares
  1.0 BitAssets by having a 30-day delay on forced settlement.</p>
<p>It is possible to use arbitrary financial indexes for the price feed to mimic all manner of exotic assets.</p>
<br />
<h2 id="informationprediction-markets">Information/Prediction Markets</h2>
<p>A <a href="http://en.wikipedia.org/wiki/Prediction_market" target="_blank">prediction market</a> is a specialization of SmartCoins where there is no need for margin calls, or forced settlement, because all positions are fully collateralized at any price. A prediction market has a price between 0 and 1 and the issuer settles all positions after the event occurs and the final price is known. These prediction markets can be very secure if the issuer is a multi-sig account with many independent and trustworthy parties involved.</p>
<br />
<h2 id="how-to-profit-by-issuing-an-asset">How to Profit by Issuing an Asset</h2>
<p>There are many ways to profit from issuing an asset. As the issuer, you have complete control over market fees and can tune parameters such as the percentage of each trade that is collected as a fee. It is also possible to bound this percentage by a minimum and maximum fee. The combination of these three parameters gives issuers great flexibility in pricing.</p>
<br />
<h2 id="fee-pools">Fee Pools</h2>
<p>Issuers may optionally maintain a Fee Pool. The Fee Pool is a pool of BTS and an exchange rate at which the issued asset may be converted into BTS.
  When a user wishes to pay a network fee with the asset, the fee pool will step in to convert the asset into BTS at the rate that the issuer has specified.
  This means that issuers may charge a premium every time users opt to use their asset to pay network fees rather than paying them directly with BTS.</p>
<p>The purpose of the fee pool is to provide a convenience to users that would like to use an asset without concerning themselves with the details of acquiring BTS.
  Anyone may fund the fee pool, but only the issuer may specify the exchange rate. Collateralizing the asset by BTS means the exchange rate will be automatically set to the settlement price.</p>
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
