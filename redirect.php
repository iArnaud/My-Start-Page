<!doctype html>
<html>
<head>
	<title>Redirection</title>

	<meta name="robots" content="noindex, nofollow">

	<?php
		if (!isset($_GET['site']))
			header("Location: index.php?error=nosite");
		else
			$site = $_GET['site'];
		
		$site = str_replace("%s",urlencode($_GET['s']),$site);

		# echo $site;
		header("Location: http://".$site);
	?>
</head>
<body>
If you can read this message, there has been an error.

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