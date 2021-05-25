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
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/font-awesome.css?0.12116036119105966" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/panels.css?0.9510412574629219" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/main.css?0.32600256755492585" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/battle.css?0.4963152255172949" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/replay.css?0.16534245301148265" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/utilichart.css?0.3771575939903007" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/?0.4902947206816568"><img src="//neodrafttest.herokuapp.com/images/pokemonshowdownbeta.png?0.695407710519488" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.953928617616872">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9610485659030943">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/ladder/?0.8755950788419393">Ladder</a></li>
				<li><a class="button nav-last" href="//neodrafttest.herokuapp.com/forums/?0.9494809979525787">Forum</a></li>
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
	<script src="//neodraft.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8105827405624955"></script>
	<script src="//neodraft.herokuapp.com/js/lib/lodash.core.js?0.6367796210408101"></script>
	<script src="//neodraft.herokuapp.com/js/lib/backbone.js?0.5746691225141451"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.07902385487351626"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//neodraft.herokuapp.com/js/lib/jquery-cookie.js?0.9659902380882013"></script>
	<script src="//neodraft.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8484201702588858"></script>
	<script src="//neodraft.herokuapp.com/js/battle-sound.js?0.9776249920187481"></script>
	<script src="//neodraft.herokuapp.com/config/config.js?0.5829532995336222"></script>
	<script src="//neodraft.herokuapp.com/js/battledata.js?0.2400231743446566"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini.js?0.6830474168857841"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini-bw.js?0.6498976004984571"></script>
	<script src="//neodraft.herokuapp.com/data/graphics.js?0.6983368072064129"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex.js?0.366321955514308"></script>
	<script src="//neodraft.herokuapp.com/data/items.js?0.8040511770365"></script>
	<script src="//neodraft.herokuapp.com/data/moves.js?0.33668431925198217"></script>
	<script src="//neodraft.herokuapp.com/data/abilities.js?0.8667311994448186"></script>
	<script src="//neodraft.herokuapp.com/data/teambuilder-tables.js?0.2553941955323984"></script>
	<script src="//neodraft.herokuapp.com/js/battle-tooltips.js?0.9301062163879525"></script>
	<script src="//neodraft.herokuapp.com/js/battle.js?0.4742620988174149"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
