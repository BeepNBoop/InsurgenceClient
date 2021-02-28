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
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/font-awesome.css?0.15101135235444674" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/panels.css?0.10693109232877585" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/main.css?0.07302787121183996" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/battle.css?0.15288545880621718" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/replay.css?0.050622609167395805" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/utilichart.css?0.6501979295377456" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/?0.024053534810827726"><img src="//neodrafttest.herokuapp.com/images/pokemonshowdownbeta.png?0.40386388042099863" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5647674733180106">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8048689635408675">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/ladder/?0.7757094614420896">Ladder</a></li>
				<li><a class="button nav-last" href="//neodrafttest.herokuapp.com/forums/?0.4479785534526697">Forum</a></li>
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
	<script src="//neodraft.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4099414184673582"></script>
	<script src="//neodraft.herokuapp.com/js/lib/lodash.core.js?0.29678229319451677"></script>
	<script src="//neodraft.herokuapp.com/js/lib/backbone.js?0.47429792321691067"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5797683778106377"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//neodraft.herokuapp.com/js/lib/jquery-cookie.js?0.9291669134357885"></script>
	<script src="//neodraft.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6516702023322272"></script>
	<script src="//neodraft.herokuapp.com/js/battle-sound.js?0.40195681802419103"></script>
	<script src="//neodraft.herokuapp.com/config/config.js?0.6229589429260851"></script>
	<script src="//neodraft.herokuapp.com/js/battledata.js?0.1295163448578458"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini.js?0.30806838744326925"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini-bw.js?0.2874044358778458"></script>
	<script src="//neodraft.herokuapp.com/data/graphics.js?0.40762584613718467"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex.js?0.6681036403201366"></script>
	<script src="//neodraft.herokuapp.com/data/items.js?0.3021851247442364"></script>
	<script src="//neodraft.herokuapp.com/data/moves.js?0.41534132325507866"></script>
	<script src="//neodraft.herokuapp.com/data/abilities.js?0.5364793158831329"></script>
	<script src="//neodraft.herokuapp.com/data/teambuilder-tables.js?0.7493347361768012"></script>
	<script src="//neodraft.herokuapp.com/js/battle-tooltips.js?0.6444150891523723"></script>
	<script src="//neodraft.herokuapp.com/js/battle.js?0.0496870389111026"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
