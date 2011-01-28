<!doctype html>  

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ --> 
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

<?php
/*
  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame 
       Remove this if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
*/
?>

  <title>Start Page</title>
  <meta name="description" content="Start Page for Mobile Browsers">
  <meta name="author" content="Josh At Operation Web">
  
  <!-- Temporary Google verification code -->
  <meta name="google-site-verification" content="IUYhBOaRYURtQsWISVCA8v2_CfOxsXwar0A6NEAKb3g" />

  <!--  Mobile viewport optimized: j.mp/bplateviewport -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Place favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">

  <!-- CSS : implied media="all" -->
  <link rel="stylesheet" href="css/style.css?v=2">

  <!-- Uncomment if you are specifically targeting less enabled mobile browsers
  <link rel="stylesheet" media="handheld" href="css/handheld.css?v=2"> -->
   <!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
  <script src="js/libs/modernizr-1.6.min.js"></script>

</head>

<body>

<div id="wrapper">
	<form action="redirect.php" method="get">
		<select name="site">
			<option value="mobile.biblegateway.com/keyword/?search=%s&version1=31&version2=49&version3=65&version4=51&version5=78&searchtype=all">BibleGateway Keyword(s)</option>
			<option value="mobile.biblegateway.com/passage/?search=%s&version=NIV;NASB;MSG;NLT;NCV">BibleGateway Passage(s)</option>
			<option value="www.biblestudytools.com/search/?q=%s&t=nas&s=Bibles">BST Strong's</option>
			<option value="www.biblestudytools.com/search/?q=%s&s=References&rc=DIC">BST Dictionaries</option>
			<option value="esurance.com">esurance (just hit search)</option>
			<option value="idp.godaddymobile.com">GoDaddy (just hit search)</option>
			<option value="m.imdb.com/find?q=%s&button=Search">IMDB</option>
			<option value="m.lifehacker.com/search/%s/">LifeHacker</option>
			<option value="www.mdbg.net/chindict/chindict.php?page=worddict&wdrst=1&wdqb=%s">MDBG Chinese</option>
			<option value="www.mdbg.net/chindict/chindict.php?page=worddict&wdrst=1&wdqb=e:%s">MDBG English</option>
			<option value="www.biblestudytools.com/search/?q=%s&s=References&rc=COM&rc2=MHC-COM">MHC Complete</option>
			<option value="www.biblestudytools.com/search/?q=%s&s=References&rc=COM&rc2=MHC-CON">MHC Concise</option>
			<option value="m.mspot.com/search?search=%s">mSpot Movies</option>
			<option value="www.netflix.com/Mobile/SearchResults?v1=%s&hl=en&search_submit=Search">Netflix</option>
			<option value="m.npr.org/story/search?searchTerm=%s">NPR</option>
			<option value="mobile.slashdot.org/index2.pl?fhfilter=%s">Slashdot</option>
			<option value="springpadit.com/lightmanx5?Tags=%s" SELECTED>Springpad</option>
			<option value="search.twitter.com/search?q=%s">Twitter Search</option>
			<option value="twitter.com/%s">Twitter User</option>
			<option value="www.urbandictionary.com/iphone/#define?term=%s">Urban Dictionary</option>
			<option value="en.m.wikipedia.org/wiki?search=%s">Wikipedia</option>
			<option value="m.wolframalpha.com/input/?i=%s">Wolfram Alpha</option>
		</select>
		<input type="text" name="s">
		<input type="submit" name="btnSearch" value="Search" title="Search">
	</form>
	
	<div class="navwrap">
	<ul>
		<li>
			<a href="http://www.biblestudytools.com/site-map/"><img src="images/bst.png" class="resizeIMG" /></a>
			<div class="textLine clearfix">
				Search:
				<a href="http://www.biblestudytools.com/search/?q=sheet&t=nas&s=Bibles">Strong's</a>
				/
				<a href="http://www.biblestudytools.com/dictionaries/">Dictionaries</a>
				/
				<span style="white-space:nowrap;">
				<a href="http://www.biblestudytools.com/commentaries/matthew-henry-complete/">MHComC</a>
				/
				<a href="http://www.biblestudytools.com/commentaries/matthew-henry-concise/">MHConC</a>
				</span>
			</div>
		</li>
	</ul>
	</div>
	<div class="navwrap">
	<ul>
		<li class="group4icons">
			<a href="http://www.google.com/"><img src="images/google_16.png" /></a>
			<a href="http://docs.google.com/m"><img src="images/gdocs_16.png" /></a>
			<a href="http://www.google.com/reader"><img src="images/greader_16.png" /></a>
			<a href="https://www.google.com/voice/m?uipref=1"><img src="images/gvoice_16.png" /></a>
		</li>

		<li class="group4icons">
			<a href="http://search.twitter.com/search?q=from:opwebtools"><img src="images/twitter_16.png" /></a>
			<a href="http://touch.facebook.com"><img src="images/facebook_16.png" /></a>
			<a href="http://www.google.com/m?q=site:youtube.com"><img src="images/youtube_16.png" /></a>
			<a href="http://m.delicious.com/search?context=userposts&p="><img src="images/delicious_16.png" /></a>
		</li>

		<li class="icon"><a href="http://finetune.com/wii"><img src="images/finetune.png" /></a></li>
	</ul>
	</div>
	<div class="navwrap">
	<ul>
		<li class="icon">
			<a href="http://m.lifehacker.com/"><img src="images/lifehacker.png" /></a>
			<div class="textLine"><a href="http://www.google.com/m?q=site:lifehacker.com">Search</a></div>
		</li>
		
		<li class="icon">
			<a href="http://operationwebtools.com/"><img src="images/operationwebtools.png" /></a>
			<div class="textLine"><a href="http://www.google.com/m?q=site:operationwebtools.com">Search</a></div>
		</li>
		
		<li class="icon"><a href="http://kinstant.com"><img src="http://dummyimage.com/60x60/000/fff.png&text=Kinstant" /></a></li>
	</ul>
	</div>
	<div class="navwrap">
	<ul>
		<li class="icon">
			<a href="http://m.netflix.com/"><img src="images/netflix.png" /></a>
			<div class="textLine"><a href="http://www.netflix.com/Mobile/Search">Search</a></div>
		</li>
		
		<li class="icon">
			<a href="http://mobile.slashdot.org/"><img src="images/slashdot.png" /></a>
			<div class="textLine"><a href="http://www.google.com/m?q=slashdot.org">Search</a></div>
		</li>
		
		<li class="icon">
			<a href="http://m.wolframalpha.com/input/?i=2+dice"><img src="http://dummyimage.com/60x60/000/fff.png&text=Wolfram+Alpha" /></a>
			<div class="textLine"><a href="http://m.wolframalpha.com/input/?i=2+dice">Search</a></div>
		</li>
	</ul>
	</div>
		
	<div class="navwrap">
	<ul>
		<li>
			<a href="http://mobile.biblegateway.com/index.php"><img src="images/biblegateway.png" class="resizeIMG" /></a>
			<div class="textLine clearfix">
				Search:
				<a href="http://mobile.biblegateway.com/passage/?search=Genesis%201&version=NIV;NASB;MSG;NLT;NCV">Passage</a>
				/
				<a href="http://mobile.biblegateway.com/keyword/?search=In%20the%20beginning&version1=31&version2=49&version3=65&version4=51&version5=78&searchtype=all">Keywords</a>
			</div>
		</li>
	</ul>
	</div>

	<div class="navwrap">
	<ul>
		<li class="icon">
			<a href="http://www.mdbg.net/chindict/chindict.php"><img src="images/mdbg.png" /></a>
			<div class="textLine"><a href="http://www.mdbg.net/chindict/chindict.php?page=worddict&wdrst=1&wdqb=%E7%B4%84%E6%9B%B8%E4%BA%9E">Search</a></div>
		</li>

		<li class="icon"><a href="http://m.gasbuddy.com/"><img src="images/gasbuddy.png" /></a></li>

		<li class="icon">
			<a href="http://m.npr.com/"><img src="images/npr.png" /></a>
			<div class="textLine"><a href="http://www.google.com/m?q=site:npr.com">Search</a></div>
		</li>
	</ul>
	</div>
	<div class="navwrap">
	<ul>		
		<li class="icon">
			<a href="http://urbandictionary.com/"><img src="images/urbandictionary.png" /></a>
			<div class="textLine"><a href="http://www.google.com/m?q=site:urbandictionary.com">Search</a></div>
		</li>
		
		<li class="icon">
			<a href="https://m.mspot.com/movie_genre/1800460"><img src="images/mspot.png" /></a>
			<div class="textLine"><a href="https://m.mspot.com/search?search=inception">Search</a></div>
		</li>
		
		<li class="icon">
			<a href="http://m.imdb.com/"><img src="images/imdb.png" /></a>
			<div class="textLine"><a href="http://m.imdb.com/find?q=inception&button=Search">Search</a></div>
		</li>
	</ul>
	</div>
	<div class="navwrap">
	<ul>		
		<li class="icon"><a href="http://cl1p.net/lightmanx5"><img src="images/cl1p.png" /></a></li>
		
		<li class="icon">
			<a href="http://en.m.wikipedia.org/"><img src="images/wikipedia.png" /></a>
			<div class="textLine"><a href="http://en.m.wikipedia.org/wiki?search=star+wars+day">Search</a></div>
		</li>

		<li class="icon">
			<a unhref="http://www.a2zwordfinder.com/scrabbleform.html"><img src="images/scrabble.png" style="display:none;" /></a>
			<div class="textLine"><a href="http://www.a2zwordfinder.com/scrabbleform.html">Scrabble</a></div>
		</li>
	</ul>
	</div>

	<?php
		if(isset($_GET['debug']))
		{
	?>
		<div class="navwrap">
		<ul>
		<li class="icon">
			<a unhref="http://preview.offermobi.com/preview/"><img src="images/dot.png" style="display:none;" /></a>
			<div class="textLine"><a href="http://preview.offermobi.com/preview/">Test</a></div>
		</li>
		</ul>
		</div>

		<div class="clearfix"></div>

		Cliq XT: <input type="text" value="Mozilla/5.0 (Linux; U; Android 1.5; en-us; MB501 Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1" /><br />
		Wii: <input type="text" value="Opera/9.30 (Nintendo Wii; U; ; 2047-7;en)" />
		<?php
		}
		else
			echo "<div class=\"clearfix\"></div>";
	?>

	<small class="textLine" style="padding:0 4px;"><a href="http://fav.me/d30ajg4" target="_blank">Background image</a> by <a href="http://amberwind.deviantart.com/" target="_blank">Amberwind</a></small>

</div> <!--! end of #wrapper -->


  <!-- Javascript at the bottom for fast page loading -->

<?php
/*
  <!-- Grab Google CDN's jQuery. fall back to local if necessary -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.js"></script>
  <script>!window.jQuery && document.write(unescape('%3Cscript src="js/libs/jquery-1.4.2.js"%3E%3C/script%3E'))</script>
*/
?>  
  
  <!-- scripts concatenated and minified via ant build script-->
  <script src="js/plugins.js"></script>
  <script src="js/script.js"></script>
  <!-- end concatenated and minified scripts-->
  
  
  <!--[if lt IE 7 ]>
    <script src="js/libs/dd_belatedpng.js"></script>
    <script> DD_belatedPNG.fix('img, .png_bg'); //fix any <img> or .png_bg background-images </script>
  <![endif]-->

<?php
/*
  <!-- yui profiler and profileviewer - remove for production -->
  <script src="js/profiling/yahoo-profiling.min.js"></script>
  <script src="js/profiling/config.js"></script>
  <!-- end profiling code -->
*/
?>

  <!-- asynchronous google analytics: mathiasbynens.be/notes/async-analytics-snippet -->
  <script>
   var _gaq = [['_setAccount', 'UA-12340074-2'], ['_trackPageview']];
   (function(d, t) {
    var g = d.createElement(t),
        s = d.getElementsByTagName(t)[0];
    g.async = true;
    g.src = ('https:' == location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g, s);
   })(document, 'script');
  </script>
  
</body>
</html>