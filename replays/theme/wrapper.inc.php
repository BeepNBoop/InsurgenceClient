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
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/font-awesome.css?0.6207213802391545" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/panels.css?0.36903617676278344" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/main.css?0.35860009273875715" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/battle.css?0.3989389406429964" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/replay.css?0.8707513674243816" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/utilichart.css?0.5622233409172936" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/?0.9439646753668447"><img src="//neodrafttest.herokuapp.com/images/pokemonshowdownbeta.png?0.6383620338201264" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7852631340705507">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.0000657338692586773">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/ladder/?0.1285173790050229">Ladder</a></li>
				<li><a class="button nav-last" href="//neodrafttest.herokuapp.com/forums/?0.6144438673198636">Forum</a></li>
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
	<script src="//neodraft.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5438227907817761"></script>
	<script src="//neodraft.herokuapp.com/js/lib/lodash.core.js?0.6411175366293194"></script>
	<script src="//neodraft.herokuapp.com/js/lib/backbone.js?0.79642270736431"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7407156016518204"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//neodraft.herokuapp.com/js/lib/jquery-cookie.js?0.08765165510294337"></script>
	<script src="//neodraft.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8782840125362696"></script>
	<script src="//neodraft.herokuapp.com/js/battle-sound.js?0.5221510469212223"></script>
	<script src="//neodraft.herokuapp.com/config/config.js?0.10507780295093072"></script>
	<script src="//neodraft.herokuapp.com/js/battledata.js?0.5101281543509053"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini.js?0.5256866360478574"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini-bw.js?0.4537901208663069"></script>
	<script src="//neodraft.herokuapp.com/data/graphics.js?0.8519880960874231"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex.js?0.3177244660442282"></script>
	<script src="//neodraft.herokuapp.com/data/items.js?0.7951604429442838"></script>
	<script src="//neodraft.herokuapp.com/data/moves.js?0.942330768282964"></script>
	<script src="//neodraft.herokuapp.com/data/abilities.js?0.5376404165615747"></script>
	<script src="//neodraft.herokuapp.com/data/teambuilder-tables.js?0.5292010306872053"></script>
	<script src="//neodraft.herokuapp.com/js/battle-tooltips.js?0.06679977465449771"></script>
	<script src="//neodraft.herokuapp.com/js/battle.js?0.16334661827047747"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
