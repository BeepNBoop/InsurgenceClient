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
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/font-awesome.css?0.6102347328800242" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/panels.css?0.5447760193603963" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/main.css?0.46145300634069275" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/battle.css?0.0531440902507212" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/replay.css?0.6975052101563464" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/utilichart.css?0.8184999742589059" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/?0.2982130270993695"><img src="//neodrafttest.herokuapp.com/images/pokemonshowdownbeta.png?0.5533164816314293" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.2103148643632784">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4864041530339622">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/ladder/?0.9097854651997577">Ladder</a></li>
				<li><a class="button nav-last" href="//neodrafttest.herokuapp.com/forums/?0.09346634315155988">Forum</a></li>
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
	<script src="//neodraft.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.24879166517787787"></script>
	<script src="//neodraft.herokuapp.com/js/lib/lodash.core.js?0.6623422511965034"></script>
	<script src="//neodraft.herokuapp.com/js/lib/backbone.js?0.40286790631511105"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6333038120306997"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//neodraft.herokuapp.com/js/lib/jquery-cookie.js?0.8951107413303405"></script>
	<script src="//neodraft.herokuapp.com/js/lib/html-sanitizer-minified.js?0.49144556875861634"></script>
	<script src="//neodraft.herokuapp.com/js/battle-sound.js?0.04243976726050014"></script>
	<script src="//neodraft.herokuapp.com/config/config.js?0.09124915316002169"></script>
	<script src="//neodraft.herokuapp.com/js/battledata.js?0.6303766653311154"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini.js?0.8999708072958594"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini-bw.js?0.854975297049658"></script>
	<script src="//neodraft.herokuapp.com/data/graphics.js?0.9019819322629861"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex.js?0.8345101967380193"></script>
	<script src="//neodraft.herokuapp.com/data/items.js?0.9611110413706745"></script>
	<script src="//neodraft.herokuapp.com/data/moves.js?0.5781639477567555"></script>
	<script src="//neodraft.herokuapp.com/data/abilities.js?0.5126848077464672"></script>
	<script src="//neodraft.herokuapp.com/data/teambuilder-tables.js?0.4234999992617636"></script>
	<script src="//neodraft.herokuapp.com/js/battle-tooltips.js?0.10945057278460535"></script>
	<script src="//neodraft.herokuapp.com/js/battle.js?0.5934010630145743"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
