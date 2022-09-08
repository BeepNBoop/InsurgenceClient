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
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/font-awesome.css?0.24924940812579122" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/panels.css?0.8164653079561415" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/main.css?0.8884621922609646" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/battle.css?0.8696311622945818" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/replay.css?0.21392047920567614" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/utilichart.css?0.03793118979766197" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/?0.7493806484304983"><img src="//neodrafttest.herokuapp.com/images/pokemonshowdownbeta.png?0.9192784266619851" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9254524374426061">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.02465772719071535">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/ladder/?0.24970159925862512">Ladder</a></li>
				<li><a class="button nav-last" href="//neodrafttest.herokuapp.com/forums/?0.6380475288979159">Forum</a></li>
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
	<script src="//neodraft.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.10009747983138961"></script>
	<script src="//neodraft.herokuapp.com/js/lib/lodash.core.js?0.6501623525868991"></script>
	<script src="//neodraft.herokuapp.com/js/lib/backbone.js?0.5881744816364483"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6044860679468329"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//neodraft.herokuapp.com/js/lib/jquery-cookie.js?0.14788581894911612"></script>
	<script src="//neodraft.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9009288967487807"></script>
	<script src="//neodraft.herokuapp.com/js/battle-sound.js?0.09774850052591555"></script>
	<script src="//neodraft.herokuapp.com/config/config.js?0.21577331824273394"></script>
	<script src="//neodraft.herokuapp.com/js/battledata.js?0.4185034358415416"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini.js?0.7837262846251614"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini-bw.js?0.909259115935404"></script>
	<script src="//neodraft.herokuapp.com/data/graphics.js?0.04964866341228391"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex.js?0.9045491236611904"></script>
	<script src="//neodraft.herokuapp.com/data/items.js?0.7360299040034259"></script>
	<script src="//neodraft.herokuapp.com/data/moves.js?0.4888843478899445"></script>
	<script src="//neodraft.herokuapp.com/data/abilities.js?0.5422656888158512"></script>
	<script src="//neodraft.herokuapp.com/data/teambuilder-tables.js?0.14570269860783913"></script>
	<script src="//neodraft.herokuapp.com/js/battle-tooltips.js?0.057906225934059474"></script>
	<script src="//neodraft.herokuapp.com/js/battle.js?0.2949208472306275"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
