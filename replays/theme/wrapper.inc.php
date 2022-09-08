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
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/font-awesome.css?0.9732726457849272" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/panels.css?0.7849352402204954" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/main.css?0.2220231336823113" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/battle.css?0.9973959994716068" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/replay.css?0.23632359317714702" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/utilichart.css?0.6797874482218067" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/?0.2805121940160942"><img src="//neodrafttest.herokuapp.com/images/pokemonshowdownbeta.png?0.3757188962304139" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7593278761558266">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4597891382741066">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/ladder/?0.5655594054245074">Ladder</a></li>
				<li><a class="button nav-last" href="//neodrafttest.herokuapp.com/forums/?0.9757932558165496">Forum</a></li>
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
	<script src="//neodraft.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.3430911595095316"></script>
	<script src="//neodraft.herokuapp.com/js/lib/lodash.core.js?0.4173426352497587"></script>
	<script src="//neodraft.herokuapp.com/js/lib/backbone.js?0.1944910347375628"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3836939600973066"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//neodraft.herokuapp.com/js/lib/jquery-cookie.js?0.04820208234968382"></script>
	<script src="//neodraft.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5058652087744386"></script>
	<script src="//neodraft.herokuapp.com/js/battle-sound.js?0.7473743197137124"></script>
	<script src="//neodraft.herokuapp.com/config/config.js?0.9206319849419864"></script>
	<script src="//neodraft.herokuapp.com/js/battledata.js?0.18888978876631235"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini.js?0.4870180670855564"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini-bw.js?0.9996838211614154"></script>
	<script src="//neodraft.herokuapp.com/data/graphics.js?0.05155856090414557"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex.js?0.8129018707033517"></script>
	<script src="//neodraft.herokuapp.com/data/items.js?0.5950072135213804"></script>
	<script src="//neodraft.herokuapp.com/data/moves.js?0.8530290807394458"></script>
	<script src="//neodraft.herokuapp.com/data/abilities.js?0.7489718187403402"></script>
	<script src="//neodraft.herokuapp.com/data/teambuilder-tables.js?0.14060452866052175"></script>
	<script src="//neodraft.herokuapp.com/js/battle-tooltips.js?0.6128715279762484"></script>
	<script src="//neodraft.herokuapp.com/js/battle.js?0.3173444187971979"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
