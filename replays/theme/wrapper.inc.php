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
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/font-awesome.css?0.35237026866473253" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/panels.css?0.5440409991954596" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/main.css?0.29023654537409205" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/battle.css?0.551193034305757" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/replay.css?0.6239431318478137" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/utilichart.css?0.7907593067784184" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/?0.7467325827973925"><img src="//neodrafttest.herokuapp.com/images/pokemonshowdownbeta.png?0.7093405429359578" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6129087909814077">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7307844843678954">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/ladder/?0.6901078928965272">Ladder</a></li>
				<li><a class="button nav-last" href="//neodrafttest.herokuapp.com/forums/?0.7246403332034859">Forum</a></li>
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
	<script src="//neodraft.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.1663522886792257"></script>
	<script src="//neodraft.herokuapp.com/js/lib/lodash.core.js?0.6328823794916243"></script>
	<script src="//neodraft.herokuapp.com/js/lib/backbone.js?0.25104067141174236"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.305627426360499"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//neodraft.herokuapp.com/js/lib/jquery-cookie.js?0.5552193524117035"></script>
	<script src="//neodraft.herokuapp.com/js/lib/html-sanitizer-minified.js?0.49357780733452494"></script>
	<script src="//neodraft.herokuapp.com/js/battle-sound.js?0.069687113949368"></script>
	<script src="//neodraft.herokuapp.com/config/config.js?0.06871539266192528"></script>
	<script src="//neodraft.herokuapp.com/js/battledata.js?0.6581837722313557"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini.js?0.005419340236770154"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini-bw.js?0.7184332753367397"></script>
	<script src="//neodraft.herokuapp.com/data/graphics.js?0.6702385084291513"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex.js?0.03545142217746089"></script>
	<script src="//neodraft.herokuapp.com/data/items.js?0.6993762336453204"></script>
	<script src="//neodraft.herokuapp.com/data/moves.js?0.6121275605059067"></script>
	<script src="//neodraft.herokuapp.com/data/abilities.js?0.3928318373773507"></script>
	<script src="//neodraft.herokuapp.com/data/teambuilder-tables.js?0.644320173579348"></script>
	<script src="//neodraft.herokuapp.com/js/battle-tooltips.js?0.20281898394952558"></script>
	<script src="//neodraft.herokuapp.com/js/battle.js?0.9184961897462935"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
