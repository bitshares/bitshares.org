<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="SmartCoins are cryptocurrencies issued on the Bitshares network which attempt to be pegged to the value of assets like USD or CNY.">
    <meta name="keywords" content="BitShares, SmartCoin, blockchain, pegged asset, cryptocurrency, debt, fractional reserves, collateral">
	<base href="/">

    <title>Smartcoins | Bitshares Blockchain</title>
    <!-- Styles -->
    <link href="../assets/css/core.css" rel="stylesheet">
    <link href="../assets/css/thesaas.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
	
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="../assets/img/apple-touch-icon.png">
    <link rel="icon" href="../assets/img/favicon.ico">

    <!--  Open Graph Tags -->
    <meta property="og:title" content="Price Stable Cryptocurrencies | BitShares Blockchain">
    <meta property="og:description" content="SmartCoins are cryptocurrencies pegged to the value of assets like USD or gold. 100% or more of their value is backed by the BitShares core currency, BTS.">
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
            <h1>Smartcoins</h1>
            <p class="fs-18 opacity-70">SmartCoins provide the freedom of cryptocurrency with the potential stability of fiat currencies.</p>
          </div>
        </div>
      </div>
    </header>
    <!-- END Header -->

    <!-- Main container -->
    <main class="main-content">
	  <section class="section section-x">
        <div class="container">
          <p>A SmartCoin is a cryptocurrency whose value pegs to that of another asset, such as the US Dollar or gold. SmartCoins aim to have 100% or more of their value backed by the BitShares core currency, BTS. Unless BTS price is below threshold price, SmartCoins aim to be worth at least their face value. Like any other cryptocurrency, SmartCoins are fungible and divisible.</p>
			<br />
			<h2 id="background">Background</h2>
			 <p>Cryptocurrencies are unique in that they are the only digital currency that is not someone else’s liability. They are fungible, decentralized, and as valuable as the network of users that support them. Unfortunately, they suffer from very high volatility, because their perception of value constantly changes as users enter and leave the ecosystem.</p>
			 <p>The traditional approach to creating a stable asset is to accept deposits and issue a digital token as a claim receipt. Under this approach, the token has the market value of a dollar, discounted by any credit risk associated with the issuer. This can work well for transactions, but less well as a form of savings. History has repeatedly proven that issuers eventually go bankrupt due to fraud, incompetence, or government intervention.</p>
			 <p>More recent approaches have used a cryptocurrency as collateral in a <a href="https://www.investopedia.com/terms/c/contractfordifferences.asp" target="_blank">contract for difference</a>. Under this approach, two parties take opposite sides of a trade, guaranteeing one party price stability and the other party leverage. This approach works as long as sufficient collateral exists and settling the contract with an honest 3rd party, with a price feed, is possible. Unfortunately, a contract for difference is not fungible and has an explicit settlement date, which means it is not useful as a currency.</p>
			 <br />
			<h2 id="introducing-smartcoins">Introducing SmartCoins</h2>
			<p>SmartCoins take the concept of a contract for difference, and make the long side fungible. For the purpose of this discussion, we will assume that the long side of the contract is BitUSD and that the backing collateral is BTS (the BitShares core asset). To achieve this, SmartCoins use the following set of market rules:</p>
			<ol class="ml-50">
			<li>Anyone with BitUSD can settle their position within 24 hours at settlement price.</li>
			<li>The least collateralized short positions are used to settle the position.</li>
			<li>The price feed is the median of many sources, updating at least once per hour.</li>
			<li>Short positions never expire, except by hitting the maintenance collateral limit, or being force-settled as the least collateralized at the time of forced settlement (see point 2).</li>
			<li>
				<strike>In the event that the least-collateralized short position lacks enough collateral to cover at the price feed, then all BitUSD positions are automatically force settled at the price of the least collateralized short.</strike>
				<ul>
					<li>bitAssets now actively attempt to avoid global settlement through price feed manipulation, see BSIPs <a href="https://github.com/bitshares/bsips/blob/master/bsip-0058.md">58</a>, <a href="https://github.com/bitshares/bsips/blob/master/bsip-0059.md">59</a> and <a href="https://github.com/bitshares/bsips/issues/221">76</a>.</li>
					<li>This functionality remains operation in private smartcoins</li>
				</ul>
			</li>
			</ol>
			<p>There is a simple metric for testing the validity of our claim that 1.00 BitUSD is always worth <em>at least</em> $1.00 USD. if you can find someone willing to sell 1.00 BitUSD for $1.00, it would be the cheapest option for buying BTS, which demonstrates the value 1.00 BitUSD. This means that 100% of the buying demand for BTS would be available to give liquidity to BitUSD holders as a priority over BTS holders. Proving these conditions are met will be done in the following sections.
            </p>
			<p>While the rules are simple, the consequences are less obvious. Let’s analyze this from the perspective of the various players.</p>
			<br />
			<h2 id="the-shorter">The Shorter</h2>
			<p>When deciding a price at which to enter a short order, a trader must consider the risk of forced settlement. In this case, no trader will attempt to short at or below the price feed, to avoid settling at the price feed. In fact, a smart trader would allow enough of a spread to account for the risk of being forced to settle at a feed price that was off by a small amount. In practice, the risk posed by the feed error balances equally between being in the favour of the short and in the favour of the long, leaving only the risk of forcing them out of their position at an inopportune time.</p>
			<p>A short can minimize their exposure to the feed by providing enough collateral to keep far above the least collateralized positions, therefore, they’re very unlikely to face forced settlement at the feed or at an inopportune time.</p>
			<p>In practice, the only way new BitUSD enters circulation is if there is someone willing to pay enough of a premium to	convince a short to provide guaranteed liquidity at the price feed on demand, while also covering the cost of exchange rate risk. This premium will be higher for the backing cryptocurrency in a bear market and will be lower in a bull market.</p>
			<p>Someone who is short has only one way to exit their position: by buying BitUSD off the market. This means that a short must also factor in the risk that the premium may change. If a short position enters in a bull market with a 0.1% premium, it may be forced to exit during a bear market with a 5% premium. In this event, a short position faces exposure to both exchange rate of the dollar vs. BTS and the premium risk. On the other hand, a short entered during a bear market with a 5% premium may get to cover during a bull market with a .1% premium.</p>
			<p>For all intents and purposes, the premium should move in the same direction as the price, and thus speculators who only care about relative price changes can ignore the premium.</p>
			<br />
			<h2 id="the-long-bitusd-holder">The Long (BitUSD holder)</h2>
			<p>The very first buyer of BitUSD will have to pay the lowest premium set by the shorters. For the sake of discussion, let’s assume creating the first BitUSD was in a bear market and cost $1.05 to create. The holder of that BitUSD has two options: sell it on the market for $1.04, or request forced settlement. Clearly, the forced settlement option would only be the case in situations where there was a decrease in total demand for BitUSD and there were no offers to buy it above the settlement price.</p>
			<p>As a trader only looking to trade back and forth between BitUSD and BTS, this premium doesn’t matter. Such a trader exposes themselves to volatility in the premium.</p>
			<br />
			<h2 id="the-bts-buyer">The BTS Buyer</h2>
			<p>A buyer with dollars, looking to buy BTS, knows that they can buy 1 bitUSD worth of BTS with 1 BitUSD. In this situation, he can know with certainty that if he can convince someone with BitUSD to sell for $1.00, he can buy more BTS than if he simply buys BTS with his dollars directly. The higher the premium, the more incentive exists to buy BitUSD for $1.00.</p>
			<p>This means that, in a BTS bear market, the BitUSD price gives the highest premium of the BTS price, and BitUSD becomes the easiest to sell. In practice, the BitUSD:USD market will reflect the premium, and traders will usually be unable to find anyone willing to sell for exactly $1.00.</p>
			<p>If a buyer is looking to purchase a large quantity of BTS without moving the price, he can start by buying up BitUSD with dollars. This will slowly raise the BitUSD:USD price, which is a signal to other market participants. A careful buyer might be able to avoid signaling the market. Then, after acquiring the position in BitUSD, the buyer can request forced-settlement all at once and get the settlement rate for the entire purchase.</p>
			<p>Therefore, because all positions and trades are visible on the blockchain, all of this trading activity factors into the price.</p>
			<br />
			<h2 id="the-merchant">The Merchant</h2>
			<p>A merchant wants to be able to price merchandise in BitUSD, and obtain real USD in the bank account, in a reasonable time, with minimal risk. In this case, a merchant would place BitUSD on the market at $1 per BitUSD. As discussed, BTS buyers fight for the opportunity to buy BitUSD at that price.</p>
			<br />
			<h2 id="the-customer">The Customer</h2>
			<p>A customer looking to buy goods and services with BitUSD finds himself paying a premium to acquire BitUSD from the market. This means that customers will prefer merchants that offer a discount equal to the premium paid. In fact, the only people to whom the premium matters are those who are looking to enter or exit the ecosystem.</p>
			<p>Customers use BitUSD because it provides them the convenience and freedom of a cryptocurrency.</p>
			<p>Merchants and customers are free to negotiate the value of bitUSD, and the free market will take care of the rest. In the meantime they can consider the premium for entering the ecosystem as a one-time fee.</p>
			<br />
			<h2 id="price-manipulation">Price Manipulation</h2>
			<p>If the price of Bitshares drops below the <a href="https://github.com/bitshares/bsips/issues/221">BSIP76</a> voted upon minimum price threshold, the price feed is intentionally fixed (manipulated) to spare the debt holders the consequence of global settlement, to the immediate detriment of the bitUSD asset holder.</p>
			<p>Centralized exchanges lend their user's deposited funds vote weight to price manipulators</p>
			<p>There is always the concern of uncoorinated price manipulation. Someone with a large amount of money on both sides of a trade can use their funds to manipulate the markets and thus the price feed. If the amount of money they lose manipulating the markets is less than the amount of money they can gain by manipulating the price feed, then it will be profitable to manipulate the market at the expense of either the BitUSD longs or the shorts. A low-collateralized short that sees a large force-settlement order requested can attempt to manipulate the markets and thus the feed against the BitUSD holder.</p>
			<p>In practice, bitUSD traders/holders must observe the BitUSD-to-USD market as an indicator of the true value of bitUSD. Generally speaking, the strategy that the feed producers adopt for controlling the feed should be public knowledge, because the shorts will ultimately rely on it. For the feed producers to change strategies in unpredictable ways could cause losses to both longs and shorts.</p>
			<br />
			<h2 id="black-swans---extreme-market-conditions">Global settlement - Extreme Market Conditions</h2>
			<p>bitAssets (committee owned smartcoins like bitUSD, bitCNY, bitGLD) have no guarantee that their backing collateral is worth at least 100% of the reference asset value. Once BSIP76 price feed threshold is exceeded, price feed manipulation is enabled to prevent global settlement from negatively affecting debt holders.</p>		
			<p>All guarantees of private SmartCoins (non-bitasset smartcoins) are subject to the caveat that they can never be worth more than the collateral backing the least-collateralized short position. In normal market conditions, the value of the collateral is always more than sufficient, but, from time to time, markets can rapidly revalue the collateral. If this revaluation happens faster than the short positions can be forced to cover, the result is liquidation of all SmartCoins at the exchange rate of the least collateralized short position. This is similar to an insolvent bank converting its deposits to equity.</p>
			<br />
			<h2 id="privatized-smartcoins">Privatized SmartCoins</h2>
			<p>BitShares offers entrepreneurs an opportunity to create their own SmartCoins with custom parameters and price feeds.</p>
			<p>User-issued SmartCoin managers can experiment with different parameters such as collateral requirements, price feeds, force settlement delays and forced settlement fees. They also earn the trading fees from transactions involving the issued asset and therefore, have a financial incentive to market and promote it on the network. The entrepreneur who can discover and market the best set of parameters can earn a significant profit. The set of parameters which entrepreneurs can tweak is broad enough that SmartCoins can implement a fully functional prediction market with a guaranteed global settlement at a fair price, and no forced settlement before the resolution date.</p>
			<p>Some entrepreneurs may want to experiment with SmartCoins that always trade at exactly $1.00 rather than more or significantly less than $1.00. They can do this by manipulating the forced settlement fee continuously such that the average trading price stays at about $1.00. By default, BitShares prefers fees set by the market, and thus opts to let the price float above $1.00, rather than fixing the price by directly manipulating the forced settlement fee.</p>
			<br />
			<h2 id="conclusion">Conclusion</h2>
			<p>SmartCoins are a powerful tool for everyone from speculators and savers to traders and entrepreneurs. The BitShares platform provides a toolset with which innovators can experiment to find optimal currency solutions using free market discovery.</p>
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
    <script src="../assets/js/script.js"></script>
	<!-- End Scripts -->
	<!-- Go to Top Button -->
	  <div id="stop" class="scrollTop bttt-border bttt-round bttt-positionRight bttt-slideFromBottom">
		<i class='fa fa-chevron-up'></i>
	  </div>
	<!-- End Go to Top Button -->
	</body>
</html>
