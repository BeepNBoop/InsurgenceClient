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
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/font-awesome.css?0.029931236172198616" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/panels.css?0.6048218150982265" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/main.css?0.317575907423602" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/battle.css?0.5662990041921658" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/replay.css?0.13123451181429902" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/utilichart.css?0.7204493326415491" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/?0.9333866196792251"><img src="//neodrafttest.herokuapp.com/images/pokemonshowdownbeta.png?0.3865198141137389" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.38046847907888015">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.48683649264744555">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/ladder/?0.06763983359252101">Ladder</a></li>
				<li><a class="button nav-last" href="//neodrafttest.herokuapp.com/forums/?0.21779267219424026">Forum</a></li>
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
	<script src="//neodraft.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.25757603690915065"></script>
	<script src="//neodraft.herokuapp.com/js/lib/lodash.core.js?0.2623443850770364"></script>
	<script src="//neodraft.herokuapp.com/js/lib/backbone.js?0.9081215758981644"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8460914435754658"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//neodraft.herokuapp.com/js/lib/jquery-cookie.js?0.3954329890417927"></script>
	<script src="//neodraft.herokuapp.com/js/lib/html-sanitizer-minified.js?0.44518110730376104"></script>
	<script src="//neodraft.herokuapp.com/js/battle-sound.js?0.7621239236741308"></script>
	<script src="//neodraft.herokuapp.com/config/config.js?0.05772885501737357"></script>
	<script src="//neodraft.herokuapp.com/js/battledata.js?0.8840792400564963"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini.js?0.5482682440477729"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini-bw.js?0.5756250607452404"></script>
	<script src="//neodraft.herokuapp.com/data/graphics.js?0.6856948959445786"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex.js?0.9141967105048212"></script>
	<script src="//neodraft.herokuapp.com/data/items.js?0.43819203491875913"></script>
	<script src="//neodraft.herokuapp.com/data/moves.js?0.8011748004866375"></script>
	<script src="//neodraft.herokuapp.com/data/abilities.js?0.7350040679411081"></script>
	<script src="//neodraft.herokuapp.com/data/teambuilder-tables.js?0.7386443373525502"></script>
	<script src="//neodraft.herokuapp.com/js/battle-tooltips.js?0.5708611696555013"></script>
	<script src="//neodraft.herokuapp.com/js/battle.js?0.1548662225567985"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
