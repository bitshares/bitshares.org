<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="BitShares blockchain designs permissions around people, rather than around cryptography. When used properly, it can virtually eliminate the risk of theft due to hacking.">
    <meta name="keywords" content="bitshares, corporate, dynamic, account, permissions, sign, multisig, multi-sig">

    <title>Dynamic Account Permissions | BitShares Blockchain</title>
	<base href="/">
    <!-- Styles -->
    <link href="../assets/css/core.css" rel="stylesheet">
    <link href="../assets/css/thesaas.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
    
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="../assets/img/apple-touch-icon.png">
    <link rel="icon" href="../assets/img/favicon.ico">
	
    <!--  Open Graph Tags -->
    <meta property="og:title" content="Dynamic Account Permissions | BitShares Blockchain">
    <meta property="og:description" content="BitShares blockchain designs permissions around people, rather than around cryptography. When used properly, it can virtually eliminate the risk of theft due to hacking.">
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
            <h1>Dynamic Account Permissions</h1>
            <p class="fs-18 opacity-70">Management for the corporate environment</p>
          </div>
        </div>
      </div>
    </header>
    <!-- END Header -->
    <!-- Main container -->
    <main class="main-content">
      <section class="section section-x">
        <div class="container">
          <p>BitShares designs permissions around people rather than cryptography, making it easy to use. Every account can be controlled by
            any weighted combination of other account signatures and private keys. This creates a hierarchical structure that reflects how permissions are
            organized in real life, and makes multi-user control over account authority easier than ever. Multi-user control is the single biggest
            contributor to security, and when used properly, can virtually eliminate the risk of theft due to hacking.</p>
<br />
<h2 id="background">Background</h2>
<p>The ability to require multiple digital signatures for sensitive operations on the blockchain is integral to the security of the platform.
While a single secret key may be compromised, multiple keys distributed over multiple locations adds redundant protections, providing a far more secure
experience.</p>
<p>Competing blockchain systems suffer from the following shortcomings:</p>
<ul class="ml-25">
<li>The M-of-N model cannot sufficiently reflect the management hierarchies of many real-life organizations.</li>
<li>Equal weighting of M keys is not sufficient to express asymmetric ownership over an account.</li>
<li>Coordination and signing must be done completely out-of-band.</li>
<li>Keys cannot be changed without coordination of all other parties.</li>
<li>Signatures cannot be retracted while waiting on other parties.</li>
</ul>
<br />
<h4 id="use-case">Use Case</h4>
<p>Multi-signature technology is all about permission management, and permissions should be defined in terms of people or organizations rather than keys.
<br />
<p>Consider an example company that is run by 3 individuals: Alice, Bob, and Carol.</p>
<ul class="ml-25">
<li>Alice and Bob each own 40% of the company and Carol owns 20%.</li>
<li>This company requires 2 of the 3 principles to approve all expenses.</li>
</ul>
<br />
<p>You could define the company in terms of keys assigned to Alice, Bob, and Carol, but what if Alice wants to protect her
own identity with a multi-signature check?
Alice opts to use a service provider that performs 2-factor authentication on every action Alice makes. This protects both Alice and the company, which
does not need to change its permission structure to accommodate the choice of 2-factor authentication.</p>
<p class="centered"><img class="img-responsive img-thumbnail" src="../assets/img/dynamic-accounts.png"/ alt="Dynamic Accounts"></p>
<br />
<h2 id="solution">Solution</h2>
<p>BitShares introduced a new approach to permissions based upon accounts which are assigned globally unique IDs.</p>
<p>Under this system, it is possible to define an account that has no keys itself, but instead depends solely upon the
approval of other accounts.
Those other accounts can, in turn, depend upon the approval of other accounts.
This process forms a <em>hierarchy</em> of accounts that must grant permission.
Each account can change its own permissions independently of any accounts above it in the hierarchy, which is what makes
the permissions <em>dynamic</em>.</p>
<p>Each account defines its permissions as a set of keys and/or other account IDs that are each assigned weights by the
account holder. If the combined weight of keys and/or accounts exceeds a threshold defined by the account, then
permission is granted.</p>
<p>The second solution is to include the partially signed transaction in the consensus state and allow accounts to publish
transactions that add or remove their approval of the transaction.
This simplifies the signing coordination problem, enables people to change their mind before the threshold is reached,
and applies the transaction immediately upon receipt of the final approval.</p>
<p>The process for executing a transaction that requires multi-signature authority is as follows:</p>
<ol  class="ml-25">
<li>Someone proposes a transaction and approves it with their account.</li>
<li>Other account holders broadcast transactions, adding their “Yes” or “No” to the proposal.</li>
<li>When the proposed transaction has the approval of all accounts, it is confirmed.</li>
</ol>
<br />
<h4 id="owner-and-active-keys">Owner and Active Keys</h4>
<p>Every account is assigned <em>two</em> authorities: owner and active.</p>
<ul class="ml-25">
<li>An <em>authority</em> is a set of keys and/or accounts, each of which is assigned a weight.</li>
<li>Each <em>authority</em> has a weight threshold that must be crossed before an action requiring that <em>authority</em> may be performed.</li>
<li>The <em>owner authority</em> is designed for cold-storage, and its primary role is to update the <em>active authority</em> or to
change the <em>owner authority</em>.</li>
<li>The <em>active authority</em> is meant to be a hot key and can perform any action except changing the <em>owner authority</em>.</li>
<li>The motivating use case is a 2-factor authentication provider as a co-signer on the <em>active authority</em>, but not on the
<em>owner authority</em>.</li>
</ul>
<p>With this approach, a user can remain confident that their account will always be in their control, and yet that control
can be kept in cold storage where no one can hack it. This means that a company account can require the approval of its
board of directors and each board member may in turn require 2 factor authentication.</p>
<p>Anyone can rotate keys frequently without having to disturb the permissions on the accounts of its users.</p>
<br />
<h4 id="gathering-signatures">Gathering Signatures</h4>
<p>One of the challenges that has made multi-signature approaches difficult to use in the past was the act of gathering required signatures was
  entirely manual, or required specialized infrastructure. Once a transaction is signed, there is no ability to retract your signature, so the
  last party to sign gains a slight advantage over the other parties. With deeper hierarchies, gathering signatures becomes even more complex.</p>
<p>To simplify this process, a blockchain should manage the signature gathering process by tracking the state of partially
approved proposed transactions.
Under this process, each account can add (or remove) their permission to a transaction atomically, without having to rely
upon an outside system to circulate the transaction.
This becomes especially critical for hierarchies that are arbitrarily deep.</p>
<p>In order to keep things computational-bound(ed), an individual transaction will only traverse down two layers in a hierarchy.
If more than two layers of hierarchy are present, then an account will have to propose (create one transaction) to
approve a proposal (the other transaction).
When the first proposal (transaction) is approved, permission is then added to the second proposal (transaction).</p>

<p>Under this approach, each individual pays a single transaction fee each time they approve an action, and every action
involves at most 1 signature verification by the network. This process allows arbitrarily deep hierarchies to be formed without exposing the permission system to vulnerability of
unbounded computation.</p>
<br />
<h4 id="scalability">Scalability</h4>
<p>In theory, accounts can form a hierarchy that is arbitrarily deep, and evaluating that hierarchy can take an arbitrary
amount of time. In practice, it is unlikely that a single transaction will have signatures more than 2 levels deep,
which keeps them computation bound. Anything that requires more than 2 levels is likely to involve many
people, and would not be signed all at once. Instead, it would use the built-in proposed transaction
infrastructure, which tracks partially approved transactions.</p>
<ul class="ml-25">
<li>With this approach, a board member can propose that his company approve a transaction.</li>
<li>This can be extended logically to propose, and account propose, to approve a transaction.</li>
<li>This process would collect transaction fees as all of the layers in the hierarchy gradually add their permissions, and
at no time requires an unbounded calculation.</li>
</ul>
<br />
<h4 id="cycles">Cycles</h4>
<p>It is possible for two accounts to require each other to approve a transaction.</p>
<p>Imagine account X is created that requires A and Y to approve.
Imagine account Y is created that requires B and X to approve.
The graph looks like this:</p>
<div class="highlighter-rouge"><pre class="highlight"><code>   A -&gt; X &lt;-&gt; Y
   B -&gt; Y &lt;-&gt; X
</code></pre>
</div>
<p>A proposes that X spend 1 BTS and waits for approval from Y.
B proposes that Y approve the proposal from A and waits for approval from X.</p>
<p>There is no way to resolve this problem with a single approval from any party due to the following reasons:</p>
<ol class="ml-25">
<li>Neither account can act without the other and thus nothing can be accomplished.</li>
<li>Cycles don’t have to be direct as in this case, they can involve arbitrarily long sequences and thus be non-obvious.</li>
<li>If users create an approval cycle in the <em>active authority</em> then the <em>owner authority</em> can be used to break the cycle.
However, if they construct a cycle in the <em>owner authority</em> and the <em>active authority</em> then the accounts involved in the cycle would be locked out.</li>
<li>In practice client software can detect cycles and prevent them from being formed.</li>
</ol>
<br />
<h2 id="conclusion">Conclusion</h2>
<p>Dynamic hierarchical threshold multi-signature permissions provides people and organizations with a more natural way
to express ownership and control policies. This approach makes the system easier to use, and ultimately more secure than existing solutions.</p>
<br />
<h4 id="credits">Credits</h4>
			<p>The Ripple wiki documents a <a href="https://developers.ripple.com/multi-signing.html" target="_blank">similar Multisign feature</a>, which was discovered independently however was not implemented until more recently.</p>
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
