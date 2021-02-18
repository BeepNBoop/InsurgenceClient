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
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/font-awesome.css?0.06549980224195107" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/panels.css?0.553903224753165" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/main.css?0.7406841668220545" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/battle.css?0.8113355636057213" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/replay.css?0.04544633326567582" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/utilichart.css?0.6033132515789228" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/?0.8199272454774729"><img src="//neodrafttest.herokuapp.com/images/pokemonshowdownbeta.png?0.12778406363609252" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5059962798117401">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9605212606736879">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/ladder/?0.6720799023188984">Ladder</a></li>
				<li><a class="button nav-last" href="//neodrafttest.herokuapp.com/forums/?0.3512815237125988">Forum</a></li>
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
	<script src="//neodraft.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9775217845424271"></script>
	<script src="//neodraft.herokuapp.com/js/lib/lodash.core.js?0.9665985501489542"></script>
	<script src="//neodraft.herokuapp.com/js/lib/backbone.js?0.7379449241055716"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.08390526421135691"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//neodraft.herokuapp.com/js/lib/jquery-cookie.js?0.5438767832983111"></script>
	<script src="//neodraft.herokuapp.com/js/lib/html-sanitizer-minified.js?0.984640167241176"></script>
	<script src="//neodraft.herokuapp.com/js/battle-sound.js?0.6609107098113935"></script>
	<script src="//neodraft.herokuapp.com/config/config.js?0.13936525143307077"></script>
	<script src="//neodraft.herokuapp.com/js/battledata.js?0.6839072879097923"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini.js?0.7323663494424204"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini-bw.js?0.4754667793475482"></script>
	<script src="//neodraft.herokuapp.com/data/graphics.js?0.05679259277161686"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex.js?0.08113317375837492"></script>
	<script src="//neodraft.herokuapp.com/data/items.js?0.789692260509766"></script>
	<script src="//neodraft.herokuapp.com/data/moves.js?0.005797251869606113"></script>
	<script src="//neodraft.herokuapp.com/data/abilities.js?0.1890854813194256"></script>
	<script src="//neodraft.herokuapp.com/data/teambuilder-tables.js?0.6852200769181418"></script>
	<script src="//neodraft.herokuapp.com/js/battle-tooltips.js?0.3624970632402471"></script>
	<script src="//neodraft.herokuapp.com/js/battle.js?0.5753533099417447"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
