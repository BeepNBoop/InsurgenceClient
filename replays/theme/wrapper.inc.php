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
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/font-awesome.css?0.1939195586749951" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/panels.css?0.8597194500341403" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/main.css?0.1149848629101462" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/battle.css?0.5461409439862104" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/replay.css?0.32019731744453517" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/utilichart.css?0.20373891951704892" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/?0.3308701745183016"><img src="//neodrafttest.herokuapp.com/images/pokemonshowdownbeta.png?0.3735306556415565" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5173729133654525">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.23514818021794404">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/ladder/?0.2512319051034029">Ladder</a></li>
				<li><a class="button nav-last" href="//neodrafttest.herokuapp.com/forums/?0.14382938700179193">Forum</a></li>
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
	<script src="//neodraft.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.11622076912713886"></script>
	<script src="//neodraft.herokuapp.com/js/lib/lodash.core.js?0.015435961484660643"></script>
	<script src="//neodraft.herokuapp.com/js/lib/backbone.js?0.4512812410032243"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4022588834904939"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//neodraft.herokuapp.com/js/lib/jquery-cookie.js?0.8881746484589266"></script>
	<script src="//neodraft.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4006955489578623"></script>
	<script src="//neodraft.herokuapp.com/js/battle-sound.js?0.2806513021133932"></script>
	<script src="//neodraft.herokuapp.com/config/config.js?0.47165290729951614"></script>
	<script src="//neodraft.herokuapp.com/js/battledata.js?0.25218623872504775"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini.js?0.9406079989763314"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini-bw.js?0.12850136339288776"></script>
	<script src="//neodraft.herokuapp.com/data/graphics.js?0.8011813299754675"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex.js?0.10116993826793119"></script>
	<script src="//neodraft.herokuapp.com/data/items.js?0.3100624809091428"></script>
	<script src="//neodraft.herokuapp.com/data/moves.js?0.17112249009461378"></script>
	<script src="//neodraft.herokuapp.com/data/abilities.js?0.6939542093462465"></script>
	<script src="//neodraft.herokuapp.com/data/teambuilder-tables.js?0.7484427867201049"></script>
	<script src="//neodraft.herokuapp.com/js/battle-tooltips.js?0.4239507181173825"></script>
	<script src="//neodraft.herokuapp.com/js/battle.js?0.46391637894460525"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
