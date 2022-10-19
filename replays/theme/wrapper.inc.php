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
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/font-awesome.css?0.27096125507578495" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/panels.css?0.47303451397388097" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/main.css?0.061848068406376244" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/battle.css?0.482218033516028" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/replay.css?0.38151873138291204" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/utilichart.css?0.9706243139867929" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/?0.15032002314353754"><img src="//neodrafttest.herokuapp.com/images/pokemonshowdownbeta.png?0.9864440125065665" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8705221433886012">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.39302602724701674">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/ladder/?0.9919004774032856">Ladder</a></li>
				<li><a class="button nav-last" href="//neodrafttest.herokuapp.com/forums/?0.06306106286663438">Forum</a></li>
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
	<script src="//neodraft.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9659630183611603"></script>
	<script src="//neodraft.herokuapp.com/js/lib/lodash.core.js?0.9234250835297269"></script>
	<script src="//neodraft.herokuapp.com/js/lib/backbone.js?0.5359146083309458"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8122868140454849"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//neodraft.herokuapp.com/js/lib/jquery-cookie.js?0.9090116836440136"></script>
	<script src="//neodraft.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4289956440120548"></script>
	<script src="//neodraft.herokuapp.com/js/battle-sound.js?0.21484287995899365"></script>
	<script src="//neodraft.herokuapp.com/config/config.js?0.8581156136933956"></script>
	<script src="//neodraft.herokuapp.com/js/battledata.js?0.38583023082030277"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini.js?0.670632132689907"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini-bw.js?0.8547784181899907"></script>
	<script src="//neodraft.herokuapp.com/data/graphics.js?0.8234024810207627"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex.js?0.523774690020888"></script>
	<script src="//neodraft.herokuapp.com/data/items.js?0.6180284968207808"></script>
	<script src="//neodraft.herokuapp.com/data/moves.js?0.6431687756116684"></script>
	<script src="//neodraft.herokuapp.com/data/abilities.js?0.17832673677076816"></script>
	<script src="//neodraft.herokuapp.com/data/teambuilder-tables.js?0.9553769219559678"></script>
	<script src="//neodraft.herokuapp.com/js/battle-tooltips.js?0.6983845736767664"></script>
	<script src="//neodraft.herokuapp.com/js/battle.js?0.9970442919960216"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
