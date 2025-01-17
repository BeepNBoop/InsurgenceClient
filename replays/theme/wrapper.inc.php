<?php

if ((substr($_SERVER['REMOTE_ADDR'],0,11) === '69.164.163.') ||
		(substr(@$_SERVER['HTTP_X_FORWARDED_FOR'],0,11) === '69.164.163.')) {
	die('website disabled');
}

/********************************************************************
 * Header
 ********************************************************************/

function ThemeHeaderTemplate() {
	global $panels;
?>
<!DOCTYPE html>
<html><head>

	<meta charset="utf-8" />

	<title><?php if ($panels->pagetitle) echo htmlspecialchars($panels->pagetitle).' - '; ?>Pok&eacute;mon Showdown</title>

<?php if ($panels->pagedescription) { ?>
	<meta name="description" content="<?php echo htmlspecialchars($panels->pagedescription); ?>" />
<?php } ?>

	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=IE8" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/font-awesome.css?0.24765626609012914" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/panels.css?0.683935605446135" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/main.css?0.14022644776134086" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/battle.css?0.8386848393271062" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/replay.css?0.49925047653862253" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/utilichart.css?0.08673664895268351" />

	<!-- Workarounds for IE bugs to display trees correctly. -->
	<!--[if lte IE 6]><style> li.tree { height: 1px; } </style><![endif]-->
	<!--[if IE 7]><style> li.tree { zoom: 1; } </style><![endif]-->

	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-26211653-1']);
		_gaq.push(['_setDomainName', 'pokemonshowdown.com']);
		_gaq.push(['_setAllowLinker', true]);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
</head><body>

	<div class="pfx-topbar">
		<div class="header">
			<ul class="nav">
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/?0.6639207303746777"><img src="//neodrafttest.herokuapp.com/images/pokemonshowdownbeta.png?0.49308344813473104" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7893064160663652">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.04668602336923944">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/ladder/?0.26435500491201025">Ladder</a></li>
				<li><a class="button nav-last" href="//neodrafttest.herokuapp.com/forums/?0.6124685800564429">Forum</a></li>
			</ul>
			<ul class="nav nav-play">
				<li><a class="button greenbutton nav-first nav-last" href="http://play.pokemonshowdown.com/">Play</a></li>
			</ul>
			<div style="clear:both"></div>
		</div>
	</div>
<?php
}

/********************************************************************
 * Footer
 ********************************************************************/

function ThemeScriptsTemplate() {
?>
	<script src="//neodraft.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.030407648851653812"></script>
	<script src="//neodraft.herokuapp.com/js/lib/lodash.core.js?0.3036781357366336"></script>
	<script src="//neodraft.herokuapp.com/js/lib/backbone.js?0.6801757684057248"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3284018895073113"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//neodraft.herokuapp.com/js/lib/jquery-cookie.js?0.9853012590630479"></script>
	<script src="//neodraft.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5176601617925276"></script>
	<script src="//neodraft.herokuapp.com/js/battle-sound.js?0.12604860634985893"></script>
	<script src="//neodraft.herokuapp.com/config/config.js?0.6455540664074029"></script>
	<script src="//neodraft.herokuapp.com/js/battledata.js?0.058147853191634846"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini.js?0.5318529771286542"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini-bw.js?0.019296587542378507"></script>
	<script src="//neodraft.herokuapp.com/data/graphics.js?0.11163360637755226"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex.js?0.9861768354067226"></script>
	<script src="//neodraft.herokuapp.com/data/items.js?0.8379183068822214"></script>
	<script src="//neodraft.herokuapp.com/data/moves.js?0.522791109576159"></script>
	<script src="//neodraft.herokuapp.com/data/abilities.js?0.7440225990359961"></script>
	<script src="//neodraft.herokuapp.com/data/teambuilder-tables.js?0.48656466935516063"></script>
	<script src="//neodraft.herokuapp.com/js/battle-tooltips.js?0.5312420451243207"></script>
	<script src="//neodraft.herokuapp.com/js/battle.js?0.5192553399200319"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
