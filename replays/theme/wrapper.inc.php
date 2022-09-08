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
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/font-awesome.css?0.027817959862798558" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/panels.css?0.09311734523654569" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/main.css?0.5461748368608099" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/battle.css?0.9647825262493801" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/replay.css?0.9764954470197456" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/utilichart.css?0.891020407481006" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/?0.520111631959403"><img src="//neodrafttest.herokuapp.com/images/pokemonshowdownbeta.png?0.706554154806184" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.2518038087011738">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7756043905846286">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/ladder/?0.9865863893221218">Ladder</a></li>
				<li><a class="button nav-last" href="//neodrafttest.herokuapp.com/forums/?0.08745433971782268">Forum</a></li>
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
	<script src="//neodraft.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9265275037671035"></script>
	<script src="//neodraft.herokuapp.com/js/lib/lodash.core.js?0.20097086212114101"></script>
	<script src="//neodraft.herokuapp.com/js/lib/backbone.js?0.23900734047812078"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.591487955866798"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//neodraft.herokuapp.com/js/lib/jquery-cookie.js?0.7099383026261832"></script>
	<script src="//neodraft.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7947704687890649"></script>
	<script src="//neodraft.herokuapp.com/js/battle-sound.js?0.45085180440888895"></script>
	<script src="//neodraft.herokuapp.com/config/config.js?0.9037203040343185"></script>
	<script src="//neodraft.herokuapp.com/js/battledata.js?0.7930152859525366"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini.js?0.5639803093948741"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini-bw.js?0.5345086845185132"></script>
	<script src="//neodraft.herokuapp.com/data/graphics.js?0.08372271706021706"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex.js?0.6715992942171527"></script>
	<script src="//neodraft.herokuapp.com/data/items.js?0.5260085129031424"></script>
	<script src="//neodraft.herokuapp.com/data/moves.js?0.27165691964688876"></script>
	<script src="//neodraft.herokuapp.com/data/abilities.js?0.0605801104711412"></script>
	<script src="//neodraft.herokuapp.com/data/teambuilder-tables.js?0.23800116353392742"></script>
	<script src="//neodraft.herokuapp.com/js/battle-tooltips.js?0.5996442637076143"></script>
	<script src="//neodraft.herokuapp.com/js/battle.js?0.04958768648515721"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
