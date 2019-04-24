<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="BitShares achieves incredible confirmation rates and can scale in a manner capable of supporting a global transactional network in near real-time.">
    <meta name="keywords" content="bitshares, transaction, performance, scalability, industrial, blockchain">

    <title>Industrial Performance and Scalability | BitShares Blockchain</title>
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
    <meta property="og:title" content="Industrial Performance and Scalability | BitShares Blockchain">
    <meta property="og:description" content="BitShares achieves incredible confirmation rates and can scale in a manner capable of supporting a global transactional network in near real-time.">
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
            <h1>Industrial Performance and Scalability</h1>
            <p class="fs-18 opacity-70">Graphene is capable of 100,000 TPS when we pay for the network to go with it</p>
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
          <p>Blockchains must have high performance and scalability in order to deliver the speed required of cryptocurrency and smart contracts. Designing BitShares from the ground up means it can meet demands to process more transactions every second than VISA and MasterCard combined. Delegated Proof of Stake ensures the BitShares network can confirm transactions in an average of just 1 second, limited only by the speed of light.</p>
		  <br />
		  <h2>Overview</h2>
      <p>To achieve industry-leading performance, BitShares borrowed lessons from the <a href="https://martinfowler.com/articles/lmax.html" target="_blank">LMAX Exchange</a>, which is capable of processing 6 million transactions per second. These were the key lesson points:</p>
			<ul class="ml-50">
				<li>Keep everything in memory.</li>
				<li>Keep the core business logic in a single thread.</li>
				<li>Keep cryptographic operations (hashes and signatures) out of the core business logic.</li>
				<li>Divide validation into state-dependent and state-independent checks.</li>
				<li>Use an object-oriented data model.</li>
			</ul>
		 <p>By following these simple rules, BitShares is able to process 100,000 transactions per second without any significant effort devoted to optimization. Future optimizations should bring the performance of BitShares to levels similar to LMAX.</p>
		 <p>The scalability and performance achieved by BitShares are dependent upon having a compatible transaction protocol. It would be impossible to achieve the same level of scalability and performance with the Core Business Logic running in a virtual machine, performing cryptographic operations and references on all objects with hash identifiers. Performance of a single CPU core is a scalability bottleneck in single-threaded blockchains. The design of BitShares aims to get the most out of this single thread of execution.</p>
			<br />
	<h2 id="background">Background</h2>
		 <p>A blockchain is a global ledger that orders transactions. Each transaction deterministically modifies a shared global state at a specified timestamp, and the order in which transactions get processed can change the validity of other transactions. For example, you cannot withdraw money from your bank until your paycheck clears. It is impossible to know whether a transaction is valid, before all prior transactions that impact a particular account are processed.</p>
		 <p>In theory, transactions for two unrelated accounts could process at the same time, if they do not share any common dependency. In practice, the cost of identifying which transactions are independent of each other on a ledger empowered by smart contracts with arbitrary conditions is intractable. The only way to be sure that two transactions are truly independent, is by maintaining completely separate ledgers and then periodically transferring value between them. An analogy could be the performance trade-offs in the design of Non-Uniform Memory Access (NUMA) vs Uniform Memory Access.</p>
		 <p>In practice, Uniform Memory Access is much easier and lower cost for developers to design for. NUMA architecture is usually adopted last resort, on supercomputers or giant clusters.</p>
		 <p>The computer industry has grown to realize that increases in scalability and performance through parallelism are nowhere near as easy as the early days. In the past all that was necessary was to increase the clock speed of the CPU. It is for this reason that CPU designers pushed the single-threaded performance to the limits, before attempting multi-threaded approaches. When multithreading is not enough, then, and only then, is cluster computing considered an option.</p>
	 	 <p>Many in the cryptocurrency industry have attempted to solve the scalability issue by immediately moving to a “cluster” solution. BitShares can fully exploit what is technologically possible on a single core of a single computer.</p>

		<br />
	<h2 id="lmax-disruptor">The LMAX Disruptor</h2>
		 <p>The LMAX Disruptor provides a case study on high scalability and performance architecture, showing what is achievable within a single execution thread. LMAX is a retail trading platform that aims to be the fastest exchange in the world, and they were generous enough to make public what they learned.</p>
		 <p><em>Here is a brief overview of the LMAX architecture:</em></p>
		 <p>Processing of the sequential transactions and order matching all happens in the Business Logic Processor. It is a single thread that is able to process millions of orders per second. This architecture is readily ported to the realm of cryptocurrencies and blockchain designs.</p>
		 <p>The role of the Input Disruptor is to gather orders from users from many different sources and assign them in a deterministic order. After assigning them an order they become replicated, logged, and broadcast to many redundant business logic processors. The tasks of the Input Disruptor are parallel and farmed out to a cluster of computers.</p>
		 <p>After the Business Logic Processor has processed the inputs, an Output Disruptor takes care of notifying anyone who cares about the results. This is also a highly parallel task.</p>
         <p>Ultimately, LMAX was able to process 6 million transactions per second through the Business Logic Processor, using a single core of a commodity CPU and Java virtual machine. Proof there's no need for cryptocurrency and smart contract platforms to reach for clustered solutions when they are not even processing 10 transactions per second.</p>

		<br />
	<h2 id="high-performance-blockchains">High Performance and Scalability on Blockchains</h2>
		<p>To put in place high performance and scalability on the blockchain, BitShares must adopt the same techniques used by LMAX. Fundamental requirements are:</p>
			<ul class="ml-50">
			<li>Keep everything in memory.</li>
			<li>Avoid synchronization primitives (locks, atomic operations).</li>
			<li>Minimize unnecessary computation in the business logic processor.</li>
			</ul>
		 <p>Memory is becoming cheaper every day because it is extremely parallel in its design. The amount of information required to track the account balance and permissions of every person on the Internet is less than 1 Terabyte of RAM. This can cost less than $15,000 and it's installable on commodity (high-end) server motherboards. Long before 3 billion people adopt the system, this kind of hardware will be in the average desktop.</p>
		 <p>Memory isn't the real bottleneck, but bandwidth is critical to performance and scalability. At 1 million transactions per second and 256 bytes per transaction, the network would need 256 megabytes per second (1 Gbit/sec). This kind of bandwidth is not available to the average desktop; but it is a fraction of the 100 Gbit/s that <a href="https://www.internet2.edu/vision-initiatives/initiatives/innovation-platform/" target="_blank">Internet 2</a> furnishes to more than 210 U.S. educational institutions, 70 corporations, and 45 non-profit and government agencies.</p>
		 <p>For the scalability and performance to handle millions of transactions per second, a blockchain must keep everything in RAM.</p>

			<br />
	<h2 id="avoid-hashes-assign-ids-instead">Avoid Hashes, Assign IDs Instead</h2>
		 <p>In a single threaded system, CPU cycles are a scarce resource that needs conserving. Traditional blockchain designs use cryptographic hashes to generate globally unique IDs that are statistically guaranteed to never have a collision. The problem with these hashes is that they need much more memory and more CPU cycles to manipulate. It takes a lot more CPU time to look up an account record by hash than with a direct array index. For example, 64-bit integers are easier to compare and manipulate than 160+bit IDs. Larger hash IDs means there is less room in the CPU cache and that requires more memory. On modern operating systems, seldom accessed RAM gets compressed, yet hash identifiers are random un-compressible data.</p>
		 <p>Fortunately, blockchains give us a means to globally assign unique IDs where no pair can ever be the same. This makes it is possible to completely remove the need for hash-based identifiers (Bitcoin addresses). In order to refer to an account, balance, or permission, BitShares simply uses the account name.</p>

			<br />
	<h2 id="remove-signature-verification-from-business-logic-processor">Remove Signature Verification from Business Logic Processor</h2>
		 <p>All transactions on cryptocurrency networks depend upon cryptographic signatures to validate permissions. In the general case, the permissions required can change as a result of other transactions. This means that permissions need defining in terms that need no cryptographic calculations within the Business Logic Processor.</p>
		 <p>To do this, every public key needs to have a unique and immutable ID. After an ID is chosen, the Input Disruptor(s) can verify that the signature matches the ID specified. By the time the transaction makes it to the Business Logic Processor, the only remaining step is to check the IDs.</p>
         <p>This same technique can remove pre-condition checking on any immutable object with a static ID.</p>

		 <br />
	<h2 id="design-transactions-for-static-validation">Design Transactions for Static Validation</h2>
		 <p>It is possible to check many transaction properties statically, without the need to reference the current global state. <br/>These checks include range checking of parameters, de-duplication of inputs, sort order of arrays, etc. Generally speaking, many checks get performed if the transaction includes the data it “assumes” about the global state. After these checks all that remains for the Business Logic Processor to do is make sure the “assumptions” are still true, which usually boils down to checking a modification timestamp on objects referenced, relative to the time the transaction got signed.</p>
         <br />
	<h2 id="smart-contracts">Smart Contracts</h2>
		 <p>Many blockchains are adopting a general-purpose scripting language to define all operations. These designs end up defining the “Business Logic Processor” as a virtual machine, and all transactions get defined as scripts run by the virtual machine. This approach takes the single-threaded limitations of a real CPU and compounds them by forcing everything through a virtual CPU. A virtual CPU, even with Just-In-Time compilation, will always be slower than a real CPU, but pure speed of calculation isn’t the only issue with the “everything is a script” approach.</p>
		 <p>When transactions get defined at such a low level, it means that most of the static checks and cryptographic operations get sucked back into the Business Logic Processing and the overall throughput falls. A scripting engine should never require a cryptographic signature check even if it is done through a native call.</p>
		 <p>Based on the lessons we borrowed from LMAX, we knew that when designing a virtual machine for a blockchain we should prioritise on single-threaded performance. This means it should get optimized for Just-In-Time compilation from the beginning, and that the most frequently used smart contracts should have native support by the blockchain, leaving only the rarely-used custom contracts to run in a virtual machine. These custom contracts should focus on performance, which means the Virtual Machine should limit the addressable memory to something that will fit within the CPU cache.</p>

		<br />
	<h2 id="object-oriented-data-model">Object-Oriented Data Model</h2>
		 <p>One of the benefits of keeping everything in memory is that the software can mimic the real-world relationships of data. This means that the Business Logic Processor can quickly follow in-memory pointers to the data it needs, rather than forcing it to perform expensive database queries. It also means that data is accessible without copying it, and that it is possible to modify the data in-place. This single optimization offers an order-of-magnitude performance gain over using a database-based approach.</p>

		<br />
	<h2 id="transaction-sizes">Transaction Sizes</h2>
		 <p>A blockchain that processes 100,000 transactions every second generates a lot of data. The average size of a transaction on competing networks, such as Ripple and Bitcoin, is about 250 bytes. A similar transaction on BitShares averages just 100 bytes. In other words, competing systems require 2.5 times the bandwidth to propagate the same number of transactions. Assuming a gigabit connection to the internet, it would take about 0.1 seconds just to transfer a block containing 100,000 transactions. Competing networks would need 0.25 seconds. After considering latency and multiple hops on a peer-to-peer network, it becomes clear that transaction size directly impacts the block interval, and therefore the confirmation latency.</p>
		 <p>Transaction sizes indicate the amount of data the CPU must process in its critical path. Therefore, they serve as a signal of how soon the single threaded performance of a CPU will be hit.</p>
		 <p>Some optimizations are possible in all protocols if they assume that all nodes have prior knowledge of all broadcast transactions and only need the ordered list of transaction IDs to broadcast every block. This would be an implementation detail.</p>

		<br />
	<h2 id="conclusion">Conclusion</h2>
		 <p>Designing a high-performance blockchain with scalability isn’t rocket science. It doesn’t need complex, hard-to-understand protocols. Nor must it be processing among all the nodes on the network. All that is necessary to build a high-performance blockchain is to remove all calculations that are not part of the critical, order-dependent, evaluation from the core business logic. Also, to design a protocol that facilitates these kinds of optimizations. This is what BitShares has done.</p>
       <!-- <p><a href="https://bitshares.org/blog/2015/06/08/measuring-performance/" target="_blank">Measuring Performance &amp; Scalability</a> (link to be updated)</p>
       -->    	
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
