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
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/font-awesome.css?0.302586048713817" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/panels.css?0.9178587204114683" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/main.css?0.13281578084372492" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/battle.css?0.8112397228068278" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/replay.css?0.9705031019981176" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/utilichart.css?0.29356068231820864" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/?0.6145613407853943"><img src="//neodrafttest.herokuapp.com/images/pokemonshowdownbeta.png?0.32433468357132744" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.672118948008394">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.15340469419173397">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/ladder/?0.24521657337889513">Ladder</a></li>
				<li><a class="button nav-last" href="//neodrafttest.herokuapp.com/forums/?0.632968751497553">Forum</a></li>
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
	<script src="//neodraft.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.32954284947501655"></script>
	<script src="//neodraft.herokuapp.com/js/lib/lodash.core.js?0.9910607393258444"></script>
	<script src="//neodraft.herokuapp.com/js/lib/backbone.js?0.0630893380367199"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.19059310730236279"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//neodraft.herokuapp.com/js/lib/jquery-cookie.js?0.3292654103834589"></script>
	<script src="//neodraft.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8274516720919423"></script>
	<script src="//neodraft.herokuapp.com/js/battle-sound.js?0.6503051677196241"></script>
	<script src="//neodraft.herokuapp.com/config/config.js?0.8291106978014864"></script>
	<script src="//neodraft.herokuapp.com/js/battledata.js?0.6605074234208075"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini.js?0.4731067439027077"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini-bw.js?0.17541622970564918"></script>
	<script src="//neodraft.herokuapp.com/data/graphics.js?0.9254856971549432"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex.js?0.8031889263531344"></script>
	<script src="//neodraft.herokuapp.com/data/items.js?0.27914791089875135"></script>
	<script src="//neodraft.herokuapp.com/data/moves.js?0.2306484812296845"></script>
	<script src="//neodraft.herokuapp.com/data/abilities.js?0.778990355826273"></script>
	<script src="//neodraft.herokuapp.com/data/teambuilder-tables.js?0.9935407648897585"></script>
	<script src="//neodraft.herokuapp.com/js/battle-tooltips.js?0.13571037145209086"></script>
	<script src="//neodraft.herokuapp.com/js/battle.js?0.537320415214487"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
